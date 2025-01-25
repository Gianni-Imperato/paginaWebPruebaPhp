<?php

use Illuminate\Support\Facades\Route;
use Modules\Suspension\Http\Controllers\SuspproductoController;
use Modules\Suspension\Http\Controllers\SuspSipedController;
use Modules\Suspension\Http\Controllers\SuspvencomController;
use Modules\Suspension\Http\Controllers\SusppagosController;

Route::middleware('auth')->group(function () {

    Route::controller(SuspproductoController::class)->group(function () {
        Route::get('/suspproducto', 'index')->name('suspproducto.index');
        Route::post('/store', 'store')->name('suspproducto.store');
        Route::get('/suspproducto/{id}/edit', 'edit')->name('suspproducto.edit');
        Route::put('/suspproducto/{id}', 'update')->name('suspproducto.update');
    });


    Route::controller(suspsipedController::class)->group(function () {
        Route::get('/suspsiped', 'index')->name('suspsiped.index');
        Route::post('/suspsiped', 'show')->name('suspsiped.show');
    });

    Route::controller(suspvencomController::class)->group(function () {
        Route::get('/suspvencom', 'index')->name('suspvencom.index');
        Route::post('/suspvencom', 'show')->name('suspvencom.show');
    });

    Route::controller(susppagosController::class)->group(function () {
        Route::get('/susppagos', 'index')->name('susppagos.index');
        Route::post('/susppagos', 'show')->name('susppagos.show');
    });
});