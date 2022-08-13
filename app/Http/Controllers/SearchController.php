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

        if($request->search_by===''){
            $StudTable = ['studTable'=>DB::select('select * from students')];
            $Display = ['all' => true];
            $Display4 = ['new' => false];
            $Display1 = ['reg' => false];
            $Display2 = ['extn' => false];
            $Display3 = ['dis' => false];
            return view('officers.registrar.registrar')->with($data)->with($StudTable)
            ->with($Display)->with($Display1)->with($Display2)->with($Display4)->with($Display3);

        }else{
            $studTable = DB::table('students')
                ->where('ID_no', 'like', '%'.$search_text.'%')
                ->orWhere('name', 'like', '%'.$search_text.'%')
                ->orWhere('program', 'like', '%'.$search_text.'%')
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
       
    }
    function registrarRegSearch(Request $request){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        
        $search_text = $request->key_word;

        if($request->search_by === ''){
            $StudTable = DB::table('students')->where('program','=', 'Regular')->get();
            $regStudTable = ['studTable'=>$StudTable];
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
                
            $regStudTable = ['studTable' => $studTable];
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
