<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [ 
        ['nombre' => 'Académica'],
        ['nombre' => 'Extensión'],
        ['nombre' => 'Administrativa'],
        ['nombre' => 'Rectoría']
        ];
        DB::table('categorias')->insert($data);
    }
}

