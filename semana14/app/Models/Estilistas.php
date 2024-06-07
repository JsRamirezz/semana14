<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estilistas extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre',
        'telefono',
        'correo',
    ];

    public function citas()
    {
        return $this->hasMany(citas::class, 'id_estilistas');
    }
}
