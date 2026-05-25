<?php

namespace App\Repositories\Contracts;

interface ProjectRepositoryInterface
{
    public function active(): array;

    public function featured(int $limit = 3): array;
}
