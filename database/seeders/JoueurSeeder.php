<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JoueurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('joueurs')->insert([
            'nom' => 'Mufasa',
            'prenom' => 'Aguero',
            'age' => '19',
            'numero' => 7,
            'pays' => "Pakistan",
            'genre_id' => 1,
            'role_id' => 1,
            'equipe_id' => 1
        ]);
    }
}
