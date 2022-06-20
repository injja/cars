<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cars\ApiCarsController;
use App\Http\Controllers\Cars\ApiCarController;



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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'cars/'], function () {
    Route::get('list', [ApiCarsController::class, 'list']);

    Route::get('show/{id}', [ApiCarController::class, 'show']);
    Route::post('create', [ApiCarController::class, 'create']);
    Route::delete('destroy/{id}', [ApiCarController::class, 'destroy']);
    Route::put('update/{id}', [ApiCarController::class, 'update']);
});
