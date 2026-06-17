<?php

namespace App\Livewire;

use App\Models\Major;
use App\Models\PpdbRegistration;
use App\Models\PpdbDocument;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class PpdbRegistrationForm extends Component
{
    use WithFileUploads;

    public $currentStep = 1;

    // Step 1: Personal Data
    public $full_name;
    public $nisn;
    public $email;
    public $whatsapp_number;

    // Step 2: Major Priorities
    public $major_priority_1;
    public $major_priority_2;

    // Step 3: Document uploads
    public $document_ijazah;
    public $document_kk;
    public $document_foto;

    public $successMessage = '';
    public $regNumber = '';

    protected function rules()
    {
        if ($this->currentStep === 1) {
            return [
                'full_name' => 'required|string|max:255',
                'nisn' => 'required|string|size:10|unique:ppdb_registrations,nisn',
                'email' => 'required|email|max:255|unique:ppdb_registrations,email',
                'whatsapp_number' => 'required|string|max:20',
            ];
        } elseif ($this->currentStep === 2) {
            return [
                'major_priority_1' => 'required|exists:majors,id',
                'major_priority_2' => 'required|exists:majors,id|different:major_priority_1',
            ];
        }

        return [
            'document_ijazah' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'document_kk' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'document_foto' => 'required|image|mimes:jpg,jpeg,png|max:1024',
        ];
    }

    protected $validationAttributes = [
        'full_name' => 'Nama Lengkap',
        'nisn' => 'NISN',
        'email' => 'Alamat Email',
        'whatsapp_number' => 'Nomor WhatsApp',
        'major_priority_1' => 'Pilihan Jurusan 1',
        'major_priority_2' => 'Pilihan Jurusan 2',
        'document_ijazah' => 'Ijazah / SKL',
        'document_kk' => 'Kartu Keluarga',
        'document_foto' => 'Pas Foto Resmi',
    ];

    public function mount()
    {
        // Pre-select major if passed in URL
        $selectedMajor = request()->query('major');
        if ($selectedMajor) {
            $this->major_priority_1 = $selectedMajor;
        }
    }

    public function nextStep()
    {
        $this->validate($this->rules());
        $this->currentStep++;
    }

    public function prevStep()
    {
        $this->currentStep--;
    }

    public function submitForm(\App\Services\PpdbService $ppdbService)
    {
        $this->validate($this->rules());

        // Create PPDB registration entry via our new Service layer
        $registration = $ppdbService->registerCandidate([
            'full_name' => $this->full_name,
            'nisn' => $this->nisn,
            'email' => $this->email,
            'whatsapp_number' => $this->whatsapp_number,
            'major_priority_1' => $this->major_priority_1,
            'major_priority_2' => $this->major_priority_2,
        ]);

        $this->regNumber = $registration->registration_number;

        // Store documents
        $documents = [
            'ijazah' => $this->document_ijazah,
            'kartu_keluarga' => $this->document_kk,
            'foto' => $this->document_foto,
        ];

        foreach ($documents as $type => $file) {
            if ($file) {
                $path = $file->store('ppdb-documents/' . $this->regNumber, 'local');
                PpdbDocument::create([
                    'ppdb_registration_id' => $registration->id,
                    'document_type' => $type,
                    'file_path' => $path,
                ]);
            }
        }

        $this->successMessage = 'Pendaftaran Anda berhasil dikirim!';
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->full_name = '';
        $this->nisn = '';
        $this->email = '';
        $this->whatsapp_number = '';
        $this->major_priority_1 = null;
        $this->major_priority_2 = null;
        $this->document_ijazah = null;
        $this->document_kk = null;
        $this->document_foto = null;
        $this->currentStep = 4; // Step 4 is success page
    }

    public function render()
    {
        return view('livewire.ppdb-registration-form', [
            'majors' => Major::all(),
        ]);
    }
}
