<?php

use Illuminate\Database\Seeder;

class ProfilstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Profil::class, 3)->create();
    }
}
