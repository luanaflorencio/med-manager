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
use \App\Http\Controllers\APIAuthController;
use \App\Http\Controllers\EquipmentController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('auth/login', [APIAuthController::class, 'login']);
Route::post('auth/logout', [APIAuthController::class, 'logout']);
Route::post('auth/refresh', [APIAuthController::class, 'refresh']);
Route::post('auth/me', [APIAuthController::class, 'me']);

Route::get('/equipment', [EquipmentController::class, 'list'])->middleware('auth:jwt');
