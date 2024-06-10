<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    protected $fillable = [
        'name',
    ];
    use HasFactory;

    public function ingredientes()
    {
        return $this->belongsToMany(Ingrediente::class);
    }
    public function menus()
    {
        return $this->belongsToMany(Menu::class);
    }
}
