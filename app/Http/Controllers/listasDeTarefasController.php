<?php

namespace App\Http\Controllers;

use App\Http\Requests\formRequestListas;
use App\Models\Listas;
use App\Models\Tarefas;
use App\Services\salvarNovaLista;
use Illuminate\Http\Request;

class listasDeTarefasController extends Controller
{
    //metodo que altera uma lista
    public function alterarLista(formRequestListas $request,int $id){
        $lista=Listas::find($id);
        $lista->nome=$request->nome;
        $lista->dataentrega=$request->dataentrega;
        $lista->save();
        return redirect('/listas');
    }
    //altera o status de uma lista para inacabada
    public function listaInacabada(int $id){
        $lista=Listas::find($id);
        $lista->estatus=false;
        $lista->save();
        return redirect('/listas');
    }
    //altera o status de uma lista para concluida
    public function listaConcluida(int $id){
        $lista=Listas::find($id);
        $lista->estatus=true;
        $lista->save();
        return redirect('/listas');
    }
    //exclui uma lista
    public function excluirLista(int $id){
        $lista=new Listas();
        $lista->destroy($id);
        return redirect('/listas');
    }
    //metodo que retorna todas as listas de tarefas
    public function index(){
        $listatarefas=Listas::query()->orderBy('dataentrega')->get();
        return view('/viewsListas/listas',compact('listatarefas'));
    }
    //metodo que retorna o form de cadastro de uma nova lista de tarefa
    public function formLista(){
        return view('/viewsListas/formNovaLista');
    }
    //metodo que retorna o form para alterar uma tarefa"
    public  function formAlterar(Request $request){
        $listatarefa=Listas::query()->where('id_lista','=',$request->id_lista)->get();
        $tarefa=Tarefas::query()->where('lista_id','=',$request->id_lista)->get();
        return view('viewsListas.formAlterarlista',compact('tarefa','listatarefa'));
    }
    //metodo que ira salvar uma nova tarefa
    public function store(formRequestListas $formRequestListas,salvarNovaLista $novaLista){
        $novaLista->salvarLista($formRequestListas->nome,$formRequestListas->dataentrega);
        return redirect('/listas');
    }
}
