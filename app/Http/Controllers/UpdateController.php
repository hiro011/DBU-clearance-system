<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Carbon;


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
use App\Models\Books;

use DB;

class UpdateController extends Controller
{
    //
    
    // registrar update
    function registerUpdateStatus(Request $request){
        //validate request input
        $request->validate([
            'select_c' => 'required',
            'where' => 'required',
            'status' => 'required',
        ]);

        $select = $request->input('select_c');
        $value = $request->input('where');
        $status = $request->input('status');

        $regStudTable = DB::table('students')
                ->where($select, $value)
                ->update(['status' => $status]);

        return redirect('/officers/registrar');
        
    }
    function registrarTableEdit(Request $request){
        if($request->ajax()){
    		if($request->action == 'edit'){
    			$data = array(
    				'name'	 => 	$request->name,
    				'ID_no'	 => 	$request->ID_no,
    				'gender' =>     $request->gender,
                    'year'   =>     $request->year,
                    'program'   =>  $request->program,
                    'college' =>    $request->college,
                    'department' => $request->department,
                    'status' => $request->status,
    			);
 
                $program = $request->program;

                DB::table('students')
                    ->where('ID_no', $request->ID_no)
                    ->update($data);
                
    		}
    		if($request->action == 'delete'){
                DB::table('students')
                        ->where('ID_no', $request->ID_no)
                        ->delete();
                         
    		}
    		return response()->json($request);
    	}
    }
    function registrarDelete($program, $id_no){
        DB::table('students')
            ->where([['program', $program],['ID_no', $id_no]])
            ->delete();

        $regUser=Students::where([['program','=', $program],['ID_no','=', $id_no]])->first();
        
        if(!$regUser){
            return redirect()->back()->with('alert', 'Deleted Successfuly');
        }else{
            return redirect()->back()->with('alert', 'Something went wrong');
        }
      
    }
    function registrarDeleteClearance($program, $id_no){
        DB::table('clearance_students')
            ->where([['program', $program],['ID_no', $id_no]])
            ->delete();

        $regUser=ClearanceStudent::where([['program','=', $program],['ID_no','=', $id_no]])->first();
    
        if(!$regUser){
            return redirect()->back()->with('alert', 'Deleted Successfuly');
        }else{
            return redirect()->back()->with('alert', 'Something went wrong');
        }
      
    }

    // HRM
    function teacherUpdateStatus(Request $request){
        //validate request input
        $request->validate([
            'select_c' => 'required',
            'where' => 'required',
            'status' => 'required',
        ]);
       
        $select = $request->input('select_c');
        $value = $request->input('where');
        $status = $request->input('status');

        if($select !== 'employee_type'){
            $regStudTable = DB::table('teachers')
                    ->where($select, $value)
                    ->update(['status' => $status]);
        }elseif($select === 'employee_type'){
            if($value === 'Admin_Staff'){
                $regStudTable = DB::table('admin_staff')
                    ->update(['status' => $status]);
            }elseif($value === 'Teacher'){
                $regStudTable = DB::table('teachers')
                    ->update(['status' => $status]);
            }
        }
      
        return redirect()->back()->with('alert', 'Status Updated Successfuly');
        
    }
    function adminStaffUpdateStatus(Request $request){
        //validate request input
        $request->validate([
            'select_c' => 'required',
            'where' => 'required',
            'status' => 'required',
        ]);

        $select = $request->input('select_c');
        $value = $request->input('where');
        $status = $request->input('status');
 
        if($select !== 'employee_type'){
            $regStudTable = DB::table('admin_staff')
                    ->where($select, $value)
                    ->update(['status' => $status]);
        }elseif($select === 'employee_type'){
            if($value === 'Admin_Staff'){
                $regStudTable = DB::table('admin_staff')
                    ->update(['status' => $status]);
            }elseif($value === 'Teacher'){
                $regStudTable = DB::table('teachers')
                    ->update(['status' => $status]);
            }
        }
        
        return redirect()->back()->with('alert', 'Status Updated Successfuly');
        
    }
    // function hrmTableEdit(Request $request){
    //     if($request->ajax()){
    // 		if($request->action == 'edit'){
    // 			$data = array(
    // 				'name'	 => 	$request->name,
    // 				'ID_no'	 => 	$request->ID_no,
    // 				'gender' =>     $request->gender,
    //                 'year'   =>     $request->year,
    //                 'program'   =>  $request->program,
    //                 'college' =>    $request->college,
    //                 'department' => $request->department,
    //                 'status' => $request->status,
    // 			);
 
    //             $program = $request->program;

    //             DB::table('students')
    //                 ->where('ID_no', $request->ID_no)
    //                 ->update($data);
                
