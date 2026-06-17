<?php

namespace Tests\Feature;

use App\Livewire\PpdbRegistrationForm;
use App\Models\Major;
use App\Models\PpdbRegistration;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;
use Tests\TestCase;

class PpdbTest extends TestCase
{
    use RefreshDatabase;

    private Major $major1;
    private Major $major2;

    protected function setUp(): void
    {
        parent::setUp();

        // Seed 2 majors for testing
        $this->major1 = Major::create([
            'name' => 'Kriya Kayu',
            'slug' => 'kriya-kayu',
            'description' => 'Test Kriya Kayu Description',
            'accent_color' => '#D4AF37',
            'icon' => 'wood-craft',
            'curriculum' => ['wood carving'],
        ]);

        $this->major2 = Major::create([
            'name' => 'Multimedia',
            'slug' => 'multimedia',
            'description' => 'Test Multimedia Description',
            'accent_color' => '#00F2FE',
            'icon' => 'multimedia-design',
            'curriculum' => ['video production'],
        ]);
    }

    public function test_ppdb_page_can_be_rendered(): void
    {
        $response = $this->get('/ppdb');

        $response->assertStatus(200);
        $response->assertSeeLivewire(PpdbRegistrationForm::class);
    }

    public function test_form_validation_for_step_1(): void
    {
        Livewire::test(PpdbRegistrationForm::class)
            // Try going to next step with empty fields
            ->call('nextStep')
            ->assertHasErrors([
                'full_name' => 'required',
                'nisn' => 'required',
                'email' => 'required',
                'whatsapp_number' => 'required',
            ]);
    }

    public function test_cannot_select_same_major_priorities(): void
    {
        Livewire::test(PpdbRegistrationForm::class)
            ->set('full_name', 'Budi Santoso')
            ->set('nisn', '1234567890')
            ->set('email', 'budi@example.com')
            ->set('whatsapp_number', '08123456789')
            ->call('nextStep')
            ->assertHasNoErrors()
            ->set('major_priority_1', $this->major1->id)
            ->set('major_priority_2', $this->major1->id)
            ->call('nextStep')
            ->assertHasErrors(['major_priority_2']);
    }

    public function test_successful_form_submission(): void
    {
        Storage::fake('local');

        $fileIjazah = UploadedFile::fake()->create('document_ijazah.pdf', 500, 'application/pdf');
        $fileKk = UploadedFile::fake()->create('document_kk.pdf', 500, 'application/pdf');
        $fileFoto = UploadedFile::fake()->image('document_foto.jpg');

        Livewire::test(PpdbRegistrationForm::class)
            // Step 1
            ->set('full_name', 'Budi Santoso')
            ->set('nisn', '1234567890')
            ->set('email', 'budi@example.com')
            ->set('whatsapp_number', '08123456789')
            ->call('nextStep')
            ->assertHasNoErrors()
            
            // Step 2
            ->set('major_priority_1', $this->major1->id)
            ->set('major_priority_2', $this->major2->id)
            ->call('nextStep')
            ->assertHasNoErrors()

            // Step 3
            ->set('document_ijazah', $fileIjazah)
            ->set('document_kk', $fileKk)
            ->set('document_foto', $fileFoto)
            ->call('submitForm')
            ->assertHasNoErrors()
            ->assertSet('currentStep', 4);

        $this->assertDatabaseHas('ppdb_registrations', [
            'full_name' => 'Budi Santoso',
            'nisn' => '1234567890',
            'email' => 'budi@example.com',
            'major_priority_1' => $this->major1->id,
            'major_priority_2' => $this->major2->id,
            'status' => 'submitted',
        ]);
    }
}
