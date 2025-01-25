<?php

use Illuminate\Support\Facades\Route;
use Modules\Panteon2\Http\Controllers\Pan2productoController;
use Modules\Panteon2\Http\Controllers\Pan2SipedController;
use Modules\Panteon2\Http\Controllers\Pan2vencomController;
use Modules\Panteon2\Http\Controllers\Pan2pagosController;

Route::middleware('auth')->group(function () {
    Route::controller(Pan2productoController::class)->group(function () {
        Route::get('/pan2producto', 'index')->name('pan2producto.index');
        Route::post('/store', 'store')->name('pan2producto.store');
        Route::get('/pan2producto/{id}/edit', 'edit')->name('pan2producto.edit');
        Route::put('/pan2producto/{id}', 'update')->name('pan2producto.update');
    });


    Route::controller(Pan2sipedController::class)->group(function () {
        Route::get('/pan2siped', 'index')->name('pan2siped.index');
        Route::post('/pan2siped', 'show')->name('pan2siped.show');
    });

    Route::controller(Pan2vencomController::class)->group(function () {
        Route::get('/pan2vencom', 'index')->name('pan2vencom.index');
        Route::post('/pan2vencom', 'show')->name('pan2vencom.show');
    });

    Route::controller(Pan2pagosController::class)->group(function () {
        Route::get('/pan2pagos', 'index')->name('pan2pagos.index');
        Route::post('/pan2pagos', 'show')->name('pan2pagos.show');
    });
});