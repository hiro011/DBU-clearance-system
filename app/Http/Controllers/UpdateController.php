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

class UpdateController extends Controller
{
    //
    
    //registrar update
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
                    'program'   =>     $request->program,
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

}
