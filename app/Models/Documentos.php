<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
    use HasFactory;

    protected $fillable = [
        'Titulo',
        'Descripcion',
        'year',
        'Numero',
        'url',
        'ser_id',
        'categoria_id',
        'tipo_id',
    ];



}
