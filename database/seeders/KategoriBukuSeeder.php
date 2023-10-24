<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Umum',
            'Filsafat & Psikologi',
            'Agama',
            'Sosial',
            'Bahasa',
            'Sains & Matematika',
            'Teknologi',
            'Seni & Rekreasi',
            'Literatur & Sastra',
            'Sejarah & Geografi',
        ];

        foreach ($categories as $category) {
            DB::table('kategori_bukus')->insert([
                'nama_kategori' => $category,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
