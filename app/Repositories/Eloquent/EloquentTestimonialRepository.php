<?php

namespace App\Repositories\Eloquent;

use App\Models\Testimonial;
use App\Repositories\Contracts\TestimonialRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\AllowedSort;
use Spatie\QueryBuilder\QueryBuilder;

class EloquentTestimonialRepository implements TestimonialRepositoryInterface
{
    public function all(): Collection
    {
        return Testimonial::ordered()->get();
    }

    public function active(): array
    {
        return Testimonial::active()->get()->toArray();
    }

    public function find(int $id): ?Testimonial
    {
        return Testimonial::find($id);
    }

    public function create(array $data): Testimonial
    {
        return Testimonial::create($data);
    }

    public function update(Testimonial $testimonial, array $data): Testimonial
    {
        $testimonial->update($data);
        return $testimonial->fresh();
    }

    public function delete(Testimonial $testimonial): void
    {
        $testimonial->clearMediaCollection('avatar');
        $testimonial->delete();
    }

    public function publicListing(int $perPage = 12): LengthAwarePaginator
    {
        return QueryBuilder::for(Testimonial::class)
            ->allowedFilters([
                AllowedFilter::exact('rating'),
            ])
            ->allowedSorts([
                AllowedSort::field('sort_order'),
                AllowedSort::field('rating'),
            ])
            ->defaultSort('sort_order')
            ->where('is_active', true)
            ->paginate($perPage)
            ->withQueryString();
    }
}
