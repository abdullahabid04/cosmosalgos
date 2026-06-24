<?php

namespace App\Repositories\Contracts;

use App\Models\Industry;
use Illuminate\Support\Collection;

interface IndustryRepositoryInterface
{
    public function all(): Collection;
    public function active(): array;
    public function find(int $id): ?Industry;
    public function create(array $data): Industry;
    public function update(Industry $industry, array $data): Industry;
    public function delete(Industry $industry): void;

    /**
     * Simple key→value list for select inputs: [id => name].
     */
    public function pluckForSelect(): array;
}
