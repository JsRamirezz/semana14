<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_servicio',
        'id_estilistas',
        'fecha',
        'hora'
    ];

    public function servicio()
    {
        return $this->belongsTo(Servicios::class, 'id_servicio');
    }

    public function estilista()
    {
        return $this->belongsTo(Estilistas::class, 'id_estilistas');
    }
}
