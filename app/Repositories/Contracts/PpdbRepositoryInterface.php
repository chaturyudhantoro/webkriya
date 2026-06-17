<?php

namespace App\Repositories\Contracts;

use App\Models\PpdbRegistration;

interface PpdbRepositoryInterface
{
    /**
     * Create a new PPDB registration record.
     *
     * @param  array  $data
     * @return \App\Models\PpdbRegistration
     */
    public function create(array $data): PpdbRegistration;

    /**
     * Find a registration by its NISN.
     *
     * @param  string  $nisn
     * @return \App\Models\PpdbRegistration|null
     */
    public function findByNisn(string $nisn): ?PpdbRegistration;
}
