<?php

use App\Http\Controllers\AdminsFormController;
use App\Http\Controllers\AdminsIndexController;
use App\Http\Controllers\HomeIndexController;
use App\Http\Controllers\ReservesDetailController;
use App\Http\Controllers\ReservesFormController;
use App\Http\Controllers\ReservesIndexController;
use App\Http\Controllers\UsersFormController;
use App\Http\Controllers\UsersHistoryController;
use App\Http\Controllers\UsersIndexController;
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

// home.index
Route::get('/', HomeIndexController::class);
// admins.index
Route::get('/admins/{id}', AdminsIndexController::class);
// admins.form
Route::get('/admins/{id}/form', AdminsFormController::class);
// reserves.index
Route::get('/reserves', ReservesIndexController::class);
// reserves.detail
Route::get('/reserves/{id}', ReservesDetailController::class);
// reserves.form
Route::get('/reserves/{id}/form', ReservesFormController::class);
// users.index
Route::get('/users', UsersIndexController::class);
// users.history
Route::get('/users/{id}', UsersHistoryController::class);
// users.form
Route::get('/users/{id}/form', UsersFormController::class);

Route::middleware('auth')->group(function () {
});

require __DIR__ . '/auth.php';
