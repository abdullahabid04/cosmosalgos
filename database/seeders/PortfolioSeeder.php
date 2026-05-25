<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Service;
use App\Models\Technology;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $services = collect(config('portfolio.placeholders.services'));
        $projects = collect(config('portfolio.placeholders.projects'));
        $technologies = collect(config('portfolio.placeholders.technologies'));
        $testimonials = collect(config('portfolio.placeholders.testimonials'));

        $services->values()->each(function (array $service, int $index): void {
            Service::query()->updateOrCreate(
                ['slug' => Str::slug($service['title'])],
                [
                    'title' => $service['title'],
                    'description' => $service['description'],
                    'sort_order' => $index + 1,
                    'is_active' => true,
                ],
            );
        });

        $projects->values()->each(function (array $project, int $index): void {
            Project::query()->updateOrCreate(
                ['slug' => Str::slug($project['title'])],
                [
                    'title' => $project['title'],
                    'summary' => $project['summary'],
                    'sort_order' => $index + 1,
                    'is_featured' => $index < 3,
                    'is_active' => true,
                ],
            );
        });

        $technologies->values()->each(function (string $name, int $index): void {
            Technology::query()->updateOrCreate(
                ['slug' => Str::slug($name)],
                [
                    'name' => $name,
                    'sort_order' => $index + 1,
                    'is_active' => true,
                ],
            );
        });

        $testimonials->values()->each(function (array $testimonial, int $index): void {
            Testimonial::query()->updateOrCreate(
                [
                    'quote' => $testimonial['quote'],
                    'author_name' => $testimonial['author'],
                ],
                [
                    'author_role' => null,
                    'sort_order' => $index + 1,
                    'is_active' => true,
                ],
            );
        });
    }
}
