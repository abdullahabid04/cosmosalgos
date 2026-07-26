# Cosmos Algos Portfolio — Project Documentation

## 1. Project Overview

This repository is a Laravel 12 based company portfolio website for Cosmos Algos. The project is currently structured as a public-facing marketing site with a CMS-ready backend foundation, Filament admin scaffolding, and a repository/service layer for content-driven pages.

### Purpose

- Present the company brand, services, projects, technologies, testimonials, and contact information.
- Provide a future-ready content management foundation for portfolio content.
- Support an internal admin experience through Filament.

### Core characteristics

- Laravel 12 application
- PHP 8.2+ target
- Blade-based server-rendered views
- Tailwind CSS + Vite frontend pipeline
- Alpine.js for lightweight frontend interactions
- Repository + service layer pattern for content access
- Config-first placeholders used to decouple content from hardcoded values

---

## 2. Architecture

### Overall architecture

The application follows a typical Laravel MVC structure with a light service/repository abstraction for dynamic content.

Flow:

- Browser requests a page route.
- A controller resolves page data.
- A view model composes SEO and content values.
- A service layer fetches portfolio data from repositories.
- Repositories query Eloquent models.
- Blade views render HTML using layout/partial/component structure.

### Architectural style

- MVC for page rendering
- Service layer for business logic around portfolio content and contact submissions
- Repository pattern for persistence abstraction
- View model for page-specific data assembly
- Filament administration layer for future admin-driven content management

### Laravel version

- Laravel 12

### PHP version

- Target: PHP ^8.2

### Frontend stack

- Blade templates
- Tailwind CSS
- Vite
- Alpine.js

---

## 3. Folder Structure

### Root

- app/: application logic
- bootstrap/: application bootstrapping
- config/: configuration files
- database/: migrations, seeders, factories
- public/: web entrypoint and static assets
- resources/: views, CSS, JS, and templates
- routes/: route definitions
- storage/: runtime files
- tests/: unit and feature tests
- vendor/: Composer dependencies

### app/

- Http/Controllers/: page and form controllers
- Models/: Eloquent models for portfolio content and users
- Services/: application services for business logic
- Repositories/: repository interfaces and Eloquent implementations
- ViewModels/: view-specific data composition classes
- Providers/: service container bindings and Filament panel registration
- Filament/: admin resources, pages, widgets
- Policies/: authorization policy classes

### config/

- portfolio.php: company metadata, navigation, placeholder content
- auth.php: authentication guard configuration
- permission.php: Spatie permission configuration
- mail.php, queue.php, filesystems.php, session.php: environment-driven app settings

### database/

- migrations/: schema definitions for portfolio content, auth, permissions, media, settings
- seeders/: admin user creation and content seeding support

### resources/

- views/layouts/: main app layout
- views/pages/: page templates
- views/partials/: navbar and footer
- views/components/: reusable section/card/ui components
- css/: custom styles and animations
- js/: Alpine and frontend interaction bootstrap

---

## 4. Routing Structure

Routes are defined in routes/web.php.

### Public routes

- /: home
- /about
- /services
- /projects
- /technologies
- /contact
- /faq
- /testimonials
- /history
- /industries
- /careers
- /mission-vision
- /case-studies
- /privacy
- /terms

### Form route

- POST /contact -> ContactSubmissionController@store

### Admin route group

- Filament panel is mounted at /admin via AdminPanelProvider.

### Routing conventions

- Page routes are grouped under PageController.
- Named routes are consistently used for navigation and form redirects.

---

## 5. Database Structure

The project includes a broad set of content-oriented tables, many of which are prepared for CMS-style administration.

### Core content tables

- services
- projects
- technologies
- project_technology (pivot)
- testimonials
- contact_submissions
- industries
- case_studies
- blog_categories
- blog_posts
- social_posts
- gallery_albums
- gallery_items
- faq_items
- team_members
- career_listings
- settings

### Conventions

- Most content tables use soft ordering with sort_order and is_active flags.
- Slugs are generated for SEO-friendly URLs.
- Media library support is present for image-based content.
- Common patterns use boolean flags such as is_active and is_featured.

### Relationship summary

- Project belongs to Industry.
- CaseStudy belongs to Industry.
- BlogPost belongs to BlogCategory and User.
- GalleryAlbum has many GalleryItems.
- Project has many Technologies through project_technology.
- ContactSubmission is a standalone submission record.

---

## 6. Models

### Service

- Represents service offerings.
- Supports slug generation, sortable ordering, and media collection support.
- Has an active scope.

