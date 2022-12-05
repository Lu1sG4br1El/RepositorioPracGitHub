<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/formulario', [ControladorPaginas::class, 'fFormulario'])->name('NFormulario');
//Route::get('/tabla', [ControladorPaginas::class, 'fTabla'])->name('NTabla');
//Route::post('/guardar', [ControladorPaginas::class, 'fGuardar'])->name('NGuardar');

Route::get('/formulario', function() { return view('formulario'); })->name('routeFormulario');
Route::view('/formulario', 'formulario')->name('routeFormulario');
Route::view('/tabla', 'tabla')->name('routeTabla');
Route::view('/guardar', 'guardar')->name('routeGuardar');
/*
Route::get('/', [ControladorPaginas::class, 'fFormulario'])->name('NFormulario');
Route::get('/tabla', [ControladorPaginas::class, 'fTabla'])->name('NTabla');
Route::post('/guardar', [ControladorPaginas::class, 'fGuardar'])->name('NGuardar');