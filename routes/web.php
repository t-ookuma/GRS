<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\ScheduleController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/users/{id}', [UserController::class, 'index']);
Route::get('/users/{id}/history', [UserController::class, 'history']);
Route::get('/users/{id}/form', [UserController::class, 'form']);
Route::get('/admins/{id}', [AdminController::class, 'index']);
Route::get('/admins/{id}/form', [AdminController::class, 'form']);
Route::get('/schedules/{id}/form', [ScheduleController::class, 'form']);
Route::get('/schedules/{id}/list', [ScheduleController::class, 'list']);
Route::get('/reserves', [ReserveController::class, 'index']);
Route::get('/reserves/{id}', [ReserveController::class, 'detail']);
Route::get('/reserves/{id}/form', [ReserveController::class, 'form']);
Route::middleware('auth')->group(function () {
});

require __DIR__ . '/auth.php';
