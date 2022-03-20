<?php

namespace App\Http\Controllers;

use App\Http\Requests\iris\SearchRequest;
use App\Http\Resources\IrisResource;
use App\Models\Iris;
use Illuminate\Database\Eloquent\Builder;

class IrisController extends Controller
{
    public function search(SearchRequest $searchRequest)
    {
        return IrisResource::collection(
            Iris::search($searchRequest->getQuery())->paginate()
        );
    }

    public function departments()
    {
        return $this->query('department')->get();
    }

    public function regions()
    {
        return $this->query('region')->get();
    }

    public function cities()
    {
        return $this->query('city')->get();
    }

    private function query(string $column): Builder
    {
        return Iris::select($column)->groupBy($column);
    }
}
