<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;


use App\Models\UserLogin;
use App\Models\Teachers;
use App\Models\AdminStaff;
use App\Models\RegularStud;
use App\Models\ExtensionStud;
use App\Models\DistanceStud;
use App\Models\Officer;
use DB;

class Login extends Component
{

    function newStudentRegister(){
        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];

        return view('officersNewUser.newStudent', $data);
    }
    function regStudList(){ 
        $regStudTable = ['regStudTable'=>DB::select('select * from regular_studs')];

        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        return view('officers.registrarRegStud')->with($data)->with($regStudTable);
        
    }
    function extnStudList(){ 
        $extnStudTable = ['extnStudTable'=>DB::select('select * from extension_studs')];

        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        return view('officers.registrarExtnStud')->with($data)->with($extnStudTable);
        
    }
    function disStudList(){ 
        $disStudTable = ['disStudTable'=>DB::select('select * from distance_studs')];

        $data = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        return view('officers.registrarDisStud')->with($data)->with($disStudTable);
        
    }

    public $regStudTable;
    public $extnStudTable;
    public $disStudTable;
    public $data;

    public function reg(){
        $reg = ['regStudTable'=>DB::select('select * from regular_studs')];
        $extn = ['LoggedUser'=>UserLogin::where('id','=', session('LoggedUser'))->first()];
        $dis = ['extnStudTable'=>DB::select('select * from extension_studs')];
        $data = ['disStudTable'=>DB::select('select * from distance_studs')];
        $this->regStudTable = $reg;
        $this->extnStudTable = $extn;
        $this->disStudTable = $dis;
        $this->data = $data;
    }
    
    public function render()
    {
        return view('officers.registrar.registrar');
    }
}
