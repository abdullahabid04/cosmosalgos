<?php

namespace App\Repositories\Contracts;

use App\Models\FaqItem;
use Illuminate\Support\Collection;

interface FaqRepositoryInterface
{
    public function all(): Collection;
    public function active(): array;
    public function find(int $id): ?FaqItem;
    public function create(array $data): FaqItem;
    public function update(FaqItem $faqItem, array $data): FaqItem;
    public function delete(FaqItem $faqItem): void;

    /**
     * Active FAQs grouped by category for the public /faq page.
     * Returns: ['General' => [FaqItem, ...], 'Billing' => [...]]
     */
    public function publicListing(): array;
}
