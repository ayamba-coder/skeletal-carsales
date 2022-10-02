<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\User\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/user/dashboard',[DashboardController::class,'index'])->name('user.dashboard')->middleware(['auth','verified']);
Route::get('/user/logout',[DashboardController::class,'logout'])->name('user.logout');
Route::get('/user/deletetask/{id}',[DashboardController::class, 'deleteTask'])->name('user.deletetask');
Route::get('/user/endtask/{id}',[DashboardController::class, 'endTask'])->name('user.endtask');
Route::get('/user/assigntask/{id}',[DashboardController::class, 'assignTask'])->name('user.assigntask');
route::get('/user/dashboard/cart', [CartController::class,'index'])->name('user.dashboard.cart');
Route::get('/user/dashboard/delete/{id}', [CartController::class,'removeFromCart'])->name('user.dashboard.cart.delete');
Route::get('user/dashboard/cart/add/{id}',[CartController::class, 'addToCart'])->name('user.dashboard.cart.add');
Route::get('user/dashboard/checkout/cart/{id}',[CheckoutController::class, 'index'])->name('user.checkout')->middleware('auth');
Route::post('/user/dasboard/sendemail',[DashboardController::class, 'sendContactEmail'])->name('sendmail');
Route::post('/user/dashboard/cart/update', [ DashboardController::class, 'updateCart'])->name('user.dashboard.cart.update');

