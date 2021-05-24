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


Route::resource('contratos', App\Http\Controllers\ContratoController::class);

Route::resource('expedientes', App\Http\Controllers\ExpedienteController::class);

Route::resource('cajas',App\Http\Controllers\CajaController::class);

Route::get('/reporte', function(){
    return view('reporte');
})->name('reporte');

/*Route::get('/', function()
    return redirect('url');
});*/
