<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefas extends Model
{
    protected $primaryKey='id_tarefa';
    protected $table='tarefa';
    protected $fillable=['nome','estatus'];
    public $incrementing=true;
    public $timestamps=false;

    public function listas(){
        $this->belongsTo(Listas::class);
    }



    use HasFactory;
}
