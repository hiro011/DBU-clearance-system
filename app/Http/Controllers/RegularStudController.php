<?php

namespace App\Http\Controllers;

use App\Models\RegularStud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegularStudController extends Controller
{
    //
    function login(){
        return view('auth.loginRegStud');
    }
    function register(){
        return view('newUsers.newClearanceUser');
    }
    function dashboard(){
        $data = ['LoggedUserInfo'=>RegularStud::where('id','=', session('LoggedUser'))->first()];
        return view('clearanceUsers.regularStudent', $data);
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
            'Rname'=>'required',
            'Remail'=>'required|unique:regular_studs',
            'Rpassword'=>'required|min:4|max:12',
            'role'=>'required'
        ]);

        $email = $request->Remail.$request->Rgmail;

        //Insert data into database 
        $RegStud = new RegularStud;
        $RegStud->name = $request->Rname;
        $RegStud->email = $email;                   // uncomment bellow code to make the input password stored hashed in database
        $RegStud->password = $request->Rpassword;   // Hash::make($request->password); 
        $save = $RegStud->save();

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

      
        $userInfo = RegularStud::where('email','=', $request->Remail)->first();

        if (!$userInfo){
            return back()->with('fail','We did not recognise yor email address.');
        }else{
            Hash::make($request->password);
            $password = Hash::make($userInfo->password); // hash the database password

            if(Hash::check($request->Rpassword, $password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('officers/library'); 
            }else{
                return back()->with('fail','Incorrect password.');
            }
        }

    }
}
