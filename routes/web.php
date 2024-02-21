<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\IndexController;
use \App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(IndexController::class)->group(function (){
    Route::get('/', 'index')->name('index.index');
});

Route::controller(AuthController::class)->group(function () {
   Route::get('/login', 'loginPage')->name('auth.loginPage');
   Route::get('/registration', 'registrationPage')->name('auth.registrationPage');
});
