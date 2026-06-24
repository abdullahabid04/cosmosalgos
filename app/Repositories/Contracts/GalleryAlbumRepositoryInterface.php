<?php

namespace App\Repositories\Contracts;

use App\Models\GalleryAlbum;
use Illuminate\Support\Collection;

interface GalleryAlbumRepositoryInterface
{
    public function all(): Collection;
    public function active(): array;
    public function find(int $id): ?GalleryAlbum;
    public function findBySlug(string $slug): ?GalleryAlbum;
    public function create(array $data): GalleryAlbum;
    public function update(GalleryAlbum $album, array $data): GalleryAlbum;
    public function delete(GalleryAlbum $album): void;

    /**
     * Active albums with their items eager-loaded, for the public /gallery page.
     */
    public function publicListing(): Collection;
}
