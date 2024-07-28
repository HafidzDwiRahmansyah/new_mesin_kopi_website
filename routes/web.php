<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\MachineController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::post('/login', [AuthController::class, 'login']);

Route::get('/user_add', [UserController::class, 'index']);
Route::post('user_add_new', [UserController::class, 'store']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/monitoring_show', [MonitoringController::class, 'show']);
