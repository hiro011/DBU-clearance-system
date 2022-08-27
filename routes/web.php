<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentViewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegularStudController;

use App\Http\Controllers\loginController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UpdateController;

use App\Http\Livewire\post;
use App\Http\Livewire\Login;


Route::get('/test', function () {

    return view('test001');
});
Route::get('/table01', function () {

    return view('tableEdit');
});
Route::get('/livewire', function () {

    return view('welcome');
});
Route::get('/tt', function () {
    $Clearance = ['clearance'=>DB::select('select * from clearance_students')];
 
    return view('officers.registrar.clearancePdf')->with($Clearance);
});

 
// Route::get('/tabledit02', [SearchController::class, 'index']);

// Route::get('/livesearch', [SearchController::class, 'actionLiveSearch'])->name('live_search.action');


Route::get('/', [loginController::class, 'login'])->name('auth.login');
Route::post('/auth/check', [loginController::class, 'check'])->name('auth.check');
Route::get('/auth/logout',[loginController::class, 'logout'])->name('auth.logout');

Route::post('/clearance/new user/save', [UserController::class, 'clearanceUserSave'])->name('newUsers.saveClearanceUser');

Route::post('/admin/new user/save', [loginController::class, 'newUserSave'])->name('newUsers.saveUser');
Route::post('/admin/new officer/save', [loginController::class, 'newOfficerSave'])->name('newUsers.saveOfficer');
Route::post('/HRM/new employee/save', [OfficerController::class, 'newEmployeeSave'])->name('newUsers.saveEmployee');
Route::post('/registrar/new student/save', [OfficerController::class, 'newStudentSave'])->name('newUsers.saveStudent');
Route::post('/library/new user/save', [OfficerController::class, 'newPatronSave'])->name('newUsers.savePatron');
Route::post('/library/new book/save', [OfficerController::class, 'newBookSave'])->name('newUsers.saveBook');

Route::post('/clearance/regular student/check', [UserController::class, 'clearanceCheckRegular'])->name('clearanceUsers.checkRegular');
Route::post('/clearance/extension student/check', [UserController::class, 'clearanceCheckExtension'])->name('clearanceUsers.checkExtension');
Route::get('/clearance/distance student/check', [UserController::class, 'clearanceCheckDistance'])->name('clearanceUsers.checkDistance');
Route::post('/clearance/teacher/check', [UserController::class, 'clearanceCheckTeacher'])->name('clearanceUsers.checkTeacher');
Route::post('/clearance/administrator staff/check', [UserController::class, 'clearanceCheckAdminStaff'])->name('clearanceUsers.checkAdminStaff');


