<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('obats')->insert([
            'namaobat' => 'minyak',
            'jenisobat' => 'cairan',
            'indikasi' => 'ini',
            'satuan' => 'liter',
            'catatan' => 'untuk pusing',
            'obat' => '10 kotak'
        ]);
    }
}
