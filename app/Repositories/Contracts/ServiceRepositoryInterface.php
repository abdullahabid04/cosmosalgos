<?php

namespace App\Repositories\Contracts;

use App\Models\Service;
use Illuminate\Support\Collection;

interface ServiceRepositoryInterface
{
    public function all(): Collection;
    public function active(): array;
    public function find(int $id): ?Service;
    public function create(array $data): Service;
    public function update(Service $service, array $data): Service;
    public function delete(Service $service): void;
}
