<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [ 
            ['nombre' => 'Resolución'],
            ['nombre' => 'Memorandum'],
            ['nombre' => 'Decreto']
            ];
            DB::table('tipos')->insert($data);
    }
}
