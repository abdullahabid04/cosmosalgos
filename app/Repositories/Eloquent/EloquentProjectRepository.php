<?php

namespace App\Repositories\Eloquent;

use App\Models\Project;
use App\Repositories\Contracts\ProjectRepositoryInterface;

class EloquentProjectRepository implements ProjectRepositoryInterface
{
    public function active(): array
    {
        return Project::query()
            ->where('is_active', true)
            ->orderByDesc('is_featured')
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get(['title', 'summary'])
            ->toArray();
    }

    public function featured(int $limit = 3): array
    {
        return Project::query()
            ->where('is_active', true)
            ->where('is_featured', true)
            ->orderBy('sort_order')
            ->orderBy('id')
            ->limit($limit)
            ->get(['title', 'summary'])
            ->toArray();
    }
}
