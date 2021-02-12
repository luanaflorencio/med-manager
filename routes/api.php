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
use \App\Http\Controllers\ApiAuthController;
use \App\Http\Controllers\EquipmentController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('auth/login', [ApiAuthController::class, 'login']);
Route::post('auth/logout', [ApiAuthController::class, 'logout']);
Route::post('auth/refresh', [ApiAuthController::class, 'refresh']);
Route::post('auth/me', [ApiAuthController::class, 'me']);

Route::get('/equipments', [EquipmentController::class, 'list'])->middleware('auth:jwt');
