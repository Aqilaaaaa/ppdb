<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;


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


Route::get('/', [HomeController::class, 'welcome']);


    /**
     * Register Routes
     */
Route::get('/register/pdf',[RegisterController::class, 'studentPrintPdf'])->name('printPdf');

Route::post('/register',[RegisterController::class, 'saveStudent'])->name('register');

Route::get('/register', [RegisterController::class, 'showStudentRegisterForm']);

    /**
     * Login Routes
     */

Route::get('/student/login', [LoginController::class, 'showStudentLoginForm']);
Route::post('/student',[LoginController::class, 'auth'])->name('auth');
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/student/dashboard',[StudentController::class, 'indexStudentDashboard'])->name('indexStudentDashboard');
Route::get('/student/pembayaran', [StudentController::class, 'indexStudentPembayaran'])->name('indexStudentPembayaran');