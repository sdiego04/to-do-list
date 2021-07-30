<?php


namespace App\Services;


use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Integer;

class listaAtivaEInativas
{
    public function listaAtiva(int $id){
            $r= DB::table('tarefa')
                ->where('estatus','=',true)
                ->where('lista_id','=',$id)
                ->count('estatus');
            return $r;
    }
    public function listaInativa(int $id){
        $r= DB::table('tarefa')
            ->where('estatus','=',false)
            ->where('lista_id','=',$id)
            ->count('estatus');
        return $r;
    }
}
