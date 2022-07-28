<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\StudentViewController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\NewOfficerController;

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
Route::get('admin', function () {
    return view('adminView');
});
Route::get('/admin/new officer', function () {
    return view('newUsers.newOfficer');
});


Route::get('registrar/newStudent', [StudentViewController::class, 'newStudent']);
Route::post('registrar/add', [StudentViewController::class, 'add']);

Route::get('newuser', [ForgotPassController::class, 'newuser']);
Route::post('newuser/add', [ForgotPassController::class, 'adduser']);

Route::get('auth/login', [loginController::class, 'login'])->name('auth.login');
Route::post('auth/check', [loginController::class, 'check'])->name('auth.check');;


 
Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');
Route::get('/auth/register',[MainController::class, 'register'])->name('auth.register');
 

// Route::post('/saveStudent', function () {
//     return view('welcome');
// })->name('saveStudent');

