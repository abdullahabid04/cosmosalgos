<?php

namespace App\Repositories\Eloquent;

use App\Models\Project;
use App\Repositories\Contracts\ProjectRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\AllowedSort;
use Spatie\QueryBuilder\QueryBuilder;

class EloquentProjectRepository implements ProjectRepositoryInterface
{
    public function all(): Collection
    {
        return Project::with('industry')->ordered()->get();
    }

    public function active(): array
    {
        return Project::with('industry')->active()->get()->toArray();
    }

    public function featured(): array
    {
        return Project::with('industry')->featured()->get()->toArray();
    }

    public function find(int $id): ?Project
    {
        return Project::with('industry')->find($id);
    }

    public function findBySlug(string $slug): ?Project
    {
        return Project::with('industry')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->first();
    }

    public function create(array $data): Project
    {
        return Project::create($data);
    }

    public function update(Project $project, array $data): Project
    {
        $project->update($data);
        return $project->fresh(['industry']);
    }

    public function delete(Project $project): void
    {
        $project->clearMediaCollection('thumbnail');
        $project->delete();
    }

    public function publicListing(int $perPage = 12): LengthAwarePaginator
    {
        return QueryBuilder::for(Project::class)
            ->with('industry')
            ->allowedFilters([
                AllowedFilter::exact('industry', 'industry_id'),
                AllowedFilter::exact('year'),
                AllowedFilter::exact('is_featured'),
                AllowedFilter::partial('search', 'title'),
            ])
            ->allowedSorts([
                AllowedSort::field('sort_order'),
                AllowedSort::field('year'),
                AllowedSort::field('title'),
            ])
            ->defaultSort('sort_order')
            ->where('is_active', true)
            ->paginate($perPage)
            ->withQueryString();
    }
}
