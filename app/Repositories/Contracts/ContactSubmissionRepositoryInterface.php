<?php

namespace App\Repositories\Contracts;

use App\Models\ContactSubmission;
use Illuminate\Support\Collection;

interface ContactSubmissionRepositoryInterface
{
    public function create(array $payload): ContactSubmission;
    public function find(int $id): ?ContactSubmission;
    public function unreadCount(): int;
    public function latest(int $limit = 5): Collection;
}
