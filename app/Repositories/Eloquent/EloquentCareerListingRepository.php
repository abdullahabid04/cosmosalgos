<?php

namespace App\Repositories\Eloquent;

use App\Models\CareerListing;
use App\Repositories\Contracts\CareerListingRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\AllowedSort;
use Spatie\QueryBuilder\QueryBuilder;

class EloquentCareerListingRepository implements CareerListingRepositoryInterface
{
    public function all(): Collection
    {
        return CareerListing::ordered()->get();
    }

    public function active(): array
    {
        return CareerListing::active()->get()->toArray();
    }

    public function find(int $id): ?CareerListing
    {
        return CareerListing::find($id);
    }

    public function create(array $data): CareerListing
    {
        return CareerListing::create($data);
    }

    public function update(CareerListing $listing, array $data): CareerListing
    {
        $listing->update($data);
        return $listing->fresh();
    }

    public function delete(CareerListing $listing): void
    {
        $listing->delete();
    }

    public function publicListing(int $perPage = 12): LengthAwarePaginator
    {
        return QueryBuilder::for(CareerListing::class)
            ->allowedFilters([
                AllowedFilter::exact('department'),
                AllowedFilter::exact('type'),
            ])
            ->allowedSorts([
                AllowedSort::field('sort_order'),
                AllowedSort::field('title'),
            ])
            ->defaultSort('sort_order')
            ->active()
            ->paginate($perPage)
            ->withQueryString();
    }
}
