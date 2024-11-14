<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\GuiumController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('tours', TourController::class);
Route::resource('guia', GuiumController::class);
