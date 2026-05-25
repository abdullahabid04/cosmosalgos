@extends('layouts.app')

@section('title', 'Mission & Vision | Cosmos Algos')
@section('meta_description', 'Cosmos Algos mission: engineering AI, IoT, and software systems that solve real problems. Our vision: to be the engineering partner that Pakistan-based technology companies trust to build at scale.')

@section('content')

    {{-- ═══════════════════════════════════
         HERO
    ═══════════════════════════════════ --}}
    <section class="page-hero mv-hero" id="mv-hero">
        <div class="page-hero-bg" aria-hidden="true">
            <div class="hero-orb hero-orb-1"></div>
            <div class="hero-orb hero-orb-2"></div>
            <div class="hero-orb hero-orb-3"></div>
        </div>
        <div class="container mv-hero-inner">
            <span class="tag-label">Purpose & Direction</span>
            <h1 class="page-hero-title">Mission &amp; <span class="hero-h1-accent">Vision</span></h1>
            <p class="lead" style="max-width:660px;margin-top:1.2rem;">
                What we believe about software engineering, why we started Cosmos Algos,
                and where we intend to take it.
            </p>
        </div>
    </section>

    {{-- ═══════════════════════════════════
         MISSION + VISION — LARGE CARDS
    ═══════════════════════════════════ --}}
    <section class="section section-lg">
        <div class="container">
            <div class="mv-duo-grid" data-reveal-group>

                <div class="mv-large-card mv-mission card">
                    <div class="mv-large-card-bg" aria-hidden="true"></div>
                    <div class="mv-large-card-inner">
                        <div class="mv-large-icon">🎯</div>
                        <div class="mv-large-label">Our Mission</div>
                        <h2 class="mv-large-heading">
                            Engineering systems that connect the physical world to intelligent software.
                        </h2>
                        <p>
                            We exist to build software, IoT systems, and AI solutions that solve real operational problems —
                            for farms, factories, research labs, and businesses that need technology to work reliably,
                            not just impressively. Every line of code we write should make something in the physical world
                            more efficient, more connected, or more intelligent.
                        </p>
                        <div class="mv-large-card-line"></div>
                    </div>
                </div>

                <div class="mv-large-card mv-vision card">
                    <div class="mv-large-card-bg" aria-hidden="true"></div>
                    <div class="mv-large-card-inner">
                        <div class="mv-large-icon">🌌</div>
                        <div class="mv-large-label">Our Vision</div>
                        <h2 class="mv-large-heading">
                            To become the engineering partner that scales with your ambition.
                        </h2>
                        <p>
                            We envision Cosmos Algos as the technical backbone for the next generation of IoT-driven
                            businesses — a studio that combines the depth of a product team with the flexibility of
                            a partner. Where companies come not just to build, but to architect systems that last
                            years, not months.
                        </p>
                        <div class="mv-large-card-line"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════
         THE STORY — WHY COSMOS ALGOS EXISTS
    ═══════════════════════════════════ --}}
    <section class="section section-alt section-lg" data-reveal="up">
        <div class="container">
            <div class="text-two-col">
                <div>
                    <span class="tag-label">The Story</span>
                    <h2>Why Cosmos Algos Exists</h2>
                    <p>
                        It started with a coding challenge from a father to his son in 2020. What began as
                        curiosity — console apps, algorithms, building for the sake of understanding — evolved
                        into something with a sharper purpose.
                    </p>
                    <p class="secondary-para">
                        Over five years, working on industrial automation, embedded systems, IoT SaaS platforms,
                        and AI pipelines, one thing became clear: most engineering problems are not technically
                        unsolvable — they are organisationally neglected. Businesses need a reliable technical
                        partner who understands both the hardware and the software, both the product and the
                        deployment, both the MVP and the scale.
                    </p>
                    <p class="secondary-para">
                        Cosmos Algos was founded in 2023 to be exactly that partner. Based in Bahawalpur,
                        Pakistan — built to work globally.
                    </p>
                </div>
                <div class="mv-story-visual card">
                    <div class="mv-story-timeline">
                        <div class="mv-story-point">
                            <span class="mv-story-year">2020</span>
                            <span class="mv-story-event">First line of C++. Curiosity ignited.</span>
                        </div>
                        <div class="mv-story-point">
                            <span class="mv-story-year">2021</span>
                            <span class="mv-story-event">First real client projects. Flutter, IoT, automation.</span>
                        </div>
                        <div class="mv-story-point">
                            <span class="mv-story-year">2022</span>
                            <span class="mv-story-event">Industrial hardware. Raspberry Pi. Embedded systems.</span>
                        </div>
                        <div class="mv-story-point">
                            <span class="mv-story-year">2023</span>
                            <span class="mv-story-event mv-story-event--key">Founded Cosmos Algos. IoT SaaS at scale.</span>
                        </div>
                        <div class="mv-story-point">
                            <span class="mv-story-year">2024</span>
                            <span class="mv-story-event">FluxSense AI. RealSense pipelines. VFD control.</span>
                        </div>
                        <div class="mv-story-point mv-story-point--active">
                            <span class="mv-story-year">2025</span>
                            <span class="mv-story-event">AI/ML expansion. Enterprise delivery. Growing.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════
         CORE VALUES
    ═══════════════════════════════════ --}}
    <section class="section section-lg">
        <div class="container">
            <div class="section-head-center" data-reveal="up">
                <span class="tag-label">What We Stand On</span>
                <h2>Core Values</h2>
                <p class="section-subhead">These aren't aspirational posters. They're the principles that shape every technical decision we make.</p>
            </div>

            <div class="mv-values-grid" data-reveal-group>

                <div class="mv-value-card card">
                    <div class="mv-value-num">01</div>
                    <h4>Engineering Integrity</h4>
                    <p>We build things properly — not fast-and-broken. Shortcuts are technical debt we refuse to inherit. Correct architecture from day one, always.</p>
                </div>

                <div class="mv-value-card card">
                    <div class="mv-value-num">02</div>
                    <h4>Real-World Reliability</h4>
                    <p>Software that breaks in production is useless software. We design for failure modes, test against real conditions, and ship things that stay up.</p>
                </div>

                <div class="mv-value-card card">
                    <div class="mv-value-num">03</div>
                    <h4>Relentless Curiosity</h4>
                    <p>We started because of curiosity and it hasn't stopped. We explore new domains, learn new stacks, and never stop asking why before how.</p>
                </div>

                <div class="mv-value-card card">
                    <div class="mv-value-num">04</div>
                    <h4>Client Partnership</h4>
                    <p>We don't deliver and disappear. We stay involved, iterate on feedback, and treat your product as if we had stake in its success — because we do.</p>
                </div>

                <div class="mv-value-card card">
                    <div class="mv-value-num">05</div>
                    <h4>Pragmatic Innovation</h4>
                    <p>AI and IoT aren't buzzwords for us — they're tools we've shipped. We adopt what solves problems, not what's trending on a conference slide.</p>
                </div>

                <div class="mv-value-card card">
                    <div class="mv-value-num">06</div>
                    <h4>Transparent Communication</h4>
                    <p>We say what's possible, flag what isn't, and update without being asked. No surprises. No smoke and mirrors. Just honest engineering dialogue.</p>
                </div>

            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════
         BELIEFS — WHAT WE STAND FOR
    ═══════════════════════════════════ --}}
    <section class="section section-alt section-lg" data-reveal="up">
        <div class="container">
            <div class="section-head-center">
                <span class="tag-label">Our Beliefs</span>
                <h2>What We Believe About Software</h2>
            </div>

            <div class="mv-beliefs-grid" data-reveal-group>
                <div class="mv-belief">
                    <span class="mv-belief-quote">"</span>
                    <p>Great software is invisible. It just works, every time, without demanding attention.</p>
                </div>
                <div class="mv-belief">
                    <span class="mv-belief-quote">"</span>
                    <p>The best architecture is the simplest one that fully solves the problem. Complexity is a cost, not an achievement.</p>
                </div>
                <div class="mv-belief">
                    <span class="mv-belief-quote">"</span>
                    <p>Hardware and software are not separate disciplines. The best IoT engineers understand both.</p>
                </div>
                <div class="mv-belief">
                    <span class="mv-belief-quote">"</span>
                    <p>AI should be embedded where it creates genuine value — not bolted on as a marketing feature.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════
         CTA
    ═══════════════════════════════════ --}}
    <section class="section section-lg" data-reveal="up">
        <div class="container">
            <div class="proj-cta-block card">
                <div class="proj-cta-glow" aria-hidden="true"></div>
                <span class="tag-label">Work With Purpose</span>
                <h2>Aligned on What Matters?</h2>
                <p>If our mission resonates and you have a problem worth solving, let's talk about how we build the right solution together.</p>
                <div class="hero-cta-row" style="justify-content:center;margin-top:2rem;">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Get in Touch</a>
                    <a href="{{ route('about') }}" class="btn btn-ghost">About the Team</a>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        (function () {
            const io = new IntersectionObserver(entries => {
                entries.forEach(en => {
                    if (en.isIntersecting) {
                        en.target.classList.add('is-visible');
                        io.unobserve(en.target);
                    }
                });
            }, { threshold: 0.10 });
            document.querySelectorAll('[data-reveal], [data-reveal-group]').forEach(el => io.observe(el));
        })();
    </script>
@endpush
