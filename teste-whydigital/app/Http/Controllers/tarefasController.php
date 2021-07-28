<?php

namespace App\Http\Controllers;

use App\Http\Requests\formRequestListas;
use App\Http\Requests\tarefaRequest;
use App\Models\Tarefas;
use App\Services\salvarNovaTarefa;
use Illuminate\Http\Request;

class tarefasController extends Controller
{
    //metodo que altera uma tarefa para inacabada
    public function tarefaInacabada(int $id){
        $tarefa=Tarefas::find($id);
        $tarefa->estatus=false;
        $tarefa->save();
        return redirect('/listas');
    }
    //metodo que envia os dados para o bando de dados
    public function alterarTarefa(tarefaRequest $request,int $id){
        $tarefa=Tarefas::find($id);
        $tarefa->nome=$request->nome;
        $tarefa->descricao=$request->descricao;
        $tarefa->save();
        return redirect('/listas');
    }
    //metodo que chama o form para alterar a tarefa
    public function formAlterarTarefa(int $id){
        return view('viewsTarefas/formAlteraTarefa',compact('id'));
    }
    //metodo para alterar uma tarefa para concluida
    public function tarefaConcluida(int $id){
        $tarefa=Tarefas::find($id);
        $tarefa->estatus=true;
        $tarefa->save();
        return redirect('/listas');
    }
    //metodo que ira excluir uma tarefa do banco de dados
    public function excluirTarefa(int $id){
        $tarefa=new Tarefas();
        $tarefa->destroy($id);
        return redirect('/listas');
    }
    //metodo que ira salvar no banco uma nova tarefa
    public function store(tarefaRequest $request,salvarNovaTarefa $salvarNovaTarefa,$id){
        $salvarNovaTarefa->salvarTarefa($request->nome,$request->descricao,$id);
        return redirect('/listas');
    }
    //metodo para chamar o form de cadastro de tarefas
    public function formTarefa(Request $request){
        $id=$request->id_lista;
        return view('/viewsTarefas/formTarefa',compact('id'));
    }
}
