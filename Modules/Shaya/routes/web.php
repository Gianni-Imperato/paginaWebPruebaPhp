<?php

use Illuminate\Support\Facades\Route;
use Modules\Shaya\Http\Controllers\ShayproductoController;
use Modules\Shaya\Http\Controllers\ShaysipedController;
use Modules\Shaya\Http\Controllers\ShayvencomController;
use Modules\Shaya\Http\Controllers\ShaypagosController;

Route::middleware('auth')->group(function () {

    Route::controller(ShayproductoController::class)->group(function () {
        Route::get('/shayproducto', 'index')->name('shayproducto.index');
        Route::post('/store', 'store')->name('shayproducto.store');
        Route::get('/shayproducto/{id}/edit', 'edit')->name('shayproducto.edit');
        Route::put('/shayproducto/{id}', 'update')->name('shayproducto.update');
    });


    Route::controller(shaysipedController::class)->group(function () {
        Route::get('/shaysiped', 'index')->name('shaysiped.index');
        Route::post('/shaysiped', 'show')->name('shaysiped.show');
    });

    Route::controller(shayvencomController::class)->group(function () {
        Route::get('/shayvencom', 'index')->name('shayvencom.index');
        Route::post('/shayvencom', 'show')->name('shayvencom.show');
    });

    Route::controller(shaypagosController::class)->group(function () {
        Route::get('/shaypagos', 'index')->name('shaypagos.index');
        Route::post('/shaypagos', 'show')->name('shaypagos.show');
    });

});