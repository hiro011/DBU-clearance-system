<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserLogin;
use App\Models\Teacher;
use App\Models\AdminStaff;
use App\Models\RegularStud;
use App\Models\ExtensionStud;
use App\Models\DistanceStud;
use App\Models\Students;
use App\Models\Officer;
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

use DB;


class SearchController extends Controller
{
    //

    // registrar search
    function registrarAllSearch(Request $request){
        //validate request input
        // $request->validate([
        //     'key_word' => 'required',
        //     'search_by' => 'required',
        // ]);

        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        
        $search_text = $request->key_word;

            $studTable = DB::table('students')
                ->where('ID_no', 'like', '%'.$search_text.'%')
                ->orWhere('name', 'like', '%'.$search_text.'%')
                ->orWhere('program', 'like', '%'.$search_text.'%')
                ->orWhere('year', 'like', '%'.$search_text.'%')
                ->orWhere('department', 'like', '%'.$search_text.'%')
                ->orWhere('college', 'like', '%'.$search_text.'%')
                ->orWhere('status', 'like', '%'.$search_text.'%')
                ->orderBy('ID_no', 'asc')
                ->get();
                
            $StudTable = ['studTable' => $studTable];
            $Display = ['all' => true];
            $Display4 = ['new' => false];
            $Display1 = ['reg' => false];
            $Display2 = ['extn' => false];
            $Display3 = ['dis' => false];
            return view('officers.registrar.registrar')->with($data)->with($StudTable)
            ->with($Display)->with($Display1)->with($Display2)->with($Display4)->with($Display3);


    }
    function registrarRegSearch(Request $request){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        
        $search_text = $request->key_word;

        if($request->search_by === ''){
            $studTable = DB::table('students')->where('program','=', 'Regular')->get();
            $StudTable = ['studTable'=>$studTable];
            $Display = ['all' => false];
            $Display1 = ['reg' => true];
            $Display4 = ['new' => false];
            $Display2 = ['extn' => false];
            $Display3 = ['dis' => false];
            return view('officers.registrar.registrar')->with($data)->with($StudTable)
            ->with($Display)->with($Display1)->with($Display2)->with($Display4)->with($Display3);

        
        }else{
         
            $studTable = DB::table('students')
                ->where([['program','=', 'Regular'],['ID_no', 'like', '%'.$search_text.'%']])
                ->orWhere([['program','=', 'Regular'],['name', 'like', '%'.$search_text.'%']])
                ->orWhere([['program','=', 'Regular'],['department', 'like', '%'.$search_text.'%']])
                ->orWhere([['program','=', 'Regular'],['college', 'like', '%'.$search_text.'%']])
                ->orWhere([['program','=', 'Regular'],['status', 'like', '%'.$search_text.'%']])
                ->orderBy('ID_no', 'asc')
                ->get();
                
            $StudTable = ['studTable' => $studTable];
            $Display = ['all' => false];
            $Display1 = ['reg' => true];
            $Display4 = ['new' => false];
            $Display2 = ['extn' => false];
            $Display3 = ['dis' => false];
            return view('officers.registrar.registrar')->with($data)->with($StudTable)
            ->with($Display)->with($Display1)->with($Display2)->with($Display4)->with($Display3);

        }

    }
    function registrarExtnSearch(Request $request){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        
        $search_text = $request->key_word;

        if($request->search_by === ''){
            $StudTable = DB::table('students')->where('program','=', 'Extension')->get();
            $regStudTable = ['studTable'=>$StudTable];
            $Display = ['all' => false];
            $Display4 = ['new' => false];
            $Display1 = ['reg' => false];
            $Display2 = ['extn' => true];
            $Display3 = ['dis' => false];
            return view('officers.registrar.registrar')->with($data)->with($regStudTable)
            ->with($Display)->with($Display4)->with($Display1)->with($Display2)->with($Display3);

        
        }else{
         
            $studTable = DB::table('students')
                ->where([['program','=', 'Extension'],['ID_no', 'like', '%'.$search_text.'%']])
                ->orWhere([['program','=', 'Extension'],['name', 'like', '%'.$search_text.'%']])
                ->orWhere([['program','=', 'Extension'],['department', 'like', '%'.$search_text.'%']])
                ->orWhere([['program','=', 'Extension'],['college', 'like', '%'.$search_text.'%']])
                ->orWhere([['program','=', 'Extension'],['status', 'like', '%'.$search_text.'%']])
                ->orderBy('ID_no', 'asc')
                ->get();
                
            $StudTable = ['studTable' => $studTable];
            $Display4 = ['new' => false];
            $Display = ['all' => false];
            $Display1 = ['reg' => false];
            $Display2 = ['extn' => true];
            $Display3 = ['dis' => false];
            return view('officers.registrar.registrar')->with($data)->with($StudTable)
            ->with($Display4)->with($Display)->with($Display1)->with($Display2)->with($Display3);

        }

    }
    function registrarDisSearch(Request $request){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        
        $search_text = $request->key_word;

        if($request->search_by === ''){
            $StudTable = DB::table('students')->where('program','=', 'Distance')->get();
            $regStudTable = ['studTable'=>$StudTable];

            $Display4 = ['new' => false];
            $Display = ['all' => false];
            $Display1 = ['reg' => false];
            $Display2 = ['extn' => false];
            $Display3 = ['dis' => true];
            return view('officers.registrar.registrar')->with($data)->with($regStudTable)
            ->with($Display4)->with($Display)->with($Display1)->with($Display2)->with($Display3);

        
        }else{
         
            $studTable = DB::table('students')
                ->where([['program','=', 'Distance'],['ID_no', 'like', '%'.$search_text.'%']])
                ->orWhere([['program','=', 'Distance'],['name', 'like', '%'.$search_text.'%']])
                ->orWhere([['program','=', 'Distance'],['department', 'like', '%'.$search_text.'%']])
                ->orWhere([['program','=', 'Distance'],['college', 'like', '%'.$search_text.'%']])
                ->orWhere([['program','=', 'Distance'],['status', 'like', '%'.$search_text.'%']])
                ->orderBy('ID_no', 'asc')
                ->get();
                
            $StudTable = ['studTable' => $studTable];

            $Display = ['all' => false];
            $Display1 = ['reg' => false];
            $Display2 = ['extn' => false];
            $Display3 = ['dis' => true];
            return view('officers.registrar.registrar')->with($data)->with($StudTable)
                    ->with($Display)->with($Display1)->with($Display2)->with($Display3);

        }

    }
    function registrarClearanceSearch(Request $request){
         
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        
        $search_text = $request->key_word;

        if($request->search_by===''){
            $clearanceTable = ['clearance'=>DB::select('select * from clearance_students')];

            return view('officers.registrar.registrarClearance')->with($data)->with($clearanceTable);

        }else{
            $studTable = DB::table('clearance_students')
                ->where('ID_no', 'like', '%'.$search_text.'%')
                ->orWhere('name', 'like', '%'.$search_text.'%')
                ->orWhere('program', 'like', '%'.$search_text.'%')
                ->orWhere('department', 'like', '%'.$search_text.'%')
                ->orWhere('college', 'like', '%'.$search_text.'%')
                ->orderBy('ID_no', 'asc')
                ->get();
            $clearanceTable = ['clearance' => $studTable];
            
            return view('officers.registrar.registrarClearance')->with($data)->with($clearanceTable);

        }
       
    }

