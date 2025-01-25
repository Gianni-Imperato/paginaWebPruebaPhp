<?php

use Illuminate\Support\Facades\Route;
use Modules\Estrella\Http\Controllers\EstrproductoController;
use Modules\Estrella\Http\Controllers\EstrSipedController;
use Modules\Estrella\Http\Controllers\EstrvencomController;
use Modules\Estrella\Http\Controllers\EstrpagosController;


Route::middleware('auth')->group(function () {
    Route::controller(EstrproductoController::class)->group(function () {
        Route::get('/estrproducto', 'index')->name('estrproducto.index');
        Route::post('/store', 'store')->name('estrproducto.store');
        Route::get('/estrproducto/{id}/edit', 'edit')->name('estrproducto.edit');
        Route::put('/estrproducto/{id}', 'update')->name('estrproducto.update');
    });


    Route::controller(estrsipedController::class)->group(function () {
        Route::get('/estrsiped', 'index')->name('estrsiped.index');
        Route::post('/estrsiped', 'show')->name('estrsiped.show');
    });

    Route::controller(estrvencomController::class)->group(function () {
        Route::get('/estrvencom', 'index')->name('estrvencom.index');
        Route::post('/estrvencom', 'show')->name('estrvencom.show');
    });

    Route::controller(estrpagosController::class)->group(function () {
        Route::get('/estrpagos', 'index')->name('estrpagos.index');
        Route::post('/estrpagos', 'show')->name('estrpagos.show');
    });
});