<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MajorSeeder::class,
            TeacherSeeder::class,
            AchievementSeeder::class,
            EventSeeder::class,
            TestimonialSeeder::class,
        ]);

        if (!User::where('email', 'admin@webkriya.sch.id')->exists()) {
            User::factory()->create([
                'name' => 'Admin WebKriya',
                'email' => 'admin@webkriya.sch.id',
                'password' => bcrypt('password123'),
            ]);
        }
    }
}
