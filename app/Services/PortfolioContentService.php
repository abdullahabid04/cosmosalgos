<?php

namespace App\Services;

use App\Repositories\Contracts\ProjectRepositoryInterface;
use App\Repositories\Contracts\ServiceRepositoryInterface;
use App\Repositories\Contracts\TechnologyRepositoryInterface;
use App\Repositories\Contracts\TestimonialRepositoryInterface;

class PortfolioContentService
{
    public function __construct(
        private readonly ServiceRepositoryInterface $serviceRepository,
        private readonly ProjectRepositoryInterface $projectRepository,
        private readonly TechnologyRepositoryInterface $technologyRepository,
        private readonly TestimonialRepositoryInterface $testimonialRepository,
    ) {
    }

    public function services(): array
    {
        $items = $this->serviceRepository->active();

        return $items !== [] ? $items : config('portfolio.placeholders.services');
    }

    public function projects(): array
    {
        $featured = $this->projectRepository->featured();

        if ($featured !== []) {
            return $featured;
        }

        $active = $this->projectRepository->active();

        return $active !== [] ? $active : config('portfolio.placeholders.projects');
    }

    public function technologies(): array
    {
        $items = $this->technologyRepository->activeNames();

        return $items !== [] ? $items : config('portfolio.placeholders.technologies');
    }

    public function testimonials(): array
    {
        $items = $this->testimonialRepository->active();

        return $items !== [] ? $items : config('portfolio.placeholders.testimonials');
    }
}
