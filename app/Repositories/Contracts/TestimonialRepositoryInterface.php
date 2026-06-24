<?php

namespace App\Repositories\Contracts;

use App\Models\Testimonial;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface TestimonialRepositoryInterface
{
    public function all(): Collection;
    public function active(): array;
    public function find(int $id): ?Testimonial;
    public function create(array $data): Testimonial;
    public function update(Testimonial $testimonial, array $data): Testimonial;
    public function delete(Testimonial $testimonial): void;
    public function publicListing(int $perPage = 12): LengthAwarePaginator;
}
