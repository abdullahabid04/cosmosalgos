<?php

namespace App\Repositories\Eloquent;

use App\Models\ContactSubmission;
use App\Repositories\Contracts\ContactSubmissionRepositoryInterface;
use Illuminate\Support\Collection;

class EloquentContactSubmissionRepository implements ContactSubmissionRepositoryInterface
{
    public function create(array $payload): ContactSubmission
    {
        return ContactSubmission::create($payload);
    }

    public function find(int $id): ?ContactSubmission
    {
        return ContactSubmission::find($id);
    }

    public function unreadCount(): int
    {
        return ContactSubmission::unread()->count();
    }

    public function latest(int $limit = 5): Collection
    {
        return ContactSubmission::latest()->take($limit)->get();
    }
}
