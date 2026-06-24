<?php

namespace App\Repositories\Contracts;

use App\Models\BlogPost;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface BlogPostRepositoryInterface
{
    public function all(): Collection;
    public function find(int $id): ?BlogPost;
    public function findBySlug(string $slug): ?BlogPost;
    public function latest(int $limit = 5): Collection;
    public function create(array $data): BlogPost;
    public function update(BlogPost $post, array $data): BlogPost;
    public function delete(BlogPost $post): void;

    /**
     * Filterable paginated listing for the public /blog page.
     * Allowed filters: category (slug), tag, search (partial title/excerpt).
     * Default sort: -published_at (newest first).
     */
    public function publicListing(int $perPage = 9): LengthAwarePaginator;
}
