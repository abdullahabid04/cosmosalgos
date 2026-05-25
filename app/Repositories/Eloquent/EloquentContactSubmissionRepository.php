<?php

namespace App\Repositories\Eloquent;

use App\Models\ContactSubmission;
use App\Repositories\Contracts\ContactSubmissionRepositoryInterface;

class EloquentContactSubmissionRepository implements ContactSubmissionRepositoryInterface
{
    public function create(array $payload): ContactSubmission
    {
        return ContactSubmission::query()->create($payload);
    }
}
