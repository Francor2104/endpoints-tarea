<?php

namespace Database\Seeders;

use App\Models\Regions;
use Illuminate\Database\Seeder;

class RegionsSeeder extends Seeder
{
    public function run(): void
    {
        Regions::create([
            'name' => 'Demacia',
            'description' => 'Una de las principales regiones en el juego, conocida por su justicia y honor.'
        ]);
        Regions::create([
            'name' => 'Noxus',
            'description' => 'Una región poderosa y militarista conocida por su agresividad y ambición.'
        ]);
        Regions::create([
            'name' => 'Freljord',
            'description' => 'Una región fría y desolada habitada por tribus bárbaras y poderosos campeones.'
        ]);
        Regions::create([
            'name' => 'Piltover',
            'description' => 'Una ciudad-estado tecnológicamente avanzada, conocida por su ingenio y progreso.'
        ]);
        Regions::create([
            'name' => 'Void',
            'description' => 'Una dimensión oscura y corrupta habitada por criaturas monstruosas y aterradoras.'
        ]);
    }
}
