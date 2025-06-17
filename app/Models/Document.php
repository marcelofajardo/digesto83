<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'titulo', 
        'descripcion', 
        'archivo_pdf', 
        'tipo_id', 
        'categoria_id'
    ];
    public function type()
    {
        return $this->belongsTo(Type::class, 'tipo_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoria_id');
    }

}
