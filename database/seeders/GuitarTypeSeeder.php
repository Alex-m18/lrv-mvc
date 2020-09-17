<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class GuitarTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('guitar_types')->insert([
            [
                'type' => 'Electric guitar'
            ],
            [
                'type' => 'Acoustic guitar'
            ],
            [
                'type' => 'Uculele'
            ],
        ]);
    }
}
