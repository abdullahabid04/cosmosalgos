<?php

namespace App\Repositories\Eloquent;

use App\Models\GalleryAlbum;
use App\Repositories\Contracts\GalleryAlbumRepositoryInterface;
use Illuminate\Support\Collection;

class EloquentGalleryAlbumRepository implements GalleryAlbumRepositoryInterface
{
    public function all(): Collection
    {
        return GalleryAlbum::ordered()->get();
    }

    public function active(): array
    {
        return GalleryAlbum::active()->get()->toArray();
    }

    public function find(int $id): ?GalleryAlbum
    {
        return GalleryAlbum::with('items')->find($id);
    }

    public function findBySlug(string $slug): ?GalleryAlbum
    {
        return GalleryAlbum::with('items')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->first();
    }

    public function create(array $data): GalleryAlbum
    {
        return GalleryAlbum::create($data);
    }

    public function update(GalleryAlbum $album, array $data): GalleryAlbum
    {
        $album->update($data);
        return $album->fresh(['items']);
    }

    public function delete(GalleryAlbum $album): void
    {
        // Media Library cascades — items' media deleted automatically
        $album->items->each(fn($item) => $item->clearMediaCollection('image'));
        $album->clearMediaCollection('cover');
        $album->delete();
    }

    public function publicListing(): Collection
    {
        return GalleryAlbum::with(['items.media', 'media'])
            ->active()
            ->get();
    }
}
