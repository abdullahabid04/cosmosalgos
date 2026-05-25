# Cosmos Algos Portfolio (Laravel 12 Foundation)

This is the fresh Laravel 12 foundation for the Cosmos Algos company portfolio website.

## Implemented in this phase

- Scalable route structure in `routes/web.php`.
- Page orchestration via `app/Http/Controllers/PageController.php`.
- View-model composition via `app/ViewModels/PortfolioViewModel.php`.
- Config-first content placeholders in `config/portfolio.php`.
- Reusable Blade architecture:
  - `resources/views/layouts`
  - `resources/views/partials`
  - `resources/views/components/sections`
  - `resources/views/components/cards`
  - `resources/views/components/ui`
  - `resources/views/pages`
- Responsive premium-style base UI in `resources/css/app.css`.
- Phase 2 backend modules:
  - database schema for services, projects, technologies, testimonials, and contact submissions
  - repository interfaces + Eloquent implementations
  - service layer for portfolio content and contact submissions
  - validated contact form workflow (`ContactSubmissionRequest`, `ContactSubmissionController`)
  - SEO metadata defaults via view model and layout meta tags

## Architectural decisions

- **Component-first UI system:** all core blocks are reusable Blade components.
- **Thin controllers:** page actions delegate content composition to a view model.
- **Config-first placeholders:** avoids hardcoding while keeping migration to database straightforward.
- **Future CMS/admin readiness:** route/view boundaries are prepared for service/repository integration.

## Planned dynamic modules

- Services (`services` table + ordering + activation flags).
- Projects and case studies (`projects`, tags, outcomes, media).
- Technologies (`technologies` and project pivot mapping).
- Testimonials (`testimonials` with moderation/display control).
- Contact submissions (`contact_messages` with notification workflow).
- Blog/content SEO module (`posts`, categories, tags).

## Environment note

Laravel 12 requires PHP `^8.2`. In this local environment, project creation completed but composer post-install artisan scripts failed due PHP version mismatch. The codebase is in place; upgrade local PHP to 8.2+ for full runtime commands (`artisan`, migrations, serve).