    // 		}
    // 		if($request->action == 'delete'){
    //             DB::table('students')
    //                     ->where('ID_no', $request->ID_no)
    //                     ->delete();
                         
    // 		}
    // 		return response()->json($request);
    // 	}
    // }
    function hrmDelete($catagory, $id_no){
        DB::table('employees')
            ->where([['program', $program],['ID_no', $id_no]])
            ->delete();

        $regUser=Students::where([['program','=', $program],['ID_no','=', $id_no]])->first();
        
        if(!$regUser){
            return redirect()->back()->with('alert', 'Deleted Successfuly');
        }else{
            return redirect()->back()->with('alert', 'Something went wrong');
        }
      
    }

    function hrmDeleteClearance($catagory, $id_no){
        DB::table('clearance_students')
            ->where([['program', $program],['ID_no', $id_no]])
            ->delete();

        $regUser=ClearanceStudent::where([['program','=', $program],['ID_no','=', $id_no]])->first();
    
        if(!$regUser){
            return redirect()->back()->with('alert', 'Deleted Successfuly');
        }else{
            return redirect()->back()->with('alert', 'Something went wrong');
        }
      
    }

    // library
    function libraryCheckInBook(Request $request){
        //validate request input
        $request->validate([
            'barcode' => 'required',
        ]);

        $Barcode = $request->input('barcode');

        $regStudTable = DB::table('library_checkouts')
                ->where('barcode', $Barcode)
                ->delete();

        $regUser=LibraryCheckouts::where('barcode','=', $Barcode)->first();

        if(!$regUser){
            return redirect()->back()->with('alert', 'Checkin Successful');
        }else{
            return redirect()->back()->with('alert', 'Something went wrong');
        }
    }
    function libraryCheckoutLists($Catagory, $id_no){
        $data = ['LoggedUser'=>$loggedUser = UserLogin::where('id','=', session('LoggedUser'))->first()];

        $Checkouts = ['checkouts'=>LibraryCheckouts::where([['catagory','=', $Catagory],['card_no','=', $id_no]])->get()];
        $Table = ['libraryUser'=>LibraryUsers::where([['catagory','=', $Catagory],['Card_no','=', $id_no]])->first()];

        return view('officers.library.libraryCheckouts')->with($data)->with($Checkouts)->with($Table);
    }
    function libraryCheckOutBook(Request $request){
        //validate request input
        $request->validate([
            'barcode' => 'required',
        ]);
        $inp = $request->input('card_no');

        $loggedUser = UserLogin::where('id','=', session('LoggedUser'))->first();

        // $libUser = LibraryUsers::where('Card_no','=', $inp)->first();
        $libUser = DB::table('library_users')
                ->where('Card_no', $inp)
                ->first();
        $book=Books::where('barcode','=', $request->barcode)->first();
        $regUser=LibraryCheckouts::where('barcode','=', $request->barcode)->first();
       
        $catg = $libUser->catagory;
        $due = '1';

        if($catg==='Teacher'){
            $due = Carbon::now()->addDays(30);
        }elseif($catg==='Admin_Staff'){
            $due = Carbon::now()->addDays(15);
        }elseif($catg==='Student'){
            $due = Carbon::now()->addDays(7);
        }

        if($regUser){
            return redirect()->back()->with('alert', 'ERROR! this book is already taken');
        }else{
            if($book){
                $checkout = new LibraryCheckouts;
                $checkout->card_no = $libUser->Card_no;
                $checkout->catagory = $catg;
                $checkout->barcode = $book->barcode;
                $checkout->title = $book->title;
                $checkout->library = $book->library;
                $checkout->location = $book->location;
    
                $checkout->due_date = $due;
                $checkout->charge = '0';
                $save = $checkout->save();
    
                if ($save){
                    return redirect()->back()->with('alert', 'Checkin Successful');
                }else{
                    return redirect()->back()->with('alert', 'Something went wrong');
                }
    
            }else{
                return redirect()->back()->with('alert', 'ERROR! there is no such book in the database');
            }
        }
     

    } 
    
    function adminTableEdit(Request $request){
        if($request->ajax()){
    		if($request->action == 'edit'){
    			$data = array(
    				'ID_no'	 => 	$request->ID_no,
    				'name'	 => 	$request->name,
    				'email' =>     $request->email,
                    'role'   =>     $request->role,
                    'add_by'   =>     $request->program,
    			);
 
                $program = $request->program;

                DB::table('user_logins')
                    ->where('ID_no', $request->ID_no)
                    ->update($data);
                
    		}
    		if($request->action == 'delete'){
                DB::table('user_logins')
                        ->where('ID_no', $request->ID_no)
                        ->delete();
                         
    		}
    		return response()->json($request);
    	}
    }

}
