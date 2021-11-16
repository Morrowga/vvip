<?php

use App\Http\Controllers;
use Illuminate\Http\Request;
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
Route::get('/', [App\Http\Controllers\API\WebUserJourneyController::class, 'main_view'])->name('main');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

Route::get('/setting', [App\Http\Controllers\HomeController::class, 'setting'])->name('setting');

Route::get('/action', [App\Http\Controllers\HomeController::class, 'action'])->name('action');

Route::get('/create_data', [App\Http\Controllers\HomeController::class, 'createData'])->name('createData');

Route::get('/list', [App\Http\Controllers\HomeController::class, 'listView'])->name('list');

Route::get('package', 'App\Http\Controllers\API\WebUserJourneyController@package')->name('view_packages');

Route::get('product', 'App\Http\Controllers\API\WebUserJourneyController@products')->name('view_product');

Route::get('{url}', [App\Http\Controllers\API\UserPanelController::class, 'displayUserWant'])->name('user_url');

