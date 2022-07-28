<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewOfficerController extends Controller
{
    //
    function login(){
        return view('auth.loginOfficer');
    }
}
