<?php

namespace App\Repositories\Eloquent;

use App\Models\SocialPost;
use App\Repositories\Contracts\SocialPostRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class EloquentSocialPostRepository implements SocialPostRepositoryInterface
{
    public function find(int $id): ?SocialPost
    {
        return SocialPost::with('author')->find($id);
    }

    public function create(array $data): SocialPost
    {
        return SocialPost::create($data);
    }

    public function update(SocialPost $post, array $data): SocialPost
    {
        $post->update($data);
        return $post->fresh(['author']);
    }

    public function delete(SocialPost $post): void
    {
        $post->clearMediaCollection('image');
        $post->delete();
    }

    public function publicListing(int $perPage = 12): LengthAwarePaginator
    {
        return SocialPost::with(['author', 'media'])
            ->feed()
            ->paginate($perPage)
            ->withQueryString();
    }
}
