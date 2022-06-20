<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Cars\CarsController;
use App\Http\Controllers\Cars\CarController;
use App\Http\Controllers\Cars\BrandsController;
use App\Http\Controllers\Cars\BrandController;
use App\Http\Controllers\Cars\ModelController;
use App\Http\Controllers\Cars\ModelsController;


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

Auth::routes();

Route::middleware(['auth'])->group(function () {


    Route::group(['prefix' => '/cars/', 'as' => 'cars.'], function () {


        Route::get('list', [CarsController::class, 'list'])->name('list');

        Route::get('show/{id}', [CarController::class, 'show'])->name('show');

        Route::post('destroy/{id}', [CarController::class, 'destroy'])->name('destroy');

        Route::get("create", [CarController::class, 'getCreateView'])->name('getCreateView');

        Route::post("create", [CarController::class, 'create'])->name('create');

        Route::get('update/{id}', [CarController::class, 'getUpdateView'])->name('getUpdateView');

        Route::post('update/{id}', [CarController::class, 'update'])->name('update');

        Route::post('addPhoto', [CarController::class, 'addPhoto'])->name('addPhoto');
    });


    Route::group(['prefix' => '/brands/', 'as' => 'brands.'], function () {

        Route::get('list', [BrandsController::class, 'list'])->name('list');

        Route::get('destroy/{id}', [BrandController::class, 'destroy'])->name('destroy');

        Route::get('show/{id}', [BrandController::class, 'show'])->name('show');
    });

    Route::group(['prefix' => '/models/', 'as' => 'models.'], function () {

        Route::get('list', [ModelsController::class, 'list'])->name('list');

        Route::get('destroy/{id}', [ModelController::class, 'destroy'])->name('destroy');

        Route::get('show/{id}', [ModelController::class, 'show'])->name('show');
    });



    Route::get('/{any}', [HomeController::class, 'homePage'])->where('any', '.*');



    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
