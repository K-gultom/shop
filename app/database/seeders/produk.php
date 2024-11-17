<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produk extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 20; $i++) {
            DB::table('produks')->insert([
                'user_id' => rand(1, 10),
                'kategori_id' => rand(1, 10), // Mengasumsikan kategori_id dari 1 hingga 10
                'nama_produk' => 'Produk ' . $i,
                'price' => rand(10000, 100000), // Harga antara 10,000 hingga 100,000
                'qty' => rand(1, 50), // Kuantitas antara 1 hingga 50
                'desc' => 'Ini deskripsi produk ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
