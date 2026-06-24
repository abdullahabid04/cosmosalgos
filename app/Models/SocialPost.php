<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class SocialPost extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'content',
        'author_id',
        'is_pinned',
    ];

    protected function casts(): array
    {
        return [
            'is_pinned'  => 'boolean',
            'created_at' => 'datetime',
        ];
    }

    // ── Media ─────────────────────────────────────────────────────────────
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('image')
            ->singleFile();
    }

    // ── Relationships ─────────────────────────────────────────────────────
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    // ── Scopes ────────────────────────────────────────────────────────────
    /**
     * Public feed order: pinned first, then newest.
     */
    public function scopeFeed($query)
    {
        return $query->orderByDesc('is_pinned')->orderByDesc('created_at');
    }
}
