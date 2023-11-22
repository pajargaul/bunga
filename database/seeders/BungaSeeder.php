<?php

namespace Database\Seeders;

use App\Models\bunga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BungaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        bunga::create([
            'nama' => 'angrek',
            'jenis' => 'hias',
            'stok' => '100',
            'harga' => '200',
            'gambar'=> '',
        ]);
    }
}



