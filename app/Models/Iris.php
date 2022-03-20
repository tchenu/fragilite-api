<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Iris extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        "name",
        "city",
        "region",
        "department",
        "iris",
        "latitude",
        "longitude",
        "geo_shape",
        "score_global",
        "information_access_score",
        "access_to_digital_interfaces_score",
        "administrative_skills_score",
        "digital_academic_skills_score",
        "global_access_score",
        "global_skills",
    ];

    public function scopeCity(Builder $builder)
    {
    }

    public function toSearchableArray()
    {
        return $this->only("city", "region", "department");
    }
}
