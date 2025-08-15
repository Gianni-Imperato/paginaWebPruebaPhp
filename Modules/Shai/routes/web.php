<?php

use Illuminate\Support\Facades\Route;
use Modules\Shai\Http\Controllers\ShaiproductoController;
use Modules\Shai\Http\Controllers\ShaisipedController;
use Modules\Shai\Http\Controllers\ShaivencomController;
use Modules\Shai\Http\Controllers\ShaipagosController;
use Modules\Shai\Http\Controllers\ShaiinvtraController;

Route::middleware('auth')->group(function () {

    Route::controller(ShaiproductoController::class)->group(function () {
        Route::get('/shaiproducto', 'index')->name('shaiproducto.index');
        Route::post('/store', 'store')->name('shaiproducto.store');
        Route::get('/shaiproducto/{id}/edit', 'edit')->name('shaiproducto.edit');
        Route::put('/shaiproducto/{id}', 'update')->name('shaiproducto.update');
    });

    Route::controller(ShaisipedController::class)->group(function () {
        Route::get('/shaisiped', 'index')->name('shaisiped.index');
        Route::post('/shaisiped', 'show')->name('shaisiped.show');
    });

    Route::controller(ShaivencomController::class)->group(function () {
        Route::get('/shaivencom', 'index')->name('shaivencom.index');
        Route::post('/shaivencom', 'show')->name('shaivencom.show');
    });

    Route::controller(ShaipagosController::class)->group(function () {
        Route::get('/shaipagos', 'index')->name('shaipagos.index');
        Route::post('/shaipagos', 'show')->name('shaipagos.show');
    });

    Route::controller(ShaiinvtraController::class)->group(function () {
        Route::get('/shaiinvtra', 'index')->name('shaiinvtra.index');
        Route::post('/shaiinvtra', 'show')->name('shaiinvtra.show');
    });
});


