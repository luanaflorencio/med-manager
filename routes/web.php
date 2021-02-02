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
use App\Http\Controllers\DController;
use App\Http\Controllers\EquipmentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::post('/equipment/unavailable', [EquipmentController::class, 'store']);

require __DIR__ . '/auth.php';
