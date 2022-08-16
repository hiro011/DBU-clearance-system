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



 
Route::get('/student info', function () {
    return view('stud_info');
});
Route::get('/about', function () {
    return view('about');
});
 
Route::get('/electrical department', function () {
    return view('electricalDep');
});
Route::get('/dining officer', function () {
    return view('diningOfficer');
});
Route::get('/dining officer/new dining user', function () {
    return view('newDiningUser');
});
 
 
Route::get('password/reset', function () {
    return view('auth.email');
});
Route::get('password/new', function () {
    return view('auth.resetPass');
});
Route::get('/profile', function () {
    return view('profile');
});
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



Route::get('/tabledit02', [SearchController::class, 'index']);

Route::get('/livesearch', [SearchController::class, 'actionLiveSearch'])->name('live_search.action');


Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');

  

// ------------------ User Dashboard middleware -----------------------------------------------------//
    Route::group(['middleware'=>['AuthCheckRegStud']], function(){
        Route::get('/user/regular student', [UserController::class, 'RegularStudDashboard']);
        Route::get('/user/regular student/form', [UserController::class, 'RegularStudForm']);
    });
    Route::group(['middleware'=>['AuthCheckExtnStud']], function(){
        Route::get('/user/extension student', [UserController::class, 'ExtensionStudDashboard']);
        Route::get('/user/extension student/form', [UserController::class, 'ExtensionStudForm']);
    });
    Route::group(['middleware'=>['AuthCheckDisStud']], function(){
        Route::get('/user/distance student', [UserController::class, 'DistanceStudDashboard']);
        Route::get('/user/distance student/form', [UserController::class, 'DistanceStudForm']);
    });
    Route::group(['middleware'=>['AuthCheckTeacher']], function(){
        Route::get('/user/teacher', [UserController::class, 'TeacherDashboard']);
        Route::get('/user/teacher/form', [UserController::class, 'TeacherForm']);
    });
    Route::group(['middleware'=>['AuthCheckAdminStaff']], function(){
        Route::get('/user/admin staff', [UserController::class, 'AdminStaffDashboard']);
        Route::get('/user/admin staff/form', [UserController::class, 'AdminStaffForm']);
    });
// -------------------End user middleware ------------------------------------------------ //

Route::get('/students', [RegularStudController::class, 'index']);


// Registrar add students  
Route::get('/', [loginController::class, 'login'])->name('auth.login');
Route::post('/auth/check', [loginController::class, 'check'])->name('auth.check');
Route::get('/auth/logout',[loginController::class, 'logout'])->name('auth.logout');

Route::post('/admin/new user/save', [loginController::class, 'newUserSave'])->name('newUsers.saveUser');
Route::post('/admin/new officer/save', [loginController::class, 'newOfficerSave'])->name('newUsers.saveOfficer');
Route::post('/HRM/new employee/save', [OfficerController::class, 'newEmployeeSave'])->name('newUsers.saveEmployee');
Route::post('/registrar/new student/save', [OfficerController::class, 'newStudentSave'])->name('newUsers.saveStudent');
Route::post('/library/new user/save', [OfficerController::class, 'newPatronSave'])->name('newUsers.savePatron');
Route::post('/library/new book/save', [OfficerController::class, 'newBookSave'])->name('newUsers.saveBook');

Route::post('/clearance/new user/save', [UserController::class, 'clearanceUserSave'])->name('newUsers.saveClearanceUser');

