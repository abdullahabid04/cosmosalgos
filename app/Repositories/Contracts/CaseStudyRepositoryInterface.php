<?php

namespace App\Repositories\Contracts;

use App\Models\CaseStudy;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface CaseStudyRepositoryInterface
{
    public function all(): Collection;
    public function active(): array;
    public function find(int $id): ?CaseStudy;
    public function findBySlug(string $slug): ?CaseStudy;
    public function create(array $data): CaseStudy;
    public function update(CaseStudy $caseStudy, array $data): CaseStudy;
    public function delete(CaseStudy $caseStudy): void;

    /**
     * Filterable paginated listing for the public /case-studies page.
     * Allowed filters: industry, client (partial search).
     */
    public function publicListing(int $perPage = 9): LengthAwarePaginator;
}
