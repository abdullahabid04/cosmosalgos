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
            'stats' => config('portfolio.stats'),
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
            'about' => ['title' => 'About | ' . $company['name'], 'description' => 'The founder, the working principles, and the engineering background behind Cosmos Algos.'],
            'services' => ['title' => 'Services | ' . $company['name'], 'description' => 'Software, embedded systems, IoT, applied AI, and SaaS engineering services from Cosmos Algos.'],
            'projects' => ['title' => 'Projects | ' . $company['name'], 'description' => 'Documented projects across industrial automation, computer vision, embedded systems, and SaaS.'],
            'technologies' => ['title' => 'Technologies | ' . $company['name'], 'description' => 'The languages, frameworks, hardware, and cloud services used in Cosmos Algos work.'],
            'contact' => ['title' => 'Contact | ' . $company['name'], 'description' => 'Contact Cosmos Algos in Bahawalpur, Pakistan, by email or phone during office hours.'],
            'faq' => ['title' => 'FAQ | ' . $company['name'], 'description' => 'Straight answers about Cosmos Algos services, process, technology, and working arrangements.'],
            'testimonials' => ['title' => 'References | ' . $company['name'], 'description' => 'Cosmos Algos does not publish invented testimonials. Case studies and reference calls with client consent.'],
            'history' => ['title' => 'Our History | ' . $company['name'], 'description' => 'The journey behind Cosmos Algos — from first lines of code in 2020 to applied AI, embedded systems, and SaaS work.'],
            'industries' => ['title' => 'Industries We Serve | ' . $company['name'], 'description' => 'Sectors where Cosmos Algos has worked: agriculture, industrial automation, research, logistics, energy, consumer IoT, mobility, and technology products.'],
            'careers' => ['title' => 'Careers | ' . $company['name'], 'description' => 'Current openings and speculative applications at Cosmos Algos.'],
            'mission-vision' => ['title' => 'Mission & Vision | ' . $company['name'], 'description' => 'The mission, vision, and working principles behind Cosmos Algos.'],
            'case-studies' => ['title' => 'Case Studies | ' . $company['name'], 'description' => 'Documented engineering work from Cosmos Algos, CARE Lab, and a DeepEmbed research contract — with attribution stated plainly.'],
            'culture' => ['title' => 'Culture | ' . $company['name'], 'description' => 'How Cosmos Algos works: hands-on engineering, direct communication, and careful delivery.'],
            'blog' => ['title' => 'Engineering Notes | ' . $company['name'], 'description' => 'Engineering notes from Cosmos Algos on embedded systems, industrial software, IoT, and applied AI.'],
            'social' => ['title' => 'Public Updates | ' . $company['name'], 'description' => 'Public LinkedIn updates from Cosmos Algos founder Abdullah Abid.'],
            'gallery' => ['title' => 'Gallery | ' . $company['name'], 'description' => 'CARE Lab project images published with attribution, and a note on what is not shown.'],
            'privacy' => ['title' => 'Privacy Policy | ' . $company['name'], 'description' => 'How Cosmos Algos handles information submitted through this website.'],
            'terms' => ['title' => 'Terms of Use | ' . $company['name'], 'description' => 'Terms governing the use of the Cosmos Algos website.'],
        ];

        return $pages[$pageKey] ?? $pages['home'];
    }
}
