<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nombre'
    ];

    public function documents(): HasMany
        {
            return $this->hasMany(Document::class);
        }
}
