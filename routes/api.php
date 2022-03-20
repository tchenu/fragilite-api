<?php

use App\Http\Controllers\IrisController;
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

Route::get('iris/search', [IrisController::class, 'search']);
Route::get('departments', [IrisController::class, 'departments']);
Route::get('regions', [IrisController::class, 'regions']);
Route::get('cities', [IrisController::class, 'cities']);

