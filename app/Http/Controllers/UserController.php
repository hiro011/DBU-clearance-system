<?php

namespace App\Http\Controllers;
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

class UserController extends Controller
{
    //
    
    // Login
    function RegStudlogin(){
        return view('auth.loginRegularStud');
    }
    function ExtnStudlogin(){
        return view('auth.loginExtensionStud');
    }
    function DisStudlogin(){
        return view('auth.loginDistanceStud');
    }
    function Teacherlogin(){
        return view('auth.loginTeacher');
    }
    function AdminStafflogin(){
        return view('auth.loginAdminStaff');
    }
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
 
    // save
    function RegStudsave(Request $request){
        
        //Validate requests
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:regular_studs',
            'password'=>'required|min:4|max:12',
        ]);

        // $email = $request->email.$request->gmail;

        //Insert data into database 
        $regularStud = new RegularStud;
        $regularStud->name = $request->name;
        $regularStud->email = $request->email;          // uncomment bellow code to make the input password stored hashed in database
        $regularStud->password = $request->password;   // Hash::make($request->password); 
        $save = $regularStud->save();

        if($save){
        return back()->with('success','New User has been successfuly added to database');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }
    function ExtnStudsave(Request $request){
        
        //Validate requests
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:extension_studs',
            'password'=>'required|min:4|max:12',
        ]);

        // $email = $request->email.$request->gmail;

        //Insert data into database 
        $extensionStud = new ExtensionStud;
        $extensionStud->name = $request->name;
        $extensionStud->email = $request->email;          // uncomment bellow code to make the input password stored hashed in database
        $extensionStud->password = $request->password;   // Hash::make($request->password); 
        $save = $extensionStud->save();

        if($save){
        return back()->with('success','New User has been successfuly added to database');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }
    function DisStudsave(Request $request){
        
         //Validate requests
         $request->validate([
            'name'=>'required',
            'email'=>'required|unique:distance_studs',
            'password'=>'required|min:4|max:12',
        ]);

        // $email = $request->email.$request->gmail;

        //Insert data into database 
        $distanceStud = new DistanceStud;
        $distanceStud->name = $request->name;
        $distanceStud->email = $request->email;          // uncomment bellow code to make the input password stored hashed in database
        $distanceStud->password = $request->password;   // Hash::make($request->password); 
        $save = $distanceStud->save();

        if($save){
        return back()->with('success','New User has been successfuly added to database');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }
    function Teachersave(Request $request){
        
        //Validate requests
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:teachers',
            'password'=>'required|min:4|max:12',
        ]);

        // $email = $request->email.$request->gmail;

        //Insert data into database 
        $teachers = new Teacher;
        $teachers->name = $request->name;
        $teachers->email = $request->email;          // uncomment bellow code to make the input password stored hashed in database
        $teachers->password = $request->password;   // Hash::make($request->password); 
        $save = $teachers->save();

        if($save){
        return back()->with('success','New User has been successfuly added to database');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }
    function AdminStaffsave(Request $request){
        
        //Validate requests
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:admin_staff',
            'password'=>'required|min:4|max:12',
        ]);

        // $email = $request->email.$request->gmail;

        //Insert data into database 
        $adminstaff = new AdminStaff;
        $adminstaff->name = $request->name;
        $adminstaff->email = $request->email;          // uncomment bellow code to make the input password stored hashed in database
        $adminstaff->password = $request->password;   // Hash::make($request->password); 
        $save = $adminstaff->save();

        if($save){
        return back()->with('success','New User has been successfuly added to database');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }
     
    // check
    


    
}
