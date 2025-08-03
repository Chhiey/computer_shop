<?php

use App\Http\Controllers\frontend\AccessoriesController;
use App\Http\Controllers\frontend\AllProductController;
use App\Http\Controllers\frontend\CamerasController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\LaptopsController;
use App\Http\Controllers\frontend\SmartphoneController;
use Illuminate\Support\Facades\Route;

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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
});

Route::controller(AllProductController::class)->group(function () {
    Route::get('/allProduct', 'index');
});
Route::controller(AllProductController::class)->group(function () {
    Route::get('/Cateories', 'index');
});

Route::controller(CheckoutController::class)->group(function () {
    Route::get('/checkout', 'index');
});

Route::controller(LaptopsController::class)->group(function () {
    Route::get('/contactus', 'index');
});

Route::controller(SmartphoneController::class)->group(function () {
    Route::get('/service', 'index');
});

Route::controller(AccessoriesController::class)->group(function () {
    Route::get('/accessories', 'index');
});

Route::controller(CamerasController::class)->group(function () {
    Route::get('/aboutus', 'index');
});
