<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbilitationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('abilitations')->insert([
            "nom"=>"administrateur"
        ]);

        DB::table('abilitations')->insert([
            "nom"=>"lamda"
        ]);
        
        DB::table('abilitations')->insert([
            "nom"=>"vendeur"
        ]);
    }
}
