<?php

namespace Database\Seeders;

use App\Models\Major;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kayu = Major::where('slug', 'kriya-kayu')->first();
        $tekstil = Major::where('slug', 'kriya-tekstil')->first();
        $multimedia = Major::where('slug', 'multimedia')->first();
        $tjkt = Major::where('slug', 'tjkt')->first();

        $teachers = [
            [
                'name' => 'Drs. H. Wardoyo, M.Pd.',
                'nip' => '196805121994031002',
                'major_id' => null,
                'position' => 'Kepala Sekolah',
                'is_featured' => true,
            ],
            [
                'name' => 'Suharjono, S.Sn.',
                'nip' => '197510242005011003',
                'major_id' => $kayu?->id,
                'position' => 'Ketua Kompetensi Keahlian Kriya Kayu',
                'is_featured' => true,
            ],
            [
                'name' => 'Sri Wahyuni, S.Pd.',
                'nip' => '198203152009022005',
                'major_id' => $tekstil?->id,
                'position' => 'Guru Produktif Kriya Tekstil',
                'is_featured' => false,
            ],
            [
                'name' => 'Andika Pratama, M.Kom.',
                'nip' => '198907122015041001',
                'major_id' => $multimedia?->id,
                'position' => 'Ketua Kompetensi Keahlian Multimedia',
                'is_featured' => true,
            ],
            [
                'name' => 'Bambang Hermawan, S.T.',
                'nip' => '198411032010011002',
                'major_id' => $tjkt?->id,
                'position' => 'Guru Produktif TJKT (Cisco Academy)',
                'is_featured' => true,
            ]
        ];

        foreach ($teachers as $teacher) {
            Teacher::updateOrCreate(
                ['nip' => $teacher['nip']],
                $teacher
            );
        }
    }
}
