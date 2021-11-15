<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;




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
Route::get('/',function() {
    return redirect()->route('login');
 });

Route::get('login',[LoginController::class,'index'])->name('login');
Route::get('registration',[RegistrationController::class,'index'])->name('registration');
Route::get('logout',[LoginController::class,'logout'])->name('logout');


Route::post('login-submit',[LoginController::class,'login'])->name('login-submit');
Route::post('register',[RegistrationController::class,'store'])->name('register');




Route::middleware('auth')->group(function(){


Route::get('/dashboard',[DashboardController::class,'index']);

Route::resource('quiz',QuizController::class)->middleware('admin');


});




