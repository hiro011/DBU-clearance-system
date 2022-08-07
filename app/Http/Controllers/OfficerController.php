<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;


use App\Models\Officer;
use App\Models\UserLogin;
use App\Models\Teacher;
use App\Models\AdminStaff;
use App\Models\RegularStud;
use App\Models\ExtensionStud;
use App\Models\DistanceStud;
use App\Models\employees;
use App\Models\LibraryUsers;


class OfficerController extends Controller
{
    // registrar
    function newStudentRegister(){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];

        return view('officers.registrar.newStudent', $data);
    }
    function regStudList(){ 
        $regStudTable = ['regStudTable'=>DB::select('select * from regular_studs')];

        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        return view('officers.registrar.registrarRegStud')->with($data)->with($regStudTable);
        
    }
    function extnStudList(){ 
        $extnStudTable = ['extnStudTable'=>DB::select('select * from extension_studs')];

        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        return view('officers.registrar.registrarExtnStud')->with($data)->with($extnStudTable);
        
    }
    function disStudList(){ 
        $disStudTable = ['disStudTable'=>DB::select('select * from distance_studs')];

        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        return view('officers.registrar.registrarDisStud')->with($data)->with($disStudTable);
        
    }
    function newStudentSave(Request $request){
        
        //Validate requests

        $request->validate([
            'program'=>'required',
            'id'=>'required',
            'name'=>'required',
            'gender'=>'required',
            'year'=>'required',
            'college'=>'required',
            'department'=>'required'
        ]);

        if($request->program === 'Regular'){
            //Insert data into database
            $officer = new RegularStud;
            $officer->ID_no = $request->id;
            $officer->name = $request->name;
            $officer->gender = $request->gender;
            $officer->year = $request->year;
            $officer->college = $request->college;
            $officer->department = $request->department;
            $save = $officer->save();
        }
        if($program === 'Extension'){
      
            //Insert data into database
            $officer = new ExtensionStud;
            $officer->ID_no = $request->id;
            $officer->name = $request->name;
            $officer->gender = $request->gender;
            $officer->year = $request->year;
            $officer->college = $request->college;
            $officer->department = $request->department;
            $save = $officer->save();
        }
        if($program === 'Distance'){
      
            //Insert data into database
            $officer = new DistanceStud;
            $officer->ID_no = $request->id;
            $officer->name = $request->name;
            $officer->gender = $request->gender;
            $officer->year = $request->year;
            $officer->college = $request->college;
            $officer->department = $request->department;
            $save = $officer->save();
        }


        if($save){
        return back()->with('success','New User has been successfuly added to database');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }


    // HRM
    function newEmployeeRegister(){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];

        return view('officers.HRM.newEmployee', $data);
    }
    function teacherLists(){ 
        $teacherTable = ['teacherTable'=>DB::select('select * from teachers')];

        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        return view('officers.HRM.hrmTeacher')->with($data)->with($teacherTable);
        
    }
    function adminStaffLists(){ 
        $adminStaffTable = ['adminStaffTable'=>DB::select('select * from admin_staff')];

        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        return view('officers.HRM.hrmAdminStaff')->with($data)->with($adminStaffTable);
        
    }
    function newEmployeeSave(Request $request){
        
        //Validate requests

        $request->validate([
            'employee_type'=>'required',
            'id'=>'required',
            'name'=>'required',
            'gender'=>'required',
            'birth_date'=>'required',
            'guarentor_name'=>'required',
            'guarentor_phone'=>'required',
            'salary'=>'required',
            'college'=>'required',
            'department'=>'required'
        ]);

        //Insert data into database
        $employee = new employees;
        $employee->ID_no = $request->id;
        $employee->name = $request->name;
        $employee->gender = $request->name;
        $employee->birth_date = $request->birth_date;
        $employee->employee_type = $request->employee_type;
        $employee->guarentor_name = $request->guarentor_name;
        $employee->guarentor_phone = $request->guarentor_phone;
        $employee->level_of_education = $request->level_of_education;
        $employee->job_title = $request->job_title;
        $employee->age = Carbon::parse($request->birth_date)->diff(Carbon::now())->y;
        $employee->salary = $request->salary;
        $save = $employee->save();

        if($employee_type === 'Teacher'){
            //Insert data into database
            $teacher = new Teacher;
            $teacher->ID_no = $request->id;
            $teacher->name = $request->name;
            $teacher->gender = $request->name;
            $teacher->college = $request->college;
            $teacher->department = $request->department;
            $teacher->status = $request->status;
            $save = $teacher->save();
        }
        if($employee_type === 'Admin_Staff'){
            //Insert data into database
            $Admin_Staff = new AdminStaff;
            $Admin_Staff->ID_no = $request->id;
            $Admin_Staff->name = $request->name;
            $Admin_Staff->gender = $request->name;
            $Admin_Staff->directorate = $request->college;
            $Admin_Staff->department = $request->department;
            $Admin_Staff->status = $request->status;
            $save = $Admin_Staff->save();
        }
       

        if($save){
        return back()->with('success','New User has been successfuly added to database');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }

    // Library
    function newPatronRegister(){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];

        return view('officers.library.newPatron', $data);
    }
    function libraryTeachers(){ 
        $teacherTable = ['teacherTable'=>DB::table('library_users')->where('catagory', '=', 'Teacher')->get()];

        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        return view('officers.library.libraryTeachers')->with($data)->with($teacherTable);
    }
    function libraryAdminStaffs(){ 
        $adminStaffTable = ['adminStaffTable'=>LibraryUsers::where('catagory', '=', 'Admin Staff')];

        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        return view('officers.library.libraryAdminStaff')->with($data)->with($adminStaffTable);
    }
    function newPatronSave(Request $request){
        
        //Validate requests

        $request->validate([
            'catagory'=>'required',
            'card_no'=>'required|unique:library_users',
            'name'=>'required',
            'gender'=>'required',
            'college'=>'required',
            'department'=>'required'
        ]);
    
            $dataI = UserLogin::where('id','=', session('LoggedUser'))->first();

            //Insert data into database
            $patron = new LibraryUsers;
            $patron->Card_no = $request->card_no;
            $patron->catagory = $request->catagory;
            $patron->name = $request->name;
            $patron->gender = $request->gender;
            $patron->guarentor_name = $request->guarentor_name;
            $patron->guarentor_phone = $request->guarentor_phone;
            $patron->college = $request->college;
            $patron->department = $request->department;
            $patron->add_by = $dataI->name;

            $save = $patron->save();

        if($save){
        return back()->with('success','New User has been successfuly added to database');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }

 
   

    function save(Request $request){
        
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
        $officer->id = $request->id;
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

    //
        // function check(Request $request){
        //     //validate request input
        //     $request->validate([
        //         'email' => 'required|email',
        //         'password' => 'required'
        //     ]);

        
        //     $userInfo = Officer::where('email','=', $request->email)->first();

        //     if (!$userInfo){
        //         return back()->with('fail','We did not recognise yor email address.');
        //     }else{
        //         Hash::make($request->password);
        //         $password = Hash::make($userInfo->password); // hash the database password

        //         if(Hash::check($request->password, $password)){
        //             $request->session()->put('LoggedUser', $userInfo->id);

        //             $userDep = $userInfo->department;
        //             $userColl = $userInfo->college;
                    
                    
        //             // colege
        //                 // Officers 
        //                 // engineering 
        //                 // computing 
        //                 // freshman 
        //                 // law 
        //                 // socialScience 
        //                 // business 
        //                 // computational 
        //                 // agriculture 
        //             //end

        //             //Officers
        //                 // Anti Corruption
        //                 // Cashier
        //                 // EngCollege Finance
        //                 // Finance
        //                 // General Service
        //                 // HRM
        //                 // ICT Property 
        //                 // Property Officer 
        //                 // Research 
        //                 // StudResidence Office
        //             //end

        //             // Officers
        //             if ($userColl === 'Officers'){

        //                 if($userDep === 'Registrar'){
        //                     return redirect('officers/registrar'); 
        //                 } 
        //                 if($userDep === 'StudResidence'){
        //                     return redirect('officers/student residence'); 
        //                 } 
        //                 if($userDep === 'Library'){
        //                     return redirect('officers/library'); 
        //                 } 
        //                 if($userDep === 'Dining'){
        //                     return redirect('officers/dining office'); 
        //                 } 
        //             }

        //             // Enginering College
        //            if ($userColl === 'engineering'){

        //                 if($userDep === 'Electrical & Computer Engineering'){
        //                     return redirect('/officers/electrical department'); 
        //                 } 
        //                 if($userDep === 'Mechanical Engineering'){
        //                     return redirect('depOfficerView/mechanicalDep'); 
        //                 } 
        //                 if($userDep === 'Civil Engineering'){
        //                     return redirect('depOfficerView/civilDep'); 
        //                 } 
        //                 if($userDep === 'Chemical Engineering'){
        //                     return redirect('depOfficerView/chemicalDep'); 
        //                 } 
        //                 if($userDep === 'Industrial Engineering'){
        //                     return redirect('depOfficerView/industrialDep'); 
        //                 } 
        //                 if($userDep === 'CoTM Engineering'){
        //                     return redirect('depOfficerView/cotmDep'); 
        //                 } 
                        
        //             }
                

        //         }else{
        //             return back()->with('fail','Incorrect password.');
        //         }
        //     }

        // }
    //
}
