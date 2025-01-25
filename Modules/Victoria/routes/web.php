<?php

use Illuminate\Support\Facades\Route;
use Modules\Victoria\Http\Controllers\VictproductoController;
use Modules\Victoria\Http\Controllers\VictSipedController;
use Modules\Victoria\Http\Controllers\VictvencomController;
use Modules\Victoria\Http\Controllers\VictpagosController;


Route::controller(VictproductoController::class)->group(function () {
    Route::get('/victproducto', 'index')->name('victproducto.index');
    Route::post('/store', 'store')->name('victproducto.store');
    Route::get('/victproducto/{id}/edit', 'edit')->name('victproducto.edit');
    Route::put('/victproducto/{id}', 'update')->name('victproducto.update');
});


Route::controller(victsipedController::class)->group(function () {
    Route::get('/victsiped', 'index')->name('victsiped.index');
    Route::post('/victsiped', 'show')->name('victsiped.show');
});

Route::controller(victvencomController::class)->group(function () {
    Route::get('/victvencom', 'index')->name('victvencom.index');
    Route::post('/victvencom', 'show')->name('victvencom.show');
});

Route::controller(victpagosController::class)->group(function () {
    Route::get('/victpagos', 'index')->name('victpagos.index');
    Route::post('/victpagos', 'show')->name('victpagos.show');
});
