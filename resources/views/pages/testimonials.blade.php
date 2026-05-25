@extends('layouts.app')

@section('title', ($company['name'] ?? 'Cosmos Algos') . ' | Client Testimonials')
@section('meta_description', 'Read what our clients say about working with Cosmos Algos — 100% satisfaction across IoT, AI, SaaS, and embedded systems projects.')

@section('content')

    {{-- ── PAGE HERO ── --}}
    <section class="section section-lg testi-page-hero">
        <div class="container">
            <div class="testi-hero-inner">
                <span class="tag-label">Client Reviews</span>
                <h1 class="testi-page-h1">
                    What Our Clients<br>
                    <span class="hero-h1-accent">Say About Us</span>
                </h1>
                <p class="lead">
                    Every project we deliver is measured by one standard — does the client consider it a success?
                    Here's what they told us after we shipped.
                </p>
            </div>

            {{-- Stat strip --}}
            <div class="testi-hero-stats">
                <div class="testi-hero-stat">
                    <span class="testi-hero-stat-num">100%</span>
                    <span class="testi-hero-stat-label">Client Satisfaction</span>
                </div>
                <div class="testi-hero-stat-divider"></div>
                <div class="testi-hero-stat">
                    <span class="testi-hero-stat-num">20+</span>
                    <span class="testi-hero-stat-label">Projects Delivered</span>
                </div>
                <div class="testi-hero-stat-divider"></div>
                <div class="testi-hero-stat">
                    <span class="testi-hero-stat-num">10+</span>
                    <span class="testi-hero-stat-label">Happy Clients</span>
                </div>
                <div class="testi-hero-stat-divider"></div>
                <div class="testi-hero-stat">
                    <span class="testi-hero-stat-num">5★</span>
                    <span class="testi-hero-stat-label">Average Rating</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ── FEATURED TESTIMONIAL ── --}}
    <section class="section section-alt section-lg">
        <div class="container">
            <div class="featured-testi-card card">
                <div class="featured-testi-quote-mark">"</div>
                <blockquote class="featured-testi-text">
                    This is the best tech partner we've ever worked with. Their solutions are innovative
                    and their support is unparalleled. Cosmos Algos truly understands the complexity of
                    industrial systems — they delivered not just working software, but a system our team
                    actually relies on daily. The architecture was clean, the documentation thorough,
                    and the handover seamless. We didn't just get a vendor; we got a partner.
                </blockquote>
                <div class="featured-testi-author">
                    <div class="featured-testi-avatar">OD</div>
                    <div class="featured-testi-meta">
                        <div class="featured-testi-name">Ostap D.</div>
                        <div class="featured-testi-role">COO — Electronics Manufacturer</div>
                        <div class="rating-row featured-rating">
                            <span class="star">★</span><span class="star">★</span>
                            <span class="star">★</span><span class="star">★</span>
                            <span class="star">★</span>
                        </div>
                    </div>
                    <div class="featured-testi-badge-col">
                        <span class="meta-chip">Electronics</span>
                        <span class="meta-chip">Industrial IoT</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ── ALL TESTIMONIALS GRID ── --}}
    <section class="section section-lg">
        <div class="container">

            <div class="section-head-center" style="margin-bottom:2.5rem;">
                <span class="tag-label">All Reviews</span>
                <h2>Straight from Our Clients</h2>
                <p>Across industries, project types, and timelines — here's the feedback we've earned.</p>
            </div>

            {{-- TODO: Loop $testimonials from controller when DB is populated --}}
            <div class="testi-page-grid">

                <div class="testimonial-card">
                    <div class="testi-quote">"</div>
                    <p class="testi-text">
                        Cosmos Algos transformed our business with their advanced analytics and custom
                        software. We couldn't be happier with the results. Their architecture-first
                        approach gave us a system that actually scales — not just something that works
                        today and breaks tomorrow.
                    </p>
                    <div class="testi-author">
                        <div class="testi-avatar">CA</div>
                        <div>
                            <div class="testi-name">Client A</div>
                            <div class="testi-role">CTO — SaaS Platform</div>
                            <div class="rating-row">
                                <span class="star">★</span><span class="star">★</span>
                                <span class="star">★</span><span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                        </div>
                        <span class="testi-industry-tag">SaaS</span>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testi-quote">"</div>
                    <p class="testi-text">
                        Their expertise in IoT solutions has streamlined our operations and significantly
                        boosted our growth. Every deliverable was clean, documented, and production-ready
                        from day one. We've worked with multiple vendors before — Cosmos Algos is in a
                        different league when it comes to professionalism and delivery.
                    </p>
                    <div class="testi-author">
                        <div class="testi-avatar">CB</div>
                        <div>
                            <div class="testi-name">Client B</div>
                            <div class="testi-role">Operations Director — Manufacturing</div>
                            <div class="rating-row">
                                <span class="star">★</span><span class="star">★</span>
                                <span class="star">★</span><span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                        </div>
                        <span class="testi-industry-tag">Manufacturing</span>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testi-quote">"</div>
                    <p class="testi-text">
                        Choosing Cosmos Algos was the best decision for our digital transformation. Their
                        team is skilled, responsive, and committed to excellence. They delivered beyond our
                        expectations — the AI pipeline they built for us runs on real production data and
                        the predictions are genuinely useful for our farm operations.
                    </p>
                    <div class="testi-author">
                        <div class="testi-avatar">CC</div>
                        <div>
                            <div class="testi-name">Client C</div>
                            <div class="testi-role">Founder — AgriTech Startup</div>
                            <div class="rating-row">
                                <span class="star">★</span><span class="star">★</span>
                                <span class="star">★</span><span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                        </div>
                        <span class="testi-industry-tag">Agriculture / AI</span>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testi-quote">"</div>
                    <p class="testi-text">
                        We brought Cosmos Algos in to build our remote VFD control system — hardware,
                        mobile app, and backend all in one engagement. The MODBUS integration worked
                        flawlessly from day one and the documentation meant our internal team could
                        take over maintenance without any issues. Exactly what we needed.
                    </p>
                    <div class="testi-author">
                        <div class="testi-avatar">CD</div>
                        <div>
                            <div class="testi-name">Client D</div>
                            <div class="testi-role">Head of Engineering — Industrial Systems</div>
                            <div class="rating-row">
                                <span class="star">★</span><span class="star">★</span>
                                <span class="star">★</span><span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                        </div>
                        <span class="testi-industry-tag">Industrial IoT</span>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testi-quote">"</div>
                    <p class="testi-text">
                        What impressed us most was the combination of hardware and software knowledge in
                        one team. We didn't have to coordinate between separate embedded and backend
                        vendors — Cosmos Algos handled the full stack and the result is a coherent,
                        well-integrated system that our clients love using.
                    </p>
                    <div class="testi-author">
                        <div class="testi-avatar">CE</div>
                        <div>
                            <div class="testi-name">Client E</div>
                            <div class="testi-role">Project Manager — Energy & Utilities</div>
                            <div class="rating-row">
                                <span class="star">★</span><span class="star">★</span>
                                <span class="star">★</span><span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                        </div>
                        <span class="testi-industry-tag">Energy</span>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testi-quote">"</div>
                    <p class="testi-text">
                        The team at Cosmos Algos took time to genuinely understand our healthcare workflow
                        before writing a single line of code. The result is software that our clinical
                        staff adopted immediately because it actually fits how they work. Rare quality
                        in a software vendor.
                    </p>
                    <div class="testi-author">
                        <div class="testi-avatar">CF</div>
                        <div>
                            <div class="testi-name">Client F</div>
                            <div class="testi-role">Director of Operations — Healthcare</div>
                            <div class="rating-row">
                                <span class="star">★</span><span class="star">★</span>
                                <span class="star">★</span><span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                        </div>
                        <span class="testi-industry-tag">Healthcare</span>
                    </div>
                </div>

            </div>{{-- /testi-page-grid --}}
        </div>
    </section>

    {{-- ── REVIEW PLATFORMS ── --}}
    <section class="section section-alt section-lg">
        <div class="container">
            <div class="section-head-center" style="margin-bottom:2.5rem;">
                <span class="tag-label">Verified Reviews</span>
                <h2>Find Us on Review Platforms</h2>
                <p>Our ratings are independently verified. No cherry-picking — every review counts.</p>
            </div>

            <div class="testi-platforms-grid">

                <div class="testi-platform-card card">
                    <div class="testi-platform-header">
                        <div class="testi-platform-logo">
                            <span class="testi-platform-icon">⭐</span>
                            <span class="testi-platform-name">Clutch</span>
                        </div>
                        <div class="testi-platform-score">5.0</div>
                    </div>
                    <div class="testi-platform-stars rating-row">
                        <span class="star">★</span><span class="star">★</span>
                        <span class="star">★</span><span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <p class="testi-platform-desc">
                        Clutch is a B2B ratings and reviews platform trusted by businesses worldwide to
                        find verified technology vendors.
                    </p>
                    <a href="#" class="testi-platform-link" target="_blank" rel="noopener">
                        View on Clutch <span aria-hidden="true">↗</span>
                    </a>
                </div>

                <div class="testi-platform-card card">
                    <div class="testi-platform-header">
                        <div class="testi-platform-logo">
                            <span class="testi-platform-icon">🏆</span>
                            <span class="testi-platform-name">GoodFirms</span>
                        </div>
                        <div class="testi-platform-score">5.0</div>
                    </div>
                    <div class="testi-platform-stars rating-row">
                        <span class="star">★</span><span class="star">★</span>
                        <span class="star">★</span><span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <p class="testi-platform-desc">
                        GoodFirms provides research-backed company rankings and verified client reviews
                        for IT services and software development firms.
                    </p>
                    <a href="#" class="testi-platform-link" target="_blank" rel="noopener">
                        View on GoodFirms <span aria-hidden="true">↗</span>
                    </a>
                </div>

                <div class="testi-platform-card card">
                    <div class="testi-platform-header">
                        <div class="testi-platform-logo">
                            <span class="testi-platform-icon">🔌</span>
                            <span class="testi-platform-name">Top IoT Developers</span>
                        </div>
                        <div class="testi-platform-score">2025</div>
                    </div>
                    <div class="testi-platform-stars rating-row">
                        <span class="star">★</span><span class="star">★</span>
                        <span class="star">★</span><span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <p class="testi-platform-desc">
                        Independently recognised as a Top IoT Development Company for 2025 based on
                        technical expertise, delivery track record, and client satisfaction scores.
                    </p>
                    <a href="#" class="testi-platform-link" target="_blank" rel="noopener">
                        View Listing <span aria-hidden="true">↗</span>
                    </a>
                </div>

            </div>
        </div>
    </section>

    {{-- ── SATISFACTION NUMBERS ── --}}
    <section class="section section-lg">
        <div class="container">
            <div class="testi-numbers-grid">

                <div class="testi-numbers-copy">
                    <span class="tag-label">By the Numbers</span>
                    <h2>Client Satisfaction is Not a Slogan — It's a Track Record</h2>
                    <p class="testi-numbers-lead">
                        We measure success by one thing: whether the client's problem is actually solved.
                        Every number below is a direct result of that obsession.
                    </p>
                    <a href="{{ route('contact') }}" class="btn btn-primary">Work With Us</a>
                </div>

                <div class="testi-numbers-stats">
                    <div class="testi-stat-card">
                        <div class="testi-stat-num">100%</div>
                        <div class="testi-stat-label">Projects with satisfied clients on handover</div>
                    </div>
                    <div class="testi-stat-card">
                        <div class="testi-stat-num">0</div>
                        <div class="testi-stat-label">Projects abandoned mid-delivery</div>
                    </div>
                    <div class="testi-stat-card">
                        <div class="testi-stat-num">5+</div>
                        <div class="testi-stat-label">Industries successfully served</div>
                    </div>
                    <div class="testi-stat-card">
                        <div class="testi-stat-num">5★</div>
                        <div class="testi-stat-label">Average rating across all platforms</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ── CTA ── --}}
    <section class="section section-alt section-lg">
        <div class="container">
            <div class="testi-cta-box card">
                <span class="tag-label">Your Turn</span>
                <h2>Ready to Become Our Next Success Story?</h2>
                <p>
                    Tell us about your project. We'll respond within 24 hours with a frank assessment
                    of how we'd approach it — no sales pitch, just an honest conversation.
                </p>
                <div class="hero-cta-row" style="justify-content:center; margin-top:1.75rem;">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Start the Conversation</a>
                    <a href="{{ route('projects') }}" class="btn btn-ghost">View Our Projects</a>
                </div>
            </div>
        </div>
    </section>

@endsection
