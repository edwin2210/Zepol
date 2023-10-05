<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $marcas = [
            ['marca' => 'Asus'],
            ['marca' => 'MSI'],
            ['marca' => 'Gigabyte'],
            ['marca' => 'EVGA'],
            ['marca' => 'Zotac'],
            ['marca' => 'Sapphire'],
            ['marca' => 'PowerColor'],
            ['marca' => 'PNY'],

            // Agrega más datos si es necesario
        ];

        // Inserta los datos en la tabla 'marcas'
        DB::table('marcas')->insert($marcas);
    }
}
