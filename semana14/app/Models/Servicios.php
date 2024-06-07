<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_servicio',
        'descripcion',
        'precio'
    ];

    public function citas()       
    {
        return $this->hasMany(citas::class, 'id_servicio');
    }
}
