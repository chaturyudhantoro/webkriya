<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Budi Santoso',
                'role' => 'Alumni Kriya Kayu (Owner JatiArt)',
                'content' => 'WebKriya membekali saya fondasi teknik perkayuan presisi dan jiwa kewirausahaan. Setelah lulus, saya langsung bisa merintis bisnis furnitur ekspor mandiri.',
                'rating' => 5,
            ],
            [
                'name' => 'Kusuma Wardani',
                'role' => 'Mitra DUDI (HRD Batik Pusaka)',
                'content' => 'Siswa magang dari Kriya Tekstil WebKriya memiliki dedikasi tinggi dan penguasaan teknik pewarnaan yang sangat baik. Kami sering langsung merekrut mereka setelah lulus.',
                'rating' => 5,
            ],
            [
                'name' => 'Faisal Reza',
                'role' => 'Alumni TJKT (Network Engineer)',
                'content' => 'Belajar administrasi server dan konfigurasi perangkat routing Cisco di sekolah benar-benar relevan dengan standard sertifikasi industri dunia kerja IT.',
                'rating' => 5,
            ]
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::updateOrCreate(['name' => $testimonial['name']], $testimonial);
        }
    }
}
