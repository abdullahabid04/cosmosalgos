<?php

namespace App\Repositories\Eloquent;

use App\Models\Industry;
use App\Repositories\Contracts\IndustryRepositoryInterface;
use Illuminate\Support\Collection;

class EloquentIndustryRepository implements IndustryRepositoryInterface
{
    public function all(): Collection
    {
        return Industry::ordered()->get();
    }

    public function active(): array
    {
        return Industry::active()->get()->toArray();
    }

    public function find(int $id): ?Industry
    {
        return Industry::find($id);
    }

    public function create(array $data): Industry
    {
        return Industry::create($data);
    }

    public function update(Industry $industry, array $data): Industry
    {
        $industry->update($data);
        return $industry->fresh();
    }

    public function delete(Industry $industry): void
    {
        $industry->delete();
    }

    public function pluckForSelect(): array
    {
        return Industry::active()
            ->pluck('name', 'id')
            ->toArray();
    }
}
