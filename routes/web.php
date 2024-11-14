<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DepositoController;
 
Route::resource('clientes', ClienteController::class);
Route::resource('depositos', DepositoController::class);

Route::get('/', function () {
    return view('welcome');
});
