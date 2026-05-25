<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageLoadTest extends TestCase
{
    /**
     * Test that all portfolio pages return a successful 200 response.
     */
    public function test_all_pages_load_successfully(): void
    {
        $pages = [
            '/',
            '/about',
            '/services',
            '/projects',
            '/technologies',
            '/contact',
            '/faq',
            '/testimonials',
            '/history',
            '/industries',
            '/careers',
            '/mission-vision',
            '/case-studies',
        ];

        foreach ($pages as $page) {
            $response = $this->get($page);
            $response->assertStatus(200, "Failed to load page: {$page}");
        }
    }
}
