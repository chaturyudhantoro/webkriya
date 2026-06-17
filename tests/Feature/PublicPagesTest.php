<?php

namespace Tests\Feature;

use App\Models\Major;
use App\Models\Teacher;
use App\Models\Achievement;
use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PublicPagesTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $major = Major::create([
            'name' => 'Kriya Kayu',
            'slug' => 'kriya-kayu',
            'description' => 'Test Kriya Kayu Description',
            'accent_color' => '#D4AF37',
            'icon' => 'wood-craft',
            'curriculum' => ['wood carving'],
        ]);

        Teacher::create([
            'name' => 'Pak Wardoyo',
            'nip' => '196805121994031002',
            'major_id' => $major->id,
            'position' => 'Kepala Sekolah',
        ]);

        Achievement::create([
            'title' => 'LKS Kriya Kayu Juara 1',
            'slug' => 'lks-kriya-kayu-juara-1',
            'category' => 'Nasional',
            'date' => '2025-10-15',
            'description' => 'Winner of national competition',
            'winner_name' => 'Fajar Ramadhan',
        ]);

        Event::create([
            'title' => 'Pameran Karya Seni Kriya',
            'slug' => 'pameran-karya-seni-kriya',
            'event_date' => '2026-07-05',
            'location' => 'Aula Utama',
            'description' => 'Exhibit of student works',
        ]);
    }

    public function test_teachers_page_renders_successfully(): void
    {
        $response = $this->get('/tentang/guru');

        $response->assertStatus(200);
        $response->assertSee('Pak Wardoyo');
    }

    public function test_achievements_page_renders_successfully(): void
    {
        $response = $this->get('/prestasi');

        $response->assertStatus(200);
        $response->assertSee('LKS Kriya Kayu Juara 1');
    }

    public function test_events_page_renders_successfully(): void
    {
        $response = $this->get('/agenda');

        $response->assertStatus(200);
        $response->assertSee('Pameran Karya Seni Kriya');
    }

    public function test_audit_trail_is_logged_on_model_creation(): void
    {
        $event = Event::create([
            'title' => 'Audit Test Event',
            'slug' => 'audit-test-event',
            'event_date' => '2026-08-01',
            'location' => 'Audit Hall',
            'description' => 'Test description',
        ]);

        $this->assertDatabaseHas('audit_trails', [
            'auditable_type' => Event::class,
            'auditable_id' => $event->id,
            'action' => 'CREATE',
        ]);
    }
}
