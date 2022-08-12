<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\RegularStud;
use App\Models\ExtensionStud;
use App\Models\DistanceStud;

use App\Models\UserLogin;
use App\Models\Teacher;
use App\Models\AdminStaff;
use App\Models\Officer;
use App\Models\Students;
use App\Models\ClearanceRegular;
use App\Models\DepartmentHead;
use App\Models\StudResidence;
use App\Models\LibraryCheckouts;
use App\Models\DiningNonCafe;
use DB;

class UserController extends Controller
{
    //
    // clearance
    function clearanceRegular(){
       
        $loggedUser = UserLogin::where('id','=', session('LoggedUser'))->first();
        
        // check if logged user have different accesses
        $regUser = ['regStud'=>Students::where([['program','=', 'Regular'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $extnUser = ['extnStud'=>Students::where([['program','=', 'Extension'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $disUser = ['disStud'=>Students::where([['program','=', 'Distance'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $teacherUser = ['teacher'=>Teacher::where('ID_no','=', $loggedUser->ID_no)->first()];
        $adminStaffUser = ['adminstaff'=>AdminStaff::where('ID_no','=', $loggedUser->ID_no)->first()];
 
        //display different contents accordingly
        $Display1 = ['teacher_staff' => false];
        $Display2 = ['admin_staff' => false];
        $Display3 = ['extn_stud' => false];
        $Display4 = ['reg_stud' => true];
        $Display5 = ['dist_stud' => false];

        // check regular student clearance 
        $regDH=['regDepHead'=>DepartmentHead::where([['catagory','=', 'Regular'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $regL= ['regLibrary'=>LibraryCheckouts::where('card_no','=', $loggedUser->ID_no)->first()];
        $regSR=['regStudResidence'=>StudResidence::where('ID_no','=', $loggedUser->ID_no)->first()];
        $regDi=['regDining'=>DiningNonCafe::where('ID_no','=', $loggedUser->ID_no)->first()];
        $regRg=['regRegistrar'=>Students::where([['program','=', 'Regular'],['ID_no','=', $loggedUser->ID_no]])->first()];

        // no submit error span
        $error1 = ['noRegistrar' => false];
        $error2 = ['noLibrary' => false];
        $error3 = ['noResidence' => false];
        $error4 = ['noDining' => false];
        $error5 = ['noDepartment' => false];

        // store logged user info
        $data = ['LoggedUser'=>$loggedUser];

        return view('clearanceUsers.regStudForm')->with($data)->with($regUser)->with($extnUser)
                ->with($disUser)->with($teacherUser)->with($adminStaffUser)->with($regDH)
                ->with($regL)->with($regSR)->with($regDi)->with($regRg)->with($Display5)
                ->with($Display4)->with($Display1)->with($Display2)->with($Display3)
                ->with($error4)->with($error1)->with($error2)->with($error3)->with($error5);
        
    }
    // function clearanceRegular(){
       
    //     $loggedUser = UserLogin::where('id','=', session('LoggedUser'))->first();

    //     $regstud=Students::where([['program','=', 'Regular'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $extnstud=Students::where([['program','=', 'Extension'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $disstud=Students::where([['program','=', 'Distance'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $teachers=Teacher::where('ID_no','=', $loggedUser->ID_no)->first();
    //     $adminstaffs=AdminStaff::where('ID_no','=', $loggedUser->ID_no)->first();

    //     $regClearance=ClearanceRegular::where('ID_no','=', $loggedUser->ID_no)->first();

    //     $regUser = ['regStud'=>$regstud];
    //     $extnUser = ['extnStud'=>$extnstud];
    //     $disUser = ['disStud'=>$disstud];
    //     $teacherUser = ['teacher'=>$teachers];
    //     $adminStaffUser = ['adminstaff'=>$adminstaffs];
 
    //     $Display1 = ['teacher_staff' => false];
    //     $Display2 = ['admin_staff' => false];
    //     $Display3 = ['extn_stud' => false];
    //     $Display4 = ['reg_stud' => true];
    //     $Display5 = ['dist_stud' => false];

    //     $data = ['LoggedUser'=>$loggedUser];

 
    //     if($regClearance){
    //         $regClearanceData = ['regStudClearance'=>$regClearance];

    //         $regDepHead=DepartmentHead::where([['catagory','=', 'Student'],['ID_no','=', $regClearance->ID_no]])->first();
    //         $regLibrary=LibraryCheckouts::where('card_no','=', $regClearance->ID_no)->first();
    //         $regStudResidence=StudResidence::where('ID_no','=', $regClearance->ID_no)->first();
    //         $regDining=DiningNonCafe::where('ID_no','=', $regClearance->ID_no)->first();
    //         $regRegistrar=Students::where([['program','=', 'Regular'],['ID_no','=', $regClearance->ID_no]])->first();


    //         return view('clearanceUsers.regStudForm')->with($data)->with($regUser)->with($extnUser)
    //             ->with($regClearanceData)->with($disUser)->with($teacherUser)->with($adminStaffUser)
    //             ->with($regDepHead)->with($regLibrary)->with($regStudResidence)->with($regDining)->with($regRegistrar)
    //             ->with($Display5)->with($Display4)->with($Display1)->with($Display2)->with($Display3);
    //     }else{
    //         return view('clearanceUsers.clearance')->with($data)->with($regUser)->with($extnUser)
    //             ->with($Display5)->with($Display4)->with($Display1)->with($Display2)->with($Display3)
    //             ->with($disUser)->with($teacherUser)->with($adminStaffUser);
    //     }
    // }

    function clearanceRegularForm(Request $request){
         
                //Validate requests
                $request->validate([
                    'ID_no'=>'required',
                    'name'=>'required',
                    'gender'=>'required',
                    'year'=>'required',
                    'reason'=>'required'
                ]);
        
                $dataI = UserLogin::where('id','=', session('LoggedUser'))->first();
                $regstud=Students::where([['program','=', 'Regular'],['ID_no','=', $dataI->ID_no]])->first();

        
                //Insert data into database
                $regClear = new ClearanceRegular;
                $regClear->ID_no = $request->ID_no;
                $regClear->name = $request->name;
                $regClear->gender = $request->gender;
                $regClear->program = 'Regular';
                $regClear->year = $request->year;
                $regClear->college = $regstud->college;
                $regClear->department = $regstud->department;
                $regClear->reason = $request->reason;
                $save = $regClear->save();
        
                if($save){
                    return redirect('/clearance/regular student');
                }else{
                    return back()->with('fail','Something went wrong, try again later');
                }
        
    }
    // function clearanceExtension(){
    //     $loggedUser = UserLogin::where('id','=', session('LoggedUser'))->first();
    //     $data = ['LoggedUser'=>$loggedUser];

    //     $regstud=Students::where([['program','=', 'Regular'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $extnstud=Students::where([['program','=', 'Extension'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $disstud=Students::where([['program','=', 'Distance'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $teachers=Teacher::where('ID_no','=', $loggedUser->ID_no)->first();
    //     $adminstaffs=AdminStaff::where('ID_no','=', $loggedUser->ID_no)->first();

    //     $regUser = ['regStud'=>$regstud];
    //     $extnUser = ['extnStud'=>$extnstud];
    //     $disUser = ['disStud'=>$disstud];
    //     $teacherUser = ['teacher'=>$teachers];
    //     $adminStaffUser = ['adminstaff'=>$adminstaffs];
 
        
    //         return view('clearanceUsers.extensionStudent')->with($data)->with($regUser)->with($extnUser)
    //                                     ->with($disUser)->with($teacherUser)->with($adminStaffUser);
    // }
    // function clearanceExtensionForm(Request $request){
    //     $loggedUser = UserLogin::where('id','=', session('LoggedUser'))->first();
    //     $data = ['LoggedUser'=>$loggedUser];

    //     $regstud=Students::where([['program','=', 'Regular'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $extnstud=Students::where([['program','=', 'Extension'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $disstud=Students::where([['program','=', 'Distance'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $teachers=Teacher::where('ID_no','=', $loggedUser->ID_no)->first();
    //     $adminstaffs=AdminStaff::where('ID_no','=', $loggedUser->ID_no)->first();

    //     $regUser = ['regStud'=>$regstud];
    //     $extnUser = ['extnStud'=>$extnstud];
    //     $disUser = ['disStud'=>$disstud];
    //     $teacherUser = ['teacher'=>$teachers];
    //     $adminStaffUser = ['adminstaff'=>$adminstaffs];
 
        
    //         return view('clearanceUsers.extnStudForm')->with($data)->with($regUser)->with($extnUser)
    //                                     ->with($disUser)->with($teacherUser)->with($adminStaffUser);
    // }
    // function clearanceDistance(){
    //     $loggedUser = UserLogin::where('id','=', session('LoggedUser'))->first();
    //     $data = ['LoggedUser'=>$loggedUser];

    //     $regstud=Students::where([['program','=', 'Regular'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $extnstud=Students::where([['program','=', 'Extension'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $disstud=Students::where([['program','=', 'Distance'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $teachers=Teacher::where('ID_no','=', $loggedUser->ID_no)->first();
    //     $adminstaffs=AdminStaff::where('ID_no','=', $loggedUser->ID_no)->first();

    //     $regUser = ['regStud'=>$regstud];
    //     $extnUser = ['extnStud'=>$extnstud];
    //     $disUser = ['disStud'=>$disstud];
    //     $teacherUser = ['teacher'=>$teachers];
    //     $adminStaffUser = ['adminstaff'=>$adminstaffs];
 
        
    //         return view('clearanceUsers.distanceStudent')->with($data)->with($regUser)->with($extnUser)
    //                                     ->with($disUser)->with($teacherUser)->with($adminStaffUser);
    // }
    // function clearanceDistanceForm(Request $request){
    //     $loggedUser = UserLogin::where('id','=', session('LoggedUser'))->first();
    //     $data = ['LoggedUser'=>$loggedUser];

    //     $regstud=Students::where([['program','=', 'Regular'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $extnstud=Students::where([['program','=', 'Extension'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $disstud=Students::where([['program','=', 'Distance'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $teachers=Teacher::where('ID_no','=', $loggedUser->ID_no)->first();
    //     $adminstaffs=AdminStaff::where('ID_no','=', $loggedUser->ID_no)->first();

    //     $regUser = ['regStud'=>$regstud];
    //     $extnUser = ['extnStud'=>$extnstud];
    //     $disUser = ['disStud'=>$disstud];
    //     $teacherUser = ['teacher'=>$teachers];
    //     $adminStaffUser = ['adminstaff'=>$adminstaffs];
 
        
    //         return view('clearanceUsers.disStudForm')->with($data)->with($regUser)->with($extnUser)
    //                                     ->with($disUser)->with($teacherUser)->with($adminStaffUser);
    // }

    // function clearanceTeacher(){
    //     $loggedUser = UserLogin::where('id','=', session('LoggedUser'))->first();
    //     $data = ['LoggedUser'=>$loggedUser];

    //     $regstud=Students::where([['program','=', 'Regular'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $extnstud=Students::where([['program','=', 'Extension'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $disstud=Students::where([['program','=', 'Distance'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $teachers=Teacher::where('ID_no','=', $loggedUser->ID_no)->first();
    //     $adminstaffs=AdminStaff::where('ID_no','=', $loggedUser->ID_no)->first();

    //     $regUser = ['regStud'=>$regstud];
    //     $extnUser = ['extnStud'=>$extnstud];
    //     $disUser = ['disStud'=>$disstud];
    //     $teacherUser = ['teacher'=>$teachers];
    //     $adminStaffUser = ['adminstaff'=>$adminstaffs];
 
        
    //         return view('clearanceUsers.teacher')->with($data)->with($regUser)->with($extnUser)
    //                                     ->with($disUser)->with($teacherUser)->with($adminStaffUser);
    // }
    // function clearanceTeacherForm(Request $request){
    //     $loggedUser = UserLogin::where('id','=', session('LoggedUser'))->first();
    //     $data = ['LoggedUser'=>$loggedUser];

    //     $regstud=Students::where([['program','=', 'Regular'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $extnstud=Students::where([['program','=', 'Extension'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $disstud=Students::where([['program','=', 'Distance'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $teachers=Teacher::where('ID_no','=', $loggedUser->ID_no)->first();
    //     $adminstaffs=AdminStaff::where('ID_no','=', $loggedUser->ID_no)->first();

    //     $regUser = ['regStud'=>$regstud];
    //     $extnUser = ['extnStud'=>$extnstud];
    //     $disUser = ['disStud'=>$disstud];
    //     $teacherUser = ['teacher'=>$teachers];
    //     $adminStaffUser = ['adminstaff'=>$adminstaffs];
 
        
    //         return view('clearanceUsers.teacherForm')->with($data)->with($regUser)->with($extnUser)
    //                                     ->with($disUser)->with($teacherUser)->with($adminStaffUser);
    // }
    // function clearanceAdminStaff(){
    //     $loggedUser = UserLogin::where('id','=', session('LoggedUser'))->first();
    //     $data = ['LoggedUser'=>$loggedUser];

    //     $regstud=Students::where([['program','=', 'Regular'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $extnstud=Students::where([['program','=', 'Extension'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $disstud=Students::where([['program','=', 'Distance'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $teachers=Teacher::where('ID_no','=', $loggedUser->ID_no)->first();
    //     $adminstaffs=AdminStaff::where('ID_no','=', $loggedUser->ID_no)->first();

    //     $regUser = ['regStud'=>$regstud];
    //     $extnUser = ['extnStud'=>$extnstud];
    //     $disUser = ['disStud'=>$disstud];
    //     $teacherUser = ['teacher'=>$teachers];
    //     $adminStaffUser = ['adminstaff'=>$adminstaffs];
 
        
    //         return view('clearanceUsers.adminStaff')->with($data)->with($regUser)->with($extnUser)
    //                                     ->with($disUser)->with($teacherUser)->with($adminStaffUser);
    // }
    // function clearanceAdminStaffForm(Request $request){
    //     $loggedUser = UserLogin::where('id','=', session('LoggedUser'))->first();
    //     $data = ['LoggedUser'=>$loggedUser];

    //     $regstud=Students::where([['program','=', 'Regular'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $extnstud=Students::where([['program','=', 'Extension'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $disstud=Students::where([['program','=', 'Distance'],['ID_no','=', $loggedUser->ID_no]])->first();
    //     $teachers=Teacher::where('ID_no','=', $loggedUser->ID_no)->first();
    //     $adminstaffs=AdminStaff::where('ID_no','=', $loggedUser->ID_no)->first();

    //     $regUser = ['regStud'=>$regstud];
    //     $extnUser = ['extnStud'=>$extnstud];
    //     $disUser = ['disStud'=>$disstud];
    //     $teacherUser = ['teacher'=>$teachers];
    //     $adminStaffUser = ['adminstaff'=>$adminstaffs];
 
        
    //         return view('clearanceUsers.adminStaffForm')->with($data)->with($regUser)->with($extnUser)
    //                                     ->with($disUser)->with($teacherUser)->with($adminStaffUser);
    // }
    
    // Login
     
    function clearanceDashboard(){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];

        return view('clearanceUsers.clearance')->with($data);
    }

    // Form
    function RegularStudForm(){
        return view('clearanceUsers.regStudForm');
    }
    function ExtensionStudForm(){
        return view('clearanceUsers.extnStudForm');
    }
    function DistanceStudForm(){
        return view('clearanceUsers.disStudForm');
    }
    function TeacherForm(){
        return view('clearanceUsers.teacherForm');
    }
    function AdminStaffForm(){
        return view('clearanceUsers.adminStaffForm');
    }

    // Register
    function register(){
        return view('newUsers.newClearanceUser');
    }

    // Dashbboard
    function RegularStudDashboard(){
        $data = ['LoggedUserInfo'=>RegularStud::where('id','=', session('LoggedUser'))->first()];
        return view('clearanceUsers.regularStudent', $data);
    }
    function ExtensionStudDashboard(){
        $data = ['LoggedUserInfo'=>ExtensionStud::where('id','=', session('LoggedUser'))->first()];
        return view('clearanceUsers.extensionStudent', $data);
    }
    function DistanceStudDashboard(){
        $data = ['LoggedUserInfo'=>DistanceStud::where('id','=', session('LoggedUser'))->first()];
        return view('clearanceUsers.distanceStudent', $data);
    }
    function TeacherDashboard(){
        $data = ['LoggedUserInfo'=>Teacher::where('id','=', session('LoggedUser'))->first()];
        return view('clearanceUsers.teacher', $data);
    }
    function AdminStaffDashboard(){
        $data = ['LoggedUserInfo'=>AdminStaffs::where('id','=', session('LoggedUser'))->first()];
        return view('clearanceUsers.adminStaff', $data);
    }
 
    
}
