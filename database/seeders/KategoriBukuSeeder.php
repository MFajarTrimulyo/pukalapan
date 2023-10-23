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
            'Filsafat dan Psikologi',
            'Agama',
            'Sosial',
            'Bahasa',
            'Sains dan Matematika',
            'Teknologi',
            'Seni dan Rekreasi',
            'Literatur dan Sastra',
            'Sejarah dan Geografi',
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
