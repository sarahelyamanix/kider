<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontpages;
Route::get('/', function () {
    return view('test');
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