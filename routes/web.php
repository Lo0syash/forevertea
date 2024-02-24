<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\IndexController;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\CategoryController;


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
    Route::get('/admin', 'admin')->name('index.admin')->middleware(['admin']);
});

Route::controller(AuthController::class)->group(function () {
   Route::get('/login', 'loginPage')->name('auth.loginPage');
   Route::post('/login', 'login')->name('auth.login');
   Route::get('/registration', 'registrationPage')->name('auth.registrationPage');
   Route::post('/registration', 'registration')->name('auth.registration');
   Route::post('/logout', 'logout')->name('auth.logout');
});

Route::controller(CategoryController::class)->prefix('category')->middleware(\App\Http\Middleware\AdminMiddleware::class)->group(function (){
    Route::get('/create', 'create')->name('category.create');
    Route::post('/', 'store')->name('category.store');

    Route::post('/{category}', 'destroy')->name('category.destroy');
});
