<?php

namespace App\Models;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['title', 'slug', 'category', 'date', 'description', 'winner_name', 'image_path'])]
class Achievement extends Model
{
    use HasFactory, HasUuids, Auditable;

    protected function casts(): array
    {
        return [
            'date' => 'date',
        ];
    }
}
