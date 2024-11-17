<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kategori extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('kategoris')->insert([
                'user_id' => rand(1,5),
                'nama_kategori' => 'Kategori ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
