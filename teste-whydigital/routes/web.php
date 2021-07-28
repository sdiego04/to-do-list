<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listasDeTarefasController;
use App\Http\Controllers\tarefasController;

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
//rota para a pagina principal
Route::get('/',[listasDeTarefasController::class,'index']);
//rota para a pagina onde exibe todas as tarefas do usuario
Route::get('/listas',[listasDeTarefasController::class,'index'])
    ->name('listas');
//rota para a form de uma nova lista de tarefa
Route::get('/novalista/',[listasDeTarefasController::class,'formLista'])
    ->name('novalista');
//rota para salvar uma nova tarefa no banco de dandos
Route::post('/novalista',[listasDeTarefasController::class,'store'])
    ->name('salvarlista');
//rota para o form de modificação de tarefa
Route::get('/alterartarefa/{id_lista}+{nome}+{dataentrega}',[listasDeTarefasController::class,'formAlterar'])
    ->name('alterartarefa');
//rota para o form de cadastro de uma nova atividade
Route::get('/novatarefa/{id_lista}',[tarefasController::class,'formTarefa'])
    ->name('novatarefa');
//rota para salvar uma nova atividade
Route::post('/novatarefa/{id_lista}',[tarefasController::class,'store'])
    ->name('novatarefa');
//rota para excluir uma atividade
Route::get('/excluir/{id_lista}',[listasDeTarefasController::class,'excluirLista']);
//rota para alterar uma lista para concluida
Route::get('/listaconcluida/{id_lista}',[listasDeTarefasController::class,'listaConcluida']);
//rota para alterar uma lista
Route::get('/alterarlista/{id_lista}',[listasDeTarefasController::class,'alterarLista']);
//rota para excluir uma tarefa
Route::get('/excluirtarefa/{id_tarefa}',[tarefasController::class,'excluirTarefa']);
//rota para alterar o status de uma tarefa para concluida
Route::get('/tarefaconcluida/{id_tarefa}',[tarefasController::class,'tarefaConcluida']);
//rota para o formulario onde sera alterado a tarefa selecionada
Route::get('/alterartarefa/{id_tarefa}',[tarefasController::class,'formAlterarTarefa']);
//rota que envia os dados para o banco de dados apos alterar a tarefa
Route::post('/alterartarefa/{id_tarefa}',[tarefasController::class,'alterarTarefa']);
//rota que altera uma tarefa para inacabada
Route::get('/tarefainacabada/{id_tarefa}',[tarefasController::class,'tarefaInacabada']);
