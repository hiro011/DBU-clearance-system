<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserLogin;
use App\Models\Teacher;
use App\Models\AdminStaff;
use App\Models\RegularStud;
use App\Models\ExtensionStud;
use App\Models\DistanceStud;
use App\Models\Officer;
use DB;


class SearchController extends Controller
{
    //


    function registrarAllSearch(Request $request){
        //validate request input
        // $request->validate([
        //     'key_word' => 'required',
        //     'search_by' => 'required',
        // ]);

        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        
        $search_text = $request->key_word;


        if($request->search_by===''){
            $regStudTable = ['regStudTable'=>DB::select('select * from regular_studs')];
            $extnStudTable = ['extnStudTable'=>DB::select('select * from extension_studs')];
            $disStudTable = ['disStudTable'=>DB::select('select * from distance_studs')];

            return view('officers.registrar.registrar')->with($data)->with($regStudTable)
                        ->with($extnStudTable)->with($disStudTable);

        }elseif($request->search_by==='Name'){
         

            $regStudTable = ['regStudTable'=>RegularStud::where('name', 'LIKE','%'.$search_text.'%')->get()];
            $extnStudTable = ['extnStudTable'=>ExtensionStud::where('name', 'LIKE','%'.$search_text.'%')->get()];
            $disStudTable = ['disStudTable'=>DistanceStud::where('name', 'LIKE','%'.$search_text.'%')->get()];

            return view('officers.registrar.registrar')->with($data)->with($regStudTable)
                        ->with($extnStudTable)->with($disStudTable);

        }elseif($request->search_by==='ID'){

            $regStudTable = ['regStudTable'=>RegularStud::where('ID_no', 'LIKE','%'.$search_text.'%')->get()];
            $extnStudTable = ['extnStudTable'=>ExtensionStud::where('ID_no', 'LIKE','%'.$search_text.'%')->get()];
            $disStudTable = ['disStudTable'=>DistanceStud::where('ID_no', 'LIKE','%'.$search_text.'%')->get()];

            return view('officers.registrar.registrar')->with($data)->with($regStudTable)
                        ->with($extnStudTable)->with($disStudTable);

        }
        
    }
    function registrarRegSearch(Request $request){
     
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        
        $search_text = $request->key_word;

        if($request->search_by===''){
            $regStudTable = ['regStudTable'=>DB::select('select * from regular_studs')];
          
            return view('officers.registrar.registrar')->with($data)->with($regStudTable);

        }elseif($request->search_by==='Name'){
            $regStudTable = ['regStudTable'=>RegularStud::where('name', 'LIKE','%'.$search_text.'%')->get()];

            return view('officers.registrar.registrar')->with($data)->with($regStudTable);

        }elseif($request->search_by==='ID'){

            $regStudTable = ['regStudTable'=>RegularStud::where('ID_no', 'LIKE','%'.$search_text.'%')->get()];
            
            return view('officers.registrar.registrar')->with($data)->with($regStudTable);

        }
        
    }
    function registrarExtnSearch(Request $request){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        
        $search_text = $request->key_word;


        if($request->search_by===''){
            $extnStudTable = ['extnStudTable'=>DB::select('select * from extension_studs')];

            return view('officers.registrar.registrar')->with($data)->with($extnStudTable);

        }elseif($request->search_by==='Name'){
            $extnStudTable = ['extnStudTable'=>ExtensionStud::where('name', 'LIKE','%'.$search_text.'%')->get()];

            return view('officers.registrar.registrar')->with($data)->with($extnStudTable);

        }elseif($request->search_by==='ID'){

            $extnStudTable = ['extnStudTable'=>ExtensionStud::where('ID_no', 'LIKE','%'.$search_text.'%')->get()];

            return view('officers.registrar.registrar')->with($data)->with($extnStudTable);

        }
        
    }
    function registrarDisSearch(Request $request){
       
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        
        $search_text = $request->key_word;

        if($request->search_by===''){
            
            $disStudTable = ['disStudTable'=>DB::select('select * from distance_studs')];
            
            return view('officers.registrar.registrar')->with($data)->with($disStudTable);
        }elseif($request->search_by==='Name'){
            $disStudTable = ['disStudTable'=>DistanceStud::where('name', 'LIKE','%'.$search_text.'%')->get()];

            return view('officers.registrar.registrar')->with($data)->with($disStudTable);

        }elseif($request->search_by==='ID'){

            $disStudTable = ['disStudTable'=>DistanceStud::where('ID_no', 'LIKE','%'.$search_text.'%')->get()];

            $url = strtok($url, '?');

            return view('officers.registrar.registrar')->with($data)->with($disStudTable);

        }
        
    }

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
        
