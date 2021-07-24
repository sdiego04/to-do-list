<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listasDeTarefasController extends Controller
{
    //metodo que retorna todas as listas de tarefas
    public function index(){
        return view('/viewsTarefas/tarefas');
    }
}
