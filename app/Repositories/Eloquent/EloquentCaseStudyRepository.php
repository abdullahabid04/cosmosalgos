<?php

namespace App\Repositories\Eloquent;

use App\Models\CaseStudy;
use App\Repositories\Contracts\CaseStudyRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\AllowedSort;
use Spatie\QueryBuilder\QueryBuilder;

class EloquentCaseStudyRepository implements CaseStudyRepositoryInterface
{
    public function all(): Collection
    {
        return CaseStudy::with('industry')->ordered()->get();
    }

    public function active(): array
    {
        return CaseStudy::with('industry')->active()->get()->toArray();
    }

    public function find(int $id): ?CaseStudy
    {
        return CaseStudy::with('industry')->find($id);
    }

    public function findBySlug(string $slug): ?CaseStudy
    {
        return CaseStudy::with('industry')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->first();
    }

    public function create(array $data): CaseStudy
    {
        return CaseStudy::create($data);
    }

    public function update(CaseStudy $caseStudy, array $data): CaseStudy
    {
        $caseStudy->update($data);
        return $caseStudy->fresh(['industry']);
    }

    public function delete(CaseStudy $caseStudy): void
    {
        $caseStudy->clearMediaCollection('thumbnail');
        $caseStudy->delete();
    }

    public function publicListing(int $perPage = 9): LengthAwarePaginator
    {
        return QueryBuilder::for(CaseStudy::class)
            ->with('industry')
            ->allowedFilters([
                AllowedFilter::exact('industry', 'industry_id'),
                AllowedFilter::partial('client'),
            ])
            ->allowedSorts([
                AllowedSort::field('sort_order'),
                AllowedSort::field('title'),
            ])
            ->defaultSort('sort_order')
            ->where('is_active', true)
            ->paginate($perPage)
            ->withQueryString();
    }
}
