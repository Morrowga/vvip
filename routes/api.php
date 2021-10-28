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

Route::post('customer/login', [App\Http\Controllers\Auth\LoginController::class, 'loginApi']);

Route::get('generate_code', [App\Http\Controllers\API\UserRegisterController::class, 'generateCode']);

Route::get('packages', [App\Http\Controllers\API\UserRegisterController::class, 'package']);

Route::post('save-user', [App\Http\Controllers\API\UserRegisterController::class, 'saveUser']);

Route::post('create_pack', [App\Http\Controllers\API\WebUserJourneyController::class, 'createPlan']);

Route::post('create_card', [App\Http\Controllers\API\WebUserJourneyController::class, 'createTemplate']);

Route::get('cd_timer', [App\Http\Controllers\API\UserRegisterController::class, 'countDown']);

Route::get('get_cards', [App\Http\Controllers\API\UserRegisterController::class, 'card_designs']);

Route::post('get_home', [App\Http\Controllers\API\UserRegisterController::class, 'countDown']);

Route::post('create_contact', [App\Http\Controllers\API\UserPanelController::class, 'create_contact']);

Route::post('get_datas', [App\Http\Controllers\API\UserPanelController::class, 'getRequestData']);

Route::post('create_deep_link', [App\Http\Controllers\API\UserPanelController::class, 'createDeepLink']);

Route::post('change_action', [App\Http\Controllers\API\UserPanelController::class, 'changeAction']);

//379d0d9f-62a3-4d18-9e4d-70f378ff6392