    // Library
    function libraryAllSearch(Request $request){
  
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        
        $search_text = $request->key_word;

        if($request->search_by===''){
            $StudTable = ['patronTable'=>DB::select('select * from library_users')];
            $Display = ['all' => true];
            $Display1 = ['teachers' => false];
            $Display2 = ['adminstaffs' => false];
            $Display3 = ['students' => false];
            $Display4 = ['new' => false];
            $Display5 = ['book' => false];
            $Display6 = ['newBook' => false];
            return view('officers.library.library')->with($data)->with($StudTable)
                ->with($Display)->with($Display1)->with($Display2)->with($Display4)
                ->with($Display3)->with($Display5)->with($Display6);

        }else{
            $studTable = DB::table('students')
                ->where('Card_no', 'like', '%'.$search_text.'%')
                ->orWhere('name', 'like', '%'.$search_text.'%')
                ->orWhere('catagory', 'like', '%'.$search_text.'%')
                ->orWhere('department', 'like', '%'.$search_text.'%')
                ->orWhere('college', 'like', '%'.$search_text.'%')
                ->orWhere('phone', 'like', '%'.$search_text.'%')
                ->orderBy('Card_no', 'asc')
                ->get();
            $StudTable = ['patronTable' => $studTable];
            $Display = ['all' => true];
            $Display1 = ['teachers' => false];
            $Display2 = ['adminstaffs' => false];
            $Display3 = ['students' => false];
            $Display4 = ['new' => false];
            $Display5 = ['book' => false];
            $Display6 = ['newBook' => false];
            return view('officers.library.library')->with($data)->with($StudTable)
            ->with($Display)->with($Display1)->with($Display2)->with($Display4)->with($Display3)
            ->with($Display5)->with($Display6);


        }
       
    }
    function registrarTeachSearch(Request $request){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        
        $search_text = $request->key_word;

        if($request->search_by === ''){
            $studTable = DB::table('students')->where('catagory','=', 'Teacher')->get();
            $StudTable = ['patronTable' => $studTable];
            $Display = ['all' => true];
            $Display1 = ['teachers' => false];
            $Display2 = ['adminstaffs' => false];
            $Display3 = ['students' => false];
            $Display4 = ['new' => false];
            $Display5 = ['book' => false];
            $Display6 = ['newBook' => false];
            return view('officers.library.library')->with($data)->with($StudTable)
            ->with($Display)->with($Display1)->with($Display2)->with($Display4)->with($Display3)
            ->with($Display5)->with($Display6);

        
        }else{
         
            $studTable = DB::table('students')
                ->where([['catagory','=', 'Regular'],['Card_no', 'like', '%'.$search_text.'%']])
                ->orWhere([['catagory','=', 'Regular'],['name', 'like', '%'.$search_text.'%']])
                ->orWhere([['catagory','=', 'Regular'],['department', 'like', '%'.$search_text.'%']])
                ->orWhere([['catagory','=', 'Regular'],['college', 'like', '%'.$search_text.'%']])
                ->orWhere([['catagory','=', 'Regular'],['phone', 'like', '%'.$search_text.'%']])
                ->orderBy('ID_no', 'asc')
                ->get();
                
            $regStudTable = ['studTable' => $studTable];
            $StudTable = ['studTable' => $studTable];
            $Display = ['all' => false];
            $Display1 = ['reg' => true];
            $Display4 = ['new' => false];
            $Display2 = ['extn' => false];
            $Display3 = ['dis' => false];
            return view('officers.library.library')->with($data)->with($StudTable)
            ->with($Display)->with($Display1)->with($Display2)->with($Display4)->with($Display3)
            ->with($Display5)->with($Display6);

        }

    }
    function libraryStudSearch(Request $request){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        
        $search_text = $request->key_word;

        if($request->search_by === ''){
            $StudTable = DB::table('students')->where('program','=', 'Extension')->get();
            $regStudTable = ['studTable'=>$StudTable];
            $Display = ['all' => false];
            $Display4 = ['new' => false];
            $Display1 = ['reg' => false];
            $Display2 = ['extn' => true];
            $Display3 = ['dis' => false];
            return view('officers.registrar.registrar')->with($data)->with($StudTable)
            ->with($Display)->with($Display4)->with($Display1)->with($Display2)->with($Display3);

        
        }else{
         
            $studTable = DB::table('students')
                ->where([['program','=', 'Extension'],['ID_no', 'like', '%'.$search_text.'%']])
                ->orWhere([['program','=', 'Extension'],['name', 'like', '%'.$search_text.'%']])
                ->orWhere([['program','=', 'Extension'],['department', 'like', '%'.$search_text.'%']])
                ->orWhere([['program','=', 'Extension'],['college', 'like', '%'.$search_text.'%']])
                ->orWhere([['program','=', 'Extension'],['status', 'like', '%'.$search_text.'%']])
                ->orderBy('ID_no', 'asc')
                ->get();
                
            $regStudTable = ['studTable' => $studTable];
            $StudTable = ['studTable' => $studTable];
            $Display4 = ['new' => false];
            $Display = ['all' => false];
            $Display1 = ['reg' => false];
            $Display2 = ['extn' => true];
            $Display3 = ['dis' => false];
            return view('officers.registrar.registrar')->with($data)->with($StudTable)
            ->with($Display4)->with($Display)->with($Display1)->with($Display2)->with($Display3);

        }

    }
    function libraryyAdminStaffSearch(Request $request){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        
        $search_text = $request->key_word;

        if($request->search_by === ''){
            $StudTable = DB::table('students')->where('program','=', 'Distance')->get();
            $regStudTable = ['studTable'=>$StudTable];

            $Display4 = ['new' => false];
            $Display = ['all' => false];
            $Display1 = ['reg' => false];
            $Display2 = ['extn' => false];
            $Display3 = ['dis' => true];
            return view('officers.registrar.registrar')->with($data)->with($StudTable)
            ->with($Display4)->with($Display)->with($Display1)->with($Display2)->with($Display3);

        
        }else{
         
            $studTable = DB::table('students')
                ->where([['program','=', 'Distance'],['ID_no', 'like', '%'.$search_text.'%']])
                ->orWhere([['program','=', 'Distance'],['name', 'like', '%'.$search_text.'%']])
                ->orWhere([['program','=', 'Distance'],['department', 'like', '%'.$search_text.'%']])
                ->orWhere([['program','=', 'Distance'],['college', 'like', '%'.$search_text.'%']])
                ->orWhere([['program','=', 'Distance'],['status', 'like', '%'.$search_text.'%']])
                ->orderBy('ID_no', 'asc')
                ->get();
                
            $regStudTable = ['studTable' => $studTable];
            $StudTable = ['studTable' => $studTable];

            $Display = ['all' => false];
            $Display1 = ['reg' => false];
            $Display2 = ['extn' => false];
            $Display3 = ['dis' => true];
            return view('officers.registrar.registrar')->with($data)->with($StudTable)
                    ->with($Display)->with($Display1)->with($Display2)->with($Display3);

        }

    }
    function libraryBookSearch(Request $request){
         
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        
        $search_text = $request->key_word;

        if($request->search_by===''){
            $clearanceTable = ['clearance'=>DB::select('select * from clearance_students')];

            return view('officers.registrar.registrarClearance')->with($data)->with($clearanceTable);

        }else{
            $studTable = DB::table('clearance_students')
                ->where('ID_no', 'like', '%'.$search_text.'%')
                ->orWhere('name', 'like', '%'.$search_text.'%')
                ->orWhere('program', 'like', '%'.$search_text.'%')
                ->orWhere('department', 'like', '%'.$search_text.'%')
                ->orWhere('college', 'like', '%'.$search_text.'%')
                ->orderBy('ID_no', 'asc')
                ->get();
            $clearanceTable = ['clearance' => $studTable];
            
            return view('officers.registrar.registrarClearance')->with($data)->with($clearanceTable);

        }
       
    }

    function adminSearch(Request $request){
         
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        
        $search_text = $request->key_word;

        if($request->search_by===''){
            $usersList = ['userLoginTable'=>DB::select('select * from user_logins')];
    
            $user = ['users' => true];
            $new = ['new' => false];
            return view('admin.adminView')->with($data)->with($usersList)
                                        ->with($user)->with($new);

        }else{
            $UserTable = DB::table('user_logins')
                ->where('ID_no', 'like', '%'.$search_text.'%')
                ->orWhere('name', 'like', '%'.$search_text.'%')
                ->orWhere('email', 'like', '%'.$search_text.'%')
                ->orWhere('role', 'like', '%'.$search_text.'%')
                ->orderBy('ID_no', 'asc')
                ->get();
            $usersList = ['userLoginTable' => $UserTable];
            $user = ['users' => true];
            $new = ['new' => false];
            return view('admin.adminView')->with($data)->with($usersList)
                                        ->with($user)->with($new);
        }
       
    }

 
}
