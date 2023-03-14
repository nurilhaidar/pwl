<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matkul')->insert([
            [
                'id_makul' => 'M01',
                'nama' => 'Pemrograman Web Lanjut',
                'sks' => 4
            ],
            [
                'id_makul' => 'M02',
                'nama' => 'Basis Data Lanjut',
                'sks' => 2
            ],
            [
                'id_makul' => 'M03',
                'nama' => 'Analisis dan Desain Berorientasi Objek',
                'sks' => 2
            ],
            [
                'id_makul' => 'M04',
                'nama' => 'Proyek 1',
                'sks' => 4
            ]
        ]);
    }
}
