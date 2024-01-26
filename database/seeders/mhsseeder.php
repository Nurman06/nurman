<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mhsseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mhs')->insert([
            'nim'=>"0001",
            'nama'=>"saya",
            'kelas'=>"R1",
            'des'=>"mahasiswa biasa"
        ]);

        DB::table('mhs')->insert([
            'nim'=>"0002",
            'nama'=>"dia",
            'kelas'=>"R1",
            'des'=>"mahasiswa biasa"
        ]);

        DB::table('mhs')->insert([
            'nim'=>"0003",
            'nama'=>"anda",
            'kelas'=>"R1",
            'des'=>"mahasiswa biasa"
        ]);
    }
}
