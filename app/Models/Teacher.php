<?php

namespace App\Models;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['name', 'nip', 'major_id', 'position', 'is_featured', 'photo_path'])]
class Teacher extends Model
{
    use HasFactory, HasUuids, Auditable;

    public function major(): BelongsTo
    {
        return $this->belongsTo(Major::class);
    }
}
