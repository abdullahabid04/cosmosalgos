@extends('layouts.app')

@section('title', $seo['title'] ?? 'Our History — Cosmos Algos')
@section('meta_description', $seo['description'] ?? 'Trace the journey of Cosmos Algos — from first lines of code in 2020 to a full-scale AI and embedded systems company in 2025.')

@section('content')

    {{-- ══════════════════════════════════════════════════════
         1. PAGE HERO
         ══════════════════════════════════════════════════════ --}}
    <section class="hist-hero">
        <div class="hist-hero-bg" aria-hidden="true">
            <div class="hist-hero-orb hist-hero-orb-1"></div>
            <div class="hist-hero-orb hist-hero-orb-2"></div>
            <div class="hist-hero-grid"></div>
            {{-- Constellation SVG --}}
            <svg class="hist-hero-stars" viewBox="0 0 1200 500" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice">
                <line x1="80"  y1="60"  x2="200" y2="140" stroke="rgba(0,212,255,0.3)"   stroke-width="0.6"/>
                <line x1="200" y1="140" x2="380" y2="90"  stroke="rgba(0,212,255,0.25)"  stroke-width="0.6"/>
                <line x1="380" y1="90"  x2="520" y2="200" stroke="rgba(224,37,26,0.3)"   stroke-width="0.6"/>
                <line x1="520" y1="200" x2="700" y2="80"  stroke="rgba(0,212,255,0.25)"  stroke-width="0.6"/>
                <line x1="700" y1="80"  x2="880" y2="170" stroke="rgba(224,37,26,0.3)"   stroke-width="0.6"/>
                <line x1="880" y1="170" x2="1050" y2="60" stroke="rgba(0,212,255,0.25)"  stroke-width="0.6"/>
                <line x1="80"  y1="60"  x2="140" y2="300" stroke="rgba(123,94,167,0.2)"  stroke-width="0.5"/>
                <line x1="520" y1="200" x2="600" y2="380" stroke="rgba(123,94,167,0.2)"  stroke-width="0.5"/>
                <line x1="880" y1="170" x2="950" y2="350" stroke="rgba(123,94,167,0.2)"  stroke-width="0.5"/>
                {{-- Stars --}}
                <circle cx="80"  cy="60"  r="3"   fill="rgba(224,37,26,0.9)"/>
                <circle cx="200" cy="140" r="2"   fill="rgba(0,212,255,0.8)"/>
                <circle cx="380" cy="90"  r="2.5" fill="rgba(0,212,255,0.7)"/>
                <circle cx="520" cy="200" r="3.5" fill="rgba(224,37,26,0.9)"/>
                <circle cx="700" cy="80"  r="2"   fill="rgba(0,212,255,0.8)"/>
                <circle cx="880" cy="170" r="3"   fill="rgba(224,37,26,0.85)"/>
                <circle cx="1050" cy="60" r="2"   fill="rgba(0,212,255,0.7)"/>
                <circle cx="140" cy="300" r="1.5" fill="rgba(255,183,71,0.6)"/>
                <circle cx="600" cy="380" r="1.5" fill="rgba(255,183,71,0.6)"/>
                <circle cx="950" cy="350" r="1.5" fill="rgba(255,183,71,0.6)"/>
                {{-- Scattered micro stars --}}
                <circle cx="300" cy="40"  r="1" fill="rgba(255,255,255,0.5)"/>
                <circle cx="460" cy="310" r="1" fill="rgba(255,255,255,0.4)"/>
                <circle cx="750" cy="250" r="1" fill="rgba(255,255,255,0.5)"/>
                <circle cx="990" cy="200" r="1" fill="rgba(255,255,255,0.4)"/>
                <circle cx="170" cy="420" r="1" fill="rgba(255,255,255,0.35)"/>
                <circle cx="1100" cy="310" r="1" fill="rgba(255,255,255,0.4)"/>
            </svg>
        </div>
        <div class="container">
            <div class="hist-hero-inner">
                <div class="hist-breadcrumb">
                    <a href="{{ route('home') }}">Home</a>
                    <span>›</span>
                    <span>Our History</span>
                </div>
                <span class="tag-label">Our Journey</span>
                <h1 class="hist-hero-h1">
                    From First Line of Code<br>
                    <span class="hist-hero-accent">to Full-Scale AI Company</span>
                </h1>
                <p class="hist-hero-lead">
                    Five years of consistent growth — from self-taught algorithms to
                    production IoT systems, embedded AI, and enterprise SaaS platforms
                    serving clients across the globe.
                </p>
                <div class="hist-hero-stats">
                    <div class="hist-stat">
                        <span class="hist-stat-num" data-count="5">0</span><span class="hist-stat-num">+</span>
                        <span class="hist-stat-label">Years of Growth</span>
                    </div>
                    <div class="hist-stat-divider"></div>
                    <div class="hist-stat">
                        <span class="hist-stat-num" data-count="6">0</span>
                        <span class="hist-stat-label">Major Milestones</span>
                    </div>
                    <div class="hist-stat-divider"></div>
                    <div class="hist-stat">
                        <span class="hist-stat-num" data-count="20">0</span><span class="hist-stat-num">+</span>
                        <span class="hist-stat-label">Projects Delivered</span>
                    </div>
                    <div class="hist-stat-divider"></div>
                    <div class="hist-stat">
                        <span class="hist-stat-num" data-count="10">0</span><span class="hist-stat-num">+</span>
                        <span class="hist-stat-label">Tech Domains Mastered</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         2. INTRO — JOURNEY OVERVIEW (2-col)
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-lg">
        <div class="container">
            <div class="text-two-col">
                <div data-reveal="fade-right">
                    <span class="tag-label">The Story</span>
                    <h2>Built Slowly. Built Right.</h2>
                    <p>
                        Cosmos Algos didn't start with funding or a team — it started with curiosity,
                        a compiler, and a stubborn refusal to stop learning. Every milestone in our history
                        represents a deliberate step: a new technology mastered, a harder problem solved,
                        a deeper client trust earned.
                    </p>
                    <p class="secondary-para">
                        From console applications in 2020 to AI-powered IoT platforms in 2025 — this is
                        the story of a company that grew by shipping real things, not by writing roadmaps.
                    </p>
                </div>
                <div class="hist-overview-cards" data-reveal="fade-left">
                    <div class="hist-overview-card">
                        <span class="hist-oc-icon">🌱</span>
                        <div>
                            <div class="hist-oc-label">The Beginning</div>
                            <p>C++, OOP fundamentals, and first client work — building the engineering discipline that everything since depends on.</p>
                        </div>
                    </div>
                    <div class="hist-overview-card">
                        <span class="hist-oc-icon">🚀</span>
                        <div>
                            <div class="hist-oc-label">The Breakthrough</div>
                            <p>Founding Cosmos Algos in 2023 — formalising years of freelance and research work into a structured, client-facing company.</p>
                        </div>
                    </div>
                    <div class="hist-overview-card">
                        <span class="hist-oc-icon">🧠</span>
                        <div>
                            <div class="hist-oc-label">The Expansion</div>
                            <p>AI/ML, RealSense vision pipelines, cloud infrastructure, and enterprise SaaS — building the full-spectrum capability we have today.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         3. VERTICAL DETAILED TIMELINE
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-alt section-lg hist-tl-section" id="timeline">
        <div class="container">
            <div class="section-head-center" data-reveal="fade-up">
                <span class="tag-label">Timeline</span>
                <h2>Year by Year</h2>
                <p class="section-head-sub" style="margin-inline:auto;">
                    Every year added a new layer of capability. Here's exactly what was built and learned.
                </p>
            </div>

            <div class="hist-vtl">
                {{-- Vertical track line --}}
                <div class="hist-vtl-track" aria-hidden="true">
                    <div class="hist-vtl-track-fill" id="histVtlFill"></div>
                </div>

                {{-- ── 2020 ── --}}
                <div class="hist-vtl-item hist-vtl-left" id="hist-2020">
                    <div class="hist-vtl-content" data-reveal="fade-right">
                        <div class="hist-vtl-year-badge">2020</div>
                        <div class="hist-vtl-card">
                            <div class="hist-vtl-card-header">
                                <span class="hist-vtl-icon">💻</span>
                                <div>
                                    <h3 class="hist-vtl-heading">Foundations &amp; First Code</h3>
                                    <span class="hist-vtl-phase">Phase 1 — Learning</span>
                                </div>
                            </div>
                            <p class="hist-vtl-desc">
                                The journey began with deep study of C++ and object-oriented programming —
                                not tutorials, but real algorithmic problems. Built the first desktop console
                                applications, established disciplined coding habits, and laid the mathematical
                                and logical foundations that every subsequent project rests on.
                            </p>
                            <div class="hist-vtl-tags">
                                <span class="hist-vtl-tag">C++</span>
                                <span class="hist-vtl-tag">OOP</span>
                                <span class="hist-vtl-tag">Algorithms</span>
                                <span class="hist-vtl-tag">Console Apps</span>
                            </div>
                            <div class="hist-vtl-achievement">
                                <span class="hist-vtl-ach-icon">✦</span>
                                First production-style desktop application shipped
                            </div>
                        </div>
                    </div>
                    <div class="hist-vtl-node-col" aria-hidden="true">
                        <div class="hist-vtl-node hist-vtl-node-sm">
                            <div class="hist-vtl-node-dot"></div>
                            <div class="hist-vtl-node-ring"></div>
                        </div>
                    </div>
                    <div class="hist-vtl-spacer"></div>
                </div>

                {{-- ── 2021 ── --}}
                <div class="hist-vtl-item hist-vtl-right" id="hist-2021">
                    <div class="hist-vtl-spacer"></div>
                    <div class="hist-vtl-node-col" aria-hidden="true">
                        <div class="hist-vtl-node hist-vtl-node-md">
                            <div class="hist-vtl-node-dot"></div>
                            <div class="hist-vtl-node-ring"></div>
                        </div>
                    </div>
                    <div class="hist-vtl-content" data-reveal="fade-left">
                        <div class="hist-vtl-year-badge">2021</div>
                        <div class="hist-vtl-card">
                            <div class="hist-vtl-card-header">
                                <span class="hist-vtl-icon">📱</span>
                                <div>
                                    <h3 class="hist-vtl-heading">Flutter &amp; First Client Work</h3>
                                    <span class="hist-vtl-phase">Phase 2 — Exploration</span>
                                </div>
                            </div>
                            <p class="hist-vtl-desc">
                                Expanded into Python GUI development and cross-platform mobile with Flutter.
                                Delivered first real client projects — small automation tools and mobile apps
                                that required professional quality, deadlines, and communication. The shift
                                from personal projects to client accountability changed everything.
                            </p>
                            <div class="hist-vtl-tags">
                                <span class="hist-vtl-tag">Flutter</span>
                                <span class="hist-vtl-tag">Python</span>
                                <span class="hist-vtl-tag">PyQt5</span>
                                <span class="hist-vtl-tag">Client Projects</span>
                            </div>
                            <div class="hist-vtl-achievement">
                                <span class="hist-vtl-ach-icon">✦</span>
                                First paid client deliverables — mobile &amp; automation tools
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ── 2022 ── --}}
                <div class="hist-vtl-item hist-vtl-left" id="hist-2022">
                    <div class="hist-vtl-content" data-reveal="fade-right">
                        <div class="hist-vtl-year-badge">2022</div>
                        <div class="hist-vtl-card">
                            <div class="hist-vtl-card-header">
                                <span class="hist-vtl-icon">🔌</span>
                                <div>
                                    <h3 class="hist-vtl-heading">Hardware, IoT &amp; Automation</h3>
                                    <span class="hist-vtl-phase">Phase 3 — Hardware Depth</span>
                                </div>
                            </div>
                            <p class="hist-vtl-desc">
                                A decisive turn into embedded systems and hardware. Built a Raspberry Pi-based
                                battery monitoring system used for real industrial testing. Developed PyQt5
                                electrical signal visualiser and battery-charger health monitor — desktop tools
                                used in live lab environments. Automation scripts for API testing and large-scale
                                data simulation rounded out a foundational year in hardware-software integration.
                            </p>
                            <div class="hist-vtl-tags">
                                <span class="hist-vtl-tag">Raspberry Pi</span>
                                <span class="hist-vtl-tag">PyQt5</span>
                                <span class="hist-vtl-tag">Industrial Automation</span>
                                <span class="hist-vtl-tag">Signal Visualisation</span>
                                <span class="hist-vtl-tag">Battery Systems</span>
                            </div>
                            <div class="hist-vtl-achievement">
                                <span class="hist-vtl-ach-icon">✦</span>
                                First hardware-in-the-loop system deployed in industrial testing
                            </div>
                        </div>
                    </div>
                    <div class="hist-vtl-node-col" aria-hidden="true">
                        <div class="hist-vtl-node hist-vtl-node-md">
                            <div class="hist-vtl-node-dot"></div>
                            <div class="hist-vtl-node-ring"></div>
                        </div>
                    </div>
                    <div class="hist-vtl-spacer"></div>
                </div>

                {{-- ── 2023 — FOUNDING ── --}}
                <div class="hist-vtl-item hist-vtl-right hist-vtl-featured" id="hist-2023">
                    <div class="hist-vtl-spacer"></div>
                    <div class="hist-vtl-node-col" aria-hidden="true">
                        <div class="hist-vtl-node hist-vtl-node-lg">
                            <div class="hist-vtl-node-dot"></div>
                            <div class="hist-vtl-node-ring"></div>
                            <div class="hist-vtl-node-ring hist-vtl-node-ring-outer"></div>
                        </div>
                    </div>
                    <div class="hist-vtl-content" data-reveal="fade-left">
                        <div class="hist-vtl-year-badge hist-year-founding">2023</div>
                        <div class="hist-vtl-card hist-vtl-card-featured">
                            <div class="hist-vtl-card-glow" aria-hidden="true"></div>
                            <div class="hist-vtl-founding-label">
                                <span class="hist-vtl-founding-dot" aria-hidden="true"></span>
                                Founding Year
                            </div>
                            <div class="hist-vtl-card-header">
                                <span class="hist-vtl-icon">🏛️</span>
                                <div>
                                    <h3 class="hist-vtl-heading">Cosmos Algos Founded</h3>
                                    <span class="hist-vtl-phase">Phase 4 — Company Formation</span>
                                </div>
                            </div>
                            <p class="hist-vtl-desc">
                                After three years of freelance work, research, and rapidly expanding technical
                                capability, Cosmos Algos was formally founded in Bahawalpur, Pakistan. The
                                company was structured around a clear mission: AI-powered software systems
                                that unite smart software with connected devices and industrial infrastructure.
                                First IoT SaaS platforms and multi-tenant backend APIs were designed and
                                delivered under the Cosmos Algos brand.
                            </p>
                            <div class="hist-vtl-tags">
                                <span class="hist-vtl-tag">Company Founded</span>
                                <span class="hist-vtl-tag">Laravel APIs</span>
                                <span class="hist-vtl-tag">IoT SaaS</span>
                                <span class="hist-vtl-tag">Role-Based Access</span>
                                <span class="hist-vtl-tag">OpenAPI Specs</span>
                            </div>
                            <div class="hist-vtl-achievement hist-vtl-achievement-featured">
                                <span class="hist-vtl-ach-icon">★</span>
                                Cosmos Algos officially founded — Bahawalpur, Punjab, Pakistan
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ── 2024 ── --}}
                <div class="hist-vtl-item hist-vtl-left" id="hist-2024">
                    <div class="hist-vtl-content" data-reveal="fade-right">
                        <div class="hist-vtl-year-badge">2024</div>
                        <div class="hist-vtl-card">
                            <div class="hist-vtl-card-header">
                                <span class="hist-vtl-icon">🤖</span>
                                <div>
                                    <h3 class="hist-vtl-heading">FluxSense, RealSense &amp; Industrial AI</h3>
                                    <span class="hist-vtl-phase">Phase 5 — AI Systems at Scale</span>
                                </div>
                            </div>
                            <p class="hist-vtl-desc">
                                The most technically dense year to date. Led development of FluxSense AI —
                                a full-stack smart environmental monitoring platform combining ESP32 edge hardware,
                                MQTT telemetry, and AWS IoT cloud backend. Built an Intel RealSense D435i
                                RGB-D streaming pipeline with Open3D for point-cloud generation and surface
                                reconstruction. Delivered a complete VFD remote-control system: ESP32 MODBUS
                                firmware, Flutter mobile client, and Laravel API backend — enabling full remote
                                operation of industrial motors.
                            </p>
                            <div class="hist-vtl-tags">
                                <span class="hist-vtl-tag">FluxSense AI</span>
                                <span class="hist-vtl-tag">Intel RealSense D435i</span>
                                <span class="hist-vtl-tag">Open3D</span>
                                <span class="hist-vtl-tag">VFD MODBUS</span>
                                <span class="hist-vtl-tag">AWS IoT</span>
                                <span class="hist-vtl-tag">Point Cloud</span>
                            </div>
                            <div class="hist-vtl-achievement">
                                <span class="hist-vtl-ach-icon">✦</span>
                                3 major full-stack systems shipped in a single year
                            </div>
                        </div>
                    </div>
                    <div class="hist-vtl-node-col" aria-hidden="true">
                        <div class="hist-vtl-node hist-vtl-node-lg">
                            <div class="hist-vtl-node-dot"></div>
                            <div class="hist-vtl-node-ring"></div>
                        </div>
                    </div>
                    <div class="hist-vtl-spacer"></div>
                </div>

                {{-- ── 2025 — ACTIVE ── --}}
                <div class="hist-vtl-item hist-vtl-right hist-vtl-active" id="hist-2025">
                    <div class="hist-vtl-spacer"></div>
                    <div class="hist-vtl-node-col" aria-hidden="true">
                        <div class="hist-vtl-node hist-vtl-node-xl">
                            <div class="hist-vtl-node-dot"></div>
                            <div class="hist-vtl-node-ring hist-vtl-node-ring-pulse"></div>
                            <div class="hist-vtl-node-ring hist-vtl-node-ring-outer-pulse"></div>
                        </div>
                    </div>
                    <div class="hist-vtl-content" data-reveal="fade-left">
                        <div class="hist-vtl-year-badge hist-year-active">
                            2025
                            <span class="hist-active-dot" aria-label="Currently active"></span>
                        </div>
                        <div class="hist-vtl-card">
                            <div class="hist-vtl-card-header">
                                <span class="hist-vtl-icon">🌌</span>
                                <div>
                                    <h3 class="hist-vtl-heading">Full-Spectrum AI &amp; Enterprise Expansion</h3>
                                    <span class="hist-vtl-phase">Phase 6 — Present Day · Ongoing</span>
                                </div>
                            </div>
                            <p class="hist-vtl-desc">
                                Cosmos Algos enters its most expansive chapter. The service portfolio grows
                                to cover the full software-hardware stack: AI/ML model development, cloud SaaS
                                platforms, cross-platform mobile, embedded systems, and enterprise engineering
                                solutions. Active collaboration at the Center of Automation, Robotics, and Embedded
                                Systems (CARE Lab). Continued pursuit of a BSc in Artificial Intelligence at
                                The Islamia University of Bahawalpur, keeping the company grounded in academic
                                rigour alongside commercial delivery.
                            </p>
                            <div class="hist-vtl-tags">
                                <span class="hist-vtl-tag hist-tag-active">AI / ML</span>
                                <span class="hist-vtl-tag hist-tag-active">CARE Lab</span>
                                <span class="hist-vtl-tag hist-tag-active">Cloud SaaS</span>
                                <span class="hist-vtl-tag hist-tag-active">Enterprise Clients</span>
                                <span class="hist-vtl-tag hist-tag-active">BSc AI</span>
                            </div>
                            <div class="hist-vtl-achievement">
                                <span class="hist-vtl-ach-icon">✦</span>
                                Full-spectrum engineering capability — device to cloud to client
                            </div>
                        </div>
                    </div>
                </div>

            </div>{{-- /.hist-vtl --}}
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         4. HORIZONTAL MINI TIMELINE (condensed overview)
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-lg hist-htl-section">
        <div class="container">
            <div class="section-head-center" data-reveal="fade-up">
                <span class="tag-label">At a Glance</span>
                <h2>The Journey in Six Steps</h2>
            </div>
            <div class="hist-htl-outer">
                <div class="hist-htl-track">
                    <div class="hist-htl-fill" id="histHtlFill"></div>
                </div>
                <div class="hist-htl-items" id="histHtlItems">
                    <div class="hist-htl-item">
                        <div class="hist-htl-node hist-htl-node-sm"></div>
                        <div class="hist-htl-label hist-htl-label-below">
                            <div class="hist-htl-year">2020</div>
                            <div class="hist-htl-desc-mini">C++ &amp; Console Apps</div>
                        </div>
                    </div>
                    <div class="hist-htl-item">
                        <div class="hist-htl-label hist-htl-label-above">
                            <div class="hist-htl-year">2021</div>
                            <div class="hist-htl-desc-mini">Flutter &amp; Client Work</div>
                        </div>
                        <div class="hist-htl-node hist-htl-node-md"></div>
                    </div>
                    <div class="hist-htl-item">
                        <div class="hist-htl-node hist-htl-node-md"></div>
                        <div class="hist-htl-label hist-htl-label-below">
                            <div class="hist-htl-year">2022</div>
                            <div class="hist-htl-desc-mini">Hardware &amp; IoT</div>
                        </div>
                    </div>
                    <div class="hist-htl-item hist-htl-item-featured">
                        <div class="hist-htl-label hist-htl-label-above">
                            <div class="hist-htl-year hist-htl-year-founding">2023</div>
                            <div class="hist-htl-desc-mini">Company Founded ★</div>
                        </div>
                        <div class="hist-htl-node hist-htl-node-lg">
                            <div class="hist-htl-node-ring"></div>
                        </div>
                    </div>
                    <div class="hist-htl-item">
                        <div class="hist-htl-node hist-htl-node-lg"></div>
                        <div class="hist-htl-label hist-htl-label-below">
                            <div class="hist-htl-year">2024</div>
                            <div class="hist-htl-desc-mini">FluxSense &amp; VFD AI</div>
                        </div>
                    </div>
                    <div class="hist-htl-item hist-htl-item-active">
                        <div class="hist-htl-label hist-htl-label-above">
                            <div class="hist-htl-year hist-htl-year-active">
                                2025
                                <span class="hist-htl-active-dot"></span>
                            </div>
                            <div class="hist-htl-desc-mini">Enterprise AI Expansion</div>
                        </div>
                        <div class="hist-htl-node hist-htl-node-xl">
                            <div class="hist-htl-node-ring hist-htl-node-ring-pulse"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         5. KEY PROJECTS ACROSS THE YEARS
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-alt section-lg">
        <div class="container">
            <div class="section-head-center" data-reveal="fade-up">
                <span class="tag-label">Landmark Projects</span>
                <h2>What We Built Along the Way</h2>
                <p class="section-head-sub" style="margin-inline:auto;">
                    Milestones aren't just dates — they're systems that shipped and clients that succeeded.
                </p>
            </div>
            <div class="hist-projects-grid" data-stagger>

                <article class="hist-project-card">
                    <div class="hist-project-year-bar">2022</div>
                    <div class="hist-project-body">
                        <span class="hist-project-icon">⚡</span>
                        <h4>Battery Charger Health Monitor</h4>
                        <p>PyQt5 desktop application for real-time electrical signal visualisation and battery health tracking — deployed in live lab and industrial testing environments.</p>
                        <div class="hist-project-tags">
                            <span class="ts-chip">Python</span>
                            <span class="ts-chip">PyQt5</span>
                            <span class="ts-chip">Raspberry Pi</span>
                        </div>
                    </div>
                </article>

                <article class="hist-project-card">
                    <div class="hist-project-year-bar">2023</div>
                    <div class="hist-project-body">
                        <span class="hist-project-icon">🌾</span>
                        <h4>Poultry Farm IoT Platform</h4>
                        <p>Multi-tenant SaaS backend with role-based access (managers/staff), real-time sensor ingestion, and analytics endpoints for flock metrics — built on Laravel with OpenAPI documentation.</p>
                        <div class="hist-project-tags">
                            <span class="ts-chip">Laravel</span>
                            <span class="ts-chip">DynamoDB</span>
                            <span class="ts-chip">OpenAPI</span>
                        </div>
                    </div>
                </article>

                <article class="hist-project-card">
                    <div class="hist-project-year-bar">2024</div>
                    <div class="hist-project-body">
                        <span class="hist-project-icon">📡</span>
                        <h4>FluxSense AI — Environmental Monitoring</h4>
                        <p>Full-stack IoT platform: ESP32 edge nodes → MQTT → AWS IoT Core → Laravel API → real-time dashboard. AI anomaly detection reduces manual inspection cycles.</p>
                        <div class="hist-project-tags">
                            <span class="ts-chip">ESP32</span>
                            <span class="ts-chip">AWS IoT</span>
                            <span class="ts-chip">AI/ML</span>
                        </div>
                    </div>
                </article>

                <article class="hist-project-card">
                    <div class="hist-project-year-bar">2024</div>
                    <div class="hist-project-body">
                        <span class="hist-project-icon">🔬</span>
                        <h4>Intel RealSense RGB-D Pipeline</h4>
                        <p>End-to-end depth camera streaming architecture — edge to cloud re-stream — with RGB-D frame capture, point-cloud generation, surface reconstruction, and cluster analysis via Open3D.</p>
                        <div class="hist-project-tags">
                            <span class="ts-chip">RealSense</span>
                            <span class="ts-chip">Open3D</span>
                            <span class="ts-chip">OpenCV</span>
                        </div>
                    </div>
                </article>

                <article class="hist-project-card">
                    <div class="hist-project-year-bar">2024</div>
                    <div class="hist-project-body">
                        <span class="hist-project-icon">🏭</span>
                        <h4>VFD Remote Control System</h4>
                        <p>ESP32 MODBUS firmware + Flutter mobile client + Laravel backend — enabling fully remote operation, live telemetry display, and historical logging of Variable Frequency Drives.</p>
                        <div class="hist-project-tags">
                            <span class="ts-chip">MODBUS</span>
                            <span class="ts-chip">Flutter</span>
                            <span class="ts-chip">Laravel</span>
                        </div>
                    </div>
                </article>

                <article class="hist-project-card hist-project-card-active">
                    <div class="hist-project-year-bar hist-year-bar-active">2025 · Ongoing</div>
                    <div class="hist-project-body">
                        <span class="hist-project-icon">🌌</span>
                        <h4>Cosmos Algos Website &amp; Platform</h4>
                        <p>Full-stack Laravel portfolio website with layered architecture (Controller → ViewModel → Service → Repository), cosmos-themed animations, and a component system built to scale into a complete business platform.</p>
                        <div class="hist-project-tags">
                            <span class="ts-chip">Laravel</span>
                            <span class="ts-chip">Blade</span>
                            <span class="ts-chip">Vite</span>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         6. ROLES & EXPERIENCE STRIP
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-lg">
        <div class="container">
            <div class="section-head-center" data-reveal="fade-up">
                <span class="tag-label">Roles &amp; Experience</span>
                <h2>Where the Knowledge Came From</h2>
            </div>
            <div class="hist-roles-grid" data-stagger>

                <div class="hist-role-card">
                    <div class="hist-role-header">
                        <div class="hist-role-icon">🎓</div>
                        <div>
                            <div class="hist-role-title">Teacher Assistant</div>
                            <div class="hist-role-org">Deep Embed</div>
                        </div>
                        <span class="hist-role-period">2022–2023</span>
                    </div>
                    <p class="hist-role-desc">
                        Contributed to AI education — structuring curriculum, guiding students through
                        embedded systems and ML fundamentals, and reinforcing knowledge through teaching.
                    </p>
                    <div class="hist-role-tags">
                        <span class="ts-chip">AI Education</span>
                        <span class="ts-chip">Embedded Systems</span>
                    </div>
                </div>

                <div class="hist-role-card">
                    <div class="hist-role-header">
                        <div class="hist-role-icon">🤖</div>
                        <div>
                            <div class="hist-role-title">Software Developer</div>
                            <div class="hist-role-org">CARE Lab — Center of Automation, Robotics &amp; Embedded Systems</div>
                        </div>
                        <span class="hist-role-period">2023–Present</span>
                    </div>
                    <p class="hist-role-desc">
                        Delivering innovative solutions in automation, robotics, and embedded systems.
                        A high-demand research-and-production environment that sharpened both engineering
                        precision and delivery speed simultaneously.
                    </p>
                    <div class="hist-role-tags">
                        <span class="ts-chip">Robotics</span>
                        <span class="ts-chip">Automation</span>
                        <span class="ts-chip">Research</span>
                    </div>
                </div>

                <div class="hist-role-card">
                    <div class="hist-role-header">
                        <div class="hist-role-icon">🏛️</div>
                        <div>
                            <div class="hist-role-title">Founder &amp; CEO</div>
                            <div class="hist-role-org">Cosmos Algos</div>
                        </div>
                        <span class="hist-role-period">2023–Present</span>
                    </div>
                    <p class="hist-role-desc">
                        Leading a team of engineers and consultants focused on AI-powered software systems.
                        Responsible for architecture decisions, client relationships, technical delivery,
                        and the long-term strategic direction of the company.
                    </p>
                    <div class="hist-role-tags">
                        <span class="ts-chip">Leadership</span>
                        <span class="ts-chip">Architecture</span>
                        <span class="ts-chip">Client Delivery</span>
                    </div>
                </div>

                <div class="hist-role-card">
                    <div class="hist-role-header">
                        <div class="hist-role-icon">📚</div>
                        <div>
                            <div class="hist-role-title">BSc Artificial Intelligence</div>
                            <div class="hist-role-org">The Islamia University of Bahawalpur</div>
                        </div>
                        <span class="hist-role-period">2023–Expected 2027</span>
                    </div>
                    <p class="hist-role-desc">
                        Pursuing a formal degree in Artificial Intelligence to complement hands-on industry
                        experience with rigorous academic foundations in ML theory, mathematics, and
                        computational systems.
                    </p>
                    <div class="hist-role-tags">
                        <span class="ts-chip">AI / ML Theory</span>
                        <span class="ts-chip">Mathematics</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         7. WHAT'S NEXT — FUTURE CARD
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-alt section-lg">
        <div class="container">
            <div class="hist-future-grid">
                <div data-reveal="fade-right">
                    <span class="tag-label">What's Next</span>
                    <h2>The Road Ahead</h2>
                    <p>
                        The next chapter is already in motion. Cosmos Algos is expanding its enterprise
                        client base, deepening AI/ML capability across computer vision and predictive analytics,
                        and building the infrastructure to scale both delivery capacity and service quality
                        without losing the engineering precision that defines our work.
                    </p>
                    <ul class="hist-future-list">
                        <li>
                            <span class="hist-future-dot" aria-hidden="true"></span>
                            Expanding AI/ML model deployment to production cloud environments
                        </li>
                        <li>
                            <span class="hist-future-dot" aria-hidden="true"></span>
                            Growing the team with embedded systems and ML specialists
                        </li>
                        <li>
                            <span class="hist-future-dot" aria-hidden="true"></span>
                            Building a CMS-driven admin panel for full content management
                        </li>
                        <li>
                            <span class="hist-future-dot" aria-hidden="true"></span>
                            Deeper integration between CARE Lab research and commercial delivery
                        </li>
                        <li>
                            <span class="hist-future-dot" aria-hidden="true"></span>
                            Phase 2: Blog, API marketplace, FCM push notification services
                        </li>
                    </ul>
                </div>
                <div class="hist-future-visual" data-reveal="fade-left" aria-hidden="true">
                    <div class="hist-fv-ring hist-fv-ring-1"></div>
                    <div class="hist-fv-ring hist-fv-ring-2"></div>
                    <div class="hist-fv-ring hist-fv-ring-3"></div>
                    <div class="hist-fv-core">
                        <span class="hist-fv-year">2026</span>
                        <span class="hist-fv-sublabel">Next</span>
                    </div>
                    <div class="hist-fv-orbit hist-fv-orbit-1">
                        <div class="hist-fv-orb-dot"></div>
                    </div>
                    <div class="hist-fv-orbit hist-fv-orbit-2">
                        <div class="hist-fv-orb-dot hist-fv-orb-dot-sm"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         8. CTA BANNER
         ══════════════════════════════════════════════════════ --}}
    <section class="hist-cta-banner" data-reveal="zoom-in">
        <div class="hist-cta-bg" aria-hidden="true">
            <div class="hist-cta-orb hist-cta-orb-1"></div>
            <div class="hist-cta-orb hist-cta-orb-2"></div>
        </div>
        <div class="container">
            <div class="hist-cta-inner">
                <div class="hist-cta-text">
                    <span class="tag-label">Work With Us</span>
                    <h2 class="hist-cta-heading">Be Part of the Next Chapter</h2>
                    <p class="hist-cta-sub">
                        Every milestone in this history was built for a client who needed something
                        real. Your project could be next.
                    </p>
                </div>
                <div class="hist-cta-actions">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Start a Conversation</a>
                    <a href="{{ route('services') }}" class="btn btn-ghost">Explore Services</a>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        (function () {
            'use strict';

            /* ── 1. COUNTER ANIMATION ────────────────────────────── */
            const counters = document.querySelectorAll('[data-count]');
            const cio = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (!entry.isIntersecting) return;
                    cio.unobserve(entry.target);
                    const el  = entry.target;
                    const end = parseInt(el.dataset.count, 10);
                    const dur = 1400;
                    const t0  = performance.now();
                    function step(now) {
                        const p  = Math.min((now - t0) / dur, 1);
                        const ea = 1 - Math.pow(1 - p, 3);
                        el.textContent = Math.round(ea * end);
                        if (p < 1) requestAnimationFrame(step);
                    }
                    requestAnimationFrame(step);
                });
            }, { threshold: 0.6 });
            counters.forEach(el => cio.observe(el));

            /* ── 2. VERTICAL TIMELINE — PROGRESSIVE FILL ─────────── */
            // Items become visible as user scrolls down the timeline
            const vtlItems = document.querySelectorAll('.hist-vtl-item');
            const vtlFill  = document.getElementById('histVtlFill');

            const vtlIO = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('hist-vtl-visible');
                    }
                });
            }, { threshold: 0.2, rootMargin: '0px 0px -60px 0px' });

            vtlItems.forEach(item => vtlIO.observe(item));

            // Track fill driven by scroll position within the timeline section
            const tlSection = document.getElementById('timeline');
            if (tlSection && vtlFill) {
                function updateFill() {
                    const rect   = tlSection.getBoundingClientRect();
                    const total  = tlSection.offsetHeight - window.innerHeight;
                    const filled = Math.max(0, Math.min(1, -rect.top / total));
                    vtlFill.style.height = (filled * 100) + '%';
                }
                window.addEventListener('scroll', updateFill, { passive: true });
                updateFill();
            }

            /* ── 3. HORIZONTAL MINI TIMELINE — FILL ON SCROLL INTO VIEW ── */
            const htlFill  = document.getElementById('histHtlFill');
            const htlItems = document.getElementById('histHtlItems');
            if (htlFill && htlItems) {
                const htlIO = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            htlFill.style.width = '100%';
                            // Stagger item reveal
                            htlItems.querySelectorAll('.hist-htl-item').forEach((item, i) => {
                                setTimeout(() => item.classList.add('hist-htl-visible'), i * 130);
                            });
                            htlIO.disconnect();
                        }
                    });
                }, { threshold: 0.3 });
                htlIO.observe(htlItems);
            }

            /* ── 4. PROJECT CARD 3D TILT ─────────────────────────── */
            if (!window.matchMedia('(max-width: 768px)').matches) {
                document.querySelectorAll('.hist-project-card, .hist-role-card').forEach(card => {
                    card.addEventListener('mousemove', e => {
                        const r   = card.getBoundingClientRect();
                        const dx  = (e.clientX - r.left - r.width  / 2) / (r.width  / 2);
                        const dy  = (e.clientY - r.top  - r.height / 2) / (r.height / 2);
                        card.style.transform = `perspective(700px) rotateX(${dy * -5}deg) rotateY(${dx * 5}deg) translateY(-4px)`;
                    });
                    card.addEventListener('mouseleave', () => { card.style.transform = ''; });
                });
            }

            /* ── 5. SCROLL-TO-YEAR — hash nav ───────────────────── */
            const yearMap = {
                '#2020': 'hist-2020', '#2021': 'hist-2021',
                '#2022': 'hist-2022', '#2023': 'hist-2023',
                '#2024': 'hist-2024', '#2025': 'hist-2025',
            };
            function handleYearHash() {
                const el = yearMap[window.location.hash];
                if (!el) return;
                const target = document.getElementById(el);
                if (!target) return;
                setTimeout(() => {
                    target.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    target.classList.add('hist-vtl-highlight');
                    setTimeout(() => target.classList.remove('hist-vtl-highlight'), 2000);
                }, 300);
            }
            handleYearHash();
            window.addEventListener('hashchange', handleYearHash);

            /* ── 6. FUTURE VISUAL — spinning rings ─────────────── */
            // Handled entirely in CSS (see keyframes below in the CSS file)

        })();
    </script>
@endpush
