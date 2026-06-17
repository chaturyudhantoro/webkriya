<?php

namespace App\Models;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['title', 'slug', 'event_date', 'location', 'description', 'registration_link'])]
class Event extends Model
{
    use HasFactory, HasUuids, Auditable;

    protected function casts(): array
    {
        return [
            'event_date' => 'date',
        ];
    }
}