### Project

- Represents portfolio projects.
- Belongs to Industry.
- Supports featured and active scopes.
- Supports media thumbnails and slugs.

### Technology

- Represents technology stack items.
- Has active and category-based scopes.

### Testimonial

- Represents client testimonials.
- Supports active and ordered scopes.
- Uses media for avatar support.

### ContactSubmission

- Stores inbound contact submissions.
- Includes scopes for new/read/archived/unread and helper methods for state transitions.

### Industry

- Groups projects and case studies by sector.

### CaseStudy

- Represents detailed case studies.
- Belongs to Industry.

### BlogPost, BlogCategory, SocialPost, GalleryAlbum, GalleryItem, FaqItem, TeamMember, CareerListing

- These models are scaffolded for a future content management experience and follow consistent patterns such as slugging, ordering, media support, and active scopes.

### User

- Extends Laravel’s authenticatable model.
- Implements Filament access rules and Spatie roles.

---

## 7. Controllers

### PageController

- Handles all public page rendering.
- Uses PortfolioViewModel to prepare page data.
- Thin controller design.

### ContactSubmissionController

- Accepts validated contact form input.
- Delegates persistence to ContactService.
- Redirects back to the contact page with a success message.

### ContactController

- Presently empty and appears to be a placeholder.

---

## 8. Business Logic

The application uses a layered approach:

- Controllers: request handling and response shaping
- Services: business operations like contact submission and content assembly
- Repositories: persistence abstraction for Eloquent models
- ViewModels: page data composition

This is not a pure MVC-only project. It is a thin-controller, service-oriented Laravel application with repository abstractions for content data.

### Current business logic locations

- Portfolio content composition: app/Services/PortfolioContentService.php
- Contact submission: app/Services/ContactService.php
- Settings caching and typed retrieval: app/Services/SettingsService.php
- Page metadata composition: app/ViewModels/PortfolioViewModel.php

---

## 9. Frontend Analysis

### Blade layout architecture

- Main layout in resources/views/layouts/app.blade.php
- Reusable partials in resources/views/partials/navbar.blade.php and footer.blade.php
- Page templates in resources/views/pages/.

### Reusable UI components

- cards: project-card, service-card, testimonial-card
- sections: hero, tech-stack
- ui: button

### Rendering flow

- Routes resolve to page controller methods.
- Controllers return a Blade page view with a view model dataset.
- Blade pages extend the main layout and render content sections/components.

### Styling approach

- Tailwind CSS utility-first styling
- Custom global CSS in resources/css/app.css
- Additional animation assets in resources/css/cosmos-animations.css and resources/js/cosmos-animations.js

### UI characteristics

- Premium dark theme
- Sticky navbar
- Hero sections with animated backgrounds
- Card-based layouts for services/projects/testimonials
- Responsive design with custom CSS classes for desktop and mobile

---

## 10. UI Component Library

The project contains a component-first approach for page sections:

- Hero section component
- Tech stack section component
- Service card
- Project card
- Testimonial card
- Button component

These are intended to keep the UI reusable and consistent across pages.

---

## 11. Design System

### Visual conventions

- Dark theme with red accent brand color
- Rounded cards and panels
- Strong heading hierarchy
- High-contrast text and subtle borders
- Responsive spacing with container-based layout

### Styling conventions

- CSS custom properties are used for color tokens in app.css.
- Class naming is mostly semantic and component-oriented.

---

## 12. Configuration Analysis

### Important configuration files

- config/portfolio.php: company metadata, nav, placeholder content
- config/auth.php: auth guard defaults
- config/permission.php: role/permission configuration
- .env.example: default environment settings

### Environment assumptions

- SQLite is the default DB connection in .env.example.
- Queue and cache use database-backed storage by default.
- Mail uses log driver by default.

---

## 13. Authentication & Authorization

### Authentication

- Standard Laravel session-based authentication via web guard.
- User model uses the default authenticatable base class.

### Authorization

- Spatie Permission is installed and configured.
- User model uses HasRoles trait.
- Filament panel access is restricted to roles: super_admin, editor, author.

### Admin access

- Admin panel is exposed at /admin.
- A seeded super admin account exists in AdminUserSeeder.

---

## 14. Services & Dependencies

### Third-party packages

- Filament: admin panel and resources
- Filament Shield: role-based admin permissions
- Spatie Media Library: media storage for model assets
- Spatie Permission: roles and permissions
- Spatie Sluggable: slug generation
- Spatie Eloquent Sortable: sortable content ordering
- Spatie Query Builder: query/filter/sort support in repositories
- Spatie Tags: blog tagging support

