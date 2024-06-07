<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_servicio',
        'precio'
    ];

    public static function clear()
    {
        self::truncate();
    }

}
