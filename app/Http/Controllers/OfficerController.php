<?php

namespace App\Http\Controllers;

use App\Models\Officer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OfficerController extends Controller
{
    //
    function login(){
        return view('auth.loginOfficers');
    }
    function register(){
        return view('newUsers.newOfficer');
    }
    function dashboard(){
        $data = ['LoggedUserInfo'=>Officer::where('id','=', session('LoggedUser'))->first()];
        return view('officers.library', $data);
    }
    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login/officer');
        }
    }

    function save(Request $request){
        
        //Validate requests
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:officers',
            'password'=>'required|min:4|max:12',
            'college'=>'required',
            'department'=>'required'
        ]);

        $email = $request->email.$request->gmail;

        //Insert data into database
        $officer = new Officer;
        $officer->name = $request->name;
        $officer->email = $email;                   // uncomment bellow code to make the input password stored hashed in database
        $officer->password = $request->password;   // Hash::make($request->password); 
        $officer->department = $request->department;
        $save = $officer->save();

        if($save){
        return back()->with('success','New User has been successfuly added to database');
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

      
        $userInfo = Officer::where('email','=', $request->email)->first();

        if (!$userInfo){
            return back()->with('fail','We did not recognise yor email address.');
        }else{
            Hash::make($request->password);
            $password = Hash::make($userInfo->password); // hash the database password

            if(Hash::check($request->password, $password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('officers/library'); 
            }else{
                return back()->with('fail','Incorrect password.');
            }
        }

    }
}
