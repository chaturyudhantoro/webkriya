<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'title' => 'Pameran Karya Seni Kriya & Teknologi Digital 2026',
                'slug' => 'pameran-karya-seni-kriya-teknologi-digital-2026',
                'event_date' => '2026-07-05',
                'location' => 'Aula Utama WebKriya School',
                'description' => 'Showcase hasil produk tugas akhir siswa Kriya Kayu, Batik Tekstil, Multimedia, dan instalasi jaringan IoT TJKT yang terbuka untuk umum dan pelaku DUDI.',
            ],
            [
                'title' => 'Workshop UI/UX Design & Portofolio Review dengan Industri',
                'slug' => 'workshop-ui-ux-design-portofolio-review-industri',
                'event_date' => '2026-06-25',
                'location' => 'Lab Komputer Multimedia',
                'description' => 'Pelatihan eksklusif menghadirkan Product Designer industri dari Jakarta untuk mengulas karya portofolio digital siswa Multimedia.',
            ],
            [
                'title' => 'Sosialisasi Alur Pendaftaran PPDB Gelombang II',
                'slug' => 'sosialisasi-alur-pendaftaran-ppdb-gelombang-ii',
                'event_date' => '2026-06-18',
                'location' => 'Live Streaming YouTube & Zoom',
                'description' => 'Panduan lengkap tata cara pengunggahan berkas persyaratan PPDB Gelombang II dan sesi tanya jawab interaktif bersama panitia PPDB.',
            ]
        ];

        foreach ($events as $event) {
            Event::updateOrCreate(['slug' => $event['slug']], $event);
        }
    }
}
