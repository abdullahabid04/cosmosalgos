<?php

namespace App\Repositories\Eloquent;

use App\Models\BlogPost;
use App\Repositories\Contracts\BlogPostRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\AllowedSort;
use Spatie\QueryBuilder\QueryBuilder;

class EloquentBlogPostRepository implements BlogPostRepositoryInterface
{
    public function all(): Collection
    {
        return BlogPost::with(['category', 'author'])->latest()->get();
    }

    public function find(int $id): ?BlogPost
    {
        return BlogPost::with(['category', 'author'])->find($id);
    }

    public function findBySlug(string $slug): ?BlogPost
    {
        return BlogPost::with(['category', 'author', 'tags'])
            ->published()
            ->where('slug', $slug)
            ->first();
    }

    public function latest(int $limit = 5): Collection
    {
        return BlogPost::with(['category', 'author'])
            ->latest()
            ->take($limit)
            ->get();
    }

    public function create(array $data): BlogPost
    {
        return BlogPost::create($data);
    }

    public function update(BlogPost $post, array $data): BlogPost
    {
        $post->update($data);
        return $post->fresh(['category', 'author']);
    }

    public function delete(BlogPost $post): void
    {
        $post->clearMediaCollection('thumbnail');
        $post->delete(); // soft delete
    }

    public function publicListing(int $perPage = 9): LengthAwarePaginator
    {
        return QueryBuilder::for(BlogPost::class)
            ->with(['category', 'author'])
            ->allowedFilters([
                AllowedFilter::exact('category', 'category_id'),
                AllowedFilter::scope('tag', 'withAnyTags'),
                AllowedFilter::partial('search', 'title'),
            ])
            ->allowedSorts([
                AllowedSort::field('published_at'),
                AllowedSort::field('title'),
            ])
            ->defaultSort('-published_at')
            ->published()
            ->paginate($perPage)
            ->withQueryString();
    }
}
