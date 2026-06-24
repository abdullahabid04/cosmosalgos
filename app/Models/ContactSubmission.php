<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'ip_address',
        'user_agent',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
        ];
    }

    // ── Scopes ────────────────────────────────────────────────────────────
    public function scopeNew($query)
    {
        return $query->where('status', 'new');
    }

    public function scopeRead($query)
    {
        return $query->where('status', 'read');
    }

    public function scopeArchived($query)
    {
        return $query->where('status', 'archived');
    }

    public function scopeUnread($query)
    {
        return $query->where('status', 'new');
    }

    // ── Helpers ───────────────────────────────────────────────────────────
    public function markAsRead(): void
    {
        if ($this->status === 'new') {
            $this->update(['status' => 'read']);
        }
    }

    public function archive(): void
    {
        $this->update(['status' => 'archived']);
    }

    public function isNew(): bool
    {
        return $this->status === 'new';
    }
}
