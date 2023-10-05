<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(MarcasSeeder::class);
        $this->call(Marcas_procesadorSeeder::class);
        $this->call(producto_marcaSeeder::class);
        $this->call(TecladosSeeder::class);
        $this->call(Tipo_productoSeeder::class);
    }
}
