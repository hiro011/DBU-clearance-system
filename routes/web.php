<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentViewController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\AdminController;

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



Route::get('/', function () {
    return view('Home');
});
 
Route::get('/student info', function () {
    return view('stud_info');
});
Route::get('/test', function () {
    return view('test001');
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



// Registrar add students 
Route::get('registrar/newStudent', [StudentViewController::class, 'newStudent']);
Route::post('registrar/add', [StudentViewController::class, 'add']);
// endRegistrar 


Route::get('newuser', [ForgotPassController::class, 'newuser']);
Route::post('newuser/add', [ForgotPassController::class, 'adduser']);

Route::get('auth/login', [loginController::class, 'login'])->name('auth.login');
Route::post('auth/check', [loginController::class, 'check'])->name('auth.check');;

// Admin login and registaration
Route::post('/admin/new admin/save', [AdminController::class, 'save'])->name('newUsers.saveAdmin');
Route::post('/auth/admin/check', [AdminController::class, 'check'])->name('auth.admin.check');
Route::get('/auth/admin/logout',[AdminController::class, 'logout'])->name('auth.admin.logout');

// Officers login and registaration
Route::post('/admin/new officer/save', [OfficerController::class, 'save'])->name('newUsers.saveOfficer');
Route::post('/auth/officer/check', [OfficerController::class, 'check'])->name('auth.officer.check');
Route::get('/auth/login/officer', [OfficerController::class, 'login'])->name('auth.loginOfficers');
// endOfficer


Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/auth/login/admin', [AdminController::class, 'login'])->name('auth.loginAdmin');
    Route::get('/admin/new admin', [AdminController::class, 'register'])->name('newUsers.newAdmin');
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

    Route::get('/admin/settings',[AdminController::class,'settings']);
    Route::get('/admin/profile',[AdminController::class,'profile']);
    Route::get('/admin/staff',[AdminController::class,'staff']);

    // new Officer registaration and dashboard
    Route::get('/admin/new officer', [OfficerController::class, 'register'])->name('newUsers.newOfficer');
    Route::get('/officers/library', [OfficerController::class, 'dashboard']);
    // endOfficer

});

// endAdmin



// Route::post('/saveStudent', function () {
//     return view('welcome');
// })->name('saveStudent');

