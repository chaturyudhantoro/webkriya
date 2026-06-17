<?php

namespace App\Repositories\Eloquent;

use App\Models\PpdbRegistration;
use App\Repositories\Contracts\PpdbRepositoryInterface;

class PpdbRepository implements PpdbRepositoryInterface
{
    /**
     * Create a new PPDB registration record.
     *
     * @param  array  $data
     * @return \App\Models\PpdbRegistration
     */
    public function create(array $data): PpdbRegistration
    {
        return PpdbRegistration::create($data);
    }

    /**
     * Find a registration by its NISN.
     *
     * @param  string  $nisn
     * @return \App\Models\PpdbRegistration|null
     */
    public function findByNisn(string $nisn): ?PpdbRegistration
    {
        return PpdbRegistration::where('nisn', $nisn)->first();
    }
}
