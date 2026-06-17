<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['full_name', 'graduation_year', 'major_id', 'status', 'details', 'email', 'whatsapp_number', 'testimonials'])]
class TracerStudy extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'details' => 'array',
        ];
    }

    public function major(): BelongsTo
    {
        return $this->belongsTo(Major::class);
    }
}