        if($select === 'program'){
            if($value === 'Regular'){
                $regStudTable = DB::table('regular_studs')
                            ->update(['status' => $status]);
            }elseif($value === 'Extension'){
                $extnStudTable = DB::table('extension_studs')
                            ->update(['status' => $status]);
            }elseif($value === 'Distance'){
                $disStudTable = DB::table('distance_studs')
                            ->update(['status' => $status]);
            }

        }else{
            $regStudTable = DB::table('regular_studs')
                                ->where($select, $value)
                                ->update(['status' => $status]);
            $extnStudTable = DB::table('extension_studs')
                                ->where($select, $value)
                                ->update(['status' => $status]);
            $disStudTable = DB::table('distance_studs')
                                ->where($select, $value)
                                ->update(['status' => $status]);
        }
        
        
        return redirect('/officers/registrar');
    }
    function registerUpdateReg(Request $request){
        //validate request input
        $request->validate([
            'select_c' => 'required',
            'where' => 'required',
            'status' => 'required',
        ]);

        $select = $request->input('select_c');
        $value = $request->input('where');
        $status = $request->input('status');
        
        $regStudTable = DB::table('regular_studs')
                            ->where($select, $value)
                            ->update(['status' => $status]);
        return redirect('/officers/registrar/regular students');
    }
    function registerUpdateExtn(Request $request){
        //validate request input
        $request->validate([
            'select_c' => 'required',
            'where' => 'required',
            'status' => 'required',
        ]);

        $select = $request->input('select_c');
        $value = $request->input('where');
        $status = $request->input('status');

        $extnStudTable = DB::table('extension_studs')
                            ->where($select, $value)
                            ->update(['status' => $status]);
        return redirect('/officers/registrar/extension students');
    }
    function registerUpdateDis(Request $request){
        //validate request input
        $request->validate([
            'select_c' => 'required',
            'where' => 'required',
            'status' => 'required',
        ]);

        $select = $request->input('select_c');
        $value = $request->input('where');
        $status = $request->input('status');
                        
        $disStudTable = DB::table('distance_studs')
                            ->where($select, $value)
                            ->update(['status' => $status]);
        
        return redirect('/officers/registrar/distance students');
    }

    function index(){
        $data = DB::table('regular_studs')->get();
        $data1 = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];


        return view('tableEdit', compact('data'));
    }

    function actionLiveSearch(Request $request){
        if($request->ajax()){
            $output = '';
            $query = $request->get('query');
            if($query != '')
            {
            $data = DB::table('tbl_customer')
                ->where('CustomerName', 'like', '%'.$query.'%')
                ->orWhere('Address', 'like', '%'.$query.'%')
                ->orWhere('City', 'like', '%'.$query.'%')
                ->orWhere('PostalCode', 'like', '%'.$query.'%')
                ->orWhere('Country', 'like', '%'.$query.'%')
                ->orderBy('CustomerID', 'desc')
                ->get();
                
            }
            else
            {
            $data = DB::table('tbl_customer')
                ->orderBy('CustomerID', 'desc')
                ->get();
            }
            $total_row = $data->count();
            if($total_row > 0)
            {
            foreach($data as $row)
            {
                $output .= '
                <tr>
                <td>'.$row->CustomerName.'</td>
                <td>'.$row->Address.'</td>
                <td>'.$row->City.'</td>
                <td>'.$row->PostalCode.'</td>
                <td>'.$row->Country.'</td>
                </tr>
                ';
            }
            }
            else
            {
            $output = '
            <tr>
                <td align="center" colspan="5">No Data Found</td>
            </tr>
            ';
            }
            $data = array(
            'table_data'  => $output,
            'total_data'  => $total_row
            );

            echo json_encode($data);
        }
    }

    function registrarTableEdit(Request $request){
        if($request->ajax()){
    		if($request->action == 'edit'){
    			$data = array(
    				'name'	 => 	$request->name,
    				'ID_no'	 => 	$request->ID_no,
    				'gender' =>     $request->gender,
                    'year'   =>     $request->year,
                    'college' =>    $request->college,
                    'department' => $request->department,
                    'status' => $request->status,
    			);

                $regdata = ['LoggedUser'=>RegularStud::where('ID_no','=', $request->ID_no)->first()];
                $extndata = ['LoggedUser'=>ExtensionStud::where('ID_no','=', $request->ID_no)->first()];
                $disdata = ['LoggedUser'=>DistanceStud::where('ID_no','=', $request->ID_no)->first()];

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
