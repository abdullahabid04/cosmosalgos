<?php

namespace App\Repositories\Eloquent;

use App\Models\Service;
use App\Repositories\Contracts\ServiceRepositoryInterface;
use Illuminate\Support\Collection;

class EloquentServiceRepository implements ServiceRepositoryInterface
{
    public function all(): Collection
    {
        return Service::ordered()->get();
    }

    public function active(): array
    {
        return Service::active()->get()->toArray();
    }

    public function find(int $id): ?Service
    {
        return Service::find($id);
    }

    public function create(array $data): Service
    {
        return Service::create($data);
    }

    public function update(Service $service, array $data): Service
    {
        $service->update($data);
        return $service->fresh();
    }

    public function delete(Service $service): void
    {
        $service->clearMediaCollection();
        $service->delete();
    }
}
