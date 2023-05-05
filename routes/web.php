<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendamentoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/', AgendamentoController::class);

Route::get('/consulta', 'App\Http\Controllers\AgendamentoController@queries');

Route::get('/agendamento/ver/{id}','App\Http\Controllers\AgendamentoController@show');

Route::post('/agendamento/novo','App\Http\Controllers\AgendamentoController@store')->name('registrar_clientes');

Route::get('/agendamento/editar/{id}', 'App\Http\Controllers\AgendamentoController@edit');

Route::post('/agendamento/editar/{id}', 'App\Http\Controllers\AgendamentoController@update');

Route::get('/agendamento/deletar/{id}', 'App\Http\Controllers\AgendamentoController@delete');

Route::post('agendamento/deletar/{id}', 'App\Http\Controllers\AgendamentoController@destroy')->name('excluir_clientes'); 
