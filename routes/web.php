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
Route::get('/', function(){
    return view('auth.login');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*Route::get('/', function(){
    return view('menu');
});*/


Route::resource('/contratos', 'App\Http\Controllers\ContratoController',['except' =>  'create']);

Route::get('/contrato/create/{caja}',[App\Http\Controllers\ContratoController::class, 'create'])->name('contratos.create');


Route::get('/contratos/caja/{caja}',[App\Http\Controllers\ContratoController::class, 'cajacontrato'])->name('cajacontrato');

Route::get('/caja/portada/{caja}',[App\Http\Controllers\CajaController::class, 'portadaCaja'])->name('portada');

Route::get('/caja/portada/{caja}',[App\Http\Controllers\CajaController::class, 'numCaja'])->name('portada');


/// Rutas de expediente 


Route::resource('expedientes',App\Http\Controllers\ExpedienteController::class,['except'=>'index','except'=>'create']);
Route::get('expedientes/contrato/{contrato}',[App\Http\Controllers\ExpedienteController::class, 'index'])->name('expedientes.index');
Route::get('expedientes/create/{contrato}',[App\Http\Controllers\ExpedienteController::class, 'create'])->name('expedientes.create');





Route::resource('cajas',App\Http\Controllers\CajaController::class);

Route::resource('/registros',App\Http\Controllers\RegistroController::class);



 // Rutas de impresion de reporte

Route::get('/reporte/{registro}',[App\Http\Controllers\ExcelController::class, 'reporte'])->name('Reporte');
Route::post('/reporte/imprimir/',[App\Http\Controllers\ExcelController::class, 'imprimirReporte'])->name('imprimirReporte');


Route::get('/reporte', function(){
    return view('reporte');
})->name('reporte');

// Route::get('/portada/uno', function(){
//     return view('portada');
// })->name('portada');

Route::get('/buscador', function(){
    return view('buscador');
})->name('buscador');

Route::get('/expediente', function(){
    return view('expediente');
})->name('expediente');