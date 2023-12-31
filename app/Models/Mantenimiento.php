<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    use HasFactory;

    protected $table = 'mantenimientos';

    public function vehiculo(){
        return $this->belongsTo(Vehiculo::class,'id_vehiculo');
    }

}
