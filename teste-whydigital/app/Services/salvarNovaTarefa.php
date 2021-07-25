<?php


namespace App\Services;

//classe para auxiliar na manutenção do condigo
use App\Models\Tarefas;
use Illuminate\Support\Facades\DB;

class salvarNovaTarefa
{
    //metodo para inserir no banco
    public function salvarTarefa(string $nome,string $descricao){
        DB::transaction(function ()use($nome,$descricao){
            Tarefas::create();
        });
    }
}
