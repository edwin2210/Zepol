<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tipo_productoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          
        $marcas = [
            ['descripcion' => 'Laptop'],
            ['descripcion' => 'Cpu'],
            ['descripcion' => 'Cromebook']
        ];

        // Inserta los datos en la tabla 'marcas'
        DB::table('tipo_producto')->insert($marcas);
    }
}
