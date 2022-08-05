<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\UserLogin;
use App\Models\Teachers;
use App\Models\AdminStaff;
use App\Models\RegularStud;
use App\Models\ExtensionStud;
use App\Models\DistanceStud;
use App\Models\Officer;
use DB;

class loginController extends Controller
{
    //
    function login(){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];

        return view('auth.login', $data);
    }
    function HomeDashboard(){

        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        $data1 = UserLogin::where('id','=', session('LoggedUser'))->first();
        $idno = $data1->ID_no;

        $teacherData = ['teacher'=>Teachers::where('ID_no','=', $idno)->first()];
        $adminStaffData = ['adminStaff'=>AdminStaff::where('ID_no','=', $idno)->first()];
        $regData = ['regUser'=>RegularStud::where('ID_no','=', $idno)->first()];
        $extnData = ['extnUser'=>ExtensionStud::where('ID_no','=', $idno)->first()];
        $disData = ['disUser'=>DistanceStud::where('ID_no','=', $idno)->first()];
        $officerData = ['officer'=>Officer::where('ID_no','=', $idno)->first()];

        return view('home')->with($data)->with($regData)->with($teacherData)
            ->with($adminStaffData)->with($regData)->with($disData)
            ->with($extnData)->with($officerData); 
    }
    function adminDashboard(){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];

        return view('adminView', $data);
    }

    function libraryDashboard(){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        return view('officers.library', $data);
    }
    function studResidenceDashboard(){
        $data = ['LoggedUserInfo'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        return view('officers.residenceOffice', $data);
    }
    function registrarDashboard(){
        $regStudTable = ['users'=>DB::select('select * from regular_studs')];
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        return view('officers.registrar')->with($data)->with($regStudTable);
    }
    function diningDashboard(){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        return view('officers.diningOfficer', $data);
    }
    
    function electricalDashboard(){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        return view('depOfficerView.electricalDep', $data);
    }
     
    function newUserRegister(){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];

        return view('newUsers.newUser', $data);
    }
    function newOfficerRegister(){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];

        return view('newUsers.newOfficer', $data);
    }
    
    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/');
        }
    }

    function newUserSave(Request $request){

        //Validate requests
        $request->validate([
            'id'=>'required|unique:user_logins',
            'name'=>'required',
            'email'=>'required|email|unique:user_logins',
            'password' => 'required|min:4|max:12',
            'role' => 'required'
        ]);

        // $email = $request->email.$request->gmail;

        //Insert data into database
        $userLogin = new UserLogin;
        $userLogin->ID_no = $request->id;
        $userLogin->name = $request->name;
        $userLogin->email = $request->email;
        $userLogin->password = $request->password;
        $userLogin->role = $request->role;
        $save = $userLogin->save();

        if($save){
            return back()->with('success','New User has been successfuly added to database');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }

    function newOfficerSave(Request $request){
        
        //Validate requests
        $request->validate([
            'id'=>'required|unique:officers',
            'name'=>'required',
            'college'=>'required',
            'department'=>'required'
        ]);

        // $email = $request->email.$request->gmail;

        //Insert data into database
        $officer = new Officer;
        $officer->ID_no = $request->id;
        $officer->name = $request->name;
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
            'password' => 'required'
        ]);

        $userInfo = UserLogin::where('email','=', $request->email)->first();

        if (!$userInfo){
            return back()->with('fail','We did not recognise yor email address.');
        }else{
            Hash::make($request->password);
            $password = Hash::make($userInfo->password); // hash the database password

            if(Hash::check($request->password, $password)){

                $role = $userInfo->role;
                if($role==='0'){
                    $request->session()->put('LoggedUser', $userInfo->id);
                    return redirect('/admin/dashboard');
                }else {
                    $request->session()->put('LoggedUser', $userInfo->id);

                    return redirect('/Home');
                }
            }else{
                return back()->with('fail','Incorrect password.');
            }
        }

    }

}
