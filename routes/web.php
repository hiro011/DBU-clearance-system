<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentViewController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegularStudController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/', function () {
//     return view('welcome');
// });
 
Route::get('/student info', function () {
    return view('stud_info');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/registrar', function () {
    return view('registrar');
});
Route::get('/registrar/new student', function () {
    return view('newStudent');
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
Route::get('/library', function () {
    return view('library');
});
Route::get('/library/new patron', function () {
    return view('newPatron');
});
Route::get('/residence office', function () {
    return view('residenceOffice');
});
Route::get('/residence office/new dorm user', function () {
    return view('newDormUser');
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
    // return view('clearanceUsers0.adminStaffForm');
    return view('Layouts.navLayout');
});








// ------------ User controller ---------------------------------------------------------//
    // user save 
    Route::post('/registrar/new RegularStudent/save', [UserController::class, 'RegStudsave'])->name('newUsers.saveRegStud');
    Route::post('/registrar/new ExtensionStudent/save', [UserController::class, 'ExtnStudsave'])->name('newUsers.saveExtnStud');
    Route::post('/registrar/new DistanceStudent/save', [UserController::class, 'DisStudsave'])->name('newUsers.saveDisStud');

    // user check 
    Route::post('/auth/RegStudUser/check', [UserController::class, 'RegStudcheck'])->name('auth.RegStuduser.check');
    Route::post('/auth/ExtStudUser/check', [UserController::class, 'ExtnStudcheck'])->name('auth.ExtnStuduser.check');
    Route::post('/auth/DisStudUser/check', [UserController::class, 'DisStudcheck'])->name('auth.DisStuduser.check');
    Route::post('/auth/TeacherUser/check', [UserController::class, 'Teachercheck'])->name('auth.Teacheruser.check');
    Route::post('/auth/AdminStaffUser/check', [UserController::class, 'AdminStaffcheck'])->name('auth.AdminStaffuser.check');

    // user login
    Route::get('/auth/login/extensionStud', [UserController::class,  'ExtnStudlogin'])->name('auth.loginExtensionStud');
    Route::get('/auth/login/distanceStud', [UserController::class,   'DisStudlogin'])->name('auth.loginDistanceStud');
    Route::get('/auth/login/teacher', [UserController::class,   'Teacherlogin'])->name('auth.loginTeacher');
    Route::get('/auth/login/adminStaff', [UserController::class,'AdminStafflogin'])->name('auth.loginAdminStaff');
    Route::get('/auth/login/regularStud', [UserController::class,   'RegStudlogin'])->name('auth.loginRegularStud');
// ------------------------ End user --------------------------------------------------------------- //


// ------------------- Officers controller --------------------------------------------------------- //
    // Officers check and save
    Route::post('/admin/new officer/save', [OfficerController::class, 'save'])->name('newUsers.saveOfficer');
   
// ------------------------ End Officer  ---------------------------------------------------------- //


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

 

// Registrar add students  
Route::get('/registrar/new student', [OfficerController::class, 'newStudentRegister'])->name('officersNewUser.newStudent');
Route::post('/registrar/new student/save', [OfficerController::class, 'newStudentSave'])->name('newUsers.saveStudent');

// endRegistrar 

Route::get('/', [loginController::class, 'login'])->name('auth.login');
Route::post('/auth/check', [loginController::class, 'check'])->name('auth.check');
Route::get('/auth/logout',[loginController::class, 'logout'])->name('auth.logout');
Route::post('/admin/new user/save', [loginController::class, 'newUserSave'])->name('newUsers.saveUser');
Route::post('/admin/new officer/save', [loginController::class, 'newOfficerSave'])->name('newUsers.saveOfficer');


Route::group(['middleware'=>['AuthCheck']], function(){

    // login Controller Routes ----------------------------------------------------------- //
    Route::get('/admin/new user', [loginController::class, 'newUserRegister'])->name('newUsers.newUser');
    Route::get('/admin/new officer', [loginController::class, 'newOfficerRegister'])->name('newUsers.newOfficer');
    Route::get('/admin/dashboard', [loginController::class, 'adminDashboard']);
    Route::get('/Home', [loginController::class, 'HomeDashboard']);

    // Officers dashboard
    Route::get('/officers/library', [loginController::class, 'libraryDashboard']);
    Route::get('/officers/registrar', [loginController::class, 'registrarDashboard']);
    Route::get('/officers/student residence', [loginController::class, 'studResidenceDashboard']);
    Route::get('/officers/dining office', [loginController::class, 'diningDashboard']);

    //department officers
    Route::get('/officers/electrical department', [loginController::class, 'electricalDashboard']);
    
    // End Admin Route ------------------------------------------------------------------- //

});

 
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