### Integrations

- No payment processor or external API integration is currently wired.
- Mail is configured but not actively used beyond the contact submission flow scaffold.
- Media uploads are supported via the media library package.

---

## 15. Data Flow

Example: contact submission flow

1. User submits the contact form.
2. Route POST /contact maps to ContactSubmissionController.
3. ContactSubmissionRequest validates input.
4. Controller passes validated payload and request to ContactService.
5. ContactService sends data to the contact submission repository.
6. Repository creates a record in contact_submissions.
7. User is redirected back to the contact page with a success message.

Example: public page flow

1. User requests a page route.
2. PageController handles the request.
3. PortfolioViewModel composes SEO and content data.
4. PortfolioContentService resolves content from repositories or config placeholders.
5. Blade view renders the page content.

---

## 16. Code Quality Review

### Strengths

- Clear separation between controllers, services, repositories, and views
- Consistent use of Eloquent models with scoped access patterns
- Reusable Blade components and organized layout structure
- Config-driven placeholder content reduces hardcoding
- Good use of tests for basic page health

### Areas to improve

- Some controllers and routes appear partially scaffolded rather than fully wired.
- Contact form includes extra fields that are not persisted by the backend.
- Admin resources are not yet implemented, despite admin panel scaffolding.
- Some placeholders are still hardcoded in the UI (e.g. logos, social links, example content).
- There is some inconsistency between public page content and underlying database schema.

---

## 17. Design Patterns

### Used patterns

- Repository pattern: repositories abstract persistence logic.
- Service layer: business operations live in services.
- Dependency injection: controllers and services depend on interfaces and injected services.
- View model: page data is composed in a dedicated class.
- Factory/Model pattern: Eloquent models represent domain entities.
- Observer-style conventions are not yet strongly implemented.

---

## 18. Security Review

### Current strengths

- Form requests are used for validation.
- CSRF protection is enabled by default in Laravel.
- Eloquent mass assignment is controlled via fillable arrays.
- Authentication uses Laravel’s standard session guard.

### Gaps / concerns

- The contact form currently accepts additional fields in the view, but the backend validator does not cover them.
- The contact submission flow does not yet include notification or spam protection.
- No explicit rate limiting or honeypot is implemented yet.
- Some placeholder links and hardcoded emails should be replaced before production use.

---

## 19. Performance Review

### Current strengths

- View models and service layer centralize content access.
- The project uses caching for settings.
- The route structure is simple and lightweight.

### Opportunities

- Eager loading should be added where relationships are loaded in lists.
- Content queries could be cached for frequently accessed portfolio pages.
- Media assets should be optimized and lazy-loaded where possible.
- The frontend can benefit from further asset optimization and selective component loading.

---

## 20. Recommendations

### Short-term

- Implement the remaining admin resources for portfolio content.
- Align the contact form fields with the persistence schema.
- Replace placeholder links, logos, and sample copy with real content.
- Add feature tests for contact submission and admin access.

### Medium-term

- Add explicit domain services for blog, careers, gallery, and case studies.
- Introduce caching around public content queries.
- Improve media handling and image optimization.
- Add notification workflows for new contact submissions.

### Long-term

- Replace placeholder CMS scaffolding with fully curated content workflows.
- Add richer SEO and analytics support.
- Consider adding a proper content approval workflow.

---

## 21. Developer Onboarding Guide

### Prerequisites

- PHP 8.2+
- Composer
- Node.js + npm
- SQLite or another supported database

### Setup

1. Copy .env.example to .env.
2. Configure database connection.
3. Run composer install.
4. Run npm install.
5. Run php artisan migrate.
6. Run php artisan db:seed.
7. Run npm run dev.

### Admin access

- Default admin account: admin@cosmosalgos.com
- Password: CosmosAdmin@2026
- Change immediately after first login.

### Key entry points

- Public routes: routes/web.php
- Main page controller: app/Http/Controllers/PageController.php
- View model: app/ViewModels/PortfolioViewModel.php
- Content service: app/Services/PortfolioContentService.php
- Admin panel: /admin

---

## 22. Suggested Next Steps

1. Finish the Filament resource implementation for services, projects, testimonials, and contact submissions.
2. Align contact form fields and request validation with the storage model.
3. Replace placeholder content with production-ready copy and media.
4. Add richer automated tests around contact submission and admin authorization.
5. Introduce caching and performance optimization for content-heavy pages.
