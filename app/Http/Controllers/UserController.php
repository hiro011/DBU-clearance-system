<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\RegularStud;
use App\Models\ExtensionStud;
use App\Models\DistanceStud;

use App\Models\UserLogin;
use App\Models\Teacher;
use App\Models\AdminStaff;
use App\Models\Officer;
use App\Models\Students;
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

// use Barryvdh\DomPDF\Facade\Pdf;

use DB;
use PDF;

class UserController extends Controller
{
    //
    // clearance
    function clearanceRegular(){
       
        $loggedUser = UserLogin::where('id','=', session('LoggedUser'))->first();
        
        // check if logged user have different accesses
        $regUser = ['regStud'=>Students::where([['program','=', 'Regular'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $extnUser = ['extnStud'=>Students::where([['program','=', 'Extension'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $disUser = ['disStud'=>Students::where([['program','=', 'Distance'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $teacherUser = ['teacher'=>Teacher::where('ID_no','=', $loggedUser->ID_no)->first()];
        $adminStaffUser = ['adminstaff'=>AdminStaff::where('ID_no','=', $loggedUser->ID_no)->first()];
        
        $Clearance = ['clearance'=>ClearanceStudent::where([['program','=', 'Regular'],['ID_no','=', $loggedUser->ID_no]])->first()];

        // check regular student clearance 
        $regDH=['regDepHead'=>DepartmentItems::where([['catagory','=', 'Regular'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $regL= ['regLibrary'=>LibraryCheckouts::where([['catagory','=', 'Regular'],['card_no','=', $loggedUser->ID_no]])->first()];
        $regSR=['regStudResidence'=>StudResidence::where('ID_no','=', $loggedUser->ID_no)->first()];
        $regDi=['regDining'=>DiningNonCafe::where('ID_no','=', $loggedUser->ID_no)->first()];
        $regRg=['regRegistrar'=>Students::where([['program','=', 'Regular'],['ID_no','=', $loggedUser->ID_no]])->first()];

        // store logged user info
        $data = ['LoggedUser'=>$loggedUser];

        return view('clearanceUsers.regStudForm')->with($data)->with($regUser)->with($extnUser)
                ->with($disUser)->with($teacherUser)->with($adminStaffUser)->with($regDH)
                ->with($regL)->with($regSR)->with($regDi)->with($regRg)->with($Clearance);
                 
    }
    function clearanceExtension(){
       
        $loggedUser = UserLogin::where('id','=', session('LoggedUser'))->first();
        
        // check if logged user have different accesses
        $regUser = ['regStud'=>Students::where([['program','=', 'Regular'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $extnUser = ['extnStud'=>Students::where([['program','=', 'Extension'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $disUser = ['disStud'=>Students::where([['program','=', 'Distance'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $teacherUser = ['teacher'=>Teacher::where('ID_no','=', $loggedUser->ID_no)->first()];
        $adminStaffUser = ['adminstaff'=>AdminStaff::where('ID_no','=', $loggedUser->ID_no)->first()];

        $Clearance = ['clearance'=>ClearanceStudent::where([['program','=', 'Extension'],['ID_no','=', $loggedUser->ID_no]])->first()];

        // check extension student clearance 
        $extnDH=['extnDepHead'=>DepartmentItems::where([['catagory','=', 'Extension'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $extnL= ['extnLibrary'=>LibraryCheckouts::where([['catagory','=', 'Extension'],['card_no','=', $loggedUser->ID_no]])->first()];
        $extnRg=['extnRegistrar'=>Students::where([['program','=', 'Extension'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $extnCon=['extnContinuing'=>Students::where([['program','=', 'Extension'],['ID_no','=', $loggedUser->ID_no]])->first()];

        // store logged user info
        $data = ['LoggedUser'=>$loggedUser];

        return view('clearanceUsers.extnStudForm')->with($data)->with($regUser)->with($extnUser)
                        ->with($disUser)->with($teacherUser)->with($adminStaffUser)->with($Clearance)
                        ->with($extnDH)->with($extnL)->with($extnRg)->with($extnCon);
                 
    }
    function clearanceDistance(){
       
        $loggedUser = UserLogin::where('id','=', session('LoggedUser'))->first();
        
        // check if logged user have different accesses
        $regUser = ['regStud'=>Students::where([['program','=', 'Regular'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $extnUser = ['extnStud'=>Students::where([['program','=', 'Extension'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $disUser = ['disStud'=>Students::where([['program','=', 'Distance'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $teacherUser = ['teacher'=>Teacher::where('ID_no','=', $loggedUser->ID_no)->first()];
        $adminStaffUser = ['adminstaff'=>AdminStaff::where('ID_no','=', $loggedUser->ID_no)->first()];

        $Clearance = ['clearance'=>ClearanceStudent::where([['program','=', 'Distance'],['ID_no','=', $loggedUser->ID_no]])->first()];

        // check distance student clearance 
        $disDH=['disDepHead'=>DepartmentItems::where([['catagory','=', 'Distance'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $disL= ['disLibrary'=>LibraryCheckouts::where([['catagory','=', 'Distance'],['card_no','=', $loggedUser->ID_no]])->first()];
        $disRg=['disRegistrar'=>Students::where([['program','=', 'Distance'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $disCon=['disContinuing'=>Students::where([['program','=', 'Distance'],['ID_no','=', $loggedUser->ID_no]])->first()];

        // store logged user info
        $data = ['LoggedUser'=>$loggedUser];

        return view('clearanceUsers.disStudForm')->with($data)->with($regUser)->with($extnUser)
                                ->with($disUser)->with($teacherUser)->with($adminStaffUser)
                                ->with($disDH)->with($disL)->with($disRg)->with($disCon)->with($Clearance);
                 
    }
    function clearanceTeacher(){
       
        $loggedUser = UserLogin::where('id','=', session('LoggedUser'))->first();
        
        // check if logged user have different accesses
        $regUser = ['regStud'=>Students::where([['program','=', 'Regular'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $extnUser = ['extnStud'=>Students::where([['program','=', 'Extension'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $disUser = ['disStud'=>Students::where([['program','=', 'Distance'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $teacherUser = ['teacher'=>Teacher::where('ID_no','=', $loggedUser->ID_no)->first()];
        $adminStaffUser = ['adminstaff'=>AdminStaff::where('ID_no','=', $loggedUser->ID_no)->first()];

        $Clearance = ['clearance'=>ClearanceStaffs::where([['catagory','=', 'Teacher'],['ID_no','=', $loggedUser->ID_no]])->first()];

        // check teachers clearance 
        $DH=['DepHead'=>DepartmentItems::where([['catagory','=', 'Teacher'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $Property=['Property'=>PropertyCheckouts::where('ID_no','=', $loggedUser->ID_no)->first()];
        $IctProperty=['IctProperty'=>IctPropertyUsers::where('ID_no','=', $loggedUser->ID_no)->first()];
        $Cashier=['Cashier'=>CashierUsers::where('ID_no','=', $loggedUser->ID_no)->first()];
        $Finance=['Finance'=>FinanceUsers::where('ID_no','=', $loggedUser->ID_no)->first()];
        $ColFinance=['CollFinance'=>EngCollegeFinance::where('ID_no','=', $loggedUser->ID_no)->first()];
        $Library=['Library'=>LibraryCheckouts::where([['catagory','=', 'Teacher'],['card_no','=', $loggedUser->ID_no]])->first()];
        $Research=['Research'=>ResearcherLists::where('ID_no','=', $loggedUser->ID_no)->first()];
        $GenServe=['GenService'=>GeneralServiceUsers::where('ID_no','=', $loggedUser->ID_no)->first()];
        $AntiCorr=['AntiCorrupt'=>AntiCorruptionUsers::where('ID_no','=', $loggedUser->ID_no)->first()];
        $HRM= ['HRM'=>Teacher::where('ID_no','=', $loggedUser->ID_no)->first()];

        // store logged user info
        $data = ['LoggedUser'=>$loggedUser];

        return view('clearanceUsers.teacherForm')->with($data)->with($regUser)->with($extnUser)
                ->with($disUser)->with($teacherUser)->with($adminStaffUser)->with($DH)
                ->with($Property)->with($IctProperty)->with($Cashier)->with($Finance)
                ->with($Library)->with($Research)->with($ColFinance)->with($Clearance)
                ->with($GenServe)->with($AntiCorr)->with($HRM);

    }
    function clearanceAdminStaff(){
       
        $loggedUser = UserLogin::where('id','=', session('LoggedUser'))->first();
        
        // check if logged user have different accesses
        $regUser = ['regStud'=>Students::where([['program','=', 'Regular'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $extnUser = ['extnStud'=>Students::where([['program','=', 'Extension'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $disUser = ['disStud'=>Students::where([['program','=', 'Distance'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $teacherUser = ['teacher'=>Teacher::where('ID_no','=', $loggedUser->ID_no)->first()];
        $adminStaffUser = ['adminstaff'=>AdminStaff::where('ID_no','=', $loggedUser->ID_no)->first()];

        $Clearance = ['clearance'=>ClearanceStaffs::where([['catagory','=', 'Admin Staff'],['ID_no','=', $loggedUser->ID_no]])->first()];

        // check admin staff clearance 
        $DH=['DepHead'=>DepartmentItems::where([['catagory','=', 'Admin Staff'],['ID_no','=', $loggedUser->ID_no]])->first()];
        $Property=['Property'=>PropertyCheckouts::where('ID_no','=', $loggedUser->ID_no)->first()];
        $IctProperty=['IctProperty'=>IctPropertyUsers::where('ID_no','=', $loggedUser->ID_no)->first()];
        $Cashier=['Cashier'=>CashierUsers::where('ID_no','=', $loggedUser->ID_no)->first()];
        $Finance=['Finance'=>FinanceUsers::where('ID_no','=', $loggedUser->ID_no)->first()];
        $Library= ['Library'=>LibraryCheckouts::where([['catagory','=', 'Admin Staff'],['card_no','=', $loggedUser->ID_no]])->first()];
        $AntiCorr= ['AntiCorrupt'=>AntiCorruptionUsers::where('ID_no','=', $loggedUser->ID_no)->first()];
        $HRM= ['HRM'=>AdminStaff::where('ID_no','=', $loggedUser->ID_no)->first()];

        // store logged user info
        $data = ['LoggedUser'=>$loggedUser];

        return view('clearanceUsers.adminStaffForm')->with($data)->with($regUser)->with($extnUser)
                ->with($disUser)->with($teacherUser)->with($adminStaffUser)->with($DH)
                ->with($Property)->with($IctProperty)->with($Cashier)->with($HRM)
                ->with($Finance)->with($Library)->with($AntiCorr)->with($Clearance);

    }

    function clearanceCheckRegular(Request $request){
        
        $loggedUser = UserLogin::where('id','=', session('LoggedUser'))->first();
        $Clearance=ClearanceStudent::where([['program','=', 'Regular'],['ID_no','=', $loggedUser->ID_no]])->first();
 
        // check regular student clearance 
        $regDepHead=DepartmentItems::where([['catagory','=', 'Regular'],['ID_no','=', $loggedUser->ID_no]])->first();
        $regLibrary=LibraryCheckouts::where([['catagory','=', 'Regular'],['card_no','=', $loggedUser->ID_no]])->first();
        $regStudResidence=StudResidence::where('ID_no','=', $loggedUser->ID_no)->first();
        $regDining=DiningNonCafe::where('ID_no','=', $loggedUser->ID_no)->first();
        $regRegistrar=Students::where([['program','=', 'Regular'],['ID_no','=', $loggedUser->ID_no]])->first();
     
        $registrar = $regRegistrar->status;

        if($Clearance){
            
            return back()->with('fail','Your request have already been submitted');
        }else{
            if($regStudResidence){
                $residence = $regStudResidence->status;
                $checkS = !$regDepHead && !$regLibrary && ($residence!=='stay') && ($registrar!=='On-Class') && $regDining;
                //Insert data into database
                $regClearStud = new ClearanceStudent;
                $regClearStud->ID_no = $regRegistrar->ID_no;
                $regClearStud->name = $regRegistrar->name;
                $regClearStud->gender = $regRegistrar->gender;
                $regClearStud->program = 'Regular';
                $regClearStud->year = $regRegistrar->year;
                $regClearStud->college = $regRegistrar->college;
                $regClearStud->department = $regRegistrar->department;
                // $trackPTS = $this->track ? 20 : 0;
                $regClearStud->reason = $regRegistrar->status;
                $save = $regClearStud->save();

                if($save){
                    return back()->with('success','Your request has been sent to registrar successfuly');
                }else{
                    return back()->with('fail','Something went wrong try again!');
                }
            }elseif(!$regStudResidence){
                $checkS = !$regDepHead && !$regLibrary && ($registrar!=='On-Class') && $regDining;
                //Insert data into database
                $regClearStud = new ClearanceStudent;
                $regClearStud->ID_no = $regRegistrar->ID_no;
                $regClearStud->name = $regRegistrar->name;
                $regClearStud->gender = $regRegistrar->gender;
                $regClearStud->program = 'Regular';
                $regClearStud->year = $regRegistrar->year;
                $regClearStud->college = $regRegistrar->college;
                $regClearStud->department = $regRegistrar->department;
                $regClearStud->reason = $regRegistrar->status;
                $save = $regClearStud->save();

                if($save){
                    return back()->with('success','Your request has been sent to registrar successfuly');
                }else{
                    return back()->with('fail','Something went wrong try again!');
                }
            }else{
                return back()->with('fail','All officers must approve to request a clearance!');
            }
        }

         
    }
    function clearanceCheckExtension(Request $request){
        
        $loggedUser = UserLogin::where('id','=', session('LoggedUser'))->first();

        $Clearance = ClearanceStudent::where([['program','=', 'Extension'],['ID_no','=', $loggedUser->ID_no]])->first();
 
        // check extension student clearance 
        $DepHead=DepartmentItems::where([['catagory','=', 'Extension'],['ID_no','=', $loggedUser->ID_no]])->first();
        $Library=LibraryCheckouts::where([['catagory','=', 'Extension'],['card_no','=', $loggedUser->ID_no]])->first();
        $Registrar=Students::where([['program','=', 'Extension'],['ID_no','=', $loggedUser->ID_no]])->first();
     
        $registrar = $Registrar->status;

        if($Clearance){
            
            return back()->with('fail','Your request have already been submitted');
        }else{
        
            if(!$DepHead && !$Library && ($registrar!=='On-Class')){
                //Insert data into database
                $ClearStud = new ClearanceStudent;
                $ClearStud->ID_no = $Registrar->ID_no;
                $ClearStud->name = $Registrar->name;
                $ClearStud->gender = $Registrar->gender;
                $ClearStud->program = 'Extension';
                $ClearStud->year = $Registrar->year;
                $ClearStud->college = $Registrar->college;
                $ClearStud->department = $Registrar->department;
                $ClearStud->reason = $Registrar->status;
                $save = $ClearStud->save();
                if($save){
                    return back()->with('success','Your request has been sent to registrar successfuly');
                }else{
                    return back()->with('fail','Something went wrong try again!');
                }
            }else{
                return back()->with('fail','All officers must approve to request a clearance!');
            }
        }

         
    }
    function clearanceCheckDistance(Request $request){
        
        $loggedUser = UserLogin::where('id','=', session('LoggedUser'))->first();

        $Clearance = ClearanceStudent::where([['program','=', 'Distance'],['ID_no','=', $loggedUser->ID_no]])->first();
 
        // check distance student clearance 
        $DepHead=DepartmentItems::where([['catagory','=', 'Distance'],['ID_no','=', $loggedUser->ID_no]])->first();
        $Library=LibraryCheckouts::where([['catagory','=', 'Distance'],['card_no','=', $loggedUser->ID_no]])->first();
        $Registrar=Students::where([['program','=', 'Distance'],['ID_no','=', $loggedUser->ID_no]])->first();
     
        $registrar = $Registrar->status;

        if($Clearance){
            
            return back()->with('fail','Your request have already been submitted');
        }else{
        
            if(!$DepHead && !$Library && ($registrar!=='On-Class')){
                //Insert data into database
                $ClearStud = new ClearanceStudent;
                $ClearStud->ID_no = $Registrar->ID_no;
                $ClearStud->name = $Registrar->name;
                $ClearStud->gender = $Registrar->gender;
                $ClearStud->program = 'Distance';
                $ClearStud->year = $Registrar->year;
                $ClearStud->college = $Registrar->college;
                $ClearStud->department = $Registrar->department;
                $ClearStud->reason = $Registrar->status;
                $save = $ClearStud->save();

                if($save){
                    return back()->with('success','Your request has been sent to registrar successfuly');
                }else{
                    return back()->with('fail','Something went wrong try again!');
                }

            }else{
                return back()->with('fail','All officers must approve to request a clearance!');
            }
        }

         
    }
    function clearanceCheckTeacher(Request $request){
        
        $loggedUser = UserLogin::where('id','=', session('LoggedUser'))->first();

        $Clearance = ClearanceStaffs::where([['catagory','=', 'Teacher'],['ID_no','=', $loggedUser->ID_no]])->first();
        $staff = Teacher::where('ID_no','=', $loggedUser->ID_no)->first();
 
        // check teacher clearance 
        $DH=DepartmentItems::where([['catagory','=', 'Teacher'],['ID_no','=', $loggedUser->ID_no]])->first();
        $Property=PropertyCheckouts::where('ID_no','=', $loggedUser->ID_no)->first();
        $IctProperty= IctPropertyUsers::where('ID_no','=', $loggedUser->ID_no)->first();
        $Cashier= CashierUsers::where('ID_no','=', $loggedUser->ID_no)->first();
        $Finance= FinanceUsers::where('ID_no','=', $loggedUser->ID_no)->first();
        $ColFinance= EngCollegeFinance::where('ID_no','=', $loggedUser->ID_no)->first();
        $Library= LibraryCheckouts::where([['catagory','=', 'Teacher'],['card_no','=', $loggedUser->ID_no]])->first();
        $Research= ResearcherLists::where('ID_no','=', $loggedUser->ID_no)->first();
        $GenServe= GeneralServiceUsers::where('ID_no','=', $loggedUser->ID_no)->first();
        $AntiCorr= AntiCorruptionUsers::where('ID_no','=', $loggedUser->ID_no)->first();
        $HRM=  Teacher::where('ID_no','=', $loggedUser->ID_no)->first();
                                
        
        $hrm = $HRM->status;

        $cashier = NULL;
        $finance = NULL;
      $colFinance = NULL;
        $research = NULL;
        $genServe = NULL;
        $antiCorr = NULL;

        if($Cashier){
            $cashier = $Cashier->balance;
        }
        if($Finance){
            $finance = $Finance->balance;
        }
        if($ColFinance){
            $colFinance = $ColFinance->balance;
        }
        if($Research){
            $research = $Research->status;
        }
        if($GenServe){
            $genServe = $GenServe->status;
        }
        if($AntiCorr){
            $antiCorr = $AntiCorr->status;
        }

        if($Clearance){
            
            return back()->with('fail','Your have already submitted a request');
        }else{
        
            if(!$DH && !$Library && !$Property && !$IctProperty && ($cashier===0 ) 
                && ($finance===0 ) && ($colFinance===0 ) && ($research==='Finished') 
                && ($genServe!=='stay') && ($antiCorr!=='working') && ($hrm!=='working') ){

                //Insert data into database
                $ClearStaff = new ClearanceStaffs;
                $ClearStaff->ID_no = $HRM->ID_no;
                $ClearStaff->name = $HRM->name;
                $ClearStaff->gender = $HRM->gender;
                $ClearStaff->catagory = $HRM->catagory;
                $ClearStaff->college = $HRM->college;
                $ClearStaff->department = $HRM->department;
                $ClearStaff->reason = $HRM->status;
                $save = $ClearStaff->save();

                if($save){
                    return back()->with('success','Your request has been sent to HRM successfuly');
                }else{
                    return back()->with('fail','Something went wrong try again!');
                }
            }else{
                return back()->with('fail','All officers must approve to request a clearance!');
            }
        }

         
    }
    function clearanceCheckAdminStaff(Request $request){
        
        $loggedUser = UserLogin::where('id','=', session('LoggedUser'))->first();

        $Clearance = ClearanceStaffs::where([['catagory','=', 'Admin Staff'],['ID_no','=', $loggedUser->ID_no]])->first();
        $staff = Teacher::where('ID_no','=', $loggedUser->ID_no)->first();
 
        // check admin staff clearance 
        $DH=DepartmentItems::where([['catagory','=', 'Admin Staff'],['ID_no','=', $loggedUser->ID_no]])->first();
        $Property=PropertyCheckouts::where('ID_no','=', $loggedUser->ID_no)->first();
        $IctProperty= IctPropertyUsers::where('ID_no','=', $loggedUser->ID_no)->first();
        $Cashier= CashierUsers::where('ID_no','=', $loggedUser->ID_no)->first();
        $Finance= FinanceUsers::where('ID_no','=', $loggedUser->ID_no)->first();
        $Library= LibraryCheckouts::where([['catagory','=', 'Teacher'],['card_no','=', $loggedUser->ID_no]])->first();
        $AntiCorr= AntiCorruptionUsers::where('ID_no','=', $loggedUser->ID_no)->first();
        $HRM=  AdminStaff::where('ID_no','=', $loggedUser->ID_no)->first();
                             
        $cashier = NULL;
        $finance = NULL;
        $antiCorr = NULL;

        $hrm = $HRM->status;

        if($Cashier){
            $cashier = $Cashier->balance;
        }
        if($Finance){
            $finance = $Finance->balance;
        }
        if($AntiCorr){
            $antiCorr = $AntiCorr->status;
        }

        if($Clearance){
            
            return back()->with('fail','Your have already submitted a request');
        }else{
        
            if(!$DH && !$Library && !$Property && !$IctProperty && ($cashier===0 ) 
                && ($finance===0 ) && ($antiCorr!=='working') && ($hrm!=='working') ){

                //Insert data into database
                $ClearStaff = new ClearanceStaffs;
                $ClearStaff->ID_no = $HRM->ID_no;
                $ClearStaff->name = $HRM->name;
                $ClearStaff->gender = $HRM->gender;
                $ClearStaff->catagory = $HRM->catagory;
                $ClearStaff->college = $HRM->college;
                $ClearStaff->department = $HRM->department;
                $ClearStaff->reason = $HRM->status;
                $save = $ClearStaff->save();

                if($save){
                    return back()->with('success','Your request has been sent to HRM successfuly');
                }else{
                    return back()->with('fail','Something went wrong try again!');
                }

            }else{
                return back()->with('fail','All officers must approve to request a clearance!');
            }
        }

         
    }

    function registrarClearanceView($programR, $id_no){

        $data = ['LoggedUser'=>$loggedUser = UserLogin::where('id','=', session('LoggedUser'))->first()];

        $Clearance = ['clearance'=>ClearanceStudent::where([['program','=', $programR],['ID_no','=', $id_no]])->first()];

        return view('officers.registrar.clearanceForm')->with($data)->with($Clearance);

    }
    
    function clearanceExportPdf($programR, $id_no){
        // return Pdf::loadFile(public_path().'/myfile.html')
        // ->save('/path-to/my_stored_file.pdf')->stream('download.pdf');

        $Clearance = ['clearance'=>ClearanceStudent::where([['program','=', $programR],['ID_no','=', $id_no]])->first()];

        $data = ['LoggedUser'=>$loggedUser = UserLogin::where('id','=', session('LoggedUser'))->first()];

        // $pdf = Pdf::loadView('officers.registrar.clearanceForm')->with($data)->with($Clearance);
        $pdf = Pdf::loadView('officers.registrar.clearancePdf', $data, $Clearance );
        return $pdf->download('clearancePdf.pdf');

    }
    
}
