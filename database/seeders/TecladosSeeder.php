<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TecladosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         
        $marcas = [
            ['tipo' => 'Español'],
            ['tipo' => 'Español numerico'],
            ['tipo' => 'Ingles'],
            ['tipo' => 'Ingles numerico'],
    

            // Agrega más datos si es necesario
        ];

        // Inserta los datos en la tabla 'marcas'
        DB::table('teclados')->insert($marcas);
    }
}
