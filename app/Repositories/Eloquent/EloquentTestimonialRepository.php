<?php

namespace App\Repositories\Eloquent;

use App\Models\Testimonial;
use App\Repositories\Contracts\TestimonialRepositoryInterface;

class EloquentTestimonialRepository implements TestimonialRepositoryInterface
{
    public function active(): array
    {
        return Testimonial::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get(['quote', 'author_name', 'author_role'])
            ->map(function (Testimonial $testimonial): array {
                $author = $testimonial->author_name;
                if ($testimonial->author_role) {
                    $author .= ' - ' . $testimonial->author_role;
                }

                return [
                    'quote' => $testimonial->quote,
                    'author' => $author,
                ];
            })
            ->all();
    }
}
