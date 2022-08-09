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
    function search(){

       
        // if( isset($_GET['query']) && strlen($_GET['query']) > 1){

        //     $search_text = $_GET['query'];
        //     $countries = DB::table('country')->where('Name','LIKE','%'.$search_text.'%')->paginate(2);
        //     // $countries->appends($request->all());
        //     return view('search',['countries'=>$countries]);
            
        // }else{
        //      return view('search');
        // }
        return view('search');
       
    }
    function find(Request $request){
        $request->validate([
          'query'=>'required|min:2'
       ]);

       $search_text = $request->input('query');
       $countries = DB::table('country')
                  ->where('Name','LIKE','%'.$search_text.'%')
                //   ->orWhere('SurfaceArea','<', 10)
                //   ->orWhere('LocalName','like','%'.$search_text.'%')
                  ->paginate(2);
        return view('search',['countries'=>$countries]);

    }

    function SearchUser(){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        
        // $regStudTable = ['studentTable'=>RegularStud::where('ID_no', 'LIKE','%'.$search_text.'%')];
        // $extnStudTable = ['studentTable'=>ExtensionStud::where('ID_no', 'LIKE','%'.$search_text.'%')];
        // $disStudTable = ['studentTable'=>DistanceStud::where('ID_no', 'LIKE','%'.$search_text.'%')];
        
        return view('search');
        // ->with($data)->with($regStudTable)
        //             ->with($extnStudTable)->with($disStudTable);

    }
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
        return redirect('/officers/registrar/regular student');
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


}
