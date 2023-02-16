<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CacheController;
use App\Http\Controllers\HomeController;
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

Route::prefix('/{locale?}')
    ->group(function () {
        Route::get('/', HomeController::class)->name('home');
        Route::get('/blogs/{slug}', BlogController::class)->name('blogs');
        Route::get('/clear', CacheController::class);
    });
