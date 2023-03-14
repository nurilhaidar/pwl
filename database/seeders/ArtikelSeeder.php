<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel')->insert([
            [
                'id_artikel' => '01',
                'judul' => 'Fredy Sambo Dihukum Mati',
                'penulis' => 'Rudi Hasimy',
                'tgl' => date('Y-m-d'),
            ],
            [
                'id_artikel' => '02',
                'judul' => 'Anak Pejabat Keroyok Anak Pengurus GP Ansor',
                'penulis' => 'Hasby Mujarot',
                'tgl' => date('Y-m-d'),
            ],
            [
                'id_artikel' => '03',
                'judul' => 'Kebakaran Depo Pertamina Plumpang',
                'penulis' => 'Gadjah Duduk',
                'tgl' => date('Y-m-d'),
            ],
        ]);
    }
}
