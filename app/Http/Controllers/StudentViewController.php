<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class StudentViewController extends Controller
{
    //
    function newStudent(){
        return view('newStudent');
    }
    function add(Request $request){

        $request->validate([
            'firstName'=>'required', 
            'lastName'=>'required',
            'id'=>'required|unique:students|',
            'year'=>'required',
            'gender'=>'required',
            'program'=>'required',
            'college'=>'required',
        ]);

        $query = DB::table('students')->insert([
            'First_name'=>$request->input('firstName'),
            'Last_name'=>$request->input('lastName'),
            'ID'=>$request->input('id'),
            'Year'=>$request->input('year'),
            'Gender'=>$request->input('gender'),
            'Program'=>$request->input('program'),
            'College'=>$request->input('college'),
            'Department'=>$request->input('department'),
            'Item'=>$request->input('item')
        ]);

         if($query){

            return back()->with('success','Data has been successfuly inserted.');
         }else {
            return back()->with('fail',('Something went wrong.'));
         }

    }
}
