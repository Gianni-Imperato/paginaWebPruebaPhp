<?php

use Illuminate\Support\Facades\Route;
use Modules\Casanova\Http\Controllers\CasaproductoController;
use Modules\Casanova\Http\Controllers\CasasipedController;
use Modules\Casanova\Http\Controllers\CasavencomController;
use Modules\Casanova\Http\Controllers\CasapagosController;
use Modules\Casanova\Http\Controllers\CasainvtraController;


Route::middleware('auth')->group(function () {
        Route::controller(CasaproductoController::class)->group(function () {
            Route::get('/casaproducto', 'index')->name('casaproducto.index');
            Route::post('/store', 'store')->name('casaproducto.store');
            Route::get('/casaproducto/{id}/edit', 'edit')->name('casaproducto.edit');
            Route::put('/casaproducto/{id}', 'update')->name('casaproducto.update');
        });

        Route::controller(casasipedController::class)->group(function () {
            Route::get('/casasiped', 'index')->name('casasiped.index');
            Route::post('/casasiped', 'show')->name('casasiped.show');
        });

        Route::controller(CasavencomController::class)->group(function () {
            Route::get('/casavencom', 'index')->name('casavencom.index');
            Route::post('/casavencom', 'show')->name('casavencom.show');
        });

        Route::controller(CasapagosController::class)->group(function () {
            Route::get('/casapagos', 'index')->name('casapagos.index');
            Route::post('/casapagos', 'show')->name('casapagos.show');
        });

        Route::controller(CasainvtraController::class)->group(function () {
            Route::get('/casainvtra', 'index')->name('casainvtra.index');
            Route::post('/casainvtra', 'show')->name('casainvtra.show');
        });
});

