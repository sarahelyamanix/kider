<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontpages;
use App\Http\Controllers\DashController;
Route::get('/', function () {
    return view('');
});

Route::get('home',[Frontpages::class,'home'])->name('home');
Route::get('about',[Frontpages::class,'about'])->name('about');
Route::get('classes',[Frontpages::class,'classes'])->name('classes');
Route::get('contactUs',[Frontpages::class,'contactUs'])->name('contactUs');
Route::get('facilities',[Frontpages::class,'facilities'])->name('facilities');
Route::get('team',[Frontpages::class,'team'])->name('team');
Route::get('callToAction',[Frontpages::class,'callToAction'])->name('callToAction');
Route::get('appointment',[Frontpages::class,'appointment'])->name('appointment');
Route::get('testimonial',[Frontpages::class,'testimonial'])->name('testimonial');
Route::get('error', [Frontpages::class, 'error'])->name('error');

Route::get('dashboard',[DashController::class,'dashboard'])->name('dashboard');
Route::get('register',[DashController::class,'register'])->name('register');
Route::get('login',[DashController::class,'login'])->name('login');