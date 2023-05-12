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

Route::get('/consulta', [AgendamentoController::class, 'queries']);

Route::get('/ver/{id}',[AgendamentoController::class, 'show']);

Route::post('/agendamento/novo',[AgendamentoController::class, 'store'])->name('registrar_clientes');

Route::get('/editar/{id}', [AgendamentoController::class, 'edit']);

Route::post('/atualizar/{id}', [AgendamentoController::class, 'update']);

Route::get('/excluir/{id}', [AgendamentoController::class, 'delete']);

Route::post('/excluir/{id}', [AgendamentoController::class, 'destroy'])->name('excluir_clientes'); 
