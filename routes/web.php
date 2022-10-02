<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskSchedulingController;

require_once 'homeRouters.php';
require_once 'userRouters.php';

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


Route::get('/tasks',[TaskSchedulingController::class, 'index'])->name('home');
Route::get('/endtask/{id}',[TaskSchedulingController::class, 'endTask']);
//Route::view("users","users");
//Route::view('user','user.login');


Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
