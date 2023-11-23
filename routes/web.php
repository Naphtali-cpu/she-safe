<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\payments\MpesaController;
use App\Http\Controllers\WebdataController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [LandingController::class, 'index'])->name('home');

Route::post('donation', [MpesaController::class,'donation'])->name('donate-bana');

Route::prefix('riri')->middleware('auth')->group(function () {
    Route::controller(DashboardController::class)->group(function() {
        Route::get('/', 'index')->name('dashboard');
    });

    //Mpesa
    Route::controller(MpesaController::class)->group(function(){
        Route::post('mpesa-auth-credentials','addcredentials')->name('mpesa-auth-data');
        Route::get('/settings', 'datapreview')->name('data.preview');
        Route::post('simulate','simulate')->name('mpesa-simulate');
    });

    Route::controller(WebdataController::class)->group(function(){
        Route::get('webdata','index')->name('webdata');
        Route::post('webdata','store')->name('store.webdata');
    });
});

Auth::routes();
