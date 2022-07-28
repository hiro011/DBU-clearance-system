<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use App\Models\User;

class ForgotPassController extends Controller
{
    //
    function newuser(){
        return view('forgotPass');
    }
    function adduser(Request $request){

        $request->validate([
            'email'=>'required', 
            'newPassword'=>'required',
            'confirmPassword'=>'required|unique:students|',
        ]);

        $query = DB::table('students')->insert([
            'First_name'=>$request->input('firstName'),
            'Last_name'=>$request->input('lastName'),
            'ID'=>$request->input('id'),
            'Year'=>$request->input('year'),
        ]);

         if($query){

            return back()->with('success','Data has been successfuly inserted.');
         }else {
            return back()->with('fail',('Something went wrong.'));
         }

    }
}
