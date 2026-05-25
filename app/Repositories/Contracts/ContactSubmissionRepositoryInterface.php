<?php

namespace App\Repositories\Contracts;

use App\Models\ContactSubmission;

interface ContactSubmissionRepositoryInterface
{
    public function create(array $payload): ContactSubmission;
}
