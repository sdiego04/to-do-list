<?php

namespace App\Http\Controllers;

use App\Http\Requests\formRequestListas;
use App\Models\Listas;
use App\Services\salvarNovaLista;
use Illuminate\Http\Request;

class listasDeTarefasController extends Controller
{
    //metodo que retorna todas as listas de tarefas
    public function index(){
        $listatarefas=Listas::query()->orderBy('id_lista')->get();
        return view('/viewsListas/listas',compact('listatarefas'));
    }
    //metodo que retorna o form de cadastro de uma nova lista de tarefa
    public function formLista(){
        return view('/viewsListas/formNovaLista');
    }
    //metodo que retorna o form para alterar uma tarefa"
    public  function formAlterar(){
        return view('/viewsListas/formAlterarTarefa');
    }
    //metodo que ira salvar uma nova tarefa
    public function store(formRequestListas $formRequestListas,salvarNovaLista $novaLista){
        $novaLista->salvarLista($formRequestListas->nome,$formRequestListas->dataentrega);
        return redirect('/listas');
    }
}
