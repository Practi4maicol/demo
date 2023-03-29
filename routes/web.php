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

//*ruta para exportar a pdf las especialidades//
Route::get('home/exportEs', [App\Http\Controllers\HomeController::class, 'pdfExporta'])->name('pdfExport');

//*ruta para exportar a pdf los medicos//
Route::get('/exportMe', function () {
    return view('welcome');
});
//*ruta para exportar a pdf las fechas//
Route::get('/exportFe', function () {
    return view('welcome');
});


Auth::routes();
//*rutas para cada controlador
//*/
Route::resource('personas', \App\Http\Controllers\PersonaController::class)->middleware('auth');

Route::resource('roles', \App\Http\Controllers\RoleController::class)->middleware('auth');

Route::resource('especialidades', \App\Http\Controllers\EspecialidadeController::class)->middleware('auth');

Route::resource('citas', \App\Http\Controllers\CitaController::class)->middleware('auth');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('home/reporteEspe', [App\Http\Controllers\HomeController::class, 'pdfEspe'])->name('pdf');
Route::get('home/reporteMedi', [App\Http\Controllers\HomeController::class, 'pdfMed'])->name('pdfM');
Route::get('home/reorteMes', [App\Http\Controllers\HomeController::class, 'pdfFecha'])->name('pdfF');





