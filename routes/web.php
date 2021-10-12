<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts.frontview');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/web_pin', [App\Http\Controllers\HomeController::class, 'pin'])->name('pin');

Route::get('/plan', [App\Http\Controllers\HomeController::class, 'plan'])->name('plan');


Route::put('/web_pin_create', [App\Http\Controllers\HomeController::class, 'web_pin'])->name('web_pin_create');