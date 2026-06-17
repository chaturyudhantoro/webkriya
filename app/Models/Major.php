<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'slug', 'description', 'accent_color', 'icon', 'curriculum', 'meta_title', 'meta_description'])]
class Major extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'curriculum' => 'array',
        ];
    }

    public function ppdbPriority1(): HasMany
    {
        return $this->hasMany(PpdbRegistration::class, 'major_priority_1');
    }

    public function ppdbPriority2(): HasMany
    {
        return $this->hasMany(PpdbRegistration::class, 'major_priority_2');
    }

    public function tracerStudies(): HasMany
    {
        return $this->hasMany(TracerStudy::class);
    }
}
