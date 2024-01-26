<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kategoriseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori')->insert([
            'nama_kategori'=>"pakaian",
            'deskripsi'=>"semua jenis pakaian"
        ]);

        DB::table('kategori')->insert([
            'nama_kategori'=>"pakaian pria",
            'deskripsi'=>"semua jenis pakaian pria"
        ]);

        
    }
}
