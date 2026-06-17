<?php

namespace App\Models;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    'registration_number',
    'full_name',
    'nisn',
    'email',
    'whatsapp_number',
    'major_priority_1',
    'major_priority_2',
    'status',
    'rejection_reason',
    'submitted_at'
])]
class PpdbRegistration extends Model
{
    use HasFactory, Auditable;

    protected function casts(): array
    {
        return [
            'submitted_at' => 'datetime',
        ];
    }

    public function major1(): BelongsTo
    {
        return $this->belongsTo(Major::class, 'major_priority_1');
    }

    public function major2(): BelongsTo
    {
        return $this->belongsTo(Major::class, 'major_priority_2');
    }

    public function documents(): HasMany
    {
        return $this->hasMany(PpdbDocument::class, 'ppdb_registration_id');
    }
}
