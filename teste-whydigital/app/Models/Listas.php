<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listas extends Model
{
    protected $primaryKey='id_lista';
    protected $table='listas';
    protected $fillable=['dataentrega','nome','estatus'];
    public $timestamps=false;
    public $incrementing=true;

    public function tarefas(){
        $this->hasMany(Tarefas::class);
    }

    use HasFactory;
}
