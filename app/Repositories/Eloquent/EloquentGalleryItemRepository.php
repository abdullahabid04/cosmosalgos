<?php

namespace App\Repositories\Eloquent;

use App\Models\GalleryItem;
use App\Repositories\Contracts\GalleryItemRepositoryInterface;

class EloquentGalleryItemRepository implements GalleryItemRepositoryInterface
{
    public function find(int $id): ?GalleryItem
    {
        return GalleryItem::with('album')->find($id);
    }

    public function create(array $data): GalleryItem
    {
        return GalleryItem::create($data);
    }

    public function update(GalleryItem $item, array $data): GalleryItem
    {
        $item->update($data);
        return $item->fresh(['album']);
    }

    public function delete(GalleryItem $item): void
    {
        $item->clearMediaCollection('image');
        $item->delete();
    }
}
