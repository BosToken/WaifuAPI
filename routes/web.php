<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DataController;
use App\Http\Middleware\Admin;

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

Route::get('/',[Controller::class, 'welcome']);
Route::get('login',[LoginController::class, 'login']);
Route::get('logout',[LoginController::class, 'logout']);
Route::post('check',[LoginController::class, 'check']);
Route::get('api/waifu',[DataController::class, 'waifu']);
Route::get('documentation',[Controller::class, 'doc']);

Route::group(['middleware' => ['Admin']], function () {
    Route::get('admin',[AdminController::class, 'dashboard']);
    Route::get('read/waifu', [DataController::class, 'viewWaifu']);
    Route::get('create/waifu',[DataController::class, 'createWaifu']);
    Route::post('create/waifu/store', [DataController::class, 'storeWaifu']);
    Route::get('detail/waifu/{id}', [DataController::class, 'detailWaifu']);
    Route::get('edit/waifu/{id}', [DataController::class, 'editWaifu']);
    Route::put('update/waifu/{id}', [DataController::class, 'updateWaifu']);
    Route::put('update/setting/webname/{id}', [AdminController::class, 'updateWebTitle']);
    Route::put('update/setting/endpoint/{id}', [AdminController::class, 'updateEndpoint']);
    Route::put('update/setting/corp/{id}', [AdminController::class, 'updateCorp']);
    Route::get('delete/waifu/{id}', [DataController::class, 'deleteWaifu']);
    Route::get('agent/settings',[AdminController::class, 'agentSettings']);
    Route::get('web/settings',[AdminController::class, 'webSettings']);
});

Route::get('debug',[LoginController::class, 'debug']);
Route::get('/:patchMatch(.*)*', function () {
    return redirect()->route('/');
});
