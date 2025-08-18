<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UpdateinntechController;

use App\Http\Controllers\CasanovaController;
use App\Http\Controllers\SuperEstrellaController;
use App\Http\Controllers\SuperJuninController;
use App\Http\Controllers\SuperPanteonDosController;
use App\Http\Controllers\SuperPanteonUnoController;
use App\Http\Controllers\SuperRepuestos1212Controller;
use App\Http\Controllers\SuperShaiController;
use App\Http\Controllers\SuperShayaController;
use App\Http\Controllers\SuperSuspensionController;
use App\Http\Controllers\SuperVictoriaController;
use App\Http\Controllers\ServicioTallerSuperPanteonUnoController;
use App\Http\Controllers\ServicioTallerSuperShayaController;


use Illuminate\Support\Facades\Route;




Route::controller(UpdateinntechController::class)->group(function () {
    Route::get('/ligajusticiasiped/{id}', 'siped')->name('ligajusticiasiped.siped');
    Route::get('/ligajusticiaproducto/{id}', 'producto')->name('ligajusticiaproducto.siped');
    Route::get('/ligajusticiapagos/{id}', 'pagos')->name('ligajusticiapagos.pagos');
    Route::get('/ligajusticiavencom/{id}', 'vencom')->name('ligajusticiavencom.vencom');
});

//Auth::routes([
//    'register' => false,
//    'reset' => true,
//    'verify' => false
//]);

//Route::get('/home', 'Tenant\HomeController@index')->name('home');

//Route::get('search', 'Tenant\SearchController@index')->name('search.index');
//Route::get('buscar', 'Tenant\SearchController@index')->name('search.index');
//Route::get('search/tables', 'Tenant\SearchController@tables');
//Route::post('search', 'Tenant\SearchController@store');

//Route::get('downloads/{model}/{type}/{external_id}/{format?}', 'Tenant\DownloadController@downloadExternal')->name('tenant.download.external_id');
//Route::get('print/{model}/{external_id}/{format?}', 'Tenant\DownloadController@toPrint');
//Route::get('password/expiration/{email}', '\App\Http\Controllers\Auth\ExpirationPasswordController@index')->name('expiration-password');


Route::get('/', function () {
    //return view('auth/login');

    return view('welcome');

    //return view('home');


});


Route::get('SuperCasanova', [CasanovaController::class, 'index'])->name('SuperCasanova.index'); //ruta para supercasanova
Route::get('SuperEstrella', [SuperEstrellaController::class, 'index'])->name('SuperEstrella.index'); //ruta para superestrella
Route::get('SuperJunin', [SuperJuninController::class, 'index'])->name('SuperJunin.index'); //ruta para superjunin
Route::get('SuperPanteonDos', [SuperPanteonDosController::class, 'index'])->name('SuperPanteonDos.index'); //ruta para superpanteondos
Route::get('SuperPanteonUno', [SuperPanteonUnoController::class, 'index'])->name('SuperPanteonUno.index'); //ruta para superpanteonuno
Route::get('SuperRepuestos1212', [SuperRepuestos1212Controller::class, 'index'])->name('SuperRepuestos1212.index'); //ruta para superrepuestos1212
Route::get('SuperShai', [SuperShaiController::class, 'index'])->name('SuperShai.index'); //ruta para supershai
Route::get('SuperShaya', [SuperShayaController::class, 'index'])->name('SuperShaya.index'); //ruta para supershaya
Route::get('SuperSuspension', [SuperSuspensionController::class, 'index'])->name('SuperSuspension.index'); //ruta para supersuspension
Route::get('SuperVictoria', [SuperVictoriaController::class, 'index'])->name('SuperVictoria.index'); //ruta para supervictoria
Route::get('ServicioTallerSuperPanteonUno', [ServicioTallerSuperPanteonUnoController::class, 'index'])->name('ServicioTallerSuperPanteonUno.index'); //ruta para serviciotallersuperpanteonuno
Route::get('ServicioTallerSuperShaya', [ServicioTallerSuperShayaController::class, 'index'])->name('ServicioTallerSuperShaya.index'); //ruta para serviciotallersupershaya



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


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
