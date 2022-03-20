<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;
    use Searchable;

    protected $table = 'irises';

    protected $fillable = [
        "city",
    ];

    protected static function booted()
    {
        static::addGlobalScope('city', fn (Builder $query) => $query->selectRaw("MIN(id) as id, city")->groupBy("city"));
    }

    public function toSearchableArray()
    {
        return $this->toArray();
    }
}
