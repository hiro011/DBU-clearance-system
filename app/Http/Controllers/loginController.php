<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;


class loginController extends Controller
{
    //
    function login(){
        return view('login');
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
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin/dashboard');
            }else{
                return back()->with('fail','Incorrect password.');
            }
        }

    }

}