Route::post('/clearance/regular student/check', [UserController::class, 'clearanceCheckRegular'])->name('clearanceUsers.checkRegular');
Route::post('/clearance/extension student/check', [UserController::class, 'clearanceCheckExtension'])->name('clearanceUsers.checkExtension');
Route::post('/clearance/distance student/check', [UserController::class, 'clearanceCheckDistance'])->name('clearanceUsers.checkDistance');
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

    // Officers 

        // library
        Route::get('/officers/library', [loginController::class, 'libraryDashboard']);
        Route::get('/officers/library/new patron', [OfficerController::class, 'newPatronRegister'])->name('officers.library.newPatron');
        Route::get('/officers/library/new book', [OfficerController::class, 'newBookRegister'])->name('officers.library.newBook');
        Route::get('/officers/library/teachers', [OfficerController::class, 'libraryTeachers']);
        Route::get('/officers/library/admin staffs', [OfficerController::class, 'libraryAdminStaffs']);
        Route::get('/officers/library/students', [OfficerController::class, 'libraryStudents']);
        Route::get('/library/checkouts/{catagory}/{Card_no}', [UpdateController::class, 'libraryCheckout'])->name('library.checkouts');

        Route::get('/officers/library/search all', [SearchController::class, 'libraryAllSearch'])->name('library.allSearch');
        Route::get('/officers/library/search teachers', [SearchController::class, 'libraryTeachSearch'])->name('library.teachSearch');
        Route::get('/officers/library/search students', [SearchController::class, 'libraryStudSearch'])->name('library.studSearch');
        Route::get('/officers/library/search adminstaff', [SearchController::class, 'libraryAdminStaffSearch'])->name('library.adminStaffSearch');
        Route::get('/officers/library/search books', [SearchController::class, 'libraryBookSearch'])->name('library.bookSearch');
        
        Route::post('/officers/library/return book', [UpdateController::class, 'libraryReturnBook'])->name('library.returnBook');
        
        // registrar 
        Route::get('/officers/registrar', [loginController::class, 'registrarDashboard']);
        Route::get('/officers/registrar/new student', [OfficerController::class, 'newStudentRegister'])->name('officers.registrar');
        Route::get('/officers/registrar/regular students', [OfficerController::class, 'regStudList']);
        Route::get('/officers/registrar/extension students', [OfficerController::class, 'extnStudList']);
        Route::get('/officers/registrar/distance students', [OfficerController::class, 'disStudList']);
        
       
        Route::get('/officers/registrar/search all', [SearchController::class, 'registrarAllSearch'])->name('registrar.allSearch');
        Route::get('/officers/registrar/search regular', [SearchController::class, 'registrarRegSearch'])->name('registrar.regSearch');
        Route::get('/officers/registrar/search extension', [SearchController::class, 'registrarExtnSearch'])->name('registrar.extnSearch');
        Route::get('/officers/registrar/search distance', [SearchController::class, 'registrarDisSearch'])->name('registrar.disSearch');
        
        Route::get('/registrar/clearance/list', [OfficerController::class, 'registrarClearanceList']);
        Route::get('/registrar/clearance/search', [SearchController::class, 'registrarClearanceSearch'])->name('registrar.clearanceSearch');
        Route::get('/click_view/{program}/{ID_no}', [UserController::class, 'registrarClearanceView'])->name('registrar.clearanceSearch');
        Route::get('/clearance/export pdf/{program}/{ID_no}', [UserController::class, 'clearanceExportPdf'])->name('registrarClearance.exportPdf');
        
        Route::get('/admin/users/search', [SearchController::class, 'adminSearch'])->name('admin.search');
        
        Route::post('/officers/registrar/update status', [UpdateController::class, 'registerUpdateStatus'])->name('registrar.registerUpdateStatus');
        
        Route::post('/registrar/tabledit', [UpdateController::class, 'registrarTableEdit'])->name('tabledit.registrarTableEdit');
        Route::post('/admin/tabledit', [UpdateController::class, 'adminTableEdit'])->name('tabledit.adminsTableEdit');

        
        // student residence
        Route::get('/officers/student residence', [loginController::class, 'studResidenceDashboard']);
        
        // HRM
        Route::get('/officers/HRM', [loginController::class, 'hrmDashboard']);
        Route::get('/officers/HRM/new employee', [OfficerController::class, 'newEmployeeRegister'])->name('officers.HRM.newEmployee');
        Route::get('/officers/HRM/teachers', [OfficerController::class, 'teacherLists'])->name('officers.HRM.hrmTeacher');
        Route::get('/officers/HRM/admin staffs', [OfficerController::class, 'adminStaffLists'])->name('officers.HRM.hrmAdminStaff');


        // dining
        Route::get('/officers/dining office', [loginController::class, 'diningDashboard']);

        // department officers
        Route::get('/officers/electrical department', [loginController::class, 'electricalDashboard']);
        
    // end officers

});

 
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
