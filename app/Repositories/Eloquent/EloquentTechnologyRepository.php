<?php

namespace App\Repositories\Eloquent;

use App\Models\Technology;
use App\Repositories\Contracts\TechnologyRepositoryInterface;

class EloquentTechnologyRepository implements TechnologyRepositoryInterface
{
    public function activeNames(): array
    {
        return Technology::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('id')
            ->pluck('name')
            ->all();
    }
}
