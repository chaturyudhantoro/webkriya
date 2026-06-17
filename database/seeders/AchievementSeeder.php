<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $achievements = [
            [
                'title' => 'Juara 1 Lomba Kompetensi Siswa (LKS) Kriya Kayu Tingkat Nasional 2025',
                'slug' => 'juara-1-lks-kriya-kayu-nasional-2025',
                'category' => 'Nasional',
                'date' => '2025-10-15',
                'description' => 'Siswa kami berhasil membuktikan keahlian terbaiknya dalam pembuatan furnitur kayu presisi dengan teknik ukir tradisional kontemporer di ajang LKS Nasional.',
                'winner_name' => 'Fajar Ramadhan (Kelas XII Kriya Kayu)',
            ],
            [
                'title' => 'Juara 2 Lomba Animasi 2D FLS2N Tingkat Provinsi 2026',
                'slug' => 'juara-2-lomba-animasi-fls2n-provinsi-2026',
                'category' => 'Provinsi',
                'date' => '2026-05-20',
                'description' => 'Dalam Festival dan Lomba Seni Siswa Nasional (FLS2N) tingkat provinsi, perwakilan Multimedia menyabet medali perak dengan karya animasi pendek bertema pelestarian lingkungan.',
                'winner_name' => 'Riana Safitri & Tim (Kelas XI Multimedia)',
            ],
            [
                'title' => 'Juara Harapan 1 Mikrotik Network Competition 2026',
                'slug' => 'juara-harapan-1-mikrotik-network-competition-2026',
                'category' => 'Regional',
                'date' => '2026-04-10',
                'description' => 'Menguji kompetensi routing dan troubleshooting jaringan komputer, siswa TJKT berhasil meraih juara harapan dalam ajang bergengsi kompetisi Mikrotik tingkat pulau Jawa.',
                'winner_name' => 'Dimas Wibowo (Kelas XII TJKT)',
            ]
        ];

        foreach ($achievements as $achievement) {
            Achievement::updateOrCreate(['slug' => $achievement['slug']], $achievement);
        }
    }
}
