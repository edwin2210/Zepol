<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Marcas_procesadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $marcas = [
            ['marca' => 'Intel'],
            ['marca' => 'AMD']
        ];
        DB::table('marcas_procesador')->insert($marcas);
    }
}
