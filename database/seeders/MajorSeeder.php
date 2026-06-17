<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $majors = [
            [
                'name' => 'Kriya Kreatif Kayu dan Rotan',
                'slug' => 'kriya-kayu',
                'description' => 'Kompetensi keahlian yang fokus pada desain, pembuatan, dan finishing karya/produk kerajinan berbasis kayu dan rotan dengan sentuhan estetika tinggi dan teknologi pertukangan modern.',
                'accent_color' => '#D4AF37',
                'icon' => 'wood-craft',
                'curriculum' => [
                    'Desain Produk Kayu',
                    'Teknik Ukir Tradisional & Modern',
                    'Finishing Kayu Premium',
                    'Kewirausahaan Kriya Kayu'
                ],
                'meta_title' => 'Jurusan Kriya Kreatif Kayu dan Rotan - WebKriya School',
                'meta_description' => 'Pelajari seni kriya kayu, teknik ukir, pembuatan furnitur kustom, dan kerajinan rotan modern di jurusan Kriya Kayu WebKriya.'
            ],
            [
                'name' => 'Kriya Kreatif Batik dan Tekstil',
                'slug' => 'kriya-tekstil',
                'description' => 'Mempelajari desain busana, pembuatan batik tulis/cap tradisional dan modern, teknik tenun, sablon, digital printing kain, serta teknik kriya tekstil inovatif.',
                'accent_color' => '#E100FF',
                'icon' => 'textile-craft',
                'curriculum' => [
                    'Desain Motif Batik & Tekstil',
                    'Teknik Pewarnaan Alami & Sintetis',
                    'Tenun & Rajut Kreatif',
                    'Fashion Design & Sablon Digital'
                ],
                'meta_title' => 'Jurusan Kriya Kreatif Batik dan Tekstil - WebKriya School',
                'meta_description' => 'Kembangkan kreativitas fashion dan seni batik di jurusan Kriya Tekstil WebKriya. Pelajari batik modern, tenun, dan sablon digital.'
            ],
            [
                'name' => 'Multimedia (Desain Komunikasi Visual)',
                'slug' => 'multimedia',
                'description' => 'Fokus pada desain grafis, ilustrasi digital, animasi 2D/3D, videografi, fotografi, pengembangan web kustom, serta UI/UX design.',
                'accent_color' => '#00F2FE',
                'icon' => 'multimedia-design',
                'curriculum' => [
                    'Desain Komunikasi Visual',
                    'Videografi & Produksi Video',
                    'Animasi 2D & 3D',
                    'UI/UX & Web Development'
                ],
                'meta_title' => 'Jurusan Multimedia & DKV - WebKriya School',
                'meta_description' => 'Masuki industri kreatif digital dengan keahlian desain grafis, videografi, animasi, dan UI/UX di jurusan Multimedia WebKriya.'
            ],
            [
                'name' => 'Teknik Jaringan Komputer dan Telekomunikasi',
                'slug' => 'tjkt',
                'description' => 'Mempelajari administrasi server, instalasi jaringan fiber optic, cyber security, routing, cloud computing, serta konfigurasi perangkat Cisco/Mikrotik.',
                'accent_color' => '#00FF87',
                'icon' => 'network-telecom',
                'curriculum' => [
                    'Administrasi Jaringan & Server',
                    'MikroTik & Cisco Routing',
                    'Cyber Security & Keamanan Data',
                    'Cloud Computing & Fiber Optic'
                ],
                'meta_title' => 'Jurusan Teknik Jaringan Komputer & Telekomunikasi (TJKT) - WebKriya School',
                'meta_description' => 'Kuasai infrastruktur jaringan, konfigurasi server, dan cyber security di jurusan TJKT WebKriya School.'
            ]
        ];

        foreach ($majors as $major) {
            Major::updateOrCreate(['slug' => $major['slug']], $major);
        }
    }
}
