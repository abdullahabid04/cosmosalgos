<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactSubmissionRequest;
use App\Services\ContactService;
use Illuminate\Http\RedirectResponse;

class ContactSubmissionController extends Controller
{
    public function store(ContactSubmissionRequest $request, ContactService $contactService): RedirectResponse
    {
        $contactService->submit($request->validated(), $request);

        return to_route('contact')->with('status', 'Thanks for contacting Cosmos Algos. We will get back to you shortly.');
    }
}
