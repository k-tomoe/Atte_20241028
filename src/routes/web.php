<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DayshiftController;
use App\Http\Controllers\RestController;
use SebastianBergmann\GlobalState\Restorer;

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

Route::middleware('auth')->group(function () {
    Route::get('/', [AttendanceController::class, 'index']);
    Route::post('/work-start', [DayshiftController::class, 'create']);
    Route::post('/work-end', [DayshiftController::class, 'update']);
    Route::post('/rest-start',[RestController::class, 'create']);
    Route::post('/rest-end', [RestController::class, 'update']);
});