Route::group(['middleware'=>['AuthCheck']], function(){

    // clearance 
    Route::get('/clearance', [loginController::class, 'clearanceDashboard']);

    Route::get('/clearance/regular student', [UserController::class, 'clearanceRegular']);
    Route::get('/clearance/extension student', [UserController::class, 'clearanceExtension']);
    Route::get('/clearance/distance student', [UserController::class, 'clearanceDistance']);
    Route::get('/clearance/teacher', [UserController::class, 'clearanceTeacher']);
    Route::get('/clearance/administrator staff', [UserController::class, 'clearanceAdminStaff']);


    // admin routes ----------------------------------------------------------- //
    Route::get('/admin/new user', [loginController::class, 'newUserRegister'])->name('newUsers.newUser');
    Route::get('/admin/dashboard', [loginController::class, 'adminDashboard']);
    Route::get('/admin/users/search', [SearchController::class, 'adminSearch'])->name('admin.search');
    Route::post('/admin/tabledit', [UpdateController::class, 'adminTableEdit'])->name('tabledit.adminsTableEdit');


    // Officers 

        // library
        Route::get('/officers/library', [loginController::class, 'libraryDashboard']);
        Route::get('/officers/library/new patron', [OfficerController::class, 'newPatronRegister'])->name('officers.library.newPatron');
        Route::get('/officers/library/new book', [OfficerController::class, 'newBookRegister'])->name('officers.library.newBook');
        Route::get('/officers/library/teachers', [OfficerController::class, 'libraryTeachers']);
        Route::get('/officers/library/admin staffs', [OfficerController::class, 'libraryAdminStaffs']);
        Route::get('/officers/library/students', [OfficerController::class, 'libraryStudents']);
        Route::get('/officers/library/books', [OfficerController::class, 'libraryBooks']);
        Route::get('/library/checkouts/{catagory}/{Card_no}', [UpdateController::class, 'libraryCheckout'])->name('library.checkouts');

        Route::get('/officers/library/search all', [SearchController::class, 'libraryAllSearch'])->name('library.allSearch');
        Route::get('/officers/library/search teachers', [SearchController::class, 'libraryTeachSearch'])->name('library.teachSearch');
        Route::get('/officers/library/search students', [SearchController::class, 'libraryStudSearch'])->name('library.studSearch');
        Route::get('/officers/library/search adminstaff', [SearchController::class, 'libraryAdminStaffSearch'])->name('library.adminStaffSearch');
        Route::get('/officers/library/search books', [SearchController::class, 'libraryBookSearch'])->name('library.bookSearch');
        
        Route::post('/officers/library/checkin book', [UpdateController::class, 'libraryCheckInBook'])->name('library.checkInBook');
        Route::post('/officers/library/checkout book', [UpdateController::class, 'libraryCheckOutBook'])->name('library.checkOutBook');
        
        // registrar 
        Route::get('/officers/registrar', [loginController::class, 'registrarDashboard']);
        Route::get('/officers/registrar/new student', [OfficerController::class, 'newStudentRegister']);
        Route::get('/officers/registrar/regular students', [OfficerController::class, 'regStudList']);
        Route::get('/officers/registrar/extension students', [OfficerController::class, 'extnStudList']);
        Route::get('/officers/registrar/distance students', [OfficerController::class, 'disStudList']);
        
       
        Route::get('/officers/registrar/search all', [SearchController::class, 'registrarAllSearch'])->name('registrar.allSearch');
        Route::get('/officers/registrar/search regular', [SearchController::class, 'registrarRegSearch'])->name('registrar.regSearch');
        Route::get('/officers/registrar/search extension', [SearchController::class, 'registrarExtnSearch'])->name('registrar.extnSearch');
        Route::get('/officers/registrar/search distance', [SearchController::class, 'registrarDisSearch'])->name('registrar.disSearch');
        Route::get('/registrar/clearance/list', [OfficerController::class, 'registrarClearanceList']);
        Route::get('/registrar/clearance/search', [SearchController::class, 'registrarClearanceSearch'])->name('registrar.clearanceSearch');
        
        Route::get('/registrar/delete/{program}/{ID_no}', [UpdateController::class, 'registrarDelete'])->name('registrar.Delete');
        Route::get('/registrar/clearance/delete/{program}/{ID_no}', [UpdateController::class, 'registrarDeleteClearance'])->name('registrar.DeleteClearance');
        
        Route::get('/click_view/{program}/{ID_no}', [UserController::class, 'registrarClearanceView'])->name('registrar.clearanceSearch');
        
        Route::post('/officers/registrar/update status', [UpdateController::class, 'registerUpdateStatus'])->name('registrar.registerUpdateStatus');
        Route::post('/registrar/tabledit', [UpdateController::class, 'registrarTableEdit'])->name('tabledit.registrarTableEdit');
        Route::get('/registrar/print all', [OfficerController::class, 'registrarPrintAll'])->name('registrar.printAll');
        Route::get('/registrar/clearance/pdf/{program}/{ID_no}', [OfficerController::class, 'registrarPrint'])->name('registrar.print');
        
        // Department Head 
        Route::get('/officers/department head', [loginController::class, 'departmentsDashboard']);
        Route::get('/officers/departments/add checkout', [OfficerController::class, 'newCheckoutDepartment']);
        Route::get('/officers/departments/regular students', [OfficerController::class, 'regStudList']);
        Route::get('/officers/departments/extension students', [OfficerController::class, 'extnStudList']);
        Route::get('/officers/departments/distance students', [OfficerController::class, 'disStudList']);
        
       
        Route::get('/officers/departments/search all', [SearchController::class, 'departmentAllSearch'])->name('department.allSearch');
        Route::get('/officers/departments/search regular', [SearchController::class, 'departmentRegSearch'])->name('department.regSearch');
        Route::get('/officers/departments/search extension', [SearchController::class, 'departmentExtnSearch'])->name('department.extnSearch');
        Route::get('/officers/departments/search distance', [SearchController::class, 'departmentDisSearch'])->name('department.disSearch');
        Route::get('/departments/checkout/list', [OfficerController::class, 'departmentCheckoutList']);
        Route::get('/departments/checkout/search', [SearchController::class, 'departmentCheckoutSearch'])->name('department.checkoutSearch');
        
        Route::get('/departments/delete/{program}/{ID_no}', [UpdateController::class, 'departmentDelete'])->name('department.Delete');
        Route::get('/departments/checkout/delete/{program}/{ID_no}', [UpdateController::class, 'departmentDeleteCheckout'])->name('department.DeleteCheckouts');
        Route::post('/departments/tabledit', [UpdateController::class, 'departmentTableEdit'])->name('tabledit.departmentTableEdit');
        
        // student residence
        Route::get('/officers/student residence', [loginController::class, 'studResidenceDashboard']);
        
        // HRM
        Route::get('/officers/HRM', [loginController::class, 'hrmDashboard']);
        Route::get('/officers/HRM/teachers', [OfficerController::class, 'teacherLists'])->name('officers.HRM.hrmTeacher');
        Route::get('/officers/HRM/admin staffs', [OfficerController::class, 'adminStaffLists'])->name('officers.HRM.hrmAdminStaff');
        Route::get('/officers/HRM/new employee', [OfficerController::class, 'newEmployeeRegister'])->name('officers.HRM.newEmployee');

        Route::get('/officers/HRM/search all', [SearchController::class, 'registrarAllSearch'])->name('registrar.allSearch');
        Route::get('/officers/HRM/search teachers', [SearchController::class, 'registrarRegSearch'])->name('registrar.regSearch');
        Route::get('/officers/HRM/search adminstaffs', [SearchController::class, 'registrarExtnSearch'])->name('registrar.extnSearch');
        
        Route::get('/HRM/clearance/list', [OfficerController::class, 'hrmClearanceList']);
        Route::get('/HRM/clearance/search', [SearchController::class, 'registrarClearanceSearch'])->name('registrar.clearanceSearch');
        Route::get('/clearance/export pdf/{program}/{ID_no}', [UserController::class, 'HRMclearancePdf'])->name('hrmClearance.exportPdf');
        
        Route::get('/HRM/delete/{employee_type}/{ID_no}', [UpdateController::class, 'hrmDelete'])->name('HRM.Delete');
        Route::get('/HRM/clearance/delete/{catagory}/{ID_no}', [UpdateController::class, 'hrmDeleteClearance'])->name('HRM.DeleteClearance');
        
        Route::get('/clearance/back/{role}', [UserController::class, 'clearanceOfficersBack'])->name('Clearance.officersBack');
        
        Route::post('/HRM/teacher/update status', [UpdateController::class, 'teacherUpdateStatus'])->name('HRM.teacherUpdateStatus');
        Route::post('/HRM/admin staff/update status', [UpdateController::class, 'adminStaffUpdateStatus'])->name('HRM.adminStaffUpdateStatus');
        Route::post('/HRM/tabledit', [UpdateController::class, 'hrmTableEdit'])->name('tabledit.hrmTableEdit');
        Route::get('/HRM/print all', [OfficerController::class, 'hrmPrintAll'])->name('HRM.printAll');
        

        // dining
        Route::get('/officers/dining office', [loginController::class, 'diningDashboard']);

        // department officers
        Route::get('/officers/electrical department', [loginController::class, 'electricalDashboard']);
        
    // end officers

});

 
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
