<?php

namespace App\Services;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

class SettingsService
{
    private const CACHE_KEY = 'cosmos_settings';
    private const CACHE_TTL = 3600; // 1 hour

    /**
     * Get a single setting value by key.
     * Falls back to $default if the key does not exist in the DB.
     */
    public function get(string $key, mixed $default = null): mixed
    {
        return $this->all()[$key] ?? $default;
    }

    /**
     * Write or update a single setting.
     * Automatically busts the cache.
     */
    public function set(
        string $key,
        mixed $value,
        string $group = 'general',
        string $cast = 'string'
    ): void {
        $stored = is_array($value) ? json_encode($value) : (string) $value;

        Setting::updateOrCreate(
            ['key' => $key],
            [
                'value' => $stored,
                'group' => $group,
                'cast'  => is_array($value) ? 'json' : $cast,
            ]
        );

        $this->flush();
    }

    /**
     * Return all settings whose key starts with a given group prefix.
     * Example: $settingsService->group('homepage') returns all homepage.* keys.
     */
    public function group(string $group): array
    {
        $prefix = rtrim($group, '.') . '.';

        return collect($this->all())
            ->filter(fn($value, $key) => str_starts_with($key, $prefix))
            ->all();
    }

    /**
     * Return all settings as a flat key → typed-value array.
     * Result is cached for CACHE_TTL seconds.
     */
    public function all(): array
    {
        return Cache::remember(self::CACHE_KEY, self::CACHE_TTL, function () {
            return Setting::all()
                ->mapWithKeys(fn(Setting $s) => [$s->key => $s->getTypedValue()])
                ->all();
        });
    }

    /**
     * Clear the settings cache.
     * Call this after any write operation.
     */
    public function flush(): void
    {
        Cache::forget(self::CACHE_KEY);
    }
}
