<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Menu extends Model
{
    protected $fillable = [
        'name',
    ];
    use HasFactory;

    public function platos():BelongsToMany
    {
        return $this->belongsToMany(Plato::class);
    }
}
