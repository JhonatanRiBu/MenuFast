<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function categoriaingrediente()
    {
        return $this->belongsTo(CategoriaIngrediente::class);
    }

    public function platos()
    {
        return $this->belongsToMany(Plato::class);
    }
}
