<?php


namespace App\Services;

//classe para auxiliar na manutenção do condigo
use App\Models\Listas;
use App\Models\Tarefas;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Integer;
use PhpParser\Node\Scalar\String_;

class salvarNovaTarefa
{
    //metodo para inserir no banco
    public function salvarTarefa(string $nome,string $descricao,int $id){
       $tarefas=new Tarefas();
       $tarefas->nome=$nome;
       $tarefas->descricao=$descricao;
       $tarefas->lista_id=$id;
       $tarefas->estatus=false;
       $tarefas->save();
    }
}
