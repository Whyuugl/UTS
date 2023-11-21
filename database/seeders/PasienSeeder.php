<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pasiens')->insert([
            'nama' => 'Wahyu',
            'nim' => 362258302199,
            'norm' => 12,
            'keluhan' => 'Pusing',
            'diagnosa' => 'Demam',
            'tindakan' => 'Rawat Inap',
            'terapi' => 'tidak perlu',
            'status' => 'Selesai',
            'hb' => '13,5 gram',
            'gd' => 'O',
            'au' => 'normal',
            'co' => 'normal'
        ]);
    }
}
