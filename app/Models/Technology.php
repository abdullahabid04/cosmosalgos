<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Technology extends Model implements Sortable
{
    use SortableTrait;

    protected $fillable = [
        'name',
        'category',
        'sort_order',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active'  => 'boolean',
            'sort_order' => 'integer',
        ];
    }

    // ── Sortable ──────────────────────────────────────────────────────────
    public array $sortable = [
        'order_column_name'  => 'sort_order',
        'sort_when_creating' => true,
    ];

    // ── Scopes ────────────────────────────────────────────────────────────
    public function scopeActive($query)
    {
        return $query->where('is_active', true)->ordered();
    }

    public function scopeInCategory($query, string $category)
    {
        return $query->where('category', $category);
    }

    // ── Helpers ───────────────────────────────────────────────────────────
    /**
     * All distinct category names in sort order.
     * Used to group technologies on the public /technologies page.
     */
    public static function categories(): array
    {
        return self::active()
            ->distinct()
            ->pluck('category')
            ->toArray();
    }
}
