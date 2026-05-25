<?php

namespace App\Repositories\Eloquent;

use App\Models\Service;
use App\Repositories\Contracts\ServiceRepositoryInterface;

class EloquentServiceRepository implements ServiceRepositoryInterface
{
    public function active(): array
    {
        return Service::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get(['title', 'description'])
            ->toArray();
    }
}
