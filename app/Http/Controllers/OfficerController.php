<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
// use Carbon\Carbon;
use Illuminate\Support\Carbon;

use App\Models\Officer;
use App\Models\UserLogin;
use App\Models\Teacher;
use App\Models\AdminStaff;
use App\Models\RegularStud;
use App\Models\ExtensionStud;
use App\Models\DistanceStud;
use App\Models\Students;
use App\Models\Employee;
use App\Models\LibraryUsers;
use App\Models\ClearanceRegular;
use App\Models\DepartmentItems;
use App\Models\StudResidence;
use App\Models\LibraryCheckouts;
use App\Models\DiningNonCafe;
use App\Models\FinanceUsers;
use App\Models\IctPropertyUsers;
use App\Models\EngCollegeFinance;
use App\Models\ResearcherLists;
use App\Models\ClearanceStudent;
use App\Models\ClearanceStaffs;
use App\Models\PropertyCheckouts;
use App\Models\CashierUsers;
use App\Models\GeneralServiceUsers;
use App\Models\AntiCorruptionUsers;
use App\Models\Books;


class OfficerController extends Controller
{

    

    // registrar
    function regStudList(){ 
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        $regStudTable = ['studTable'=>Students::where('program','=', 'Regular')->get()];
        $Display4 = ['new' => false];
        $Display = ['all' => false];
        $Display1 = ['reg' => true];
        $Display2 = ['extn' => false];
        $Display3 = ['dis' => false];
        return view('officers.registrar.registrar')->with($data)->with($regStudTable)->with($Display)
                    ->with($Display4)->with($Display1)->with($Display2)->with($Display3);

    }
    function extnStudList(){ 
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        $regStudTable = ['studTable'=>Students::where('program','=', 'Extension')->get()];
        $Display = ['all' => false];
        $Display4 = ['new' => false];
        $Display1 = ['reg' => false];
        $Display2 = ['extn' => true];
        $Display3 = ['dis' => false];
        return view('officers.registrar.registrar')->with($data)->with($regStudTable)->with($Display)
                    ->with($Display4)->with($Display1)->with($Display2)->with($Display3);

    }
    function disStudList(){ 
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        $regStudTable = ['studTable'=>Students::where('program','=', 'Distance')->get()];
        $Display = ['all' => false];
        $Display4 = ['new' => false];
        $Display1 = ['reg' => false];
        $Display2 = ['extn' => false];
        $Display3 = ['dis' => true];
        return view('officers.registrar.registrar')->with($data)->with($regStudTable)->with($Display)
                            ->with($Display4)->with($Display1)->with($Display2)->with($Display3);

    }

    function registrarPrintAll(){
        $Clearance = ['clearance'=>DB::select('select * from clearance_students')];
 
        return view('officers.registrar.clearancePdf')->with($Clearance);
    }
    function registrarPrint($program, $id_no){
        $Clearance = ['clearance'=>Students::where([['program','=', $program],['ID_no','=', $id_no]])->get()];
 
        return view('officers.registrar.clearancePdf')->with($Clearance);
    }

    function newStudentRegister(){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];

