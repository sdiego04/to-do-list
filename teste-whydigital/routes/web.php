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
Route::get('/listas',[listasDeTarefasController::class,'index'])
    ->name('listas');
//rota para a form de uma nova lista de tarefa
Route::get('/novalista',[listasDeTarefasController::class,'formLista'])
    ->name('novalista');
//rota para salvar uma nova tarefa no banco de dandos
Route::post('/novalista',[listasDeTarefasController::class,'store'])
    ->name('/salvarlista');
//rota para o form de modificação de tarefa
Route::get('/alterartarefa',[listasDeTarefasController::class,'formAlterar'])
    ->name('alterartarefa');
