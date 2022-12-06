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

//----------ruta para tareas----------
Route::get('/tareas', [controladorPaginas::class, 'fTarea'])->name('NNuevaT');
//----------ruta para tareasP----------
Route::get('/tareasP', [controladorPaginas::class, 'fTpendientes'])->name('NConsultarT');
//----------ruta para guardarTarea----------
Route::post('/guardarTarea', [controladorPaginas::class, 'procesarTareas'])->name('NProcesarT');