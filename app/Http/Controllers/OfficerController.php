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
            return redirect('/');
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

        // $email = $request->email.$request->gmail;

        //Insert data into database
        $officer = new Officer;
        $officer->name = $request->name;
        $officer->email = $request->email;          // uncomment bellow code to make the input password stored hashed in database
        $officer->password = $request->password;   // Hash::make($request->password); 
        $officer->college = $request->college;
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

                $userDep = $userInfo->department;
                $userColl = $userInfo->college;
                
                
                // colege
                    // Officers 
                    // engineering 
                    // computing 
                    // freshman 
                    // law 
                    // socialScience 
                    // business 
                    // computational 
                    // agriculture 
                //end

                //Officers
                    // Anti Corruption
                    // Cashier
                    // EngCollege Finance
                    // Finance
                    // General Service
                    // HRM
                    // ICT Property 
                    // Property Officer 
                    // Research 
                    // StudResidence Office
                //end

                // Officers
                // if ($userColl === 'Officers'){

                //     if($userDep === 'Registrar'){
                //         return redirect('officers/registrar'); 
                //     } 
                //     if($userDep === 'StudResidence'){
                //         return redirect('officers/residenceOffice'); 
                //     } 
                //     if($userDep === 'Library'){
                //         return redirect('officers/library'); 
                //     } 
                //     if($userDep === 'Dining'){
                //         return redirect('officers/diningOfficer'); 
                //     } 
                // }

                // Enginering College
               // if ($userColl === 'engineering'){

                    if($userDep === 'Electrical & Computer Engineering'){
                        return redirect('depOfficerView/electricalDep'); 
                    } 
                    if($userDep === 'Mechanical Engineering'){
                        return redirect('depOfficerView/mechanicalDep'); 
                    } 
                    if($userDep === 'Civil Engineering'){
                        return redirect('depOfficerView/civilDep'); 
                    } 
                    if($userDep === 'Chemical Engineering'){
                        return redirect('depOfficerView/chemicalDep'); 
                    } 
                    if($userDep === 'Industrial Engineering'){
                        return redirect('depOfficerView/industrialDep'); 
                    } 
                    if($userDep === 'CoTM Engineering'){
                        return redirect('depOfficerView/cotmDep'); 
                    } 
                    
                //}
               

            }else{
                return back()->with('fail','Incorrect password.');
            }
        }

    }
}
