<?php

use Illuminate\Support\Facades\Route;
use Modules\Pan1\Http\Controllers\Pan1productoController;
use Modules\Pan1\Http\Controllers\Pan1sipedController;
use Modules\Pan1\Http\Controllers\Pan1vencomController;
use Modules\Pan1\Http\Controllers\Pan1pagosController;
use Modules\Pan1\Http\Controllers\Pan1invtraController;

Route::middleware('auth')->group(function () {
    Route::controller(Pan1productoController::class)->group(function () {
        Route::get('/pan1producto', 'index')->name('pan1producto.index');
        Route::post('/store', 'store')->name('pan1producto.store');
        Route::get('/pan1producto/{id}/show', 'show')->name('pan1producto.show');
        //Route::delete('/pan1producto/{id}', 'destroy')->name('pan1producto.destroy');
        Route::get('/pan1producto/{id}/edit', 'edit')->name('pan1producto.edit');
        Route::put('/pan1producto/{id}', 'update')->name('pan1producto.update');
        //Route::get('/create', 'create')->name('pan1producto.create');
    });


    Route::controller(Pan1sipedController::class)->group(function () {
        Route::get('/pan1siped', 'index')->name('pan1siped.index');
        Route::post('/pan1siped', 'show')->name('pan1siped.show');
    });

    Route::controller(Pan1vencomController::class)->group(function () {
        Route::get('/pan1vencom', 'index')->name('pan1vencom.index');
        Route::post('/pan1vencom', 'show')->name('pan1vencom.show');
    });

    Route::controller(Pan1pagosController::class)->group(function () {
        Route::get('/pan1pagos', 'index')->name('pan1pagos.index');
        Route::post('/pan1pagos', 'show')->name('pan1pagos.show');
    });

    Route::controller(Pan1invtraController::class)->group(function () {
        Route::get('/pan1invtra', 'index')->name('pan1invtra.index');
        Route::post('/pan1invtra', 'show')->name('pan1invtra.show');
    });

    //Route::controller(ProductoController::class)->group(function () {
    //    Route::get('/producto/{id}', 'destroy')->name('producto.destroy');
    //});
    //Route::post('producto/{id}', [ProductoController::class,'destroy'])->name('producto.destroy');
    //{{route('producto.destroy', $producto->id)}}
});
