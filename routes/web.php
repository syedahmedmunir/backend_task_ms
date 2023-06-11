<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
 

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

Route::get('/',[LoginController::class,'login'])->name('login');
Route::post('/user/store',[UserController::class,'store'])->name('user.store');

Route::post('/login',[LoginController::class,'login_attempt'])->name('login.attempt');

Route::group(['middleware'=>'auth'], function(){

    Route::get('/jobs',[JobController::class,'index'])->name('job.index');

    Route::get('/logout',[LoginController::class,'logout'])->name('logout');

});
