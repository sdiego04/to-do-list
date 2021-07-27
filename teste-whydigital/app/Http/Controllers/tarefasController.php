<?php

namespace App\Http\Controllers;

use App\Http\Requests\tarefaRequest;
use App\Services\salvarNovaTarefa;
use Illuminate\Http\Request;

class tarefasController extends Controller
{
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
