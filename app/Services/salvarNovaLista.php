<?php


namespace App\Services;


use App\Models\Listas;
use Illuminate\Support\Facades\DB;

//classe criada para organizar melhor o codigo
class salvarNovaLista
{
    //metodo que insere os dados no banco
    public function salvarLista(string $nome,string $dateentrega){
        DB::transaction(function() use($nome,$dateentrega){
            Listas::create([
                'nome'=>$nome,
                'dataentrega'=>$dateentrega,
                'estatus'=>false
                ]);
        });
    }
}
