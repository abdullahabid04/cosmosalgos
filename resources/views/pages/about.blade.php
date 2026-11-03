@extends('layouts.app')

@section('title', 'About Us | ' . ($company['name'] ?? 'Cosmos Algos'))
@section('meta_description', 'The founder, working principles, and engineering background behind Cosmos Algos — a small software and embedded engineering company in Bahawalpur, Pakistan.')

@section('content')

    {{-- ══════════════════════════════════════════════════════
         1. PAGE HERO
         ══════════════════════════════════════════════════════ --}}
    <section class="about-hero">
        <div class="about-hero-bg" aria-hidden="true">
            <div class="about-hero-orb about-hero-orb-1"></div>
            <div class="about-hero-orb about-hero-orb-2"></div>
        </div>
        <div class="container about-hero-inner">
            <span class="tag-label">About Us</span>
            <h1 class="about-hero-h1">
                We Build<br>
                <span class="about-h1-accent">Connected Systems</span>
            </h1>
            <p class="about-hero-lead">
                Cosmos Algos is a software and embedded engineering company in Bahawalpur,
                Pakistan. We build IoT platforms, industrial automation software, computer-vision
                pipelines, and the firmware that connects them.
            </p>
            <div class="about-hero-stats">
                <div class="about-stat">
                    <span class="about-stat-num">{{ $stats['years_experience'] }}+</span>
                    <span class="about-stat-label">Years of Engineering</span>
                </div>
                <div class="about-stat-divider"></div>
                <div class="about-stat">
                    <span class="about-stat-num">{{ $stats['projects'] }}+</span>
                    <span class="about-stat-label">Projects &amp; Engagements</span>
                </div>
                <div class="about-stat-divider"></div>
                <div class="about-stat">
                    <span class="about-stat-num">{{ $stats['industries'] }}</span>
                    <span class="about-stat-label">Industries Served</span>
                </div>
                <div class="about-stat-divider"></div>
                <div class="about-stat">
                    <span class="about-stat-num">{{ $stats['care_rnd_projects'] }}</span>
                    <span class="about-stat-label">CARE Lab R&amp;D Projects</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         2. WHO WE ARE
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-lg">
        <div class="container">
            <div class="text-two-col">
                <div>
                    <span class="tag-label">Who We Are</span>
                    <h2>An Engineering Company Built on Delivery</h2>
                    <p>
                        Cosmos Algos was founded in June 2023 to build connected software for real
                        systems. The company works across firmware, industrial automation, cloud
                        backends, computer vision, and the interfaces operators use.
                    </p>
                    <p class="secondary-para">
                        The founder's background combines industrial automation at CARE Lab with
                        multi-tenant SaaS engineering, embedded firmware, and applied computer
                        vision. That mix is why the work can span a sensor on a machine to a
                        dashboard in the cloud.
                    </p>
                    <p class="secondary-para">
                        We are deliberately small. The person who scopes the work is involved in
                        building it, and technical decisions are made by the people who understand
                        the constraints. Larger engagements can involve collaborators.
                    </p>
                </div>
                <div class="about-who-right">
                    <div class="about-pillars">
                        <div class="about-pillar">
                            <div class="pillar-icon">🔬</div>
                            <div>
                                <h3>Hardware-to-Cloud Scope</h3>
                                <p>Firmware, device protocols, desktop tooling, backends, and dashboards — scoped as one system rather than disconnected pieces.</p>
                            </div>
                        </div>
                        <div class="about-pillar">
                            <div class="pillar-icon">🧠</div>
                            <div>
                                <h3>Applied R&amp;D</h3>
                                <p>Research is part of the work, but it has to survive contact with real hardware, noisy data, and operators.</p>
                            </div>
                        </div>
                        <div class="about-pillar">
                            <div class="pillar-icon">🎯</div>
                            <div>
                                <h3>Problem First</h3>
                                <p>We start with the constraint that matters — accuracy, latency, cost, or maintainability — and choose the stack around it.</p>
                            </div>
                        </div>
                        <div class="about-pillar">
                            <div class="pillar-icon">🤝</div>
                            <div>
                                <h3>Direct Communication</h3>
                                <p>You speak with the people doing the work. Scope, progress, and limitations are stated plainly.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         3. VISION & MISSION
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-alt section-lg">
        <div class="container">
            <div class="vm-grid">

                <div class="vm-card vm-card-vision">
                    <div class="vm-icon-wrap">
                        <span class="vm-icon">🌐</span>
                    </div>
                    <span class="tag-label">Our Vision</span>
                    <h3>Build Systems That Keep Working After Handover</h3>
                    <p>
                        Our vision is practical: connected systems that are understandable,
                        maintainable, and useful to the people who run them. We want the
                        company's work to be judged by what operates reliably in the field,
                        not by the size of its claims.
                    </p>
                    <div class="vm-accent-line"></div>
                </div>

                <div class="vm-card vm-card-mission">
                    <div class="vm-icon-wrap">
                        <span class="vm-icon">🚀</span>
                    </div>
                    <span class="tag-label">Our Mission</span>
                    <h3>Give Businesses Honest Engineering Capacity</h3>
                    <p>
                        Our mission is to provide the engineering capacity that turns an
                        operational problem into a working system — with clear scope, documented
                        decisions, and no fabricated proof. We prioritise reliability and
                        handover over novelty.
                    </p>
                    <div class="vm-accent-line"></div>
                </div>

            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         4. CORE VALUES
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-lg">
        <div class="container">
            <div class="section-head-center">
                <span class="tag-label">Core Values</span>
                <h2>What We Stand For</h2>
                <p>These principles are what we aim to work by — not a claim that every decision has lived up to them.</p>
            </div>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-num">01</div>
                    <h3>Excellence</h3>
                    <p>We aim to be consistent: documented decisions, reviewed code, and communication that does not hide problems.</p>
                </div>
                <div class="value-card">
                    <div class="value-num">02</div>
                    <h3>Innovation</h3>
                    <p>We don't follow trends blindly — we study them, question them, and build systems intended to stay maintainable.</p>
                </div>
                <div class="value-card">
                    <div class="value-num">03</div>
                    <h3>Integrity</h3>
                    <p>Honest about limitations, transparent about progress. We tell you what technology can do — and what it can't.</p>
                </div>
                <div class="value-card">
                    <div class="value-num">04</div>
                    <h3>Collaboration</h3>
                    <p>Client goals shape the architecture. We would rather state a limitation than promise something the system cannot do.</p>
                </div>
                <div class="value-card">
                    <div class="value-num">05</div>
                    <h3>Pragmatism</h3>
                    <p>Real results over hype. We focus on what works in production, not what sounds impressive in a pitch deck.</p>
                </div>
                <div class="value-card">
                    <div class="value-num">06</div>
                    <h3>Empowerment</h3>
                    <p>Documentation is part of the agreed scope. The aim is that your technology stays yours and can be maintained without being locked to us.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         5. WHAT SETS US APART
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-alt section-lg">
        <div class="container">
            <div class="text-two-col">
                <div>
                    <span class="tag-label">What Sets Us Apart</span>
                    <h2>End-to-End Engineering, Scoped Honestly</h2>
                    <p>
                        We prefer to own the boundaries that matter: sensor firmware, cloud APIs,
                        data pipelines, and the interface operators use. That is the scope we can
                        actually control, and it is the scope we will quote.
                    </p>
                    <p class="secondary-para">
                        Key integration points, data flows, and failure modes are considered before
                        the build. The aim is a system with a clear path to grow — without being
                        over-engineered from day one.
                    </p>
                    <div class="apart-badges">
                        <span class="badge">Firmware &amp; Embedded</span>
                        <span class="badge">IoT &amp; Cloud</span>
                        <span class="badge">AI / Computer Vision</span>
                        <span class="badge">Industrial Automation</span>
                        <span class="badge">SaaS &amp; APIs</span>
                        <span class="badge">Mobile (Flutter)</span>
                    </div>
                </div>
                <div>
                    <div class="apart-list">
                        <div class="apart-item">
                            <span class="apart-check">✓</span>
                            <div>
                                <strong>Hardware + software together</strong>
                                <p>Embedded firmware, cloud backends, and mobile apps are handled together where the project requires it.</p>
                            </div>
                        </div>
                        <div class="apart-item">
                            <span class="apart-check">✓</span>
                            <div>
                                <strong>Feasibility before commitment</strong>
                                <p>Where a technical assumption is uncertain, we test it before committing to a full build.</p>
                            </div>
                        </div>
                        <div class="apart-item">
                            <span class="apart-check">✓</span>
                            <div>
                                <strong>Documentation as a deliverable</strong>
                                <p>Documentation and handover are part of the agreed scope. Ownership and licensing terms are stated in the contract.</p>
                            </div>
                        </div>
                        <div class="apart-item">
                            <span class="apart-check">✓</span>
                            <div>
                                <strong>Written pricing and milestones</strong>
                                <p>Costs and milestones are stated in the proposal. Scope changes are agreed before work continues.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         6. TECH STACK
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-lg">
        <div class="container">
            <div class="section-head-center">
                <span class="tag-label">Our Tech Stack</span>
                <h2>Tools We Use</h2>
                <p>The stack that appears most often in our work — from firmware to cloud.</p>
            </div>
            <div class="tech-stack-grid">

                <div class="ts-category">
                    <div class="ts-category-label">Software & Web</div>
                    <div class="ts-chips">
                        <span class="ts-chip">PHP / Laravel</span>
                        <span class="ts-chip">Python</span>
                        <span class="ts-chip">JavaScript</span>
                        <span class="ts-chip">Flutter</span>
                        <span class="ts-chip">REST APIs</span>
                        <span class="ts-chip">OpenAPI</span>
                        <span class="ts-chip">Spatie QueryBuilder</span>
                        <span class="ts-chip">PyQt5</span>
                    </div>
                </div>

                <div class="ts-category">
                    <div class="ts-category-label">AI & Data</div>
                    <div class="ts-chips">
                        <span class="ts-chip">Machine Learning</span>
                        <span class="ts-chip">Computer Vision</span>
                        <span class="ts-chip">OpenCV</span>
                        <span class="ts-chip">Open3D</span>
                        <span class="ts-chip">Point Clouds</span>
                        <span class="ts-chip">Data Pipelines</span>
                        <span class="ts-chip">SQL Analytics</span>
                    </div>
                </div>

                <div class="ts-category">
                    <div class="ts-category-label">Embedded & IoT</div>
                    <div class="ts-chips">
                        <span class="ts-chip">ESP32</span>
                        <span class="ts-chip">Raspberry Pi</span>
                        <span class="ts-chip">MODBUS / VFD</span>
                        <span class="ts-chip">Intel RealSense</span>
                        <span class="ts-chip">C / C++</span>
                        <span class="ts-chip">Embedded Linux</span>
                        <span class="ts-chip">MQTT</span>
                    </div>
                </div>

                <div class="ts-category">
                    <div class="ts-category-label">Cloud & Infra</div>
                    <div class="ts-chips">
                        <span class="ts-chip">AWS</span>
                        <span class="ts-chip">DynamoDB</span>
                        <span class="ts-chip">MySQL</span>
                        <span class="ts-chip">MongoDB</span>
                        <span class="ts-chip">Docker</span>
                        <span class="ts-chip">Git</span>
                        <span class="ts-chip">Postman</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         7. FOUNDER / TEAM
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-alt section-lg">
        <div class="container">
            <div class="section-head-center">
                <span class="tag-label">The Team</span>
                <h2>Meet the Founder</h2>
            </div>
            <div class="founder-card">
                <div class="founder-avatar-col">
                    <img class="founder-avatar"
                         src="{{ asset('images/abdullah-abid.jpg') }}"
                         alt="Abdullah Abid, founder of Cosmos Algos"
                         loading="lazy" width="900" height="1200">
                    <div class="founder-socials">
                        <a href="{{ $company['linkedin'] }}" class="founder-social-link" aria-label="Abdullah Abid on LinkedIn" target="_blank" rel="noopener">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
                        </a>
                        <a href="mailto:{{ $company['email'] }}" class="founder-social-link" aria-label="Email Cosmos Algos">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </a>
                    </div>
                </div>
                <div class="founder-info">
                    <div class="founder-header">
                        <div>
                            <h3 class="founder-name">Abdullah Abid</h3>
                            <p class="founder-title">Founder & CEO — Cosmos Algos</p>
                        </div>
                        <div class="founder-badge-row">
                            <span class="badge">AI / ML</span>
                            <span class="badge">IoT & Embedded</span>
                            <span class="badge">Full-Stack</span>
                        </div>
                    </div>
                    <p class="founder-bio">
                        Abdullah is a hands-on backend and platform engineer with experience across
                        AI, IoT, and embedded systems. He combines software-first discipline with
                        hardware familiarity — building Laravel APIs and Python data pipelines as
                        well as ESP32 firmware and Intel RealSense RGB-D acquisition systems.
                    </p>
                    <p class="founder-bio">
                        He founded Cosmos Algos in June 2023 to build connected systems without hype:
                        clear scope, documented decisions, and a working handover. He is pursuing a
                        BSc in Artificial Intelligence at The Islamia University of Bahawalpur and
                        has worked as a Software Developer at CARE Lab since March 2021.
                    </p>
                    <div class="founder-skills">
                        <div class="founder-skill-group">
                            <span class="founder-skill-label">Languages</span>
                            <div class="founder-skill-chips">
                                <span class="ts-chip">Python</span>
                                <span class="ts-chip">PHP / Laravel</span>
                                <span class="ts-chip">C / C++</span>
                                <span class="ts-chip">Flutter / Dart</span>
                                <span class="ts-chip">JavaScript</span>
                            </div>
                        </div>
                        <div class="founder-skill-group">
                            <span class="founder-skill-label">Specializations</span>
                            <div class="founder-skill-chips">
                                <span class="ts-chip">Backend APIs</span>
                                <span class="ts-chip">IoT Systems</span>
                                <span class="ts-chip">Computer Vision</span>
                                <span class="ts-chip">Automation</span>
                                <span class="ts-chip">Embedded Dev</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         8. INDUSTRIES WE SERVE
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-lg">
        <div class="container">
            <div class="section-head-center">
                <span class="tag-label">Industries</span>
                <h2>Industries We Serve</h2>
                <p>Sectors where we have documented project experience, not a list of everything imaginable.</p>
            </div>
            <div class="industry-grid">
                <div class="industry-item"><span class="ind-icon">🌾</span><span>Agriculture &amp; Poultry</span></div>
                <div class="industry-item"><span class="ind-icon">⚙️</span><span>Industrial Automation</span></div>
                <div class="industry-item"><span class="ind-icon">🔬</span><span>Research &amp; Academic Labs</span></div>
                <div class="industry-item"><span class="ind-icon">🚢</span><span>Logistics &amp; Port Management</span></div>
                <div class="industry-item"><span class="ind-icon">⚡</span><span>Energy &amp; Utilities</span></div>
                <div class="industry-item"><span class="ind-icon">🏠</span><span>Smart Home &amp; Consumer IoT</span></div>
                <div class="industry-item"><span class="ind-icon">🚲</span><span>Transport &amp; Mobility</span></div>
                <div class="industry-item"><span class="ind-icon">☁️</span><span>SaaS &amp; Technology Products</span></div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         9. TRUSTED PARTNERSHIPS
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-alt section-lg">
        <div class="container">
            <div class="section-head-center">
                <span class="tag-label">Platforms &amp; Capabilities</span>
                <h2>The Stacks We Build On</h2>
                <p>We choose established platforms and tools for the layers a system actually needs — from the microcontroller and sensors to the cloud and the client app.</p>
            </div>
            <div class="trust-grid">
                <div class="trust-card">
                    <div class="partner-name">Cloud</div>
                    <div class="partner-title">AWS Serverless IoT Backends</div>
                    <p>Cloud backends on AWS — IoT Core for device connectivity, Lambda for serverless processing, DynamoDB and MySQL for storage, and API Gateway with Cognito and IAM for secure, documented APIs.</p>
                </div>
                <div class="trust-card">
                    <div class="partner-name">Embedded</div>
                    <div class="partner-title">ESP32, Raspberry Pi &amp; Intel RealSense</div>
                    <p>Firmware and edge systems on ESP32 and Raspberry Pi, industrial protocol integration (MODBUS, UART, USB), and RGB-D depth sensing with the Intel RealSense D435i for computer-vision pipelines.</p>
                </div>
                <div class="trust-card">
                    <div class="partner-name">Applications</div>
                    <div class="partner-title">Laravel, Flutter &amp; Python</div>
                    <p>Laravel REST APIs and SaaS platforms, cross-platform Flutter apps, and Python tooling for data acquisition, automation, and desktop control software — with OpenAPI documentation where APIs are exposed.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         10. CTA BANNER
         ══════════════════════════════════════════════════════ --}}
    <section class="about-cta-section">
        <div class="about-cta-bg" aria-hidden="true"></div>
        <div class="container about-cta-inner">
            <h2 class="about-cta-h2">Have a System to Build?</h2>
            <p class="about-cta-lead">
                Whether you have a detailed spec or a rough idea — we can help define the scope,
                choose the architecture, and build it.
            </p>
            <div class="about-cta-actions">
                <a href="{{ route('contact') }}" class="btn btn-primary">Start a Conversation</a>
                <a href="{{ route('projects') }}" class="btn btn-ghost">See Our Work</a>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        (function () {
            // Scroll reveal for about page cards
            const targets = document.querySelectorAll(
                '.about-pillar, .value-card, .ts-category, .apart-item, .vm-card, .trust-card'
            );

            if (!targets.length) return;

            // CSS animation-timeline supported? Skip JS
            if (CSS.supports('animation-timeline', 'scroll()')) return;

            targets.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.55s ease, transform 0.55s ease';
            });

            const io = new IntersectionObserver((entries) => {
                entries.forEach(e => {
                    if (e.isIntersecting) {
                        e.target.style.opacity = '1';
                        e.target.style.transform = 'translateY(0)';
                        io.unobserve(e.target);
                    }
                });
            }, { threshold: 0.12 });

            targets.forEach((el, i) => {
                el.style.transitionDelay = `${(i % 4) * 0.08}s`;
                io.observe(el);
            });

            // Animate stat numbers counting up
            const stats = document.querySelectorAll('.about-stat-num');
            const statIo = new IntersectionObserver((entries) => {
                entries.forEach(e => {
                    if (!e.isIntersecting) return;
                    const el = e.target;
                    const raw = el.textContent.trim();
                    const num = parseFloat(raw);
                    if (isNaN(num)) return;
                    const suffix = raw.replace(String(num), '');
                    const duration = 1400;
                    const start = performance.now();
                    const tick = (now) => {
                        const p = Math.min((now - start) / duration, 1);
                        const eased = 1 - Math.pow(1 - p, 3);
                        el.textContent = Math.round(eased * num) + suffix;
                        if (p < 1) requestAnimationFrame(tick);
                    };
                    requestAnimationFrame(tick);
                    statIo.unobserve(el);
                });
            }, { threshold: 0.5 });
            stats.forEach(s => statIo.observe(s));
        })();
    </script>
@endpush
