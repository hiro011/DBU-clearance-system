<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    //
    function login(){
        return view('auth.loginAdmin');
    }
    function register(){
        return view('newUsers.newAdmin');
    }
    function dashboard(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('adminView', $data);
    }
    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/');
        }
    }

    // function settings(){
    //     $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
    //     return view('admin.settings', $data);
    // }

    // function profile(){
    //     $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
    //     return view('admin.profile', $data);
    // }
    // function staff(){
    //     $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
    //     return view('admin.staff', $data);
    // }


    function save(Request $request){
        //Validate requests
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:admins',
            'password'=>'required|min:4|max:12'
        ]);

         //Insert data into database
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];

        // $user = auth()->user()->name;
        
        $email = $request->email.$request->gmail;

        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $email;
        $admin->password = $request->password; // Hash::make($request->password);
        // $admin->add_by = $user;
        $save = $admin->save();

         if($save){
            return back()->with('success','New user has been successfuly added to database');
         }else{
             return back()->with('fail','Something went wrong, try again later');
         }
    }

    function check(Request $request){
        //validate request input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4|max:12'
        ]);
      
        $userInfo = Admin::where('email','=', $request->email)->first();

        if (!$userInfo){
            return back()->with('fail','We did not recognise yor email address.');
        }else{
            Hash::make($request->password);
           $password = Hash::make($userInfo->password); // hash the database password

            if(Hash::check($request->password, $password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin/dashboard'); 
            }else{
                return back()->with('fail','Incorrect password.');
            }
        }

    }
}
