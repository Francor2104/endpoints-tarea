<?php

namespace Database\Seeders;

use App\Models\Items;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    public function run(): void
    {
        Items::create([
            'nombre' => 'Sombrero Mortífero de Rabadon',
            'descripcion' => 'Un objeto para campeones magicos que otorga gran cantidad de poder de habilidad.',
            'precio' => 3600,
        ]);
        Items::create([
            'nombre' => 'Espada del Rey Arruinado',
            'descripcion' => 'Un poderoso objeto que otorga ataque, velocidad de ataque y robo de vida.',
            'precio' => 3300,
        ]);
        Items::create([
            'nombre' => 'Filoscuro de Draktharr',
            'descripcion' => 'Un objeto asesino que otorga ataque, letalidad y una habilidad pasiva unica.',
            'precio' => 2900,
        ]);
        Items::create([
            'nombre' => 'Danza de la Muerte',
            'descripcion' => 'Un objeto para campeones de ataque rápido que otorga robo de vida y ataque.',
            'precio' => 3400,
        ]);
        Items::create([
            'nombre' => 'Cetro de Cristal de Rylai',
            'descripcion' => 'Un objeto para controladores de multitudes que otorga poder de habilidad y ralentizacion.',
            'precio' => 2600,
        ]);
    }
}
