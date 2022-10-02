<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller\Home\HomeController;

Route::view('/', 'home.index')->name('homepage');
Route::view('/about', 'home.about')->name('aboutpage');
Route::view('/contact', 'home.contact')->name('contactpage');