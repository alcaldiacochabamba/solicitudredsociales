<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SeedEstado extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('estados')->insert([
            [
                'sigla' => 'A',
                'descripcion' => 'ACTIVO'
            ],
            [
                'sigla' => 'P',
                'descripcion' => 'PENDIENTE'
            ],
            [
                'sigla' => 'F',
                'descripcion' => 'FINALIZADO' 
            ],
            [
                'sigla' => 'V',
                'descripcion' => 'VENCIDO'
            ],
            [
                'sigla' => 'R',
                'descripcion' => 'RECHAZADO'
            ],
            [
                'sigla' => 'B',
                'descripcion' => 'BAJA'
            ],
            [
                'sigla' => 'O',
                'descripcion' => 'OBSERVADO'
            ],
            [
                'sigla' => 'C',
                'descripcion' => 'CANCELADO'
            ],
            [
                'sigla' => 'X',
                'descripcion' => 'ANULADO'
            ],

        ]);
    }
}
