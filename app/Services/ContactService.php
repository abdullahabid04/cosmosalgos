<?php

namespace App\Services;

use App\Models\ContactSubmission;
use App\Repositories\Contracts\ContactSubmissionRepositoryInterface;
use Illuminate\Http\Request;

class ContactService
{
    public function __construct(
        private readonly ContactSubmissionRepositoryInterface $contactSubmissionRepository,
    ) {
    }

    public function submit(array $validated, Request $request): ContactSubmission
    {
        return $this->contactSubmissionRepository->create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'] ?? null,
            'message' => $validated['message'],
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);
    }
}
