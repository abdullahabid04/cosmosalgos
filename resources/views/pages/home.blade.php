@extends('layouts.app')

@section('title', ($company['name'] ?? 'Cosmos Algos') . ' | Software, Embedded Systems & Applied AI')

@section('meta_description', 'Hardware and software engineering from Bahawalpur, Pakistan — smart devices, firmware, cloud analytics, and applied AI.')

@section('content')

    {{-- ══════════════════════════════════════════════════════════════
     HERO SECTION — ENHANCED
     Replace the entire existing <section class="hero-home">…</section>
     block in home.blade.php with this.
     ══════════════════════════════════════════════════════════════ --}}

    <section class="hero-home" id="hero">

        {{-- ── Animated background canvas ── --}}
        <div class="hero-bg" aria-hidden="true">
            {{-- Canvas-rendered stars, planets, orbits, asteroids and meteors --}}
            <canvas class="hero-cosmos-canvas" aria-hidden="true"></canvas>
            {{-- Gradient orbs --}}
            <div class="hero-orb hero-orb-1"></div>
            <div class="hero-orb hero-orb-2"></div>
            <div class="hero-orb hero-orb-3"></div>
            {{-- Dot-grid overlay --}}
            <div class="hero-grid-dots"></div>
            {{-- Floating particles (CSS-only) --}}
            <div class="hero-particles">
                <span></span><span></span><span></span><span></span>
                <span></span><span></span><span></span><span></span>
                <span></span><span></span><span></span><span></span>
            </div>
        </div>

        <div class="container hero-two-col">

            {{-- ── LEFT COLUMN ── --}}
            <div class="hero-left">

                {{-- Kicker --}}
                <p class="kicker hero-anim-1">
                    <span class="kicker-cosmos">Cosmos</span>&nbsp;<span class="kicker-algos">Algos</span>
                </p>

                {{-- Static main headline --}}
                <h1 class="hero-anim-2">
                    Intelligent Electronic and Software Systems,<br>
                    <span class="hero-h1-accent">Concept to Deployment</span>
                </h1>

                {{-- Rotating typewriter sub-headline --}}
                <div class="hero-typewriter-wrap hero-anim-3" aria-live="polite">
                    <span class="hero-typewriter-prefix">We build&nbsp;</span>
                    <span class="hero-typewriter-text" id="heroTypewriter"></span>
                    <span class="hero-typewriter-cursor">|</span>
                </div>

                {{-- Lead --}}
                <p class="lead hero-anim-4">
                    Embedded hardware and firmware, automation, software, and applied AI. From prototype to documented handover.
                </p>

                {{-- CTAs --}}
                <div class="hero-cta-row hero-anim-5">
                    <a href="{{ route('services') }}" class="btn btn-primary">Explore Services</a>
                    <a href="{{ route('projects') }}" class="btn btn-ghost">Our Projects</a>
                </div>

                {{-- Badges --}}
                <div class="badge-row hero-anim-6">
                    <span class="badge">IoT &amp; Embedded</span>
                    <span class="badge">AI / ML</span>
                    <span class="badge">Cloud &amp; SaaS</span>
                    <span class="badge">Industrial Automation</span>
                    <span class="badge">Computer Vision</span>
                </div>

            </div>{{-- /hero-left --}}

            {{-- ── RIGHT COLUMN — Visual Panel ── --}}
            <div class="hero-visual hero-anim-right" aria-hidden="true">

                {{-- Central glowing ring --}}
                <div class="hv-ring hv-ring-outer"></div>
                <div class="hv-ring hv-ring-mid"></div>
                <div class="hv-ring hv-ring-inner"></div>

                {{-- Central icon --}}
                <div class="hv-core">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="24" cy="24" r="10" stroke="#5eead4" stroke-width="2"/>
                        <circle cx="24" cy="8"  r="3" fill="#5eead4"/>
                        <circle cx="24" cy="40" r="3" fill="#5eead4"/>
                        <circle cx="8"  cy="24" r="3" fill="#5eead4"/>
                        <circle cx="40" cy="24" r="3" fill="#5eead4"/>
                        <circle cx="12" cy="12" r="2" fill="rgba(94,234,212,0.5)"/>
                        <circle cx="36" cy="12" r="2" fill="rgba(94,234,212,0.5)"/>
                        <circle cx="12" cy="36" r="2" fill="rgba(94,234,212,0.5)"/>
                        <circle cx="36" cy="36" r="2" fill="rgba(94,234,212,0.5)"/>
                        <line x1="24" y1="14" x2="24" y2="11" stroke="#5eead4" stroke-width="1.5"/>
                        <line x1="24" y1="34" x2="24" y2="37" stroke="#5eead4" stroke-width="1.5"/>
                        <line x1="14" y1="24" x2="11" y2="24" stroke="#5eead4" stroke-width="1.5"/>
                        <line x1="34" y1="24" x2="37" y2="24" stroke="#5eead4" stroke-width="1.5"/>
                    </svg>
                </div>

                {{-- Floating stat cards --}}
                <div class="hv-card hv-card-1">
                    <span class="hv-card-num" data-target="{{ $stats['projects'] }}" data-suffix="+">{{ $stats['projects'] }}+</span>
                    <span class="hv-card-label">Projects &amp; engagements</span>
                </div>
                <div class="hv-card hv-card-2">
                    <span class="hv-card-num" data-target="{{ $stats['years_experience'] }}" data-suffix="+">{{ $stats['years_experience'] }}+</span>
                    <span class="hv-card-label">Years experience</span>
                </div>
                <div class="hv-card hv-card-3">
                    <span class="hv-card-num" data-target="{{ $stats['industries'] }}" data-suffix="">{{ $stats['industries'] }}</span>
                    <span class="hv-card-label">Industries served</span>
                </div>
                <div class="hv-card hv-card-4">
                    <span class="hv-card-num" data-target="{{ $stats['saas_platforms'] }}" data-suffix=""> {{ $stats['saas_platforms'] }}</span>
                    <span class="hv-card-label">SaaS platforms</span>
                </div>

                {{-- Orbiting dots --}}
                <div class="hv-orbit hv-orbit-1">
                    <div class="hv-orbit-dot"></div>
                </div>
                <div class="hv-orbit hv-orbit-2">
                    <div class="hv-orbit-dot hv-orbit-dot-sm"></div>
                </div>

            </div>{{-- /hero-visual --}}

        </div>{{-- /hero-two-col --}}
    </section>

    {{-- ══════════════════════════════════════════════════════
         2. CLIENT / PARTNER LOGO STRIP
         ══════════════════════════════════════════════════════ --}}
    <div class="logo-strip" data-reveal="fade-up">
        <div class="container">
            <p class="logo-strip-label">Built with</p>
            <ul class="logo-list">
                <li>AWS</li>
                <li>Laravel</li>
                <li>ESP32</li>
                <li>Intel RealSense</li>
                <li>Flutter</li>
                <li>OpenCV</li>
            </ul>
        </div>
    </div>

    {{-- ══════════════════════════════════════════════════════
         3. PROFOUND EXPERIENCE (ABOUT INTRO)
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-lg">
        <div class="container">
            <div class="text-two-col">
                <div data-reveal="fade-right">
                    <span class="tag-label">About Us</span>
                    <h2 class="glitch-ready">Engineering Experience</h2>
                    <p>
                        Cosmos Algos is an engineering company building intelligent software
                        for connected systems — from embedded firmware and industrial
                        automation to IoT platforms, cloud APIs, and applied AI data
                        pipelines. We unite hardware and software expertise to deliver
                        systems that connect devices, data, and decisions end to end.
                    </p>
                    <a href="{{ route('about') }}" class="btn btn-ghost about-btn">About the Company</a>
                </div>
                <div data-reveal="fade-left">
                    <div class="exp-numbers" data-stagger>
                        <div class="exp-num-card card">
                            <div class="num">{{ $stats['years_experience'] }}+</div>
                            <div class="num-label">Years Experience</div>
                        </div>
                        <div class="exp-num-card card">
                            <div class="num">{{ $stats['projects'] }}+</div>
                            <div class="num-label">Projects &amp; Engagements</div>
                        </div>
                        <div class="exp-num-card card">
                            <div class="num">{{ $stats['industries'] }}</div>
                            <div class="num-label">Industries Served</div>
                        </div>
                    </div>
                    <div class="card about-card">
                        <p>
                            Most engagements start with a physical system and a software gap.
                            We help scope the problem, build the firmware, backend, and interface,
                            and document the handover so the system can be maintained.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
     COMPANY HISTORY TIMELINE
     Place this block AFTER the "Profound Experience" section
     and BEFORE the "Transforming Business" section in home.blade.php
     ══════════════════════════════════════════════════════ --}}

    <section class="section section-alt tl-section" id="company-history">
        <div class="container">
            <div class="section-head-center" style="margin-bottom:3.5rem;" data-reveal="fade-up">
                <span class="tag-label">Our History</span>
                <h2 class="glitch-ready">About Us History</h2>
            </div>
        </div>

        <div class="tl-outer">
            {{-- The animated progress line --}}
            <div class="tl-track">
                <div class="tl-track-fill" id="tlFill"></div>
            </div>

            {{-- Timeline items --}}
            <div class="tl-items">

                {{-- 2020 — small node, content below --}}
                <div class="tl-item tl-below tl-sm" data-year="2020">
                    <div class="tl-node-wrap">
                        <div class="tl-ripple"></div>
                        <div class="tl-node"></div>
                    </div>
                    <div class="tl-content tl-content-below">
                        <div class="tl-year">2020</div>
                        <p>
                            Started software development journey.<br>
                            Built first <strong>console applications</strong> and
                            explored algorithms, OOP, and data structures.
                        </p>
                    </div>
                </div>

                {{-- 2021 — medium node, content above --}}
                <div class="tl-item tl-above tl-md" data-year="2021">
                    <div class="tl-content tl-content-above">
                        <div class="tl-year">2021</div>
                        <p>
                            Joined <strong>CARE Lab</strong> as Software Developer (March 2021).
                            Expanded into Python GUI development, Flutter, and early
                            client-facing automation tools.
                        </p>
                    </div>
                    <div class="tl-node-wrap">
                        <div class="tl-ripple"></div>
                        <div class="tl-node"></div>
                    </div>
                </div>

                {{-- 2022 — medium node, content below --}}
                <div class="tl-item tl-below tl-md" data-year="2022">
                    <div class="tl-node-wrap">
                        <div class="tl-ripple"></div>
                        <div class="tl-node"></div>
                    </div>
                    <div class="tl-content tl-content-below">
                        <div class="tl-year">2022</div>
                        <p>
                            Delivered <strong>Raspberry Pi</strong> battery monitoring &amp;
                            charging automation. Expanded into IoT testing &amp; data
                            simulation scripting.
                        </p>
                    </div>
                </div>

                {{-- 2023 — large node, content above --}}
                <div class="tl-item tl-above tl-lg" data-year="2023">
                    <div class="tl-content tl-content-above">
                        <div class="tl-year">2023</div>
                        <p>
                            Founded <strong>Cosmos Algos</strong>.<br>
                            Continued industrial automation and test-rig work. Transitioned to
                            <strong>IoT SaaS</strong> — contributed to four platforms as
                            backend &amp; systems engineer.
                        </p>
                    </div>
                    <div class="tl-node-wrap">
                        <div class="tl-ripple"></div>
                        <div class="tl-node"></div>
                    </div>
                </div>

                {{-- 2024 — large node, content below --}}
                <div class="tl-item tl-below tl-lg" data-year="2024">
                    <div class="tl-node-wrap">
                        <div class="tl-ripple"></div>
                        <div class="tl-node"></div>
                    </div>
                    <div class="tl-content tl-content-below">
                        <div class="tl-year">2024</div>
                        <p>
                            Completed long-running industrial test automation work.
                            Backend work across <strong>five SaaS platforms</strong> —
                            multi-tenant architecture, Stripe billing, OTA updates,
                            and time-series data.
                        </p>
                    </div>
                </div>

                {{-- 2025 — xl node, content above --}}
                <div class="tl-item tl-above tl-xl" data-year="2025">
                    <div class="tl-content tl-content-above">
                        <div class="tl-year">2025</div>
                        <p>
                            <strong>Flock Sense AI</strong> research contract at DeepEmbed.
                            Built an <strong>Intel RealSense</strong> RGB-D pipeline and a
                            <strong>VFD remote control</strong> system (ESP32 + Flutter +
                            Laravel). Continues at <strong>CARE Lab</strong>.
                        </p>
                    </div>
                    <div class="tl-node-wrap">
                        <div class="tl-ripple tl-ripple-active"></div>
                        <div class="tl-node tl-node-active"></div>
                    </div>
                </div>

            </div>{{-- /tl-items --}}
        </div>{{-- /tl-outer --}}
    </section>

    {{-- ══════════════════════════════════════════════════════
         4. TRANSFORMING BUSINESS
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-alt section-lg">
        <div class="container">
            <div class="text-two-col">
                <div data-reveal="fade-right">
                    <span class="tag-label">What We Do</span>
                    <h2 class="glitch-ready">Engineering Software for Real Operations</h2>
                    <p>
                        We build connected systems end to end: firmware and device integration,
                        industrial automation software, cloud backends, and the dashboards and
                        mobile apps that operators actually use. AI is applied where it earns
                        its place — computer vision, signal analysis, and prediction — not as a
                        label on a slide.
                    </p>
                    <p class="secondary-para">
                        Our work spans defense test equipment, industrial monitoring, poultry
                        data collection, solar and energy systems, and multi-tenant SaaS
                        platforms. Keeping the work within one small team makes it easier to
                        carry a system from the sensor to the cloud without losing context.
                    </p>
                </div>
                <div data-reveal="fade-left">
                    <div class="ai-visual-panel card">
                        <div class="ai-visual-icon">🧠</div>
                        <p class="ai-visual-caption">
                            Data → Models → Decisions
                        </p>
                        <div class="badge-row badge-row--centered">
                            <span class="badge">IoT</span>
                            <span class="badge">AI/ML</span>
                            <span class="badge">Automation</span>
                            <span class="badge">SaaS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         5. RELIABLE APPROACH (4 PILLARS)
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-lg">
        <div class="container">
            <div class="section-head" data-reveal="fade-up">
                <span class="tag-label">Our Approach</span>
                <h2 class="glitch-ready">A Reliable Approach to Engineering</h2>
            </div>
            <div class="approach-grid" data-stagger>
                <div class="approach-card">
                    <div class="a-icon">🛡️</div>
                    <h3>Reduce Risk Before Scaling</h3>
                    <p>
                        Our R&amp;D process is designed to absorb risk before you commit a
                        serious budget. Launching a complex project shouldn't feel like
                        gambling with your production environment.
                    </p>
                </div>
                <div class="approach-card">
                    <div class="a-icon">🔗</div>
                    <h3>Cross-Layer Ownership</h3>
                    <p>
                        You don't have to coordinate every vendor alone. We work across the
                        cloud, embedded, and application layers as one team, so the
                        architecture is considered together rather than in isolated pieces.
                    </p>
                </div>
                <div class="approach-card">
                    <div class="a-icon">🎯</div>
                    <h3>Pragmatic Engineering: Real Results, No Hype</h3>
                    <p>
                        We are honest about complexity, limitations, and risks. We help you
                        set realistic goals, because we know what technology can do and what's
                        out of its scope. It's a powerful tool, not a magic pill.
                    </p>
                </div>
                <div class="approach-card">
                    <div class="a-icon">📄</div>
                    <h3>Documentation Is a Core Deliverable</h3>
                    <p>
                        Documentation is part of the agreed scope, not an afterthought. The aim
                        is a system the client can understand, maintain, and hand to another
                        engineer if needed.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         6. SERVICES
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-alt section-lg">
        <div class="container">
            <div class="section-head" data-reveal="fade-up">
                <span class="tag-label">What We Build</span>
                <h2 class="glitch-ready">Our Core Services</h2>
                <p class="section-head-sub">
                    Eight core areas drawn from the work we have actually done. The services
                    page has the detailed breakdown: connected products, industrial software,
                    applied AI, and the backends behind them.
                </p>
            </div>
            @php
                $serviceIcons = ['🔌', '⚙️', '☁️', '👁️', '📱', '🧩', '📈', '🔬'];
            @endphp
            <div class="services-grid" data-stagger>
                @foreach ($services as $index => $service)
                    <div class="service-card-item">
                        <span class="svc-icon">{{ $serviceIcons[$index] ?? '⚙️' }}</span>
                        <h3>{{ $service['title'] }}</h3>
                        <p>{{ $service['description'] }}</p>
                        <a href="{{ route('services') }}" class="svc-link">Explore service <span aria-hidden="true">→</span></a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         7. WHY CHOOSE US
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-lg">
        <div class="container">
            <div class="why-grid">
                <div data-reveal="fade-right">
                    <span class="tag-label">Why Us</span>
                    <h2 class="glitch-ready">Why Work With Us</h2>
                    <p class="why-lead">
                        We are a hands-on engineering company, not a sales layer. The person
                        who scopes the work is involved in building it, and the person who
                        writes the firmware can also reason about the backend it reports to.
                    </p>
                    <ul class="why-list" data-stagger>
                        <li>Hardware-to-cloud ownership in one team</li>
                        <li>Industrial and defense field experience through CARE Lab</li>
                        <li>Firmware, backend, desktop, and mobile under one scope</li>
                        <li>Documentation and handover scoped into delivery</li>
                        <li>Direct contact with the engineer doing the work</li>
                        <li>Verification against real hardware, not only simulators</li>
                        <li>Fixed-scope proposals before work begins</li>
                        <li>No invented client logos, review scores, or metrics</li>
                        <li>Support terms agreed in writing, not assumed</li>
                        <li>Architecture chosen for maintenance, not novelty</li>
                    </ul>
                </div>
                <div data-reveal="fade-left">
                    <figure class="why-visual card">
                        <img src="{{ asset('images/projects/solar-field-monitoring.jpg') }}"
                             alt="Field validation of a solar monitoring setup with a laptop dashboard and sensor hardware"
                             loading="lazy" width="1200" height="675">
                        <figcaption>
                            Field validation of a solar monitoring setup — hardware, telemetry,
                            and dashboard tested together.
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         8. FROM IDEA TO IMPLEMENTATION (PROCESS)
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-alt section-lg">
        <div class="container">
            <div class="section-head-center" data-reveal="fade-up">
                <span class="tag-label">Our Process</span>
                <h2 class="glitch-ready">From Idea to Implementation</h2>
                <p class="section-head-sub">
                    A general delivery process. The exact steps and depth are adapted to the
                    scope of each engagement.
                </p>
            </div>
            <div class="process-steps" data-stagger>
                <div class="process-step">
                    <div class="step-num">Step 01</div>
                    <h3>Discovery &amp; Use-Case Definition</h3>
                    <p>
                        We analyze business goals, users, and constraints to identify the
                        right problems to solve and define clear success criteria.
                    </p>
                </div>
                <div class="process-step">
                    <div class="step-num">Step 02</div>
                    <h3>Architecture &amp; R&amp;D</h3>
                    <p>
                        We explore technologies, evaluate feasibility, and design a system
                        architecture that fits the performance and security needs of the project.
                    </p>
                </div>
                <div class="process-step">
                    <div class="step-num">Step 03</div>
                    <h3>Proof of Concept &amp; Prototyping</h3>
                    <p>
                        We build quick prototypes to validate ideas, reduce risks, and
                        confirm technical viability before full development.
                    </p>
                </div>
                <div class="process-step">
                    <div class="step-num">Step 04</div>
                    <h3>Detailed Design &amp; Specifications</h3>
                    <p>
                        We create detailed UX flows, technical specs, and documentation
                        to keep everyone aligned on what will be delivered.
                    </p>
                </div>
                <div class="process-step">
                    <div class="step-num">Step 05</div>
                    <h3>Implementation Across the Stack</h3>
                    <p>
                        We implement the agreed solution — backend, frontend, firmware, data
                        pipelines, and integrations — with the practices agreed for the project.
                    </p>
                </div>
                <div class="process-step">
                    <div class="step-num">Step 06</div>
                    <h3>Testing &amp; Validation</h3>
                    <p>
                        We test functionality, performance, and usability against realistic
                        conditions, and document the limits of what was validated.
                    </p>
                </div>
                <div class="process-step">
                    <div class="step-num">Step 07</div>
                    <h3>Deployment &amp; Integration</h3>
                    <p>
                        We launch the solution, integrate with existing systems, migrate
                        data where needed, and prepare the environments for operation.
                    </p>
                </div>
                <div class="process-step">
                    <div class="step-num">Step 08</div>
                    <h3>Operations, Optimization &amp; Support</h3>
                    <p>
                        Where support is agreed, monitoring, fixes, and improvements follow
                        handover and are based on real usage and feedback.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         9. INDUSTRIES WE SERVE
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-lg">
        <div class="container">
            <div class="section-head-center" data-reveal="fade-up">
                <span class="tag-label">Industries</span>
                <h2 class="glitch-ready">Industries We Serve</h2>
            </div>
            <div class="industry-grid" data-stagger>
                <div class="industry-item card">
                    <span class="ind-icon">🌾</span>
                    <span>Agriculture &amp; Poultry</span>
                </div>
                <div class="industry-item card">
                    <span class="ind-icon">⚙️</span>
                    <span>Industrial Automation</span>
                </div>
                <div class="industry-item card">
                    <span class="ind-icon">🔬</span>
                    <span>Research &amp; Academic Labs</span>
                </div>
                <div class="industry-item card">
                    <span class="ind-icon">🚢</span>
                    <span>Logistics &amp; Port Management</span>
                </div>
                <div class="industry-item card">
                    <span class="ind-icon">⚡</span>
                    <span>Energy &amp; Utilities</span>
                </div>
                <div class="industry-item card">
                    <span class="ind-icon">🏠</span>
                    <span>Smart Home &amp; Consumer IoT</span>
                </div>
                <div class="industry-item card">
                    <span class="ind-icon">🚲</span>
                    <span>Transport &amp; Mobility</span>
                </div>
                <div class="industry-item card">
                    <span class="ind-icon">☁️</span>
                    <span>SaaS &amp; Technology Products</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         10. PARTNERS & CLIENTS LOGOS
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-alt section-sm">
        <div class="container">
            <div class="section-head-center" data-reveal="fade-up">
                <span class="tag-label">Collaborations</span>
                <h2>Research &amp; Industrial Collaborations</h2>
                <p>
                    Software development work delivered through the Center of Automation,
                    Robotics &amp; Embedded Systems (CARE Lab), IUB, by our founder. Some
                    engagements are confidential; in-progress negotiations are not listed
                    as clients.
                </p>
            </div>
            <div class="partners-logos" data-stagger>
                <span class="partner-logo-item">Pakistan Army Ordnance Corps</span>
                <span class="partner-logo-item">EPTeck Technologies</span>
                <span class="partner-logo-item">AirCon Electronics</span>
                <span class="partner-logo-item">The Islamia University of Bahawalpur</span>
                <span class="partner-logo-item">Dubai-based industrial investor</span>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         11. TRUSTED PARTNERSHIPS
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-lg">
        <div class="container">
            <div class="section-head" data-reveal="fade-up">
                <span class="tag-label">Platforms &amp; Capabilities</span>
                <h2 class="glitch-ready">The Stacks We Build On</h2>
                <p class="section-head-sub">
                    We choose tools for the constraint in front of us — from the microcontroller
                    and sensors to the cloud and the client app — and document the choices that
                    matter for maintenance and handover.
                </p>
            </div>
            <div class="trust-grid" data-stagger>
                <div class="trust-card">
                    <div class="partner-name">Cloud</div>
                    <div class="partner-title">AWS Serverless IoT Backends</div>
                    <p>
                        Cloud backends on AWS — IoT Core for device connectivity, Lambda for
                        serverless processing, DynamoDB and MySQL for storage, and API Gateway
                        with Cognito and IAM for secure, documented APIs.
                    </p>
                </div>
                <div class="trust-card">
                    <div class="partner-name">Embedded</div>
                    <div class="partner-title">ESP32, Raspberry Pi &amp; Intel RealSense</div>
                    <p>
                        Firmware and edge systems on ESP32 and Raspberry Pi, industrial protocol
                        integration (MODBUS, UART, USB), and RGB-D depth sensing with the
                        Intel RealSense D435i for computer-vision pipelines.
                    </p>
                </div>
                <div class="trust-card">
                    <div class="partner-name">Applications</div>
                    <div class="partner-title">Laravel, Flutter &amp; Python</div>
                    <p>
                        Laravel REST APIs and SaaS platforms, cross-platform Flutter apps, and
                        Python tooling for data acquisition, automation, and desktop control
                        software — with API documentation and handover notes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         12. CUSTOMER SUCCESS STORIES
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-alt section-lg">
        <div class="container">
            <div class="section-head" data-reveal="fade-up">
                <span class="tag-label">Case Studies</span>
                <h2 class="glitch-ready">Selected Engineering Work</h2>
                <p class="section-head-sub">
                    Documented projects with clear attribution — including work delivered
                    through CARE Lab and research contracts.
                </p>
            </div>
            <div class="grid cols-3" data-stagger>
                <div class="case-study-card">
                    <div class="case-study-thumb has-image">
                        <img src="{{ asset('images/projects/primer-analyzer.jpg') }}"
                             alt="Primer Analyzer test equipment"
                             loading="lazy" width="1200" height="900">
                    </div>
                    <div class="case-study-body">
                        <div class="case-study-meta">
                            <span class="meta-chip">Defense Electronics</span>
                            <span class="meta-chip">Automation</span>
                        </div>
                        <h3>Primer Analyzer — Automated Test &amp; Reporting System</h3>
                        <p>
                            Software-assisted test equipment that performs four electrical
                            and one mechanical test on primers, automating the quality
                            assessment and generating detailed reports. Delivered for the
                            Pakistan Army Ordnance Corps through CARE Lab.
                        </p>
                        <div class="case-study-stats">
                            <div class="case-stat">
                                <strong>Test &amp; Reporting</strong>
                                Category
                            </div>
                            <div class="case-stat">
                                <strong>CARE Lab</strong>
                                Collaboration
                            </div>
                            <div class="case-stat">
                                <strong>Pakistan</strong>
                                Deployment
                            </div>
                        </div>
                    </div>
                </div>

                <div class="case-study-card">
                    <div class="case-study-thumb">🤖</div>
                    <div class="case-study-body">
                        <div class="case-study-meta">
                            <span class="meta-chip">Agriculture</span>
                            <span class="meta-chip">Computer Vision</span>
                        </div>
                        <h3>Flock Sense AI — Broiler Weight Estimation</h3>
                        <p>
                            Data-collection and inference pipeline for estimating broiler
                            weight from camera imagery, delivered as a research contract at
                            DeepEmbed Research Lab. The work covered structured image capture,
                            dataset preparation, and an inference workflow for weight estimation.
                        </p>
                        <div class="case-study-stats">
                            <div class="case-stat">
                                <strong>DeepEmbed</strong>
                                Contract
                            </div>
                            <div class="case-stat">
                                <strong>Python / CV</strong>
                                Stack
                            </div>
                            <div class="case-stat">
                                <strong>Poultry</strong>
                                Industry
                            </div>
                        </div>
                    </div>
                </div>

                <div class="case-study-card">
                    <div class="case-study-thumb">⚡</div>
                    <div class="case-study-body">
                        <div class="case-study-meta">
                            <span class="meta-chip">Industrial</span>
                            <span class="meta-chip">IoT</span>
                        </div>
                        <h3>VFD Remote Control System for Industrial Automation</h3>
                        <p>
                            A remote-control system for Variable Frequency Drives using
                            ESP32 MODBUS firmware, a Laravel backend, and a Flutter client.
                            Operators can monitor drive status, send commands, and review
                            historical logs without standing at the panel.
                        </p>
                        <div class="case-study-stats">
                            <div class="case-stat">
                                <strong>ESP32 + MODBUS</strong>
                                Edge
                            </div>
                            <div class="case-stat">
                                <strong>Laravel</strong>
                                Backend
                            </div>
                            <div class="case-stat">
                                <strong>Flutter</strong>
                                Mobile
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         13. REFERENCES / VERIFICATION
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-lg">
        <div class="container">
            <div class="section-head-center" data-reveal="fade-up">
                <span class="tag-label">References</span>
                <h2 class="glitch-ready">Evidence, Not Invented Praise</h2>
                <p>
                    We do not publish fabricated testimonials, star ratings, or review-platform
                    badges. Client references are available on request with their consent, and
                    the project record is documented in the case studies.
                </p>
            </div>

            <div class="grid cols-3" data-stagger>
                <div class="card" style="padding:1.75rem;">
                    <div class="num" style="font-size:2rem;font-weight:800;color:var(--brand);">{{ $stats['care_rnd_projects'] }}</div>
                    <div class="num-label">CARE Lab R&amp;D projects</div>
                    <p style="color:var(--muted);margin-top:.5rem;">
                        Software and embedded contributions across the centre's funded and
                        in-progress project list, including defense test equipment.
                    </p>
                </div>
                <div class="card" style="padding:1.75rem;">
                    <div class="num" style="font-size:2rem;font-weight:800;color:var(--brand);">{{ $stats['saas_platforms'] }}</div>
                    <div class="num-label">SaaS platforms</div>
                    <p style="color:var(--muted);margin-top:.5rem;">
                        Multi-tenant products supported across backend APIs, subscriptions,
                        OTA updates, and time-series data.
                    </p>
                </div>
                <div class="card" style="padding:1.75rem;">
                    <div class="num" style="font-size:2rem;font-weight:800;color:var(--brand);">{{ $stats['projects'] }}+</div>
                    <div class="num-label">Documented engagements</div>
                    <p style="color:var(--muted);margin-top:.5rem;">
                        Defense, industrial, agriculture, energy, research, and consumer
                        systems described across this site.
                    </p>
                </div>
            </div>

            <div class="hero-cta-row" style="justify-content:center;margin-top:2rem;">
                <a href="{{ route('case-studies') }}" class="btn btn-primary">Read Case Studies</a>
                <a href="{{ route('contact') }}" class="btn btn-ghost">Request a Reference</a>
            </div>
        </div>
    </section>
    {{-- ══════════════════════════════════════════════════════
         14. CONTACT / LOCATION
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-alt section-lg">
        <div class="container">
            <div class="contact-section-grid">

                {{-- Left: locations --}}
                <div data-reveal="fade-right">
                    <span class="tag-label">Where We Are</span>
                    <h2 class="contact-h2 glitch-ready">We Are Located</h2>
                    <div class="location-cards">
                        <div class="location-card">
                            <h3>🇵🇰 Pakistan (HQ)</h3>
                            <p>
                                Bahawalpur, Punjab, Pakistan<br>
                                <a href="mailto:{{ $company['email'] }}" class="contact-link">{{ $company['email'] }}</a><br>
                                <a href="tel:{{ $company['phone_href'] }}" class="contact-link">{{ $company['phone'] }}</a>
                            </p>
                        </div>
                    </div>
                    <div class="sales-office">
                        <p class="sales-label">Office hours:</p>
                        <span class="contact-link">{{ $company['hours'] }}</span>
                    </div>
                </div>

                {{-- Right: contact form --}}
                <div class="contact-form-card" data-reveal="fade-left">
                    <h3>Tell Us About Your Project</h3>
                    <p class="sub">We reply as soon as possible during office hours.</p>

                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-error">{{ session('error') }}</div>
                    @endif

                    <form method="POST" action="{{ route('contact.submit') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Your full name"
                                value="{{ old('name') }}"
                                required
                            >
                            @error('name')<span class="field-error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="you@company.com"
                                value="{{ old('email') }}"
                                required
                            >
                            @error('email')<span class="field-error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea
                                id="message"
                                name="message"
                                placeholder="Tell us about your project..."
                                required
                            >{{ old('message') }}</textarea>
                            @error('message')<span class="field-error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="privacy" name="privacy" {{ old('privacy') ? 'checked' : '' }} required>
                            <label for="privacy">
                                I have read and accept the
                                <a href="{{ route('privacy') }}" class="contact-link">Privacy Policy</a>
                                and
                                <a href="{{ route('terms') }}" class="contact-link">Terms of Use</a>.
                            </label>
                            @error('privacy')<span class="field-error">{{ $message }}</span>@enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-full">
                            Send Message
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        (function () {
            'use strict';

            /* ══════════════════════════════════════════════
               TYPEWRITER — unchanged from original
            ══════════════════════════════════════════════ */
            const phrases = [
                'Embedded Firmware & Edge AI',
                'ESP32, STM32, Raspberry Pi & FPGA',
                'Automation and robotics',
                'Production monitoring and Industrial IoT',
                'Computer vision and ML models for edge deployment',
                'Test rigs and setups for defense equipment',
                'Industrial & Defense Electronics',
                'Rehabilitation & System Upgrades',
            ];

            const el     = document.getElementById('heroTypewriter');
            const cursor = document.querySelector('.hero-typewriter-cursor');
            if (!el) return;

            let phraseIdx = 0;
            let charIdx   = 0;
            let deleting  = false;
            let pauseTick = 0;

            const TYPE_SPEED   = 70;
            const DELETE_SPEED = 35;
            const PAUSE_AFTER  = 60;
            const PAUSE_BEFORE = 6;

            function tick() {
                const phrase = phrases[phraseIdx];

                if (!deleting) {
                    if (charIdx < phrase.length) {
                        charIdx++;
                        el.textContent = phrase.slice(0, charIdx);
                        setTimeout(tick, TYPE_SPEED);
                    } else {
                        /* Finished typing — keep ticking through the pause, then start deleting */
                        pauseTick++;
                        if (pauseTick >= PAUSE_AFTER) { deleting = true; pauseTick = 0; }
                        setTimeout(tick, 50);
                    }
                } else {
                    if (charIdx > 0) {
                        charIdx--;
                        el.textContent = phrase.slice(0, charIdx);
                        setTimeout(tick, DELETE_SPEED);
                    } else {
                        /* Finished deleting — keep ticking through the pause, then advance phrase */
                        pauseTick++;
                        if (pauseTick >= PAUSE_BEFORE) {
                            deleting = false;
                            phraseIdx = (phraseIdx + 1) % phrases.length;
                            pauseTick = 0;
                        }
                        setTimeout(tick, 50);
                    }
                }
            }
            setTimeout(tick, 1200);
        })();

        (function () {
            /* ══════════════════════════════════════════════
               TIMELINE — unchanged from original
            ══════════════════════════════════════════════ */
            const items = document.querySelectorAll('.tl-item');
            const fill  = document.getElementById('tlFill');

            items.forEach(el => el.classList.add('tl-will-animate'));

            function revealTimeline() {
                items.forEach(el => el.classList.add('tl-visible'));
                if (fill) fill.style.width = '100%';
            }

            const section = document.getElementById('company-history');

            if (section && 'IntersectionObserver' in window) {
                const io = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) { revealTimeline(); io.disconnect(); }
                    });
                }, { threshold: 0.1 });
                io.observe(section);
            } else {
                revealTimeline();
            }

            items.forEach(item => {
                item.addEventListener('mouseenter', () => {
                    const node = item.querySelector('.tl-node');
                    if (node) node.style.borderColor = 'var(--brand)';
                });
                item.addEventListener('mouseleave', () => {
                    const node = item.querySelector('.tl-node');
                    if (node && !node.classList.contains('tl-node-active')) node.style.borderColor = '';
                });
            });
        })();

    </script>
@endpush
