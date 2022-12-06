<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorPaginas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//--------ruta para la vista nuevaT--------
Route::get('/nuevaT', [controladorPaginas::class, 'fNuevaT'])->name('NnuevaTarea');
//--------ruta para la vista consultarT--------
Route::get('/consultarT', [ControladorPaginas::class, 'fConsultarT'])->name('NconsultarTarea');
//--------ruta para la funcion guardarTarea--------
Route::post('/guardarTarea', [ControladorPaginas::class, 'procesarTarea'])->name('NProcesarT');