<?php

namespace App\Repositories\Contracts;

use App\Models\Technology;
use Illuminate\Support\Collection;

interface TechnologyRepositoryInterface
{
    public function all(): Collection;
    public function active(): array;
    public function activeNames(): array;
    public function groupedByCategory(): array;
    public function find(int $id): ?Technology;
    public function create(array $data): Technology;
    public function update(Technology $technology, array $data): Technology;
    public function delete(Technology $technology): void;
}
