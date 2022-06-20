<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cars\ApiCarsController;
use App\Http\Controllers\Cars\ApiCarController;



Route::get('list', [ApiCarsController::class, 'list']);

Route::get('show/{id}', [ApiCarController::class, 'show']);
Route::post('create', [ApiCarController::class, 'create']);
Route::delete('destroy/{id}', [ApiCarController::class, 'destroy']);
Route::put('update/{id}', [ApiCarController::class, 'update']);
