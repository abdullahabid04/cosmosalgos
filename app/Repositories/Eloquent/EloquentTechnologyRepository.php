<?php

namespace App\Repositories\Eloquent;

use App\Models\Technology;
use App\Repositories\Contracts\TechnologyRepositoryInterface;
use Illuminate\Support\Collection;

class EloquentTechnologyRepository implements TechnologyRepositoryInterface
{
    public function all(): Collection
    {
        return Technology::ordered()->get();
    }

    public function active(): array
    {
        return Technology::active()->get()->toArray();
    }

    public function activeNames(): array
    {
        return Technology::active()->pluck('name')->toArray();
    }

    public function groupedByCategory(): array
    {
        return Technology::active()
            ->get()
            ->groupBy('category')
            ->map(fn($items) => $items->values())
            ->toArray();
    }

    public function find(int $id): ?Technology
    {
        return Technology::find($id);
    }

    public function create(array $data): Technology
    {
        return Technology::create($data);
    }

    public function update(Technology $technology, array $data): Technology
    {
        $technology->update($data);
        return $technology->fresh();
    }

    public function delete(Technology $technology): void
    {
        $technology->delete();
    }
}
