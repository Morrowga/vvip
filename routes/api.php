<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

Route::group(['middleware' => 'apiKey'], function() {

    Route::post('register_user', [App\Http\Controllers\API\UserRegisterController::class, 'registerUser']);
    
    Route::post('customer/login', [App\Http\Controllers\Auth\LoginController::class, 'loginApi']);
        
    Route::get('packages', [App\Http\Controllers\API\UserRegisterController::class, 'package']);
    
    Route::post('save-user', [App\Http\Controllers\API\UserRegisterController::class, 'saveUser']);    

    Route::get('pay_lists', [App\Http\Controllers\API\UserRegisterController::class, 'payment_lists']);

    Route::post('pymt', [App\Http\Controllers\API\UserRegisterController::class, 'payment_upload']);

    Route::post('verify', [App\Http\Controllers\Auth\RegisterController::class, 'verifyUser'])->name('verify.user');

    Route::post('verify_mobile', [App\Http\Controllers\API\UserRegisterController::class, 'otp_mobile']);

    Route::post('sendagain', [App\Http\Controllers\API\UserRegisterController::class, 'sendAgain']);

    Route::get('approve', [App\Http\Controllers\API\UserRegisterController::class, 'approve_payment']);

});

Route::group(['middleware' => 'check_expire'], function () {
        
    Route::post('get_home', [App\Http\Controllers\API\UserRegisterController::class, 'countDown']);
    
    Route::post('secure', [App\Http\Controllers\API\UserPanelController::class, 'secure_status']);
    
    Route::post('create_contact', [App\Http\Controllers\API\UserPanelController::class, 'create_contact']);
    
    Route::post('get_datas', [App\Http\Controllers\API\UserPanelController::class, 'getRequestData']);
    
    Route::post('create_deep_link', [App\Http\Controllers\API\UserPanelController::class, 'createDeepLink']);
    
    Route::post('change_action', [App\Http\Controllers\API\UserPanelController::class, 'changeAction']);
    
    Route::post('create_url', [App\Http\Controllers\API\UserPanelController::class, 'create_url']);
    
    Route::post('create_email', [App\Http\Controllers\API\UserPanelController::class, 'create_email']);
    
    Route::post('create_sms', [App\Http\Controllers\API\UserPanelController::class, 'create_sms']);
    
    Route::post('create_phone', [App\Http\Controllers\API\UserPanelController::class, 'create_phone']);
    
    Route::get('get_actions', [App\Http\Controllers\API\UserPanelController::class, 'getChangeAction']);
    
    Route::post('create_appearance', [App\Http\Controllers\API\UserPanelController::class, 'create_appearance']);
    
    Route::post('create_link_tree', [App\Http\Controllers\API\UserPanelController::class, 'create_link_tree']);
    
    Route::post('create_event', [App\Http\Controllers\API\UserPanelController::class, 'create_event']);
    
    Route::post('action_event_by_id', [App\Http\Controllers\API\UserPanelController::class, 'action_event_by_id']);
        
});

// Route::get('render', [App\Http\Controllers\API\UserRegisterController::class, 'renderImage']);

Route::get('cards/{token}', [App\Http\Controllers\API\UserRegisterController::class, 'cards']);
    
Route::get('card_by_id/{id}', [App\Http\Controllers\API\UserRegisterController::class, 'card_by_id']);

Route::get('generate_code', [App\Http\Controllers\API\UserRegisterController::class, 'generateCode']);

Route::post('/get_encrypt', [App\Http\Controllers\API\UserRegisterController::class, 'encryptionUrlMobile']);

Route::post('save_customer_card', [App\Http\Controllers\API\UserRegisterController::class, 'save_customer_card']);

Route::post('/register_update/{id}', [App\Http\Controllers\API\UserRegisterController::class, 'register_second_step']);

Route::post('/view_count',[App\Http\Controllers\API\UserStatController::class,'view_count']);

Route::post('user_exists', [App\Http\Controllers\API\UserRegisterController::class, 'user_exists']);
    
Route::post('/get_device_info',[App\Http\Controllers\API\UserStatController::class,'get_device_info']);

Route::get('qr_generate', [App\Http\Controllers\API\UserRegisterController::class, 'qr_generate']);
