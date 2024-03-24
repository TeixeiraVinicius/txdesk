<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendenciasController;
use App\Http\Controllers\ChamadosController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RmasController;

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

/* ROTAS PARA CRUD DE ATAS */
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/chamados', [ChamadosController::class, 'chamados'])->name('chamados');
Route::get('/chamados/adicionar-chamados', [ChamadosController::class, 'adicionarchamados'])->name('add.chamados');
Route::get('/chamados/visualizar-chamado/{id}', [ChamadosController::class, 'visualizarchamados'])->name('visualizar.chamados');
Route::post('/chamados/adicionar-chamados', [ChamadosController::class, 'salvar'])->name('salvar.chamados');
Route::get('/chamados/editar-chamado/{id}', [ChamadosController::class, 'editar'])->name('editar.chamados');
Route::put('/chamados/{id}', [ChamadosController::class, 'atualizar'])->name('atualizar.chamados');
Route::delete('/chamados/{id}', [ChamadosController::class, 'deletar'])->name('deletar.chamados');
Route::post('/chamados/pesquisar', [ChamadosController::class, 'buscar'])->name('pesquisar.chamados');

Route::get('/rmas', [RmasController::class, 'rmas'])->name('rma');
Route::get('/rmas/adicionar-rmas', [RmasController::class, 'adicionarrmas'])->name('add.rmas');
Route::post('/rmas/adicionar-rmas', [RmasController::class, 'salvar'])->name('salvar.rmas');
Route::get('/rmas/editar-rma/{id}', [RmasController::class, 'editar'])->name('editar.rmas');
Route::put('/rmas/{id}', [RmasController::class, 'atualizar'])->name('atualizar.rmas');
Route::delete('/rmas/{id}', [RmasController::class, 'deletar'])->name('deletar.rmas');
Route::post('/rmas/pesquisar', [RmasController::class, 'buscar'])->name('pesquisar.rmas');

Route::get('/pendencias', [PendenciasController::class, 'pendencias'])->name('pendencias');