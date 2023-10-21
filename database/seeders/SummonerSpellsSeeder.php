<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SummonerSpellsSeeder extends Seeder
{

    public function run(): void
    {
        {$spells =
            [
            ['name' => 'Flash','description' => 'Teletransporta instantáneamente al campeón a una corta distancia en la dirección seleccionada.', 'cooldown' => 300],
            ['name' => 'Heal','description' => 'Restaura una cantidad moderada de vida a tu campeón y a un aliado cercano, además de otorgar un impulso temporal a la velocidad de movimiento.', 'cooldown' => 240],
            ['name' => 'Teleport','description' => 'Después de un breve canalizado, teletransporta al campeón a una torreta aliada, un minion o un objeto de estructura aliado.', 'cooldown' => 360],
            ['name' => 'Ignite','description' => 'Inflige daño verdadero durante varios segundos al campeón enemigo objetivo, además de reducir la curación y regeneración de ese campeón.', 'cooldown' => 210],
            ['name' => 'Smite','description' => 'Inflige daño verdadero a un monstruo épico, monstruo grande o súbdito enemigo objetivo. También proporciona un beneficio adicional cuando se usa en monstruos épicos.','cooldown' => 90],
            ];
            DB::table('summoner_spells')->insert($spells);
        }


  }
}
