<?php

namespace Database\Seeders;

use App\Models\Abilitation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AbilitationSeeder::class);
        \App\Models\User::factory(6)->create();
    }
}
