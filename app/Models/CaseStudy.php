<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class CaseStudy extends Model implements HasMedia, Sortable
{
    use InteractsWithMedia, HasSlug, SortableTrait;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'client',
        'industry_id',
        'team_size',
        'duration',
        'location',
        'is_active',
        'sort_order',
        'seo_title',
        'seo_description',
    ];

    protected function casts(): array
    {
        return [
            'is_active'  => 'boolean',
            'sort_order' => 'integer',
        ];
    }

    // ── Slug ─────────────────────────────────────────────────────────────
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->doNotGenerateSlugsOnUpdate();
    }

    // ── Sortable ──────────────────────────────────────────────────────────
    public array $sortable = [
        'order_column_name'  => 'sort_order',
        'sort_when_creating' => true,
    ];

    // ── Media ─────────────────────────────────────────────────────────────
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('thumbnail')
            ->singleFile();
    }

    // ── Relationships ─────────────────────────────────────────────────────
    public function industry(): BelongsTo
    {
        return $this->belongsTo(Industry::class);
    }

    // ── Scopes ────────────────────────────────────────────────────────────
    public function scopeActive($query)
    {
        return $query->where('is_active', true)->ordered();
    }
}
