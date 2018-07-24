<?php

use Illuminate\Database\Seeder;

class PlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->insert([
            ['name' => 'Россия', 'type_id' => 1],
            ['name' => 'США', 'type_id' => 1],
            ['name' => 'Франция', 'type_id' => 1],
            ['name' => 'Москва', 'type_id' => 2],
            ['name' => 'Санкт-Петербург', 'type_id' => 2],
            ['name' => 'Пенза', 'type_id' => 2]
        ]);
    }
}
