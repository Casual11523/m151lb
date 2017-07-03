<?php

use Illuminate\Database\Seeder;

class AutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('autos')->insert([
        	'marke' => str_random(10),
        	'modell' => str_random(10),
        	'hp' => random_int(50, 600),
        ]);
    }
}
