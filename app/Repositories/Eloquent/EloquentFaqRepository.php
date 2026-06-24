<?php

namespace App\Repositories\Eloquent;

use App\Models\FaqItem;
use App\Repositories\Contracts\FaqRepositoryInterface;
use Illuminate\Support\Collection;

class EloquentFaqRepository implements FaqRepositoryInterface
{
    public function all(): Collection
    {
        return FaqItem::ordered()->get();
    }

    public function active(): array
    {
        return FaqItem::active()->get()->toArray();
    }

    public function find(int $id): ?FaqItem
    {
        return FaqItem::find($id);
    }

    public function create(array $data): FaqItem
    {
        return FaqItem::create($data);
    }

    public function update(FaqItem $faqItem, array $data): FaqItem
    {
        $faqItem->update($data);
        return $faqItem->fresh();
    }

    public function delete(FaqItem $faqItem): void
    {
        $faqItem->delete();
    }

    public function publicListing(): array
    {
        return FaqItem::active()
            ->get()
            ->groupBy(fn($item) => $item->category ?? 'General')
            ->map(fn($items) => $items->values())
            ->toArray();
    }
}
