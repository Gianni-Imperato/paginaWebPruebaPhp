<?php

use Illuminate\Support\Facades\Route;
use Modules\Super1212\Http\Controllers\S121productoController;
use Modules\Super1212\Http\Controllers\S121sipedController;
use Modules\Super1212\Http\Controllers\S121vencomController;
use Modules\Super1212\Http\Controllers\S121pagosController;
use Modules\Super1212\Http\Controllers\S121invtraController;

Route::middleware('auth')->group(function () {

    Route::controller(S121productoController::class)->group(function () {
        Route::get('/s121producto', 'index')->name('s121producto.index');
        Route::post('/store', 'store')->name('s121producto.store');
        Route::get('/s121producto/{id}/edit', 'edit')->name('s121producto.edit');
        Route::put('/s121producto/{id}', 'update')->name('s121producto.update');
    });


    Route::controller(s121sipedController::class)->group(function () {
        Route::get('/s121siped', 'index')->name('s121siped.index');
        Route::post('/s121siped', 'show')->name('s121siped.show');
    });

    Route::controller(s121vencomController::class)->group(function () {
        Route::get('/s121vencom', 'index')->name('s121vencom.index');
        Route::post('/s121vencom', 'show')->name('s121vencom.show');
    });

    Route::controller(s121pagosController::class)->group(function () {
        Route::get('/s121pagos', 'index')->name('s121pagos.index');
        Route::post('/s121pagos', 'show')->name('s121pagos.show');
    });

    Route::controller(s121invtraController::class)->group(function () {
        Route::get('/s121invtra', 'index')->name('s121invtra.index');
        Route::post('/s121invtra', 'show')->name('s121invtra.show');
    });

});