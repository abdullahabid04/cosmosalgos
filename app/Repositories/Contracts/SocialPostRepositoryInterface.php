<?php

namespace App\Repositories\Contracts;

use App\Models\SocialPost;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface SocialPostRepositoryInterface
{
    public function find(int $id): ?SocialPost;
    public function create(array $data): SocialPost;
    public function update(SocialPost $post, array $data): SocialPost;
    public function delete(SocialPost $post): void;

    /**
     * Feed for the public /social page.
     * Pinned posts first, then newest. No filters needed.
     */
    public function publicListing(int $perPage = 12): LengthAwarePaginator;
}
