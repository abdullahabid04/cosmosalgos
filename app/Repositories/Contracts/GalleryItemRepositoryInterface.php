<?php

namespace App\Repositories\Contracts;

use App\Models\GalleryItem;

interface GalleryItemRepositoryInterface
{
    public function find(int $id): ?GalleryItem;
    public function create(array $data): GalleryItem;
    public function update(GalleryItem $item, array $data): GalleryItem;
    public function delete(GalleryItem $item): void;
}
