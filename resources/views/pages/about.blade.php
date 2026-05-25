@extends('layouts.app')

@section('title', 'About Us | ' . ($company['name'] ?? 'Cosmos Algos'))
@section('meta_description', 'Learn about Cosmos Algos — our story, mission, values, and the team behind our AI-powered software and IoT engineering solutions.')

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
                We Architect<br>
                <span class="about-h1-accent">Intelligent Systems</span>
            </h1>
            <p class="about-hero-lead">
                Cosmos Algos is a pioneering technology company driven by innovation and collaboration.
                We specialize in AI-powered software, IoT, embedded systems, and cloud engineering —
                delivering end-to-end solutions that move businesses from idea to reality.
            </p>
            <div class="about-hero-stats">
                <div class="about-stat">
                    <span class="about-stat-num">5+</span>
                    <span class="about-stat-label">Years of Engineering</span>
                </div>
                <div class="about-stat-divider"></div>
                <div class="about-stat">
                    <span class="about-stat-num">20+</span>
                    <span class="about-stat-label">Projects Delivered</span>
                </div>
                <div class="about-stat-divider"></div>
                <div class="about-stat">
                    <span class="about-stat-num">10+</span>
                    <span class="about-stat-label">Satisfied Clients</span>
                </div>
                <div class="about-stat-divider"></div>
                <div class="about-stat">
                    <span class="about-stat-num">100%</span>
                    <span class="about-stat-label">Client Satisfaction</span>
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
                    <h2>A Global Engineering Company Built on Expertise</h2>
                    <p>
                        Cosmos Algos is a forward-thinking technology company dedicated to driving innovation
                        and shaping the future. Founded on the principles of excellence, integrity, and
                        collaboration, we strive to revolutionize industries and empower businesses to thrive
                        in the digital age.
                    </p>
                    <p class="secondary-para">
                        With a diverse team of experts spanning hardware and software disciplines, we specialize
                        in delivering bespoke solutions tailored to meet the evolving needs of our clients —
                        from developing innovative software applications to engineering sophisticated embedded
                        systems and IoT infrastructure.
                    </p>
                    <p class="secondary-para">
                        We leverage smart algorithms and cutting-edge technologies to develop software that
                        tackles complex business challenges head-on. Our customer-centric approach ensures we
                        collaborate closely with clients across industries to understand their unique needs
                        and deliver customized, impactful solutions.
                    </p>
                </div>
                <div class="about-who-right">
                    <div class="about-pillars">
                        <div class="about-pillar">
                            <div class="pillar-icon">🔬</div>
                            <div>
                                <h4>Holistic Solutions</h4>
                                <p>We cover the full spectrum — from embedded firmware to cloud SaaS, ensuring seamless end-to-end integration.</p>
                            </div>
                        </div>
                        <div class="about-pillar">
                            <div class="pillar-icon">🧠</div>
                            <div>
                                <h4>Innovation Engine</h4>
                                <p>R&D is in our DNA. We explore uncharted territories and create breakthrough products that shape the tech landscape.</p>
                            </div>
                        </div>
                        <div class="about-pillar">
                            <div class="pillar-icon">🎯</div>
                            <div>
                                <h4>Problem Solvers</h4>
                                <p>Challenges ignite our creativity. We engineer purpose-driven solutions that address real-world business problems.</p>
                            </div>
                        </div>
                        <div class="about-pillar">
                            <div class="pillar-icon">🤝</div>
                            <div>
                                <h4>Client-Centric</h4>
                                <p>We collaborate closely with every client to understand their unique needs before writing a single line of code.</p>
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
                    <h3>To Be a Global Leader in Technology-Driven Change</h3>
                    <p>
                        We envision a connected world where technology fuels progress. Our vision is to be
                        the catalyst for positive change — connecting people, businesses, and ideas through
                        innovative technology. We see a future where seamless integration of hardware and
                        software enhances lives, drives sustainability, and unlocks boundless possibilities.
                    </p>
                    <div class="vm-accent-line"></div>
                </div>

                <div class="vm-card vm-card-mission">
                    <div class="vm-icon-wrap">
                        <span class="vm-icon">🚀</span>
                    </div>
                    <span class="tag-label">Our Mission</span>
                    <h3>Empower Businesses with Solutions That Transcend Boundaries</h3>
                    <p>
                        Our mission is our compass — guiding every line of code, every circuit design,
                        and every client interaction. We empower businesses and individuals with cutting-edge
                        solutions that transcend boundaries, prioritizing innovation, collaboration,
                        sustainability, and empowerment in everything we do.
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
                <p>These principles guide every decision we make, every product we ship, and every relationship we build.</p>
            </div>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-num">01</div>
                    <h4>Excellence</h4>
                    <p>We hold ourselves to the highest standard in every deliverable — documentation, architecture, code, and communication.</p>
                </div>
                <div class="value-card">
                    <div class="value-num">02</div>
                    <h4>Innovation</h4>
                    <p>We don't follow trends — we study them, challenge them, and build systems that stay relevant for years.</p>
                </div>
                <div class="value-card">
                    <div class="value-num">03</div>
                    <h4>Integrity</h4>
                    <p>Honest about limitations, transparent about progress. We tell you what technology can do — and what it can't.</p>
                </div>
                <div class="value-card">
                    <div class="value-num">04</div>
                    <h4>Collaboration</h4>
                    <p>We treat every client as a partner. Their goals shape our architecture, not the other way around.</p>
                </div>
                <div class="value-card">
                    <div class="value-num">05</div>
                    <h4>Pragmatism</h4>
                    <p>Real results over hype. We focus on what works in production, not what sounds impressive in a pitch deck.</p>
                </div>
                <div class="value-card">
                    <div class="value-num">06</div>
                    <h4>Empowerment</h4>
                    <p>Every system we build comes fully documented. Your technology stays yours — not locked in our hands.</p>
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
                    <h2>End-to-End, Architecture-First Engineering</h2>
                    <p>
                        Most agencies hand you a piece of the puzzle. We hand you the whole picture.
                        From sensor firmware to cloud APIs, from ML pipelines to mobile interfaces —
                        we design, build, and own the full stack.
                    </p>
                    <p class="secondary-para">
                        Our architecture-first thinking means we design the system before we write a single line.
                        Every integration point, data flow, and failure mode is considered upfront —
                        so you get a system that scales, not one that collapses under real-world load.
                    </p>
                    <div class="apart-badges">
                        <span class="badge">AWS Partner</span>
                        <span class="badge">Microchip Design Partner</span>
                        <span class="badge">Avnet IoT Partner</span>
                        <span class="badge">ISO 27001</span>
                        <span class="badge">ISO 9001</span>
                        <span class="badge">Clutch 5★</span>
                    </div>
                </div>
                <div>
                    <div class="apart-list">
                        <div class="apart-item">
                            <span class="apart-check">✓</span>
                            <div>
                                <strong>Hardware + Software in one team</strong>
                                <p>We bridge the physical and digital — PCB design, embedded firmware, cloud backends, and mobile apps under one roof.</p>
                            </div>
                        </div>
                        <div class="apart-item">
                            <span class="apart-check">✓</span>
                            <div>
                                <strong>R&D before production</strong>
                                <p>We validate technical feasibility before you invest a full budget — reducing risk at every phase.</p>
                            </div>
                        </div>
                        <div class="apart-item">
                            <span class="apart-check">✓</span>
                            <div>
                                <strong>Documentation as a deliverable</strong>
                                <p>Every project ships with complete technical and operational documentation. Your IP stays yours.</p>
                            </div>
                        </div>
                        <div class="apart-item">
                            <span class="apart-check">✓</span>
                            <div>
                                <strong>Transparent pricing policy</strong>
                                <p>No hidden retainers, no scope creep surprises. Clear milestones, clear costs, clear ownership.</p>
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
                <h2>Tools We Master</h2>
                <p>We're fluent across the full stack — from firmware to cloud, from mobile to ML.</p>
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
                        <span class="ts-chip">Django</span>
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
                        <span class="ts-chip">PCB Design</span>
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
                    {{-- TODO: Replace with real photo <img src="{{ asset('images/abdullah-abid.webp') }}" alt="Abdullah Abid"> --}}
                    <div class="founder-avatar-placeholder">AA</div>
                    <div class="founder-socials">
                        <a href="#" class="founder-social-link" aria-label="LinkedIn">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
                        </a>
                        <a href="#" class="founder-social-link" aria-label="GitHub">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg>
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
                        Abdullah is a hands-on backend and platform engineer with deep expertise in AI, IoT,
                        and embedded systems. He combines software-first discipline with hardware familiarity —
                        building everything from Laravel APIs and Python data pipelines to ESP32 firmware and
                        Intel RealSense RGB-D acquisition systems.
                    </p>
                    <p class="founder-bio">
                        He founded Cosmos Algos to build a company that solves real engineering problems without
                        hype — architecture-first, documentation-driven, and always production-ready.
                        He is currently pursuing a BSc in Artificial Intelligence at the Islamia University
                        of Bahawalpur and serves as a Software Developer at CARE Lab (IUB).
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
                <p>Our expertise benefits a wide range of sectors — from heavy industry to precision healthcare.</p>
            </div>
            <div class="industry-grid">
                <div class="industry-item"><span class="ind-icon">🏭</span><span>Manufacturing &amp; Industry 4.0</span></div>
                <div class="industry-item"><span class="ind-icon">⚡</span><span>Energy &amp; Utilities</span></div>
                <div class="industry-item"><span class="ind-icon">🌾</span><span>Agriculture &amp; AgriTech</span></div>
                <div class="industry-item"><span class="ind-icon">🏥</span><span>Healthcare</span></div>
                <div class="industry-item"><span class="ind-icon">🎓</span><span>Education</span></div>
                <div class="industry-item"><span class="ind-icon">☀️</span><span>Solar &amp; Wind Energy</span></div>
                <div class="industry-item"><span class="ind-icon">🛢️</span><span>Oil &amp; Gas</span></div>
                <div class="industry-item"><span class="ind-icon">🚁</span><span>Drones &amp; UAV</span></div>
                <div class="industry-item"><span class="ind-icon">🏠</span><span>Smart Home &amp; Building</span></div>
                <div class="industry-item"><span class="ind-icon">🚗</span><span>Automotive</span></div>
                <div class="industry-item"><span class="ind-icon">📡</span><span>Consumer IoT</span></div>
                <div class="industry-item"><span class="ind-icon">💊</span><span>Telemedicine</span></div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         9. TRUSTED PARTNERSHIPS
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-alt section-lg">
        <div class="container">
            <div class="section-head-center">
                <span class="tag-label">Strategic Partners</span>
                <h2>Trusted by Global Industry Leaders</h2>
                <p>Through strategic alliances, we gain privileged access to the latest advancements in technology and pass those advantages directly to our clients.</p>
            </div>
            <div class="trust-grid">
                <div class="trust-card">
                    <div class="partner-name">Microchip</div>
                    <div class="partner-title">Microchip Design Partner</div>
                    <p>Official design partner with Microchip Technology — a global leader in microcontrollers and analog semiconductors. This collaboration ensures our IoT and embedded solutions integrate industry-leading silicon with production-grade firmware.</p>
                </div>
                <div class="trust-card">
                    <div class="partner-name">Avnet</div>
                    <div class="partner-title">Avnet IoT Partner Program</div>
                    <p>Member of Avnet's global IoT Partner Program, giving us access to an extensive ecosystem of components, design tools, and supply-chain resources — ensuring reliable hardware sourcing at every project phase.</p>
                </div>
                <div class="trust-card">
                    <div class="partner-name">AWS</div>
                    <div class="partner-title">Amazon Web Services Partner</div>
                    <p>Official AWS Partner — enabling us to design, deploy, and manage cloud-native architectures with full access to AWS programs, infrastructure, and partner support. Our clients benefit from enterprise-grade cloud at startup-friendly scale.</p>
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
            <h2 class="about-cta-h2">Ready to Build Something Exceptional?</h2>
            <p class="about-cta-lead">
                Whether you have a detailed spec or just a rough idea — we'll help you define,
                architect, and deliver it. Let's turn your vision into production-grade reality.
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
