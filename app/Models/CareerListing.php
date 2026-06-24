<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class CareerListing extends Model implements Sortable
{
    use SortableTrait;

    protected $fillable = [
        'title',
        'department',
        'type',
        'location',
        'description',
        'requirements',
        'is_active',
        'expires_at',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'is_active'  => 'boolean',
            'expires_at' => 'datetime',
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
        return $query
            ->where('is_active', true)
            ->where(function ($q) {
                $q->whereNull('expires_at')
                    ->orWhere('expires_at', '>', now());
            })
            ->ordered();
    }

    public function scopeByDepartment($query, string $department)
    {
        return $query->where('department', $department);
    }

    public function scopeByType($query, string $type)
    {
        return $query->where('type', $type);
    }

    // ── Helpers ───────────────────────────────────────────────────────────
    public function isExpired(): bool
    {
        return $this->expires_at && $this->expires_at->isPast();
    }

    public static function departments(): array
    {
        return self::active()
            ->distinct()
            ->pluck('department')
            ->toArray();
    }
}
