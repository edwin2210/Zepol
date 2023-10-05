<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Producto_marcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $marcas = [
            ['descripcion' => 'Apple'],
            ['descripcion' => 'HP'],
            ['descripcion' => 'Lenovo'],
            ['descripcion' => 'Dell'],
            ['descripcion' => 'Acer'],
            ['descripcion' => 'Asus'],
            ['descripcion' => 'MSI'],
            ['descripcion' => 'Razer'],

            // Agrega más datos si es necesario
        ];

        // Inserta los datos en la tabla 'marcas'
        DB::table('producto_marca')->insert($marcas);
    }
}
