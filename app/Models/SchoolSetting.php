<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'website_name',
        'academic_year',
        'opening_hours',
        'address',
        'google_maps_url',
    ];
}
