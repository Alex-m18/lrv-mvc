<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class GuitarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guitars')->insert([
            [
                'brand' => 'Fender',
                'model' => 'Stratocaster',
                'type_id' => 1,
                'price' => 11000,
            ],
        ]);
    }
}
