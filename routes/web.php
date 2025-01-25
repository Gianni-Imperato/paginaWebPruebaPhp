<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UpdateinntechController;
use Illuminate\Support\Facades\Route;




Route::controller(UpdateinntechController::class)->group(function () {
    Route::get('/ligajusticiasiped/{id}', 'siped')->name('ligajusticiasiped.siped');
    Route::get('/ligajusticiaproducto/{id}', 'producto')->name('ligajusticiaproducto.siped');
    Route::get('/ligajusticiapagos/{id}', 'pagos')->name('ligajusticiapagos.pagos');
    Route::get('/ligajusticiavencom/{id}', 'vencom')->name('ligajusticiavencom.vencom');
});



Route::get('/', function () {
    return view('auth/login');
});



Route::get('/dashboard', function () {
    return view('contenido.contenido');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

//Auth::routes(['register'=>false,'reset'=>false]);




require __DIR__.'/auth.php';


///Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
