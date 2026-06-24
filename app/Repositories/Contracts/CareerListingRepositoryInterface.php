<?php

namespace App\Repositories\Contracts;

use App\Models\CareerListing;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface CareerListingRepositoryInterface
{
    public function all(): Collection;
    public function active(): array;
    public function find(int $id): ?CareerListing;
    public function create(array $data): CareerListing;
    public function update(CareerListing $listing, array $data): CareerListing;
    public function delete(CareerListing $listing): void;

    /**
     * Filterable listing for the public /careers page.
     * Allowed filters: department, type.
     */
    public function publicListing(int $perPage = 12): LengthAwarePaginator;
}
