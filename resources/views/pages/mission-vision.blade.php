@extends('layouts.app')

@section('title', 'Mission & Vision | Cosmos Algos')
@section('meta_description', 'The mission, vision, and working principles behind Cosmos Algos — a small engineering company in Bahawalpur building software, IoT systems, and applied AI.')

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
                            We exist to build software, IoT systems, and applied AI that solve operational
                            problems — for industrial, agricultural, research, and business settings where
                            the technology has to work reliably, not just demo well. The measure is whether
                            the system is useful to the people operating it.
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
                            To be a dependable technical partner for organisations building connected systems.
                        </h2>
                        <p>
                            We want Cosmos Algos to be a dependable technical partner for small and mid-sized
                            organisations building connected systems — combining product-level care with the
                            flexibility of a small team. The aim is systems that can be maintained and extended,
                            not just delivered.
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
                        Over five years of work on industrial automation, embedded systems, IoT platforms,
                        and applied AI, a recurring problem became clear: projects often fail at the seams
                        between hardware, backend, and the people operating the system. A small team that
                        understands more than one layer can close those gaps.
                    </p>
                    <p class="secondary-para">
                        Cosmos Algos was founded in 2023 to do that work. Based in Bahawalpur, Pakistan,
                        and working with clients and collaborators where the engagement makes sense.
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
                            <span class="mv-story-event">Joined CARE Lab. Python tooling, automation, early IoT work.</span>
                        </div>
                        <div class="mv-story-point">
                            <span class="mv-story-year">2022</span>
                            <span class="mv-story-event">Industrial hardware. Raspberry Pi. Embedded systems.</span>
                        </div>
                        <div class="mv-story-point">
                            <span class="mv-story-year">2023</span>
                            <span class="mv-story-event mv-story-event--key">Founded Cosmos Algos. Backend and SaaS platform work.</span>
                        </div>
                        <div class="mv-story-point">
                            <span class="mv-story-year">2024</span>
                            <span class="mv-story-event">Multi-tenant SaaS, Stripe, OTA updates, time-series data.</span>
                        </div>
                        <div class="mv-story-point mv-story-point--active">
                            <span class="mv-story-year">2025</span>
                            <span class="mv-story-event">Flock Sense AI contract. RealSense pipeline. VFD control.</span>
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
                <p class="section-subhead">Principles we aim to work by — not claims that every decision has lived up to them.</p>
            </div>

            <div class="mv-values-grid" data-reveal-group>

                <div class="mv-value-card card">
                    <div class="mv-value-num">01</div>
                    <h3>Engineering Integrity</h3>
                    <p>We try to build things properly rather than fast-and-broken. Shortcuts are treated as technical debt, and architecture is agreed before code is written.</p>
                </div>

                <div class="mv-value-card card">
                    <div class="mv-value-num">02</div>
                    <h3>Real-World Reliability</h3>
                    <p>Software that breaks in production is not useful software. We consider failure modes, test against realistic conditions, and document known limits.</p>
                </div>

                <div class="mv-value-card card">
                    <div class="mv-value-num">03</div>
                    <h3>Curiosity</h3>
                    <p>We started because of curiosity and try to keep it. New domains and stacks are learned when a problem requires them, with why considered before how.</p>
                </div>

                <div class="mv-value-card card">
                    <div class="mv-value-num">04</div>
                    <h3>Client Partnership</h3>
                    <p>We prefer to stay involved after delivery where the scope allows, respond to feedback, and treat the client's operational success as the point of the work.</p>
                </div>

                <div class="mv-value-card card">
                    <div class="mv-value-num">05</div>
                    <h3>Pragmatic Innovation</h3>
                    <p>AI and IoT are tools we have used in delivered work, not decoration. Technology is chosen because it solves the problem, not because it is trending.</p>
                </div>

                <div class="mv-value-card card">
                    <div class="mv-value-num">06</div>
                    <h3>Transparent Communication</h3>
                    <p>We try to say what is possible, flag what is not, and raise problems early. The goal is straightforward engineering dialogue, not optimistic silence.</p>
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
                    <p>Good software should be mostly invisible — it works without demanding constant attention.</p>
                </div>
                <div class="mv-belief">
                    <span class="mv-belief-quote">"</span>
                    <p>The better architecture is usually the simplest one that solves the problem. Complexity is a cost, not an achievement.</p>
                </div>
                <div class="mv-belief">
                    <span class="mv-belief-quote">"</span>
                    <p>Hardware and software are not separate disciplines. Good IoT work usually requires understanding both.</p>
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
                    <a href="{{ route('about') }}" class="btn btn-ghost">About Cosmos Algos</a>
                </div>
            </div>
        </div>
    </section>

@endsection
