<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Iris extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'city',
        'region',
        'department',
        'iris',
        'latitude',
        'longitude',
        'geo_shape',
        'score_global',
        'information_access_score',
        'access_to_digital_interfaces_score',
        'administrative_skills_score',
        'digital_academic_skills_score',
        'global_access_score',
        'global_skills',
    ];
}
