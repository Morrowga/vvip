<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('register_user', [App\Http\Controllers\API\UserRegisterController::class, 'registerUser']);

Route::post('pin_create/{user_id}', [App\Http\Controllers\API\UserRegisterController::class, 'createPin'])->name('pin_create');

Route::post('customer/login', [App\Http\Controllers\Auth\LoginController::class, 'loginApi']);

Route::get('generate_code', [App\Http\Controllers\API\UserRegisterController::class, 'generateCode']);

Route::get('packages', [App\Http\Controllers\API\UserRegisterController::class, 'package']);