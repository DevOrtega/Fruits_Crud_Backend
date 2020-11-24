<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FruitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fruits')->insert([
            'name' => 'Kiwi',
            'size' => 'small',
            'main_color' => 'green',
        ]);
        DB::table('fruits')->insert([
            'name' => 'Banana',
            'size' => 'medium',
            'main_color' => 'yellow',
        ]);
        DB::table('fruits')->insert([
            'name' => 'Watermelon',
            'size' => 'big',
        ]);
        DB::table('fruits')->insert([
            'name' => 'Mango',
            'size' => 'medium',
        ]);
        DB::table('fruits')->insert([
            'name' => 'Avocado',
            'size' => 'small',
        ]);
    }
}
