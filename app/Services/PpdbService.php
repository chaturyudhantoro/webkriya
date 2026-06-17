<?php

namespace App\Services;

use App\Models\PpdbRegistration;
use App\Repositories\Contracts\PpdbRepositoryInterface;
use Illuminate\Support\Str;

class PpdbService
{
    /**
     * Create a new service instance.
     *
     * @param  \App\Repositories\Contracts\PpdbRepositoryInterface  $ppdbRepo
     */
    public function __construct(
        protected PpdbRepositoryInterface $ppdbRepo
    ) {}

    /**
     * Handle the registration of a new candidate.
     *
     * @param  array  $data
     * @return \App\Models\PpdbRegistration
     */
    public function registerCandidate(array $data): PpdbRegistration
    {
        // Business logic: Generate dynamic unique registration number
        $data['registration_number'] = 'PPDB-' . date('Y') . '-' . strtoupper(Str::random(5));
        $data['status'] = 'submitted';
        $data['submitted_at'] = now();

        return $this->ppdbRepo->create($data);
    }
}
