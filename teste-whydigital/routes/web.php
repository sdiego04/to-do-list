<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listasDeTarefasController;

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

//rota para a pagina onde exibe todas as tarefas do usuario
Route::get('/tarefas',[listasDeTarefasController::class,'index'])
    ->name('tarefas');
//rota para a form de uma nova lista de tarefa
Route::get('/novatarefa',[listasDeTarefasController::class,'formLista'])
    ->name('novatarefa');
//rota para o form de modificação de tarefa
Route::get('/alterartarefa',[listasDeTarefasController::class,'formAlterar'])
    ->name('alterartarefa');