        // return view('officers.registrar.newStudent', $data);
        $Display4 = ['new' => true];
        $Display = ['all' => false];
        $Display1 = ['reg' => false];
        $Display2 = ['extn' => false];
        $Display3 = ['dis' => false];
        return view('officers.registrar.registrar')->with($data)->with($Display)->with($Display4)
                                                    ->with($Display1)->with($Display2)->with($Display3);

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
            'department'=>'required',
            'status'=>'required'
        ]);

        //Insert data into database
        $stud = new Students;
        $stud->ID_no = $request->id;
        $stud->name = $request->name;
        $stud->gender = $request->gender;
        $stud->year = $request->year;
        $stud->college = $request->college;
        $stud->program = $request->program;
        $stud->department = $request->department;
        $stud->status = $request->status;
        $save = $stud->save();

        if($save){
        return back()->with('success','New User has been successfuly added to database');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }
    function registrarClearanceList(){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        $clearanceTable = ['clearance'=>DB::select('select * from clearance_students')];

        return view('officers.registrar.registrarClearance')->with($data)->with($clearanceTable);

    }


    // HRM
    function teacherLists(){ 
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        $Table = ['Tables'=>DB::select('select * from teachers')];

        $Display1 = ['new' => false];
        $Display2 = ['all' => false];
        $Display3 = ['teachers' => true];
        $Display4 = ['adminStaffs' => false];
        return view('officers.HRM.HRM')->with($data)->with($Table)->with($Display1)
                    ->with($Display2)->with($Display3)->with($Display4);
        
    }
    function adminStaffLists(){ 
        $Table = ['Tables'=>DB::select('select * from admin_staff')];
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];

        $Display1 = ['new' => false];
        $Display2 = ['all' => false];
        $Display3 = ['teachers' => false];
        $Display4 = ['adminStaffs' => true];
        return view('officers.HRM.HRM')->with($data)->with($Table)->with($Display1)
                    ->with($Display2)->with($Display3)->with($Display4);
        
        
    }
    function newEmployeeRegister(){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];

        $Display1 = ['new' => true];
        $Display2 = ['all' => false];
        $Display3 = ['teachers' => false];
        $Display4 = ['adminStaffs' => false];
        return view('officers.HRM.HRM')->with($data)->with($Display1)
                    ->with($Display2)->with($Display3)->with($Display4);
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
            'college'=>'required',
        ]);

         
        //Insert data into database
        $employee = new Employee;
        $employee->ID_no = $request->id;
        $employee->name = $request->name;
        $employee->gender = $request->gender;
        $employee->birth_date = $request->birth_date;
        $employee->employee_type = $request->employee_type;
        $employee->guarentor_name = $request->guarentor_name;
        $employee->guarentor_phone = $request->guarentor_phone;
        $employee->level_of_education = $request->level_of_education;
        $employee->job_title = $request->job_title;
        $employee->age = Carbon::parse($request->birth_date)->diff(Carbon::now())->y;
        $employee->salary = $request->salary;
        $save = $employee->save();

        $employee_type = $request->employee_type;

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
            $Admin_Staff->college = $request->college;
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
    function hrmClearanceList(){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        $clearanceTable = ['clearance'=>DB::select('select * from clearance_staffs')];

        return view('officers.HRM.hrmClearance')->with($data)->with($clearanceTable);
    }


    // Library
    function libraryTeachers(){ 
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        $teacherTable = ['libraryUserTable'=>DB::table('library_users')->where('catagory', '=', 'Teacher')->get()];
        
        $Display4 = ['new' => false];
        $Display = ['all' => false];
        $Display1 = ['teachers' => true];
        $Display5 = ['book' => false];
        $Display6 = ['newBook' => false];
        $Display2 = ['adminstaffs' => false];
        $Display3 = ['students' => false];

        return view('officers.library.library')->with($data)->with($teacherTable)->with($Display)
        ->with($Display1)->with($Display2)->with($Display3)->with($Display4)->with($Display5)->with($Display6);

    }
    function libraryAdminStaffs(){ 
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        $adminStaffTable = ['libraryUserTable'=>DB::table('library_users')->where('catagory', '=', 'Admin_Staff')->get()];
        
        $Display4 = ['new' => false];
        $Display = ['all' => false];
        $Display1 = ['teachers' => false];
        $Display5 = ['book' => false];
        $Display6 = ['newBook' => false];
        $Display2 = ['adminstaffs' => true];
        $Display3 = ['students' => false];

        return view('officers.library.library')->with($data)->with($adminStaffTable)->with($Display)
        ->with($Display5)->with($Display4)->with($Display1)->with($Display2)->with($Display3)->with($Display6);

    }
    function libraryStudents(){ 
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        $studentTable = ['libraryUserTable'=>DB::table('library_users')->where('catagory', '=', 'Student')->get()];

        $Display4 = ['new' => false];
        $Display = ['all' => false];
        $Display1 = ['teachers' => false];
        $Display5 = ['book' => false];
        $Display6 = ['newBook' => false];
        $Display2 = ['adminstaffs' => false];
        $Display3 = ['students' => true];

        return view('officers.library.library')->with($data)->with($studentTable)->with($Display)
        ->with($Display5)->with($Display4)->with($Display1)->with($Display2)->with($Display3)->with($Display6);

    }
    function libraryBooks(){ 
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        $Table = ['bookTable'=>DB::select('select * from books')];

        $Display4 = ['new' => false];
        $Display = ['all' => false];
        $Display1 = ['teachers' => false];
        $Display5 = ['book' => true];
        $Display6 = ['newBook' => false];
        $Display2 = ['adminstaffs' => false];
        $Display3 = ['students' => false];

        return view('officers.library.library')->with($data)->with($Table)->with($Display)
        ->with($Display5)->with($Display4)->with($Display1)->with($Display2)->with($Display3)->with($Display6);

    }

    function newPatronRegister(){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];

        $Display4 = ['new' => true];
        $Display =  ['all' => false];
        $Display1 = ['teachers' => false];
        $Display5 = ['book' => false];
        $Display6 = ['newBook' => false];
        $Display2 = ['adminstaffs' => false];
        $Display3 = ['students' => false];

        return view('officers.library.library')->with($data)->with($Display)->with($Display4)
        ->with($Display5)->with($Display1)->with($Display2)->with($Display3)->with($Display6);

    }
    function newBookRegister(){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];

        $Display4 = ['new' => false];
        $Display = ['all' => false];
        $Display1 = ['teachers' => false];
        $Display5 = ['book' => false];
        $Display6 = ['newBook' => true];
        $Display2 = ['adminstaffs' => false];
        $Display3 = ['students' => false];

        return view('officers.library.library')->with($data)->with($Display)->with($Display4)
        ->with($Display5)->with($Display1)->with($Display2)->with($Display3)->with($Display6);

    }
    function newPatronSave(Request $request){
        
        //Validate requests
        $request->validate([
            'catagory'=>'required',
            'card_no'=>'required|unique:library_users',
            'name'=>'required',
            'gender'=>'required',
            'college'=>'required',
        ]);
    
            $dataI = UserLogin::where('id','=', session('LoggedUser'))->first();

            //Insert data into database
            $patron = new LibraryUsers;
            $patron->Card_no = $request->card_no;
            $patron->catagory = $request->catagory;
            $patron->name = $request->name;
            $patron->gender = $request->gender;
            $patron->email = $request->email;
            $patron->phone = $request->phone;
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
    function newBookSave(Request $request){
        
        //Validate requests
        $request->validate([
            'library'=>'required',
            'barcode'=>'required',
            'title'=>'required',
        ]);
    
            $dataI = UserLogin::where('id','=', session('LoggedUser'))->first();

            //Insert data into database
            $book = new Books;
            $book->library = $request->library;
            $book->title = $request->title;
            $book->barcode = $request->barcode;
            $book->location = $request->location;
            $book->add_by = $dataI->name;
            $save = $book->save();

        if($save){
        return back()->with('success','New book has been added to database successfuly ');
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

}
