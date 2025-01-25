<?php

use Illuminate\Support\Facades\Route;
use Modules\Junin\Http\Controllers\JuniproductoController;
use Modules\Junin\Http\Controllers\JuniSipedController;
use Modules\Junin\Http\Controllers\JunivencomController;
use Modules\Junin\Http\Controllers\JunipagosController;

Route::middleware('auth')->group(function () {
    Route::controller(JuniproductoController::class)->group(function () {
        Route::get('/juniproducto', 'index')->name('juniproducto.index');
        Route::post('/store', 'store')->name('juniproducto.store');
        Route::get('/juniproducto/{id}/edit', 'edit')->name('juniproducto.edit');
        Route::put('/juniproducto/{id}', 'update')->name('juniproducto.update');
    });


    Route::controller(junisipedController::class)->group(function () {
        Route::get('/junisiped', 'index')->name('junisiped.index');
        Route::post('/junisiped', 'show')->name('junisiped.show');
    });

    Route::controller(junivencomController::class)->group(function () {
        Route::get('/junivencom', 'index')->name('junivencom.index');
        Route::post('/junivencom', 'show')->name('junivencom.show');
    });

    Route::controller(junipagosController::class)->group(function () {
        Route::get('/junipagos', 'index')->name('junipagos.index');
        Route::post('/junipagos', 'show')->name('junipagos.show');
    });
});