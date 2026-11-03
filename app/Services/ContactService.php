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
        $service = $validated['service'] ?? null;

        return $this->contactSubmissionRepository->create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'company' => $validated['company'] ?? null,
            'phone' => $validated['phone'] ?? null,
            'service' => $service,
            'budget' => $validated['budget'] ?? null,
            'subject' => $validated['subject'] ?? $this->subjectFor($service),
            'message' => $validated['message'],
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);
    }

    private function subjectFor(?string $service): string
    {
        return match ($service) {
            'embedded' => 'Enquiry — Embedded systems & firmware',
            'automation' => 'Enquiry — Industrial automation & test rigs',
            'iot' => 'Enquiry — IoT platforms & cloud backends',
            'ai' => 'Enquiry — AI & computer vision',
            'mobile' => 'Enquiry — Mobile & desktop applications',
            'saas' => 'Enquiry — SaaS product engineering',
            'data' => 'Enquiry — Data acquisition & visualisation',
            'research' => 'Enquiry — Research, prototyping & upgrades',
            default => 'General enquiry',
        };
    }
}
