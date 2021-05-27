<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipes')->insert([
            'nom' => 'FC Mufasa',
            'ville' => 'Bxl',
            'pays' => 'Belgique',
            'max' => 6,
            'ATT' => 1,
            'DC' => 2,
            'CT' => 2,
            'RP' => 2,
            'continent_id' => 1,
        ]);
    }
}
