<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listasDeTarefasController extends Controller
{
    //metodo que retorna todas as listas de tarefas
    public function index(){
        return view('/viewsTarefas/tarefas');
    }
    //metodo que retorna o form de cadastro de uma nova lista de tarefa
    public function formLista(){
        return view('/viewsTarefas/formNovaTarefa');
    }
    //metodo que retorna o form para alterar uma tarefa"
    public  function formAlterar(){
        return view('/viewsTarefas/formAlterarTarefa');
    }
}
