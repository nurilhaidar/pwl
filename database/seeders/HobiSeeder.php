<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobi')->insert([
            [
                'id_hobi' => 'H01',
                'nama' => 'Olahraga',
            ],
            [
                'id_hobi' => 'H02',
                'nama' => 'Game',
            ],
            [
                'id_hobi' => 'H03',
                'nama' => 'Bercocok Tanam',
            ]
        ]);
    }
}
