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

        $serviceSlugs = $services->map(fn (array $service): string => Str::slug($service['title']))->all();
        Service::query()->whereNotIn('slug', $serviceSlugs)->delete();

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

        $projectSlugs = $projects->map(fn (array $project): string => Str::slug($project['title']))->all();
        Project::query()->whereNotIn('slug', $projectSlugs)->delete();

        $projects->values()->each(function (array $project, int $index): void {
            Project::query()->updateOrCreate(
                ['slug' => Str::slug($project['title'])],
                [
                    'title' => $project['title'],
                    'summary' => $project['summary'],
                    'client' => $project['attribution'] ?? null,
                    'year' => $project['year'] ?? null,
                    'sort_order' => $index + 1,
                    'is_featured' => $index < 3,
                    'is_active' => true,
                ],
            );
        });

        $technologySlugs = $technologies->map(fn (string $name): string => Str::slug($name))->all();
        Technology::query()->whereNotIn('slug', $technologySlugs)->delete();

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

        // No testimonials are published unless a real, attributable quote is
        // supplied. Clear any previously seeded placeholder quotes.
        if ($testimonials->isEmpty()) {
            Testimonial::query()->delete();
        }

        $testimonials->values()->each(function (array $testimonial, int $index): void {
            Testimonial::query()->updateOrCreate(
                [
                    'quote' => $testimonial['quote'],
                    'author_name' => $testimonial['author'],
                ],
                [
                    'author_role' => $testimonial['role'] ?? null,
                    'sort_order' => $index + 1,
                    'is_active' => true,
                ],
            );
        });
    }
}
