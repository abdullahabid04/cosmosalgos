@extends('layouts.app')

@section('title', 'References | ' . $company['name'])
@section('meta_description', 'Cosmos Algos does not publish invented testimonials. Client references are available on request with consent, alongside documented case studies.')

@section('content')

    <section class="section section-lg testi-page-hero">
        <div class="container">
            <div class="testi-hero-inner">
                <span class="tag-label">References</span>
                <h1 class="testi-page-h1">
                    Client Feedback,<br>
                    <span class="hero-h1-accent">Handled Honestly</span>
                </h1>
                <p class="lead">
                    We do not publish fabricated quotes, star ratings, or review-platform badges.
                    Where a client is willing to speak with a prospective client, we arrange a
                    reference call directly.
                </p>
            </div>
        </div>
    </section>

    <section class="section section-lg">
        <div class="container">
            <div class="section-head-center" data-reveal="fade-up">
                <span class="tag-label">Why This Page Is Different</span>
                <h2>No Invented Social Proof</h2>
                <p class="section-head-sub">
                    A testimonial is only useful if it is real and attributable. Publishing
                    placeholder quotes would waste your time and damage trust.
                </p>
            </div>

            <div class="grid cols-3" data-stagger>
                <div class="card" style="padding:1.75rem;">
                    <div style="font-size:2rem;margin-bottom:.75rem;" aria-hidden="true">📄</div>
                    <h3 class="reference-card-title">Documented Case Studies</h3>
                    <p style="color:var(--muted);">
                        Project scope, technical approach, and attribution are described in the
                        case studies — including which work was delivered through CARE Lab or a
                        research contract.
                    </p>
                    <a href="{{ route('case-studies') }}" class="contact-link" style="display:inline-block;margin-top:.75rem;">Read case studies →</a>
                </div>
                <div class="card" style="padding:1.75rem;">
                    <div style="font-size:2rem;margin-bottom:.75rem;" aria-hidden="true">📞</div>
                    <h3 class="reference-card-title">Reference Calls</h3>
                    <p style="color:var(--muted);">
                        For serious engagements, we can ask a past client whether they are willing
                        to take a reference call. Their consent comes first, and we do not share
                        their contact details without it.
                    </p>
                    <a href="{{ route('contact') }}" class="contact-link" style="display:inline-block;margin-top:.75rem;">Request a reference →</a>
                </div>
                <div class="card" style="padding:1.75rem;">
                    <div style="font-size:2rem;margin-bottom:.75rem;" aria-hidden="true">🔍</div>
                    <h3 class="reference-card-title">Technical Due Diligence</h3>
                    <p style="color:var(--muted);">
                        Where confidentiality allows, we will walk through architecture, code
                        structure, and deployment decisions rather than asking you to rely on
                        marketing claims.
                    </p>
                    <a href="{{ route('projects') }}" class="contact-link" style="display:inline-block;margin-top:.75rem;">See selected work →</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-alt section-lg">
        <div class="container">
            <div class="text-two-col">
                <div>
                    <span class="tag-label">Attribution</span>
                    <h2>Work Is Credited to the Right Organisation</h2>
                    <p>
                        Some of the strongest engineering work described on this site was delivered
                        through the Center of Automation, Robotics &amp; Embedded Systems (CARE Lab)
                        at The Islamia University of Bahawalpur, or under a research contract at
                        DeepEmbed Research Lab. Those projects are labelled accordingly.
                    </p>
                    <p class="secondary-para">
                        Cosmos Algos does not claim another organisation's client relationship as its
                        own. If you need to know exactly who delivered a specific piece of work, ask
                        and we will tell you.
                    </p>
                </div>
                <div class="card" style="padding:1.75rem;">
                    <span class="tag-label">What We Can Share</span>
                    <ul class="why-list" style="margin-top:1rem;">
                        <li>Project scope and technical approach</li>
                        <li>Architecture and stack decisions</li>
                        <li>Which organisation the work was delivered through</li>
                        <li>Reference contacts with client consent</li>
                        <li>Known limitations and what we would do differently</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section-lg contact-cta-section">
        <div class="container">
            <div class="contact-cta-inner" data-reveal="zoom-in">
                <span class="tag-label">Next Step</span>
                <h2 class="contact-cta-h2 glitch-ready">Ask Us for Evidence</h2>
                <p class="contact-cta-sub">
                    Tell us which project is closest to your problem and we will explain what was
                    built, what was not, and whether a reference is possible.
                </p>
                <div class="contact-cta-actions">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Contact Us <span aria-hidden="true">↗</span></a>
                    <a href="{{ route('projects') }}" class="btn btn-ghost">Browse Projects</a>
                </div>
            </div>
        </div>
    </section>

@endsection
