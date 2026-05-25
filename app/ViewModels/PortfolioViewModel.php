<?php

namespace App\ViewModels;

use App\Services\PortfolioContentService;

class PortfolioViewModel
{
    public function __construct(
        private readonly PortfolioContentService $portfolioContentService,
    ) {
    }

    public function baseData(string $pageKey = 'home'): array
    {
        $company = config('portfolio.company');

        return [
            'company' => $company,
            'navigation' => config('portfolio.navigation'),
            'services' => $this->portfolioContentService->services(),
            'projects' => $this->portfolioContentService->projects(),
            'technologies' => $this->portfolioContentService->technologies(),
            'testimonials' => $this->portfolioContentService->testimonials(),
            'seo' => $this->seo($pageKey, $company),
        ];
    }

    private function seo(string $pageKey, array $company): array
    {
        $pages = [
            'home' => ['title' => $company['name'], 'description' => $company['description']],
            'about' => ['title' => 'About | ' . $company['name'], 'description' => 'Learn about the team, mindset, and engineering values behind Cosmos Algos.'],
            'services' => ['title' => 'Services | ' . $company['name'], 'description' => 'Explore software engineering, analytics, and transformation services offered by Cosmos Algos.'],
            'projects' => ['title' => 'Projects | ' . $company['name'], 'description' => 'Review featured project work and delivery patterns from Cosmos Algos.'],
            'technologies' => ['title' => 'Technologies | ' . $company['name'], 'description' => 'See the core technologies used by Cosmos Algos for scalable product delivery.'],
            'contact' => ['title' => 'Contact | ' . $company['name'], 'description' => 'Get in touch with Cosmos Algos to discuss your software and digital product needs.'],
            'faq' => ['title' => 'FAQ | ' . $company['name'], 'description' => 'Frequently asked questions about Cosmos Algos — our services, process, technology, pricing, and more.'],
            'testimonials' => ['title' => 'Testimonials | ' . $company['name'], 'description' => 'Read what our clients say about working with Cosmos Algos — satisfaction across IoT, AI, SaaS, and embedded systems.'],
            'history' => ['title' => 'Our History | ' . $company['name'], 'description' => 'Trace the journey of Cosmos Algos — from first lines of code in 2020 to a full-scale AI and embedded systems company.'],
            'industries' => ['title' => 'Industries We Serve | ' . $company['name'], 'description' => 'Cosmos Algos delivers AI, IoT, SaaS, and embedded systems solutions across Agriculture, Healthcare, Industrial Automation, and more.'],
            'careers' => ['title' => 'Careers | ' . $company['name'], 'description' => 'Join Cosmos Algos. We are looking for engineers, problem-solvers, and builders who want to work on real IoT, AI, and SaaS products.'],
            'mission-vision' => ['title' => 'Mission & Vision | ' . $company['name'], 'description' => 'Learn about the mission and vision driving Cosmos Algos — building intelligent, scalable software systems for real-world impact.'],
            'case-studies' => ['title' => 'Case Studies | ' . $company['name'], 'description' => 'Explore detailed case studies from Cosmos Algos — real projects, measurable outcomes, and architecture insights across industries.'],
        ];

        return $pages[$pageKey] ?? $pages['home'];
    }
}
