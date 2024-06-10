<?php

namespace Database\Seeders;

use App\Models\Plato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plato::create([
            'name' => 'Lomo Saltado'
        ]);
        Plato::create([
            'name' => 'Cau Cau'
        ]);
        Plato::create([
            'name' => 'Arroz con Pollo'
        ]);
    }
}
