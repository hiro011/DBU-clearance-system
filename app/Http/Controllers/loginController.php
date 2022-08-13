<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\UserLogin;
use App\Models\Teacher;
use App\Models\AdminStaff;
use App\Models\RegularStud;
use App\Models\ExtensionStud;
use App\Models\DistanceStud;
use App\Models\Officer;
use App\Models\Students;
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

        $teacherData = ['teacher'=>Teacher::where('ID_no','=', $idno)->first()];
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
        $usersList = ['userLoginTable'=>DB::select('select * from user_logins')];

        $user = ['users' => true];
        $new = ['new' => false];
        return view('admin.adminView')->with($data)->with($usersList)
                                    ->with($user)->with($new);
    }
    function libraryDashboard(){
        $patronTable = ['patronTable'=>DB::select('select * from library_users')];
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        
        $Display4 = ['new' => false];
        $Display = ['all' => true];
        $Display1 = ['teachers' => false];
        $Display2 = ['adminstaffs' => false];
        $Display3 = ['students' => false];
        $Display5 = ['book' => false];
        return view('officers.library.library')->with($data)->with($patronTable)->with($Display)
            ->with($Display4)->with($Display5)->with($Display1)->with($Display2)->with($Display3);

    }
    function hrmDashboard(){
        $adminStaffTable = ['adminStaffTable'=>DB::select('select * from admin_staff')];
        $teacherTable = ['teacherTable'=>DB::select('select * from teachers')];
        $employeeTable = ['employeeTable'=>DB::select('select * from employees')];
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        return view('officers.HRM.HRM')->with($data)->with($adminStaffTable)
                                ->with($employeeTable)->with($teacherTable);
    }
    function studResidenceDashboard(){
        $data = ['LoggedUserInfo'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        return view('officers.residenceOffice', $data);
    }

    function registrarDashboard(){
        $studTable = ['studTable'=>DB::select('select * from students')];
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        $Display = ['all' => true];
        $Display1 = ['reg' => false];
        $Display4 = ['new' => false];
        $Display2 = ['extn' => false];
        $Display3 = ['dis' => false];
        return view('officers.registrar.registrar')->with($data)->with($studTable)->with($data)
                ->with($Display)->with($Display1)->with($Display2)->with($Display3)->with($Display4);
    } 
 
    function clearanceDashboard(){
        $loggedUser = UserLogin::where('id','=', session('LoggedUser'))->first();
        // $data = ['LoggedUser'=>$loggedUser];

        $regstud=Students::where([['program','=', 'Regular'],['ID_no','=', $loggedUser->ID_no]])->first();
        $extnstud=Students::where([['program','=', 'Extension'],['ID_no','=', $loggedUser->ID_no]])->first();
        $disstud=Students::where([['program','=', 'Distance'],['ID_no','=', $loggedUser->ID_no]])->first();
        $teachers=Teacher::where('ID_no','=', $loggedUser->ID_no)->first();
        $adminstaffs=AdminStaff::where('ID_no','=', $loggedUser->ID_no)->first();

        // $regUser = ['regStud'=>$regstud];
        // $extnUser = ['extnStud'=>$extnstud];
        // $disUser = ['disStud'=>$disstud];
        // $teacherUser = ['teacher'=>$teachers];
        // $adminStaffUser = ['adminstaff'=>$adminstaffs];
 
        if($regstud){
            return redirect('/clearance/regular student');
            // ->with($data)->with($regUser)->with($extnUser)
            //                             ->with($disUser)->with($teacherUser)->with($adminStaffUser);
        }elseif($extnstud){
            return redirect('/clearance/extension student');
            // ->with($data)->with($regUser)->with($extnUser)
            //                             ->with($disUser)->with($teacherUser)->with($adminStaffUser);
        }elseif($disstud){
            return redirect('/clearance/distance student');
            // ->with($data)->with($regUser)->with($extnUser)
            //                             ->with($disUser)->with($teacherUser)->with($adminStaffUser);
        }elseif($teachers){
            return redirect('/clearance/teacher');
            // ->with($data)->with($regUser)->with($extnUser)
            //                             ->with($disUser)->with($teacherUser)->with($adminStaffUser);
        }elseif($adminstaffs){
            return redirect('/clearance/administrator staff');
            // ->with($data)->with($regUser)->with($extnUser)
            //                             ->with($disUser)->with($teacherUser)->with($adminStaffUser);
        }
    } 
   
    function diningDashboard(){ 
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];

        $cafeTable = ['regStudTable'=>DB::select('select * from regular_studs')];
        $nonCafeTable = ['extnStudTable'=>DB::select('select * from extension_studs')];

        return view('officers.dining.diningOfficer')->with($data)->with($regStudTable)->with($extnStudTable)
                                                    ->with($disStudTable);

    }
    function electricalDashboard(){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        return view('depOfficerView.electricalDep', $data);
    }
    function newUserRegister(){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        $user = ['users' => false];
        $new = ['new' => true];

        return view('admin.adminView')->with($data)->with($user)->with($new);

    }

    // function newOfficerRegister(){
    //     $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];

    //     return view('admin.newOfficer', $data);
    // }
    
    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/');
        }else{
            return redirect('/');
        }
    }

    function newUserSave(Request $request){

        //Validate requests
        $request->validate([
            'ID_no'=>'required|unique:user_logins',
            'name'=>'required',
            'email'=>'required|email|unique:user_logins',
            'password' => 'required|min:4|max:12',
            'role' => 'required'
        ]);

        $dataI = UserLogin::where('id','=', session('LoggedUser'))->first();

        //Insert data into database
        $userLogin = new UserLogin;
        $userLogin->ID_no = $request->ID_no;
        $userLogin->name = $request->name;
        $userLogin->email = $request->email;
        $userLogin->password = $request->password;
        $userLogin->role = $request->role;
        $userLogin->add_by = $dataI->name;
        $save = $userLogin->save();

        if($save){
            return back()->with('success','New User has been successfuly added to database');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }

    // function newOfficerSave(Request $request){
        
    //     //Validate requests
    //     $request->validate([
    //         'ID_no'=>'required|unique:officers',
    //         'name'=>'required',
    //         'gender'=>'required',
    //         'college'=>'required',
    //         'department'=>'required'
    //     ]);

    //     // $email = $request->email.$request->gmail;
    //     $dataI = UserLogin::where('id','=', session('LoggedUser'))->first();

    //     //Insert data into database
    //     $officer = new Officer;
    //     $officer->ID_no = $request->ID_no;
    //     $officer->name = $request->name;
    //     $officer->gender = $request->gender;
    //     $officer->college = $request->college;
    //     $officer->department = $request->department;
    //     $officer->add_by = $dataI->name;
    //     $save = $officer->save();

    //     if($save){
    //     return back()->with('success','New User has been successfuly added to database');
    //     }else{
    //         return back()->with('fail','Something went wrong, try again later');
    //     }
    // }
    

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
                if($role==='Admin'){
                    $request->session()->put('LoggedUser', $userInfo->id);
                    return redirect('/admin/dashboard');
                }elseif($role==='HRM') {
                    $request->session()->put('LoggedUser', $userInfo->id);
    
                    return redirect('/officers/HRM');
                }elseif($role==='Property-Office') {
                    $request->session()->put('LoggedUser', $userInfo->id);

                    return redirect('/officers/property office');
                }elseif($role==='General-Service') {
                    $request->session()->put('LoggedUser', $userInfo->id);

                    return redirect('/officers/general service');
                }elseif($role==='Research') {
                    $request->session()->put('LoggedUser', $userInfo->id);

                    return redirect('/officers/research');
                }elseif($role==='ICT-Property') {
                    $request->session()->put('LoggedUser', $userInfo->id);

                    return redirect('/officers/ict property');
                }elseif($role==='Finance') {
                    $request->session()->put('LoggedUser', $userInfo->id);

                    return redirect('/officers/finance');
                }elseif($role==='Cashier') {
                    $request->session()->put('LoggedUser', $userInfo->id);

                    return redirect('/officers/cashier');
                }elseif($role==='Anti-Corruption') {
                    $request->session()->put('LoggedUser', $userInfo->id);

                    return redirect('/officers/anti corruption');
                }elseif($role==='EngCollege-Finance') {
                    $request->session()->put('LoggedUser', $userInfo->id);

                    return redirect('/officers/engineering finance');
                }elseif($role==='StudResidence') {
                    $request->session()->put('LoggedUser', $userInfo->id);

                    return redirect('/officers/student residence');
                }elseif($role==='Department-Head') {
                    $request->session()->put('LoggedUser', $userInfo->id);

                    return redirect('/officers/department head');
                }elseif($role==='Dining') {
                    $request->session()->put('LoggedUser', $userInfo->id);

                    return redirect('/officers/dining');
                }elseif($role==='Registrar') {
                    $request->session()->put('LoggedUser', $userInfo->id);

                    return redirect('/officers/registrar');
                }elseif($role==='Library') {
                    $request->session()->put('LoggedUser', $userInfo->id);

                    return redirect('/officers/library');
                }elseif($role==='User') {
                    $request->session()->put('LoggedUser', $userInfo->id);

                    return redirect('/clearance');
                }


            }else{
                return back()->with('fail','Incorrect password.');
            }
        }

    }

}
