<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    use HasFactory;

    protected $table ='conductor';

    public function salida(){
        return $this->hasMany(Salida::class,'id_conductor');
    }
}