<?php

namespace Database\Seeders;

use App\Models\Keluarga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluarga')->insert([
            [
                'id_keluarga' => 'K01',
                'nama_keluarga' => 'Budi',
                'hubungan' => 'Ayah'
            ],
            [
                'id_keluarga' => 'K02',
                'nama_keluarga' => 'Siti',
                'hubungan' => 'Ibu'
            ],
            [
                'id_keluarga' => 'K03',
                'nama_keluarga' => 'Michael',
                'hubungan' => 'Adik'
            ],
            [
                'id_keluarga' => 'K04',
                'nama_keluarga' => 'Sudiro',
                'hubungan' => 'Kakak'
            ]
        ]);
    }
}
