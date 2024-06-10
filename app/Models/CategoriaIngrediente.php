<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaIngrediente extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function ingredientes()
    {
        return $this->hasMany(Ingrediente::class);
    }
}
