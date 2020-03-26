<?php

use Illuminate\Database\Seeder;
use App\Classe;



class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        factory(\App\Classe::class);
    }

}
