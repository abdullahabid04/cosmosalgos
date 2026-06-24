<?php

namespace App\Repositories\Contracts;

use App\Models\Project;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface ProjectRepositoryInterface
{
    public function all(): Collection;
    public function active(): array;
    public function featured(): array;
    public function find(int $id): ?Project;
    public function findBySlug(string $slug): ?Project;
    public function create(array $data): Project;
    public function update(Project $project, array $data): Project;
    public function delete(Project $project): void;

    /**
     * Paginated, filterable listing for the public /projects page.
     * Uses Spatie Query Builder — reads filters/sorts from the request automatically.
     */
    public function publicListing(int $perPage = 12): LengthAwarePaginator;
}
