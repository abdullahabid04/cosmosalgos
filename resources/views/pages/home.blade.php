@extends('layouts.app')

@section('title', ($company['name'] ?? 'Cosmos Algos') . ' | AI-Powered Software Systems')

@section('meta_description', 'Hardware and software engineering. Smart devices, firmware, cloud analytics, and intelligent automation.')

@section('content')

    {{-- ══════════════════════════════════════════════════════════════
     HERO SECTION — ENHANCED
     Replace the entire existing <section class="hero-home">…</section>
     block in home.blade.php with this.
     ══════════════════════════════════════════════════════════════ --}}

    <section class="hero-home" id="hero">

        {{-- ── Animated background canvas ── --}}
        <div class="hero-bg" aria-hidden="true">
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
                    AI-Powered<br>
                    <span class="hero-h1-accent">Software Systems</span>
                </h1>

                {{-- Rotating typewriter sub-headline --}}
                <div class="hero-typewriter-wrap hero-anim-3" aria-live="polite">
                    <span class="hero-typewriter-prefix">We build&nbsp;</span>
                    <span class="hero-typewriter-text" id="heroTypewriter"></span>
                    <span class="hero-typewriter-cursor">|</span>
                </div>

                {{-- Lead --}}
                <p class="lead hero-anim-4">
                    Hardware and software engineering. Smart devices, firmware,
                    cloud analytics, and intelligent automation.
                </p>

                {{-- CTAs --}}
                <div class="hero-cta-row hero-anim-5">
                    <a href="{{ route('services') }}" class="btn btn-primary">Explore Services</a>
                    <a href="{{ route('projects') }}" class="btn btn-ghost">Our Projects</a>
                </div>

                {{-- Badges --}}
                <div class="badge-row hero-anim-6">
                    <span class="badge">AWS Partner</span>
                    <span class="badge">ISO 27001</span>
                    <span class="badge">ISO 9001</span>
                    <span class="badge">Top IoT Developers 2025</span>
                    <span class="badge">Clutch 5★</span>
                </div>

            </div>{{-- /hero-left --}}

            {{-- ── RIGHT COLUMN — Visual Panel ── --}}
            {{-- TODO: Replace the entire .hero-visual div with a real <img> when you have one:
                 <img src="{{ asset('images/hero-visual.png') }}" alt="Cosmos Algos platform" class="hero-img"> --}}
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
                    <span class="hv-card-num">20+</span>
                    <span class="hv-card-label">Projects Delivered</span>
                </div>
                <div class="hv-card hv-card-2">
                    <span class="hv-card-num">5+</span>
                    <span class="hv-card-label">Years Experience</span>
                </div>
                <div class="hv-card hv-card-3">
                    <span class="hv-card-num">100%</span>
                    <span class="hv-card-label">Client Satisfaction</span>
                </div>
                <div class="hv-card hv-card-4">
                    <span class="hv-card-num">10+</span>
                    <span class="hv-card-label">Tech Domains</span>
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
            <p class="logo-strip-label">Trusted by teams at</p>
            <ul class="logo-list">
                {{-- TODO: Replace with actual client / partner logos/images --}}
                <li>Avnet</li>
                <li>Microchip</li>
                <li>AWS</li>
                <li>UNDP</li>
                <li>N2O</li>
                <li>LNU</li>
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
                    <h2 class="glitch-ready">Profound Experience</h2>
                    <p>
                        Cosmos Algos is a global engineering company focused on Artificial
                        Intelligence and software systems with years of deep experience.
                        We provide AI-enabled solutions that unite smart software with
                        connected devices and industrial infrastructure. Our teams merge
                        IoT expertise with embedded development and the latest AI automation
                        trends to create autonomous products that drive business progress.
                    </p>
                    <a href="{{ route('about') }}" class="btn btn-ghost about-btn">About the Company</a>
                </div>
                <div data-reveal="fade-left">
                    <div class="exp-numbers" data-stagger>
                        <div class="exp-num-card card">
                            <div class="num">5+</div>
                            <div class="num-label">Years Experience</div>
                        </div>
                        <div class="exp-num-card card">
                            <div class="num">20+</div>
                            <div class="num-label">Projects Delivered</div>
                        </div>
                        <div class="exp-num-card card">
                            <div class="num">10+</div>
                            <div class="num-label">Happy Clients</div>
                        </div>
                    </div>
                    <div class="card about-card">
                        <p>
                            We leverage smart algorithms to develop innovative software that tackles
                            business challenges head-on. With a customer-centric approach, we
                            collaborate closely with companies across industries to understand
                            their unique needs and deliver customized solutions.
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
                            Delivered first real-world <strong>Flutter client projects</strong>
                            in automation &amp; home systems. Explored backend, servers,
                            and IoT integration.
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
                            Completed large industrial automation project. Transitioned to
                            <strong>IoT SaaS</strong> — collaborated on 4 SaaS platforms as
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
                            Led <strong>FluxSense AI</strong> — poultry growth prediction
                            pipeline. Built <strong>Intel RealSense</strong> camera streaming.
                            Designed VFD remote control system
                            (ESP32 + Android + Laravel).
                        </p>
                    </div>
                </div>

                {{-- 2025 — xl node, content above --}}
                <div class="tl-item tl-above tl-xl" data-year="2025">
                    <div class="tl-content tl-content-above">
                        <div class="tl-year">2025</div>
                        <p>
                            Expanded service portfolio to <strong>AI/ML, mobile &amp; web
                                systems</strong>. Joined CARE Lab at IUB as Software Developer.
                            Delivering enterprise-grade products across
                            healthcare, agriculture, and industrial sectors.
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
                    <h2 class="glitch-ready">Transforming Business with AI and Software Development</h2>
                    <p>
                        We design AI-powered solutions that connect Artificial Intelligence
                        and software engineering into a single cognitive ecosystem. Such
                        systems collect raw data from sensors and user interactions, then
                        AI algorithms interpret it and make decisions, making the system
                        fully autonomous, reducing human intervention, and delivering
                        measurable efficiency gains.
                    </p>
                    <p class="secondary-para">
                        Our team of skilled professionals combines expertise in software
                        development, machine learning, and data analysis to create
                        transformative applications that propel your business forward.
                    </p>
                </div>
                <div data-reveal="fade-left">
                    <div class="ai-visual-panel card">
                        <div class="ai-visual-icon">🧠</div>
                        <p class="ai-visual-caption">
                            Data → AI Algorithms → Autonomous Decision-Making
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
                    <h4>Reduce Risk Before Scaling</h4>
                    <p>
                        Our R&amp;D process is designed to absorb risk before you commit a
                        serious budget. Launching a complex project shouldn't feel like
                        gambling with your production environment.
                    </p>
                </div>
                <div class="approach-card">
                    <div class="a-icon">🔗</div>
                    <h4>End-to-End Ownership</h4>
                    <p>
                        You don't have to deal with multiple vendors on your own. Our
                        strategic partnerships with cloud providers and hardware manufacturers
                        allow us to build the complete architecture as a whole.
                    </p>
                </div>
                <div class="approach-card">
                    <div class="a-icon">🎯</div>
                    <h4>Pragmatic Engineering: Real Results, No Hype</h4>
                    <p>
                        We are honest about complexity, limitations, and risks. We help you
                        set realistic goals, because we know what technology can do and what's
                        out of its scope. It's a powerful tool, not a magic pill.
                    </p>
                </div>
                <div class="approach-card">
                    <div class="a-icon">📄</div>
                    <h4>Documentation Is a Core Deliverable</h4>
                    <p>
                        Every project comes with full technical and operational documentation.
                        Your system stays transparent, maintainable, and truly yours — not
                        locked into a single vendor.
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
                <h2 class="glitch-ready">Our Development Services</h2>
                <p class="section-head-sub">
                    Our development services cover the full spectrum of connected intelligent
                    products. Whether you're only considering adopting smart solutions or have
                    a clear-cut vision, we have you covered.
                </p>
            </div>
            <div class="services-grid" data-stagger>
                <div class="service-card-item">
                    <span class="svc-icon">🤖</span>
                    <h4>Cognitive IoT Systems</h4>
                    <p>
                        We combine AI with connected devices to analyze data in real time,
                        detect anomalies, and support predictive maintenance.
                    </p>
                    <span class="svc-link">Discover</span>
                </div>
                <div class="service-card-item">
                    <span class="svc-icon">💡</span>
                    <h4>AI-Enabled Firmware &amp; Devices</h4>
                    <p>
                        We embed AI directly into firmware and smart devices, enabling
                        on-device learning and decision-making without cloud dependency.
                    </p>
                    <span class="svc-link">Discover</span>
                </div>
                <div class="service-card-item">
                    <span class="svc-icon">🔬</span>
                    <h4>R&amp;D Services</h4>
                    <p>
                        Cutting-edge research and development services to bring out the
                        best in your project concept and validate technical feasibility.
                    </p>
                    <span class="svc-link">Discover</span>
                </div>
                <div class="service-card-item">
                    <span class="svc-icon">🎨</span>
                    <h4>UI/UX Design</h4>
                    <p>
                        Our experienced designers believe there is no second chance to make
                        a first impression. We craft satisfying and efficient user experiences.
                    </p>
                    <span class="svc-link">Discover</span>
                </div>
                <div class="service-card-item">
                    <span class="svc-icon">⚡</span>
                    <h4>Edge &amp; Gateway Intelligence</h4>
                    <p>
                        We deploy AI at the edge using smart gateways that filter data,
                        run ML models, and respond locally for low-latency performance.
                    </p>
                    <span class="svc-link">Discover</span>
                </div>
                <div class="service-card-item">
                    <span class="svc-icon">📊</span>
                    <h4>Data &amp; AI/ML Analytics</h4>
                    <p>
                        Our analytics platforms turn raw data into clear insights using
                        advanced AI models to optimize energy, logistics, and operations.
                    </p>
                    <span class="svc-link">Discover</span>
                </div>
                <div class="service-card-item">
                    <span class="svc-icon">☁️</span>
                    <h4>Cloud Services</h4>
                    <p>
                        Professional cloud development including AWS, Azure, and GCP by
                        a team with years of cloud-native engineering experience.
                    </p>
                    <span class="svc-link">Discover</span>
                </div>
                <div class="service-card-item">
                    <span class="svc-icon">🛠️</span>
                    <h4>Post-Production Support</h4>
                    <p>
                        We offer a full range of services to maintain your software — from
                        regular updates to custom fixes and performance optimization.
                    </p>
                    <span class="svc-link">Discover</span>
                </div>
                <div class="service-card-item">
                    <span class="svc-icon">🔌</span>
                    <h4>IoT Consulting Services</h4>
                    <p>
                        Our consultants help your business understand smart technology and
                        develop IoT strategies tailored to your unique needs.
                    </p>
                    <span class="svc-link">Discover</span>
                </div>
                <div class="service-card-item">
                    <span class="svc-icon">🧭</span>
                    <h4>Tech Advisory</h4>
                    <p>
                        Advanced technology strategy and advisory services backed by years
                        of hands-on experience in complex software and IoT projects.
                    </p>
                    <span class="svc-link">Discover</span>
                </div>
                <div class="service-card-item">
                    <span class="svc-icon">📱</span>
                    <h4>Mobile Development</h4>
                    <p>
                        Cross-platform mobile apps using Flutter for iOS and Android,
                        connecting users to your systems with intuitive interfaces.
                    </p>
                    <span class="svc-link">Discover</span>
                </div>
                <div class="service-card-item">
                    <span class="svc-icon">🌐</span>
                    <h4>Web Application Development</h4>
                    <p>
                        Scalable backend APIs, SaaS platforms, and dashboards built with
                        modern frameworks and architecture-first thinking.
                    </p>
                    <span class="svc-link">Discover</span>
                </div>
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
                    <h2 class="glitch-ready">Why Choose Us as Your Engineering Partner</h2>
                    <p class="why-lead">
                        Cosmos Algos gathers engineers who live and breathe technology. We
                        combine profound experience in software, IoT, and AI with a strong
                        culture of innovation and delivery, so your projects smoothly move
                        from idea to reality.
                    </p>
                    <ul class="why-list" data-stagger>
                        <li>Profound expertise in new technologies</li>
                        <li>Competitive solutions</li>
                        <li>Defined workflow</li>
                        <li>Professional and enthusiastic team</li>
                        <li>Eliminating risks and challenges</li>
                        <li>Constant support</li>
                        <li>Full-cycle development</li>
                        <li>Cultivated digital transformation strategy</li>
                        <li>Transparent pricing policy</li>
                        <li>Architecture-first thinking</li>
                    </ul>
                </div>
                <div data-reveal="fade-left">
                    {{-- TODO: Replace with a real image / illustration --}}
                    <div class="why-visual card">
                        <span class="why-visual-emoji">👨‍💻</span>
                    </div>
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
            </div>
            <div class="process-steps" data-stagger>
                <div class="process-step">
                    <div class="step-num">Step 01</div>
                    <h4>Discovery &amp; Use-Case Definition</h4>
                    <p>
                        We analyze business goals, users, and constraints to identify the
                        right problems to solve and define clear success criteria.
                    </p>
                </div>
                <div class="process-step">
                    <div class="step-num">Step 02</div>
                    <h4>Architecture &amp; R&amp;D</h4>
                    <p>
                        We explore technologies, evaluate feasibility, and design a scalable
                        system architecture that fits performance and security needs.
                    </p>
                </div>
                <div class="process-step">
                    <div class="step-num">Step 03</div>
                    <h4>Proof of Concept &amp; Prototyping</h4>
                    <p>
                        We build quick prototypes to validate ideas, reduce risks, and
                        confirm technical viability before full development.
                    </p>
                </div>
                <div class="process-step">
                    <div class="step-num">Step 04</div>
                    <h4>Detailed Design &amp; Specifications</h4>
                    <p>
                        We create detailed UX flows, technical specs, and documentation
                        to ensure teams are fully aligned on what will be delivered.
                    </p>
                </div>
                <div class="process-step">
                    <div class="step-num">Step 05</div>
                    <h4>End-to-End Development</h4>
                    <p>
                        We implement the full solution — backend, frontend, firmware, data
                        pipelines, and integrations — following best engineering practices.
                    </p>
                </div>
                <div class="process-step">
                    <div class="step-num">Step 06</div>
                    <h4>Testing &amp; Validation</h4>
                    <p>
                        We rigorously test functionality, performance, security, and
                        usability to make sure everything works reliably in real conditions.
                    </p>
                </div>
                <div class="process-step">
                    <div class="step-num">Step 07</div>
                    <h4>Deployment &amp; Integration</h4>
                    <p>
                        We launch the solution, integrate with existing systems, migrate
                        data, and prepare environments for smooth operation.
                    </p>
                </div>
                <div class="process-step">
                    <div class="step-num">Step 08</div>
                    <h4>Operations, Optimization &amp; Support</h4>
                    <p>
                        We monitor performance, fix issues, roll out improvements, and
                        continuously optimize based on real usage and feedback.
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
                    <span class="ind-icon">🏠</span>
                    <span>Smart Home</span>
                </div>
                <div class="industry-item card">
                    <span class="ind-icon">🚁</span>
                    <span>Drones &amp; UAV Solutions</span>
                </div>
                <div class="industry-item card">
                    <span class="ind-icon">☀️</span>
                    <span>Solar/Wind Energy</span>
                </div>
                <div class="industry-item card">
                    <span class="ind-icon">🔬</span>
                    <span>High-Tech</span>
                </div>
                <div class="industry-item card">
                    <span class="ind-icon">🛢️</span>
                    <span>Oil &amp; Gas</span>
                </div>
                <div class="industry-item card">
                    <span class="ind-icon">🚗</span>
                    <span>Automotive</span>
                </div>
                <div class="industry-item card">
                    <span class="ind-icon">📡</span>
                    <span>Consumer IoT</span>
                </div>
                <div class="industry-item card">
                    <span class="ind-icon">⚡</span>
                    <span>Energy</span>
                </div>
                <div class="industry-item card">
                    <span class="ind-icon">🏥</span>
                    <span>Healthcare</span>
                </div>
                <div class="industry-item card">
                    <span class="ind-icon">🌾</span>
                    <span>Agriculture</span>
                </div>
                <div class="industry-item card">
                    <span class="ind-icon">🏭</span>
                    <span>Digital Manufacturing / Industry 4.0</span>
                </div>
                <div class="industry-item card">
                    <span class="ind-icon">💊</span>
                    <span>Telemedicine Applications</span>
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
                <span class="tag-label">Partners &amp; Clients</span>
                <h2>Our Partners &amp; Clients</h2>
                <p>We align closely with partners and clients to meet the most ambitious business needs.</p>
            </div>
            {{-- TODO: Replace text items with actual logo images --}}
            <div class="partners-logos" data-stagger>
                <span class="partner-logo-item">Solar Manager</span>
                <span class="partner-logo-item">UDB</span>
                <span class="partner-logo-item">Avnet</span>
                <span class="partner-logo-item">AVL</span>
                <span class="partner-logo-item">Microchip</span>
                <span class="partner-logo-item">AWS</span>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         11. TRUSTED PARTNERSHIPS
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-lg">
        <div class="container">
            <div class="section-head" data-reveal="fade-up">
                <span class="tag-label">Strategic Alliances</span>
                <h2 class="glitch-ready">Trusted Partnerships with Global Industry Leaders</h2>
                <p class="section-head-sub">
                    Through these strategic alliances, Cosmos Algos gains privileged access
                    to the latest advancements in technology. This ensures that we consistently
                    deliver state-of-the-art solutions that meet business objectives and
                    surpass the evolving expectations of end users.
                </p>
            </div>
            <div class="trust-grid" data-stagger>
                <div class="trust-card">
                    <div class="partner-name">Microchip</div>
                    <div class="partner-title">Microchip Design Partner</div>
                    <p>
                        We take pride in our status as a trusted Microchip Design Partner.
                        With Microchip's global prominence in microcontrollers and analog
                        semiconductors, our collaboration ensures IoT solutions that
                        integrate cutting-edge technology with industry-leading expertise.
                    </p>
                </div>
                <div class="trust-card">
                    <div class="partner-name">Avnet</div>
                    <div class="partner-title">Avnet IoT Partner Program Member</div>
                    <p>
                        As a valued member of the Avnet IoT Partner Program, we align
                        with a distinguished global distributor of electronic components
                        and IoT solutions, gaining access to an extensive ecosystem of
                        resources and technologies.
                    </p>
                </div>
                <div class="trust-card">
                    <div class="partner-name">AWS</div>
                    <div class="partner-title">AWS Partner</div>
                    <p>
                        Cosmos Algos is an official AWS Partner, allowing us to leverage
                        AWS resources and offer customers an even more customized approach
                        while taking full advantage of AWS partner programs and cloud
                        infrastructure.
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
                <h2 class="glitch-ready">Customer Success Stories</h2>
                <p class="section-head-sub">
                    Check out our portfolio of transformed businesses that have reaped
                    the benefits of working with us.
                </p>
            </div>
            <div class="grid cols-3" data-stagger>
                {{-- TODO: Loop $projects from controller when case studies are ready --}}
                <div class="case-study-card">
                    <div class="case-study-thumb">🌐</div>
                    <div class="case-study-body">
                        <div class="case-study-meta">
                            <span class="meta-chip">Energy</span>
                            <span class="meta-chip">Oil &amp; Gas</span>
                        </div>
                        <h4>Web IIoT Application for Real-Time Monitoring of SCADA Units</h4>
                        <p>
                            An IoT web application for monitoring equipment performance in
                            manufacturing: oil, water, gas. The solution reduces fuel usage
                            and time required to manually take measurements, eliminating
                            human errors.
                        </p>
                        <div class="case-study-stats">
                            <div class="case-stat">
                                <strong>9 engineers</strong>
                                Team Size
                            </div>
                            <div class="case-stat">
                                <strong>4 years</strong>
                                Project Lifetime
                            </div>
                            <div class="case-stat">
                                <strong>USA</strong>
                                Client
                            </div>
                        </div>
                    </div>
                </div>

                <div class="case-study-card">
                    <div class="case-study-thumb">🤖</div>
                    <div class="case-study-body">
                        <div class="case-study-meta">
                            <span class="meta-chip">Agriculture</span>
                            <span class="meta-chip">AI/ML</span>
                        </div>
                        {{-- TODO: Replace with real case study --}}
                        <h4>AI-Powered Poultry Growth Prediction System</h4>
                        <p>
                            An end-to-end AI pipeline for livestock growth prediction using
                            computer vision and sensor fusion. Enabled data-driven feeding
                            decisions and reduced operational costs significantly.
                        </p>
                        <div class="case-study-stats">
                            <div class="case-stat">
                                <strong>3 engineers</strong>
                                Team Size
                            </div>
                            <div class="case-stat">
                                <strong>6 months</strong>
                                Project Lifetime
                            </div>
                            <div class="case-stat">
                                <strong>Pakistan</strong>
                                Client
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
                        {{-- TODO: Replace with real case study --}}
                        <h4>VFD Remote Control System for Industrial Automation</h4>
                        <p>
                            A remote-control system for Variable Frequency Drives using
                            ESP32, Android, and a Laravel backend. Enabled real-time
                            motor monitoring and control from any location.
                        </p>
                        <div class="case-study-stats">
                            <div class="case-stat">
                                <strong>2 engineers</strong>
                                Team Size
                            </div>
                            <div class="case-stat">
                                <strong>3 months</strong>
                                Project Lifetime
                            </div>
                            <div class="case-stat">
                                <strong>Pakistan</strong>
                                Client
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         13. TESTIMONIALS
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-lg">
        <div class="container">
            <div class="section-head-center" data-reveal="fade-up">
                <span class="tag-label">Testimonials</span>
                <h2 class="glitch-ready">Why Our Clients Can't Stop Talking About Us</h2>
                <p>
                    At Cosmos Algos, we pride ourselves on having 100% satisfied clients.
                    Our dedicated team of technology experts, data analysts, and digital
                    transformation consultants work tirelessly to ensure your success.
                </p>
            </div>
            <div class="grid cols-2" data-stagger>
                {{-- TODO: Loop $testimonials from controller --}}
                <div class="testimonial-card">
                    <div class="testi-quote">"</div>
                    <p class="testi-text">
                        This is the best tech partner we've ever worked with. Their solutions
                        are innovative and their support is unparalleled. Cosmos Algos truly
                        understands the complexity of industrial systems.
                    </p>
                    <div class="testi-author">
                        <div class="testi-avatar">OD</div>
                        <div>
                            <div class="testi-name">Ostap D.</div>
                            <div class="testi-role">COO, Electronics Manufacturer</div>
                            <div class="rating-row">
                                <span class="star">★</span><span class="star">★</span>
                                <span class="star">★</span><span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testi-quote">"</div>
                    <p class="testi-text">
                        Cosmos Algos transformed our business with their advanced analytics
                        and custom software. We couldn't be happier with the results. Their
                        architecture-first approach gave us a system that actually scales.
                    </p>
                    <div class="testi-author">
                        <div class="testi-avatar">CA</div>
                        <div>
                            <div class="testi-name">Client A</div>
                            <div class="testi-role">CTO, SaaS Platform</div>
                            <div class="rating-row">
                                <span class="star">★</span><span class="star">★</span>
                                <span class="star">★</span><span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testi-quote">"</div>
                    <p class="testi-text">
                        Their expertise in IoT solutions has streamlined our operations and
                        significantly boosted our growth. Every deliverable was clean,
                        documented, and production-ready from day one.
                    </p>
                    <div class="testi-author">
                        <div class="testi-avatar">CB</div>
                        <div>
                            <div class="testi-name">Client B</div>
                            <div class="testi-role">Operations Director, Manufacturing</div>
                            <div class="rating-row">
                                <span class="star">★</span><span class="star">★</span>
                                <span class="star">★</span><span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testi-quote">"</div>
                    <p class="testi-text">
                        Choosing Cosmos Algos was the best decision for our digital
                        transformation. Their team is skilled, responsive, and committed
                        to excellence. They delivered beyond our expectations.
                    </p>
                    <div class="testi-author">
                        <div class="testi-avatar">CC</div>
                        <div>
                            <div class="testi-name">Client C</div>
                            <div class="testi-role">Founder, AgriTech Startup</div>
                            <div class="rating-row">
                                <span class="star">★</span><span class="star">★</span>
                                <span class="star">★</span><span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Review platform badges --}}
            <div class="review-badges" data-reveal="fade-up">
                <span class="badge">Clutch 5 Stars</span>
                <span class="badge">GoodFirms 5 Stars</span>
                <span class="badge">Top IoT Developers 2025</span>
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
                            <h5>🇵🇰 Pakistan (HQ)</h5>
                            <p>
                                Bahawalpur, Punjab, Pakistan<br>
                                <a href="mailto:hello@cosmosalgos.com" class="contact-link">hello@cosmosalgos.com</a>
                            </p>
                        </div>
                        {{-- TODO: Add more office locations as they expand --}}
                    </div>
                    <div class="sales-office">
                        <p class="sales-label">Sales Office:</p>
                        <a href="mailto:sales@cosmosalgos.com" class="contact-link">sales@cosmosalgos.com</a>
                    </div>
                </div>

                {{-- Right: contact form --}}
                <div class="contact-form-card" data-reveal="fade-left">
                    <h3>Tell Us About Your Project</h3>
                    <p class="sub">We'll get back to you within 24 hours.</p>

                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-error">{{ session('error') }}</div>
                    @endif

                    <form method="POST" action="">
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
                            <input type="checkbox" id="privacy" name="privacy" required>
                            <label for="privacy">
                                I have read and accept the
                                <a href="" class="contact-link">Terms of Use and Privacy Policy</a>.
                            </label>
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
                'Intelligent Automation.',
                'Scalable SaaS Platforms.',
                'IoT & Embedded Systems.',
                'AI/ML Solutions.',
                'From Idea to Production.',
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

                if (!deleting && charIdx <= phrase.length) {
                    el.textContent = phrase.slice(0, charIdx);
                    charIdx++;
                    if (charIdx > phrase.length) {
                        pauseTick++;
                        if (pauseTick >= PAUSE_AFTER) { deleting = true; pauseTick = 0; }
                        setTimeout(tick, 50); return;
                    }
                    setTimeout(tick, TYPE_SPEED);
                } else if (deleting && charIdx >= 0) {
                    el.textContent = phrase.slice(0, charIdx);
                    charIdx--;
                    if (charIdx < 0) {
                        deleting = false; charIdx = 0;
                        pauseTick++;
                        if (pauseTick >= PAUSE_BEFORE) { phraseIdx = (phraseIdx + 1) % phrases.length; pauseTick = 0; }
                        setTimeout(tick, 50); return;
                    }
                    setTimeout(tick, DELETE_SPEED);
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

        (function () {
            'use strict';

            /* ══════════════════════════════════════════════
               COSMOS BACKGROUND — star field, nebulae, grid,
               shooting stars, network canvas
            ══════════════════════════════════════════════ */
            const bg = document.createElement('div');
            bg.id = 'cosmos-bg';
            for (let i = 1; i <= 4; i++) {
                const o = document.createElement('div');
                o.className = `cosmos-nebula cosmos-nebula-${i}`;
                bg.appendChild(o);
            }
            [
                {top:'10%',left:'5%',delay:'2s',dur:'4s'},
                {top:'30%',left:'60%',delay:'7s',dur:'3s'},
                {top:'60%',left:'20%',delay:'12s',dur:'5s'},
                {top:'80%',left:'75%',delay:'4s',dur:'3.5s'},
                {top:'15%',left:'40%',delay:'18s',dur:'4s'}
            ].forEach(c => {
                const s = document.createElement('div');
                s.className = 'shooting-star';
                s.style.cssText = `top:${c.top};left:${c.left};animation-delay:${c.delay};animation-duration:${c.dur}`;
                bg.appendChild(s);
            });
            document.body.insertBefore(bg, document.body.firstChild);

            const grid = document.createElement('div');
            grid.id = 'algo-grid';
            document.body.insertBefore(grid, document.body.firstChild);

            /* ── Network Canvas ── */
            const canvas = document.createElement('canvas');
            canvas.id = 'network-canvas';
            document.body.insertBefore(canvas, document.body.firstChild);
            const ctx = canvas.getContext('2d');
            let W, H, nodes;
            const COLORS = ['rgba(224,37,26,','rgba(0,212,255,','rgba(123,94,167,','rgba(255,183,71,'];

            function resize() { W = canvas.width = window.innerWidth; H = canvas.height = window.innerHeight; }
            function makeNodes() {
                nodes = Array.from({length: 55}, () => ({
                    x: Math.random() * W, y: Math.random() * H,
                    vx: (Math.random() - 0.5) * 0.35, vy: (Math.random() - 0.5) * 0.35,
                    r: Math.random() * 2 + 1,
                    color: COLORS[Math.floor(Math.random() * 4)],
                    pulse: Math.random() * Math.PI * 2
                }));
            }
            function drawNet() {
                ctx.clearRect(0, 0, W, H);
                nodes.forEach(n => {
                    n.x += n.vx; n.y += n.vy; n.pulse += 0.02;
                    if (n.x < 0 || n.x > W) n.vx *= -1;
                    if (n.y < 0 || n.y > H) n.vy *= -1;
                    const g = 0.6 + Math.sin(n.pulse) * 0.4;
                    ctx.beginPath(); ctx.arc(n.x, n.y, n.r * g, 0, Math.PI * 2);
                    ctx.fillStyle = n.color + g + ')'; ctx.fill();
                });
                for (let i = 0; i < nodes.length; i++) {
                    for (let j = i + 1; j < nodes.length; j++) {
                        const a = nodes[i], b = nodes[j];
                        const dx = a.x - b.x, dy = a.y - b.y;
                        const d = Math.sqrt(dx * dx + dy * dy);
                        if (d < 160) {
                            ctx.beginPath(); ctx.moveTo(a.x, a.y); ctx.lineTo(b.x, b.y);
                            ctx.strokeStyle = `rgba(40,44,70,${(1 - d / 160) * 0.35})`;
                            ctx.lineWidth = 0.8; ctx.stroke();
                        }
                    }
                }
                requestAnimationFrame(drawNet);
            }
            resize(); makeNodes(); drawNet();
            window.addEventListener('resize', () => { resize(); makeNodes(); });

            /* ══════════════════════════════════════════════
               SCROLL PROGRESS BAR
            ══════════════════════════════════════════════ */
            const prog = document.createElement('div');
            prog.id = 'scroll-progress';
            document.body.insertBefore(prog, document.body.firstChild);
            window.addEventListener('scroll', () => {
                prog.style.width = (scrollY / (document.body.scrollHeight - innerHeight) * 100) + '%';
            }, {passive: true});

            /* ══════════════════════════════════════════════
               CUSTOM CURSOR + TRAILING RING + COMET TAIL
            ══════════════════════════════════════════════ */
            if (!window.matchMedia('(max-width:768px)').matches) {
                const cur = document.createElement('div');
                cur.id = 'cosmos-cursor';
                document.body.appendChild(cur);
                const trail = document.createElement('div');
                trail.id = 'cosmos-cursor-trail';
                document.body.appendChild(trail);

                let mx = -100, my = -100, tx = -100, ty = -100, ct = 0;
                document.addEventListener('mousemove', e => {
                    mx = e.clientX; my = e.clientY;
                    cur.style.left = mx + 'px'; cur.style.top = my + 'px';
                });

                function spawnComet(x, y) {
                    const d = document.createElement('div');
                    d.className = 'cursor-comet';
                    const sz = Math.random() * 5 + 2;
                    const hue = Math.random() > 0.6 ? '0,212,255' : '224,37,26';
                    d.style.cssText = `width:${sz}px;height:${sz}px;left:${x}px;top:${y}px;background:rgba(${hue},${0.5 + Math.random() * 0.4});box-shadow:0 0 ${sz * 2}px rgba(${hue},0.6);animation-duration:${0.4 + Math.random() * 0.4}s;`;
                    document.body.appendChild(d);
                    d.addEventListener('animationend', () => d.remove());
                }

                function animTrail() {
                    tx += (mx - tx) * 0.10; ty += (my - ty) * 0.10;
                    trail.style.left = tx + 'px'; trail.style.top = ty + 'px';
                    ct++;
                    if (ct % 4 === 0) spawnComet(tx, ty);
                    requestAnimationFrame(animTrail);
                }
                animTrail();

                /* Hover state on interactive elements */
                const hov = 'a,button,.btn,.service-card-item,.industry-item,.hv-card,.process-step,.testimonial-card,.tl-item,.approach-card,.trust-card,.case-study-card';
                document.querySelectorAll(hov).forEach(el => {
                    el.addEventListener('mouseenter', () => { cur.classList.add('cursor-hover'); trail.classList.add('cursor-hover'); });
                    el.addEventListener('mouseleave', () => { cur.classList.remove('cursor-hover'); trail.classList.remove('cursor-hover'); });
                });

                /* Click burst */
                document.addEventListener('click', e => {
                    for (let i = 0; i < 6; i++) {
                        setTimeout(() => {
                            const b = document.createElement('div');
                            b.className = 'cursor-comet';
                            const ang = (i / 6) * Math.PI * 2, r = 15 + Math.random() * 20;
                            const hue = i % 2 === 0 ? '224,37,26' : '0,212,255';
                            b.style.cssText = `width:4px;height:4px;left:${e.clientX + Math.cos(ang) * r}px;top:${e.clientY + Math.sin(ang) * r}px;background:rgba(${hue},0.9);box-shadow:0 0 8px rgba(${hue},0.7);animation-duration:0.5s;`;
                            document.body.appendChild(b);
                            b.addEventListener('animationend', () => b.remove());
                        }, i * 30);
                    }
                });

                /* Button ripple */
                document.querySelectorAll('.btn').forEach(btn => {
                    btn.addEventListener('click', function (e) {
                        const rect = btn.getBoundingClientRect();
                        const rip  = document.createElement('span');
                        rip.className = 'btn-ripple';
                        const sz = Math.max(rect.width, rect.height);
                        rip.style.cssText = `width:${sz}px;height:${sz}px;left:${e.clientX - rect.left - sz / 2}px;top:${e.clientY - rect.top - sz / 2}px;`;
                        btn.appendChild(rip);
                        rip.addEventListener('animationend', () => rip.remove());
                    });
                });
            }

            /* ══════════════════════════════════════════════
               SCROLL REVEAL — IntersectionObserver
            ══════════════════════════════════════════════ */
            const io = new IntersectionObserver(entries => {
                entries.forEach(e => {
                    if (e.isIntersecting) { e.target.classList.add('revealed'); io.unobserve(e.target); }
                });
            }, {threshold: 0.12, rootMargin: '0px 0px -40px 0px'});
            document.querySelectorAll('[data-reveal],[data-stagger]').forEach(el => io.observe(el));

            /* ══════════════════════════════════════════════
               GLITCH EFFECT on h2.glitch-ready hover
            ══════════════════════════════════════════════ */
            document.querySelectorAll('.glitch-ready').forEach(h => {
                h.dataset.text = h.textContent;
                let t;
                h.addEventListener('mouseenter', () => { h.classList.add('glitching'); t = setTimeout(() => h.classList.remove('glitching'), 350); });
                h.addEventListener('mouseleave', () => { clearTimeout(t); h.classList.remove('glitching'); });
            });

            /* ══════════════════════════════════════════════
               NAVBAR SCROLL STATE
            ══════════════════════════════════════════════ */
            const header = document.getElementById('siteHeader');
            if (header) {
                window.addEventListener('scroll', () => header.classList.toggle('scrolled', scrollY > 40), {passive: true});
            }

            /* ══════════════════════════════════════════════
               COUNTER ANIMATION — .num elements
            ══════════════════════════════════════════════ */
            const cio = new IntersectionObserver(entries => {
                entries.forEach(e => {
                    if (!e.isIntersecting) return;
                    cio.unobserve(e.target);
                    const el  = e.target;
                    const raw = el.textContent.trim();
                    const num = parseFloat(raw.replace(/[^0-9.]/g, ''));
                    const suf = raw.replace(/[0-9.]/g, '');
                    if (isNaN(num)) return;
                    const dur = 1600, start = performance.now();
                    function step(now) {
                        const p  = Math.min((now - start) / dur, 1);
                        const ea = 1 - Math.pow(1 - p, 3);
                        el.textContent = Math.round(ea * num) + suf;
                        if (p < 1) requestAnimationFrame(step);
                    }
                    requestAnimationFrame(step);
                });
            }, {threshold: 0.5});
            document.querySelectorAll('.num,.hv-card-num').forEach(el => cio.observe(el));

            /* ══════════════════════════════════════════════
               3D TILT on cards (desktop only)
            ══════════════════════════════════════════════ */
            if (!window.matchMedia('(max-width:768px)').matches) {
                document.querySelectorAll('.service-card-item,.testimonial-card,.process-step,.approach-card,.trust-card').forEach(card => {
                    card.addEventListener('mousemove', e => {
                        const r = card.getBoundingClientRect();
                        const cx = r.left + r.width / 2, cy = r.top + r.height / 2;
                        const dx = (e.clientX - cx) / (r.width / 2);
                        const dy = (e.clientY - cy) / (r.height / 2);
                        card.style.transform = `perspective(600px) rotateX(${dy * -6}deg) rotateY(${dx * 6}deg) translateY(-4px) scale(1.02)`;
                    });
                    card.addEventListener('mouseleave', () => { card.style.transform = ''; });
                });

                /* Magnetic buttons */
                document.querySelectorAll('.btn-primary,.btn-ghost').forEach(btn => {
                    btn.addEventListener('mousemove', e => {
                        const r = btn.getBoundingClientRect();
                        const cx = r.left + r.width / 2, cy = r.top + r.height / 2;
                        btn.style.transform = `translate(${(e.clientX - cx) * 0.2}px,${(e.clientY - cy) * 0.2}px) translateY(-2px)`;
                    });
                    btn.addEventListener('mouseleave', () => { btn.style.transform = ''; });
                });
            }

            /* ══════════════════════════════════════════════
               PARALLAX NEBULAE on scroll
            ══════════════════════════════════════════════ */
            const neb = document.querySelectorAll('.cosmos-nebula,.hero-orb');
            let ticking = false;
            window.addEventListener('scroll', () => {
                if (!ticking) {
                    requestAnimationFrame(() => {
                        neb.forEach((n, i) => n.style.transform = `translateY(${scrollY * (0.04 + i * 0.015)}px)`);
                        ticking = false;
                    });
                    ticking = true;
                }
            }, {passive: true});

            /* ══════════════════════════════════════════════
               CONSTELLATION SVG overlay on hero
            ══════════════════════════════════════════════ */
            const heroBg = document.querySelector('.hero-bg');
            if (heroBg) {
                const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
                svg.style.cssText = 'position:absolute;inset:0;width:100%;height:100%;pointer-events:none;opacity:0.15;';
                svg.setAttribute('aria-hidden', 'true');
                const pts = [[15,20],[30,10],[45,30],[60,15],[75,25],[20,45],[35,60],[50,50],[65,65],[80,40],[10,70],[25,80],[55,75],[70,85],[90,60]];
                [[0,1],[1,2],[2,3],[3,4],[0,5],[5,6],[6,7],[7,8],[8,9],[5,10],[10,11],[11,12],[12,13],[13,14],[9,14]].forEach(([a, b]) => {
                    const l = document.createElementNS('http://www.w3.org/2000/svg', 'line');
                    l.setAttribute('x1', pts[a][0] + '%'); l.setAttribute('y1', pts[a][1] + '%');
                    l.setAttribute('x2', pts[b][0] + '%'); l.setAttribute('y2', pts[b][1] + '%');
                    l.setAttribute('stroke', 'rgba(0,212,255,0.6)'); l.setAttribute('stroke-width', '0.5');
                    svg.appendChild(l);
                });
                pts.forEach(([x, y], i) => {
                    const c = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
                    c.setAttribute('cx', x + '%'); c.setAttribute('cy', y + '%');
                    c.setAttribute('r', i % 4 === 0 ? '2' : '1.2');
                    c.setAttribute('fill', i % 3 === 0 ? 'rgba(224,37,26,0.8)' : 'rgba(0,212,255,0.7)');
                    svg.appendChild(c);
                });
                heroBg.appendChild(svg);
            }

        })();
    </script>
@endpush

{{--@extends('layouts.app')--}}

{{--@section('title', ($company['name'] ?? 'Cosmos Algos') . ' | AI-Powered Software Systems')--}}

{{--@section('meta_description', 'Hardware and software engineering. Smart devices, firmware, cloud analytics, and intelligent automation.')--}}

{{--@section('content')--}}

{{--    --}}{{-- ══════════════════════════════════════════════════════════════--}}
{{--     HERO SECTION — ENHANCED--}}
{{--     Replace the entire existing <section class="hero-home">…</section>--}}
{{--     block in home.blade.php with this.--}}
{{--     ══════════════════════════════════════════════════════════════ --}}

{{--    <section class="hero-home" id="hero">--}}

{{--        --}}{{-- ── Animated background canvas ── --}}
{{--        <div class="hero-bg" aria-hidden="true">--}}
{{--            --}}{{-- Gradient orbs --}}
{{--            <div class="hero-orb hero-orb-1"></div>--}}
{{--            <div class="hero-orb hero-orb-2"></div>--}}
{{--            <div class="hero-orb hero-orb-3"></div>--}}
{{--            --}}{{-- Dot-grid overlay --}}
{{--            <div class="hero-grid-dots"></div>--}}
{{--            --}}{{-- Floating particles (CSS-only) --}}
{{--            <div class="hero-particles">--}}
{{--                <span></span><span></span><span></span><span></span>--}}
{{--                <span></span><span></span><span></span><span></span>--}}
{{--                <span></span><span></span><span></span><span></span>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="container hero-two-col">--}}

{{--            --}}{{-- ── LEFT COLUMN ── --}}
{{--            <div class="hero-left">--}}

{{--                --}}{{-- Kicker --}}
{{--                <p class="kicker hero-anim-1">--}}
{{--                    <span class="kicker-cosmos">Cosmos</span>&nbsp;<span class="kicker-algos">Algos</span>--}}
{{--                </p>--}}

{{--                --}}{{-- Static main headline --}}
{{--                <h1 class="hero-anim-2">--}}
{{--                    AI-Powered<br>--}}
{{--                    <span class="hero-h1-accent">Software Systems</span>--}}
{{--                </h1>--}}

{{--                --}}{{-- Rotating typewriter sub-headline --}}
{{--                <div class="hero-typewriter-wrap hero-anim-3" aria-live="polite">--}}
{{--                    <span class="hero-typewriter-prefix">We build&nbsp;</span>--}}
{{--                    <span class="hero-typewriter-text" id="heroTypewriter"></span>--}}
{{--                    <span class="hero-typewriter-cursor">|</span>--}}
{{--                </div>--}}

{{--                --}}{{-- Lead --}}
{{--                <p class="lead hero-anim-4">--}}
{{--                    Hardware and software engineering. Smart devices, firmware,--}}
{{--                    cloud analytics, and intelligent automation.--}}
{{--                </p>--}}

{{--                --}}{{-- CTAs --}}
{{--                <div class="hero-cta-row hero-anim-5">--}}
{{--                    <a href="{{ route('services') }}" class="btn btn-primary">Explore Services</a>--}}
{{--                    <a href="{{ route('projects') }}" class="btn btn-ghost">Our Projects</a>--}}
{{--                </div>--}}

{{--                --}}{{-- Badges --}}
{{--                <div class="badge-row hero-anim-6">--}}
{{--                    <span class="badge">AWS Partner</span>--}}
{{--                    <span class="badge">ISO 27001</span>--}}
{{--                    <span class="badge">ISO 9001</span>--}}
{{--                    <span class="badge">Top IoT Developers 2025</span>--}}
{{--                    <span class="badge">Clutch 5★</span>--}}
{{--                </div>--}}

{{--            </div>--}}{{-- /hero-left --}}

{{--            --}}{{-- ── RIGHT COLUMN — Visual Panel ── --}}
{{--            --}}{{-- TODO: Replace the entire .hero-visual div with a real <img> when you have one:--}}
{{--                 <img src="{{ asset('images/hero-visual.png') }}" alt="Cosmos Algos platform" class="hero-img"> --}}
{{--            <div class="hero-visual hero-anim-right" aria-hidden="true">--}}

{{--                --}}{{-- Central glowing ring --}}
{{--                <div class="hv-ring hv-ring-outer"></div>--}}
{{--                <div class="hv-ring hv-ring-mid"></div>--}}
{{--                <div class="hv-ring hv-ring-inner"></div>--}}

{{--                --}}{{-- Central icon --}}
{{--                <div class="hv-core">--}}
{{--                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <circle cx="24" cy="24" r="10" stroke="#5eead4" stroke-width="2"/>--}}
{{--                        <circle cx="24" cy="8"  r="3" fill="#5eead4"/>--}}
{{--                        <circle cx="24" cy="40" r="3" fill="#5eead4"/>--}}
{{--                        <circle cx="8"  cy="24" r="3" fill="#5eead4"/>--}}
{{--                        <circle cx="40" cy="24" r="3" fill="#5eead4"/>--}}
{{--                        <circle cx="12" cy="12" r="2" fill="rgba(94,234,212,0.5)"/>--}}
{{--                        <circle cx="36" cy="12" r="2" fill="rgba(94,234,212,0.5)"/>--}}
{{--                        <circle cx="12" cy="36" r="2" fill="rgba(94,234,212,0.5)"/>--}}
{{--                        <circle cx="36" cy="36" r="2" fill="rgba(94,234,212,0.5)"/>--}}
{{--                        <line x1="24" y1="14" x2="24" y2="11" stroke="#5eead4" stroke-width="1.5"/>--}}
{{--                        <line x1="24" y1="34" x2="24" y2="37" stroke="#5eead4" stroke-width="1.5"/>--}}
{{--                        <line x1="14" y1="24" x2="11" y2="24" stroke="#5eead4" stroke-width="1.5"/>--}}
{{--                        <line x1="34" y1="24" x2="37" y2="24" stroke="#5eead4" stroke-width="1.5"/>--}}
{{--                    </svg>--}}
{{--                </div>--}}

{{--                --}}{{-- Floating stat cards --}}
{{--                <div class="hv-card hv-card-1">--}}
{{--                    <span class="hv-card-num">20+</span>--}}
{{--                    <span class="hv-card-label">Projects Delivered</span>--}}
{{--                </div>--}}
{{--                <div class="hv-card hv-card-2">--}}
{{--                    <span class="hv-card-num">5+</span>--}}
{{--                    <span class="hv-card-label">Years Experience</span>--}}
{{--                </div>--}}
{{--                <div class="hv-card hv-card-3">--}}
{{--                    <span class="hv-card-num">100%</span>--}}
{{--                    <span class="hv-card-label">Client Satisfaction</span>--}}
{{--                </div>--}}
{{--                <div class="hv-card hv-card-4">--}}
{{--                    <span class="hv-card-num">10+</span>--}}
{{--                    <span class="hv-card-label">Tech Domains</span>--}}
{{--                </div>--}}

{{--                --}}{{-- Orbiting dots --}}
{{--                <div class="hv-orbit hv-orbit-1">--}}
{{--                    <div class="hv-orbit-dot"></div>--}}
{{--                </div>--}}
{{--                <div class="hv-orbit hv-orbit-2">--}}
{{--                    <div class="hv-orbit-dot hv-orbit-dot-sm"></div>--}}
{{--                </div>--}}

{{--            </div>--}}{{-- /hero-visual --}}

{{--        </div>--}}{{-- /hero-two-col --}}
{{--    </section>--}}

{{--    --}}{{-- ══════════════════════════════════════════════════════--}}
{{--         2. CLIENT / PARTNER LOGO STRIP--}}
{{--         ══════════════════════════════════════════════════════ --}}
{{--    <div class="logo-strip">--}}
{{--        <div class="container">--}}
{{--            <p class="logo-strip-label">Trusted by teams at</p>--}}
{{--            <ul class="logo-list">--}}
{{--                --}}{{-- TODO: Replace with actual client / partner logos/images --}}
{{--                <li>Avnet</li>--}}
{{--                <li>Microchip</li>--}}
{{--                <li>AWS</li>--}}
{{--                <li>UNDP</li>--}}
{{--                <li>N2O</li>--}}
{{--                <li>LNU</li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    --}}{{-- ══════════════════════════════════════════════════════--}}
{{--         3. PROFOUND EXPERIENCE (ABOUT INTRO)--}}
{{--         ══════════════════════════════════════════════════════ --}}
{{--    <section class="section section-lg">--}}
{{--        <div class="container">--}}
{{--            <div class="text-two-col">--}}
{{--                <div>--}}
{{--                    <span class="tag-label">About Us</span>--}}
{{--                    <h2>Profound Experience</h2>--}}
{{--                    <p>--}}
{{--                        Cosmos Algos is a global engineering company focused on Artificial--}}
{{--                        Intelligence and software systems with years of deep experience.--}}
{{--                        We provide AI-enabled solutions that unite smart software with--}}
{{--                        connected devices and industrial infrastructure. Our teams merge--}}
{{--                        IoT expertise with embedded development and the latest AI automation--}}
{{--                        trends to create autonomous products that drive business progress.--}}
{{--                    </p>--}}
{{--                    <a href="{{ route('about') }}" class="btn btn-ghost about-btn">About the Company</a>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <div class="exp-numbers">--}}
{{--                        <div class="exp-num-card">--}}
{{--                            <div class="num">5+</div>--}}
{{--                            <div class="num-label">Years Experience</div>--}}
{{--                        </div>--}}
{{--                        <div class="exp-num-card">--}}
{{--                            <div class="num">20+</div>--}}
{{--                            <div class="num-label">Projects Delivered</div>--}}
{{--                        </div>--}}
{{--                        <div class="exp-num-card">--}}
{{--                            <div class="num">10+</div>--}}
{{--                            <div class="num-label">Happy Clients</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card about-card">--}}
{{--                        <p>--}}
{{--                            We leverage smart algorithms to develop innovative software that tackles--}}
{{--                            business challenges head-on. With a customer-centric approach, we--}}
{{--                            collaborate closely with companies across industries to understand--}}
{{--                            their unique needs and deliver customized solutions.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    --}}{{-- ══════════════════════════════════════════════════════--}}
{{--     COMPANY HISTORY TIMELINE--}}
{{--     Place this block AFTER the "Profound Experience" section--}}
{{--     and BEFORE the "Transforming Business" section in home.blade.php--}}
{{--     ══════════════════════════════════════════════════════ --}}

{{--    <section class="section section-alt tl-section" id="company-history">--}}
{{--        <div class="container">--}}
{{--            <div class="section-head-center" style="margin-bottom:3.5rem;">--}}
{{--                <span class="tag-label">Our History</span>--}}
{{--                <h2>About Us History</h2>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="tl-outer">--}}
{{--            --}}{{-- The animated progress line --}}
{{--            <div class="tl-track">--}}
{{--                <div class="tl-track-fill" id="tlFill"></div>--}}
{{--            </div>--}}

{{--            --}}{{-- Timeline items --}}
{{--            <div class="tl-items">--}}

{{--                --}}{{-- 2020 — small node, content below --}}
{{--                <div class="tl-item tl-below tl-sm" data-year="2020">--}}
{{--                    <div class="tl-node-wrap">--}}
{{--                        <div class="tl-ripple"></div>--}}
{{--                        <div class="tl-node"></div>--}}
{{--                    </div>--}}
{{--                    <div class="tl-content tl-content-below">--}}
{{--                        <div class="tl-year">2020</div>--}}
{{--                        <p>--}}
{{--                            Started software development journey.<br>--}}
{{--                            Built first <strong>console applications</strong> and--}}
{{--                            explored algorithms, OOP, and data structures.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                --}}{{-- 2021 — medium node, content above --}}
{{--                <div class="tl-item tl-above tl-md" data-year="2021">--}}
{{--                    <div class="tl-content tl-content-above">--}}
{{--                        <div class="tl-year">2021</div>--}}
{{--                        <p>--}}
{{--                            Delivered first real-world <strong>Flutter client projects</strong>--}}
{{--                            in automation &amp; home systems. Explored backend, servers,--}}
{{--                            and IoT integration.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="tl-node-wrap">--}}
{{--                        <div class="tl-ripple"></div>--}}
{{--                        <div class="tl-node"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                --}}{{-- 2022 — medium node, content below --}}
{{--                <div class="tl-item tl-below tl-md" data-year="2022">--}}
{{--                    <div class="tl-node-wrap">--}}
{{--                        <div class="tl-ripple"></div>--}}
{{--                        <div class="tl-node"></div>--}}
{{--                    </div>--}}
{{--                    <div class="tl-content tl-content-below">--}}
{{--                        <div class="tl-year">2022</div>--}}
{{--                        <p>--}}
{{--                            Delivered <strong>Raspberry Pi</strong> battery monitoring &amp;--}}
{{--                            charging automation. Expanded into IoT testing &amp; data--}}
{{--                            simulation scripting.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                --}}{{-- 2023 — large node, content above --}}
{{--                <div class="tl-item tl-above tl-lg" data-year="2023">--}}
{{--                    <div class="tl-content tl-content-above">--}}
{{--                        <div class="tl-year">2023</div>--}}
{{--                        <p>--}}
{{--                            Founded <strong>Cosmos Algos</strong>.<br>--}}
{{--                            Completed large industrial automation project. Transitioned to--}}
{{--                            <strong>IoT SaaS</strong> — collaborated on 4 SaaS platforms as--}}
{{--                            backend &amp; systems engineer.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="tl-node-wrap">--}}
{{--                        <div class="tl-ripple"></div>--}}
{{--                        <div class="tl-node"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                --}}{{-- 2024 — large node, content below --}}
{{--                <div class="tl-item tl-below tl-lg" data-year="2024">--}}
{{--                    <div class="tl-node-wrap">--}}
{{--                        <div class="tl-ripple"></div>--}}
{{--                        <div class="tl-node"></div>--}}
{{--                    </div>--}}
{{--                    <div class="tl-content tl-content-below">--}}
{{--                        <div class="tl-year">2024</div>--}}
{{--                        <p>--}}
{{--                            Led <strong>FluxSense AI</strong> — poultry growth prediction--}}
{{--                            pipeline. Built <strong>Intel RealSense</strong> camera streaming.--}}
{{--                            Designed VFD remote control system--}}
{{--                            (ESP32 + Android + Laravel).--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                --}}{{-- 2025 — xl node, content above --}}
{{--                <div class="tl-item tl-above tl-xl" data-year="2025">--}}
{{--                    <div class="tl-content tl-content-above">--}}
{{--                        <div class="tl-year">2025</div>--}}
{{--                        <p>--}}
{{--                            Expanded service portfolio to <strong>AI/ML, mobile &amp; web--}}
{{--                                systems</strong>. Joined CARE Lab at IUB as Software Developer.--}}
{{--                            Delivering enterprise-grade products across--}}
{{--                            healthcare, agriculture, and industrial sectors.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="tl-node-wrap">--}}
{{--                        <div class="tl-ripple tl-ripple-active"></div>--}}
{{--                        <div class="tl-node tl-node-active"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}{{-- /tl-items --}}
{{--        </div>--}}{{-- /tl-outer --}}
{{--    </section>--}}

{{--    --}}{{-- ══════════════════════════════════════════════════════--}}
{{--         4. TRANSFORMING BUSINESS--}}
{{--         ══════════════════════════════════════════════════════ --}}
{{--    <section class="section section-alt section-lg">--}}
{{--        <div class="container">--}}
{{--            <div class="text-two-col">--}}
{{--                <div>--}}
{{--                    <span class="tag-label">What We Do</span>--}}
{{--                    <h2>Transforming Business with AI and Software Development</h2>--}}
{{--                    <p>--}}
{{--                        We design AI-powered solutions that connect Artificial Intelligence--}}
{{--                        and software engineering into a single cognitive ecosystem. Such--}}
{{--                        systems collect raw data from sensors and user interactions, then--}}
{{--                        AI algorithms interpret it and make decisions, making the system--}}
{{--                        fully autonomous, reducing human intervention, and delivering--}}
{{--                        measurable efficiency gains.--}}
{{--                    </p>--}}
{{--                    <p class="secondary-para">--}}
{{--                        Our team of skilled professionals combines expertise in software--}}
{{--                        development, machine learning, and data analysis to create--}}
{{--                        transformative applications that propel your business forward.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <div class="ai-visual-panel card">--}}
{{--                        <div class="ai-visual-icon">🧠</div>--}}
{{--                        <p class="ai-visual-caption">--}}
{{--                            Data → AI Algorithms → Autonomous Decision-Making--}}
{{--                        </p>--}}
{{--                        <div class="badge-row badge-row--centered">--}}
{{--                            <span class="badge">IoT</span>--}}
{{--                            <span class="badge">AI/ML</span>--}}
{{--                            <span class="badge">Automation</span>--}}
{{--                            <span class="badge">SaaS</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    --}}{{-- ══════════════════════════════════════════════════════--}}
{{--         5. RELIABLE APPROACH (4 PILLARS)--}}
{{--         ══════════════════════════════════════════════════════ --}}
{{--    <section class="section section-lg">--}}
{{--        <div class="container">--}}
{{--            <div class="section-head">--}}
{{--                <span class="tag-label">Our Approach</span>--}}
{{--                <h2>A Reliable Approach to Engineering</h2>--}}
{{--            </div>--}}
{{--            <div class="approach-grid">--}}
{{--                <div class="approach-card">--}}
{{--                    <div class="a-icon">🛡️</div>--}}
{{--                    <h4>Reduce Risk Before Scaling</h4>--}}
{{--                    <p>--}}
{{--                        Our R&amp;D process is designed to absorb risk before you commit a--}}
{{--                        serious budget. Launching a complex project shouldn't feel like--}}
{{--                        gambling with your production environment.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="approach-card">--}}
{{--                    <div class="a-icon">🔗</div>--}}
{{--                    <h4>End-to-End Ownership</h4>--}}
{{--                    <p>--}}
{{--                        You don't have to deal with multiple vendors on your own. Our--}}
{{--                        strategic partnerships with cloud providers and hardware manufacturers--}}
{{--                        allow us to build the complete architecture as a whole.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="approach-card">--}}
{{--                    <div class="a-icon">🎯</div>--}}
{{--                    <h4>Pragmatic Engineering: Real Results, No Hype</h4>--}}
{{--                    <p>--}}
{{--                        We are honest about complexity, limitations, and risks. We help you--}}
{{--                        set realistic goals, because we know what technology can do and what's--}}
{{--                        out of its scope. It's a powerful tool, not a magic pill.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="approach-card">--}}
{{--                    <div class="a-icon">📄</div>--}}
{{--                    <h4>Documentation Is a Core Deliverable</h4>--}}
{{--                    <p>--}}
{{--                        Every project comes with full technical and operational documentation.--}}
{{--                        Your system stays transparent, maintainable, and truly yours — not--}}
{{--                        locked into a single vendor.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    --}}{{-- ══════════════════════════════════════════════════════--}}
{{--         6. SERVICES--}}
{{--         ══════════════════════════════════════════════════════ --}}
{{--    <section class="section section-alt section-lg">--}}
{{--        <div class="container">--}}
{{--            <div class="section-head">--}}
{{--                <span class="tag-label">What We Build</span>--}}
{{--                <h2>Our Development Services</h2>--}}
{{--                <p class="section-head-sub">--}}
{{--                    Our development services cover the full spectrum of connected intelligent--}}
{{--                    products. Whether you're only considering adopting smart solutions or have--}}
{{--                    a clear-cut vision, we have you covered.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="services-grid">--}}
{{--                <div class="service-card-item">--}}
{{--                    <span class="svc-icon">🤖</span>--}}
{{--                    <h4>Cognitive IoT Systems</h4>--}}
{{--                    <p>--}}
{{--                        We combine AI with connected devices to analyze data in real time,--}}
{{--                        detect anomalies, and support predictive maintenance.--}}
{{--                    </p>--}}
{{--                    <span class="svc-link">Discover</span>--}}
{{--                </div>--}}
{{--                <div class="service-card-item">--}}
{{--                    <span class="svc-icon">💡</span>--}}
{{--                    <h4>AI-Enabled Firmware &amp; Devices</h4>--}}
{{--                    <p>--}}
{{--                        We embed AI directly into firmware and smart devices, enabling--}}
{{--                        on-device learning and decision-making without cloud dependency.--}}
{{--                    </p>--}}
{{--                    <span class="svc-link">Discover</span>--}}
{{--                </div>--}}
{{--                <div class="service-card-item">--}}
{{--                    <span class="svc-icon">🔬</span>--}}
{{--                    <h4>R&amp;D Services</h4>--}}
{{--                    <p>--}}
{{--                        Cutting-edge research and development services to bring out the--}}
{{--                        best in your project concept and validate technical feasibility.--}}
{{--                    </p>--}}
{{--                    <span class="svc-link">Discover</span>--}}
{{--                </div>--}}
{{--                <div class="service-card-item">--}}
{{--                    <span class="svc-icon">🎨</span>--}}
{{--                    <h4>UI/UX Design</h4>--}}
{{--                    <p>--}}
{{--                        Our experienced designers believe there is no second chance to make--}}
{{--                        a first impression. We craft satisfying and efficient user experiences.--}}
{{--                    </p>--}}
{{--                    <span class="svc-link">Discover</span>--}}
{{--                </div>--}}
{{--                <div class="service-card-item">--}}
{{--                    <span class="svc-icon">⚡</span>--}}
{{--                    <h4>Edge &amp; Gateway Intelligence</h4>--}}
{{--                    <p>--}}
{{--                        We deploy AI at the edge using smart gateways that filter data,--}}
{{--                        run ML models, and respond locally for low-latency performance.--}}
{{--                    </p>--}}
{{--                    <span class="svc-link">Discover</span>--}}
{{--                </div>--}}
{{--                <div class="service-card-item">--}}
{{--                    <span class="svc-icon">📊</span>--}}
{{--                    <h4>Data &amp; AI/ML Analytics</h4>--}}
{{--                    <p>--}}
{{--                        Our analytics platforms turn raw data into clear insights using--}}
{{--                        advanced AI models to optimize energy, logistics, and operations.--}}
{{--                    </p>--}}
{{--                    <span class="svc-link">Discover</span>--}}
{{--                </div>--}}
{{--                <div class="service-card-item">--}}
{{--                    <span class="svc-icon">☁️</span>--}}
{{--                    <h4>Cloud Services</h4>--}}
{{--                    <p>--}}
{{--                        Professional cloud development including AWS, Azure, and GCP by--}}
{{--                        a team with years of cloud-native engineering experience.--}}
{{--                    </p>--}}
{{--                    <span class="svc-link">Discover</span>--}}
{{--                </div>--}}
{{--                <div class="service-card-item">--}}
{{--                    <span class="svc-icon">🛠️</span>--}}
{{--                    <h4>Post-Production Support</h4>--}}
{{--                    <p>--}}
{{--                        We offer a full range of services to maintain your software — from--}}
{{--                        regular updates to custom fixes and performance optimization.--}}
{{--                    </p>--}}
{{--                    <span class="svc-link">Discover</span>--}}
{{--                </div>--}}
{{--                <div class="service-card-item">--}}
{{--                    <span class="svc-icon">🔌</span>--}}
{{--                    <h4>IoT Consulting Services</h4>--}}
{{--                    <p>--}}
{{--                        Our consultants help your business understand smart technology and--}}
{{--                        develop IoT strategies tailored to your unique needs.--}}
{{--                    </p>--}}
{{--                    <span class="svc-link">Discover</span>--}}
{{--                </div>--}}
{{--                <div class="service-card-item">--}}
{{--                    <span class="svc-icon">🧭</span>--}}
{{--                    <h4>Tech Advisory</h4>--}}
{{--                    <p>--}}
{{--                        Advanced technology strategy and advisory services backed by years--}}
{{--                        of hands-on experience in complex software and IoT projects.--}}
{{--                    </p>--}}
{{--                    <span class="svc-link">Discover</span>--}}
{{--                </div>--}}
{{--                <div class="service-card-item">--}}
{{--                    <span class="svc-icon">📱</span>--}}
{{--                    <h4>Mobile Development</h4>--}}
{{--                    <p>--}}
{{--                        Cross-platform mobile apps using Flutter for iOS and Android,--}}
{{--                        connecting users to your systems with intuitive interfaces.--}}
{{--                    </p>--}}
{{--                    <span class="svc-link">Discover</span>--}}
{{--                </div>--}}
{{--                <div class="service-card-item">--}}
{{--                    <span class="svc-icon">🌐</span>--}}
{{--                    <h4>Web Application Development</h4>--}}
{{--                    <p>--}}
{{--                        Scalable backend APIs, SaaS platforms, and dashboards built with--}}
{{--                        modern frameworks and architecture-first thinking.--}}
{{--                    </p>--}}
{{--                    <span class="svc-link">Discover</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    --}}{{-- ══════════════════════════════════════════════════════--}}
{{--         7. WHY CHOOSE US--}}
{{--         ══════════════════════════════════════════════════════ --}}
{{--    <section class="section section-lg">--}}
{{--        <div class="container">--}}
{{--            <div class="why-grid">--}}
{{--                <div>--}}
{{--                    <span class="tag-label">Why Us</span>--}}
{{--                    <h2>Why Choose Us as Your Engineering Partner</h2>--}}
{{--                    <p class="why-lead">--}}
{{--                        Cosmos Algos gathers engineers who live and breathe technology. We--}}
{{--                        combine profound experience in software, IoT, and AI with a strong--}}
{{--                        culture of innovation and delivery, so your projects smoothly move--}}
{{--                        from idea to reality.--}}
{{--                    </p>--}}
{{--                    <ul class="why-list">--}}
{{--                        <li>Profound expertise in new technologies</li>--}}
{{--                        <li>Competitive solutions</li>--}}
{{--                        <li>Defined workflow</li>--}}
{{--                        <li>Professional and enthusiastic team</li>--}}
{{--                        <li>Eliminating risks and challenges</li>--}}
{{--                        <li>Constant support</li>--}}
{{--                        <li>Full-cycle development</li>--}}
{{--                        <li>Cultivated digital transformation strategy</li>--}}
{{--                        <li>Transparent pricing policy</li>--}}
{{--                        <li>Architecture-first thinking</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    --}}{{-- TODO: Replace with a real image / illustration --}}
{{--                    <div class="why-visual card">--}}
{{--                        <span class="why-visual-emoji">👨‍💻</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    --}}{{-- ══════════════════════════════════════════════════════--}}
{{--         8. FROM IDEA TO IMPLEMENTATION (PROCESS)--}}
{{--         ══════════════════════════════════════════════════════ --}}
{{--    <section class="section section-alt section-lg">--}}
{{--        <div class="container">--}}
{{--            <div class="section-head-center">--}}
{{--                <span class="tag-label">Our Process</span>--}}
{{--                <h2>From Idea to Implementation</h2>--}}
{{--            </div>--}}
{{--            <div class="process-steps">--}}
{{--                <div class="process-step">--}}
{{--                    <div class="step-num">Step 01</div>--}}
{{--                    <h4>Discovery &amp; Use-Case Definition</h4>--}}
{{--                    <p>--}}
{{--                        We analyze business goals, users, and constraints to identify the--}}
{{--                        right problems to solve and define clear success criteria.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="process-step">--}}
{{--                    <div class="step-num">Step 02</div>--}}
{{--                    <h4>Architecture &amp; R&amp;D</h4>--}}
{{--                    <p>--}}
{{--                        We explore technologies, evaluate feasibility, and design a scalable--}}
{{--                        system architecture that fits performance and security needs.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="process-step">--}}
{{--                    <div class="step-num">Step 03</div>--}}
{{--                    <h4>Proof of Concept &amp; Prototyping</h4>--}}
{{--                    <p>--}}
{{--                        We build quick prototypes to validate ideas, reduce risks, and--}}
{{--                        confirm technical viability before full development.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="process-step">--}}
{{--                    <div class="step-num">Step 04</div>--}}
{{--                    <h4>Detailed Design &amp; Specifications</h4>--}}
{{--                    <p>--}}
{{--                        We create detailed UX flows, technical specs, and documentation--}}
{{--                        to ensure teams are fully aligned on what will be delivered.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="process-step">--}}
{{--                    <div class="step-num">Step 05</div>--}}
{{--                    <h4>End-to-End Development</h4>--}}
{{--                    <p>--}}
{{--                        We implement the full solution — backend, frontend, firmware, data--}}
{{--                        pipelines, and integrations — following best engineering practices.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="process-step">--}}
{{--                    <div class="step-num">Step 06</div>--}}
{{--                    <h4>Testing &amp; Validation</h4>--}}
{{--                    <p>--}}
{{--                        We rigorously test functionality, performance, security, and--}}
{{--                        usability to make sure everything works reliably in real conditions.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="process-step">--}}
{{--                    <div class="step-num">Step 07</div>--}}
{{--                    <h4>Deployment &amp; Integration</h4>--}}
{{--                    <p>--}}
{{--                        We launch the solution, integrate with existing systems, migrate--}}
{{--                        data, and prepare environments for smooth operation.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="process-step">--}}
{{--                    <div class="step-num">Step 08</div>--}}
{{--                    <h4>Operations, Optimization &amp; Support</h4>--}}
{{--                    <p>--}}
{{--                        We monitor performance, fix issues, roll out improvements, and--}}
{{--                        continuously optimize based on real usage and feedback.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    --}}{{-- ══════════════════════════════════════════════════════--}}
{{--         9. INDUSTRIES WE SERVE--}}
{{--         ══════════════════════════════════════════════════════ --}}
{{--    <section class="section section-lg">--}}
{{--        <div class="container">--}}
{{--            <div class="section-head-center">--}}
{{--                <span class="tag-label">Industries</span>--}}
{{--                <h2>Industries We Serve</h2>--}}
{{--            </div>--}}
{{--            <div class="industry-grid">--}}
{{--                <div class="industry-item">--}}
{{--                    <span class="ind-icon">🏠</span>--}}
{{--                    <span>Smart Home</span>--}}
{{--                </div>--}}
{{--                <div class="industry-item">--}}
{{--                    <span class="ind-icon">🚁</span>--}}
{{--                    <span>Drones &amp; UAV Solutions</span>--}}
{{--                </div>--}}
{{--                <div class="industry-item">--}}
{{--                    <span class="ind-icon">☀️</span>--}}
{{--                    <span>Solar/Wind Energy</span>--}}
{{--                </div>--}}
{{--                <div class="industry-item">--}}
{{--                    <span class="ind-icon">🔬</span>--}}
{{--                    <span>High-Tech</span>--}}
{{--                </div>--}}
{{--                <div class="industry-item">--}}
{{--                    <span class="ind-icon">🛢️</span>--}}
{{--                    <span>Oil &amp; Gas</span>--}}
{{--                </div>--}}
{{--                <div class="industry-item">--}}
{{--                    <span class="ind-icon">🚗</span>--}}
{{--                    <span>Automotive</span>--}}
{{--                </div>--}}
{{--                <div class="industry-item">--}}
{{--                    <span class="ind-icon">📡</span>--}}
{{--                    <span>Consumer IoT</span>--}}
{{--                </div>--}}
{{--                <div class="industry-item">--}}
{{--                    <span class="ind-icon">⚡</span>--}}
{{--                    <span>Energy</span>--}}
{{--                </div>--}}
{{--                <div class="industry-item">--}}
{{--                    <span class="ind-icon">🏥</span>--}}
{{--                    <span>Healthcare</span>--}}
{{--                </div>--}}
{{--                <div class="industry-item">--}}
{{--                    <span class="ind-icon">🌾</span>--}}
{{--                    <span>Agriculture</span>--}}
{{--                </div>--}}
{{--                <div class="industry-item">--}}
{{--                    <span class="ind-icon">🏭</span>--}}
{{--                    <span>Digital Manufacturing / Industry 4.0</span>--}}
{{--                </div>--}}
{{--                <div class="industry-item">--}}
{{--                    <span class="ind-icon">💊</span>--}}
{{--                    <span>Telemedicine Applications</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    --}}{{-- ══════════════════════════════════════════════════════--}}
{{--         10. PARTNERS & CLIENTS LOGOS--}}
{{--         ══════════════════════════════════════════════════════ --}}
{{--    <section class="section section-alt section-sm">--}}
{{--        <div class="container">--}}
{{--            <div class="section-head-center">--}}
{{--                <span class="tag-label">Partners &amp; Clients</span>--}}
{{--                <h2>Our Partners &amp; Clients</h2>--}}
{{--                <p>We align closely with partners and clients to meet the most ambitious business needs.</p>--}}
{{--            </div>--}}
{{--            --}}{{-- TODO: Replace text items with actual logo images --}}
{{--            <div class="partners-logos">--}}
{{--                <span class="partner-logo-item">Solar Manager</span>--}}
{{--                <span class="partner-logo-item">UDB</span>--}}
{{--                <span class="partner-logo-item">Avnet</span>--}}
{{--                <span class="partner-logo-item">AVL</span>--}}
{{--                <span class="partner-logo-item">Microchip</span>--}}
{{--                <span class="partner-logo-item">AWS</span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    --}}{{-- ══════════════════════════════════════════════════════--}}
{{--         11. TRUSTED PARTNERSHIPS--}}
{{--         ══════════════════════════════════════════════════════ --}}
{{--    <section class="section section-lg">--}}
{{--        <div class="container">--}}
{{--            <div class="section-head">--}}
{{--                <span class="tag-label">Strategic Alliances</span>--}}
{{--                <h2>Trusted Partnerships with Global Industry Leaders</h2>--}}
{{--                <p class="section-head-sub">--}}
{{--                    Through these strategic alliances, Cosmos Algos gains privileged access--}}
{{--                    to the latest advancements in technology. This ensures that we consistently--}}
{{--                    deliver state-of-the-art solutions that meet business objectives and--}}
{{--                    surpass the evolving expectations of end users.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="trust-grid">--}}
{{--                <div class="trust-card">--}}
{{--                    <div class="partner-name">Microchip</div>--}}
{{--                    <div class="partner-title">Microchip Design Partner</div>--}}
{{--                    <p>--}}
{{--                        We take pride in our status as a trusted Microchip Design Partner.--}}
{{--                        With Microchip's global prominence in microcontrollers and analog--}}
{{--                        semiconductors, our collaboration ensures IoT solutions that--}}
{{--                        integrate cutting-edge technology with industry-leading expertise.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="trust-card">--}}
{{--                    <div class="partner-name">Avnet</div>--}}
{{--                    <div class="partner-title">Avnet IoT Partner Program Member</div>--}}
{{--                    <p>--}}
{{--                        As a valued member of the Avnet IoT Partner Program, we align--}}
{{--                        with a distinguished global distributor of electronic components--}}
{{--                        and IoT solutions, gaining access to an extensive ecosystem of--}}
{{--                        resources and technologies.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="trust-card">--}}
{{--                    <div class="partner-name">AWS</div>--}}
{{--                    <div class="partner-title">AWS Partner</div>--}}
{{--                    <p>--}}
{{--                        Cosmos Algos is an official AWS Partner, allowing us to leverage--}}
{{--                        AWS resources and offer customers an even more customized approach--}}
{{--                        while taking full advantage of AWS partner programs and cloud--}}
{{--                        infrastructure.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    --}}{{-- ══════════════════════════════════════════════════════--}}
{{--         12. CUSTOMER SUCCESS STORIES--}}
{{--         ══════════════════════════════════════════════════════ --}}
{{--    <section class="section section-alt section-lg">--}}
{{--        <div class="container">--}}
{{--            <div class="section-head">--}}
{{--                <span class="tag-label">Case Studies</span>--}}
{{--                <h2>Customer Success Stories</h2>--}}
{{--                <p class="section-head-sub">--}}
{{--                    Check out our portfolio of transformed businesses that have reaped--}}
{{--                    the benefits of working with us.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="grid cols-3">--}}
{{--                --}}{{-- TODO: Loop $projects from controller when case studies are ready --}}
{{--                <div class="case-study-card">--}}
{{--                    <div class="case-study-thumb">🌐</div>--}}
{{--                    <div class="case-study-body">--}}
{{--                        <div class="case-study-meta">--}}
{{--                            <span class="meta-chip">Energy</span>--}}
{{--                            <span class="meta-chip">Oil &amp; Gas</span>--}}
{{--                        </div>--}}
{{--                        <h4>Web IIoT Application for Real-Time Monitoring of SCADA Units</h4>--}}
{{--                        <p>--}}
{{--                            An IoT web application for monitoring equipment performance in--}}
{{--                            manufacturing: oil, water, gas. The solution reduces fuel usage--}}
{{--                            and time required to manually take measurements, eliminating--}}
{{--                            human errors.--}}
{{--                        </p>--}}
{{--                        <div class="case-study-stats">--}}
{{--                            <div class="case-stat">--}}
{{--                                <strong>9 engineers</strong>--}}
{{--                                Team Size--}}
{{--                            </div>--}}
{{--                            <div class="case-stat">--}}
{{--                                <strong>4 years</strong>--}}
{{--                                Project Lifetime--}}
{{--                            </div>--}}
{{--                            <div class="case-stat">--}}
{{--                                <strong>USA</strong>--}}
{{--                                Client--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="case-study-card">--}}
{{--                    <div class="case-study-thumb">🤖</div>--}}
{{--                    <div class="case-study-body">--}}
{{--                        <div class="case-study-meta">--}}
{{--                            <span class="meta-chip">Agriculture</span>--}}
{{--                            <span class="meta-chip">AI/ML</span>--}}
{{--                        </div>--}}
{{--                        --}}{{-- TODO: Replace with real case study --}}
{{--                        <h4>AI-Powered Poultry Growth Prediction System</h4>--}}
{{--                        <p>--}}
{{--                            An end-to-end AI pipeline for livestock growth prediction using--}}
{{--                            computer vision and sensor fusion. Enabled data-driven feeding--}}
{{--                            decisions and reduced operational costs significantly.--}}
{{--                        </p>--}}
{{--                        <div class="case-study-stats">--}}
{{--                            <div class="case-stat">--}}
{{--                                <strong>3 engineers</strong>--}}
{{--                                Team Size--}}
{{--                            </div>--}}
{{--                            <div class="case-stat">--}}
{{--                                <strong>6 months</strong>--}}
{{--                                Project Lifetime--}}
{{--                            </div>--}}
{{--                            <div class="case-stat">--}}
{{--                                <strong>Pakistan</strong>--}}
{{--                                Client--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="case-study-card">--}}
{{--                    <div class="case-study-thumb">⚡</div>--}}
{{--                    <div class="case-study-body">--}}
{{--                        <div class="case-study-meta">--}}
{{--                            <span class="meta-chip">Industrial</span>--}}
{{--                            <span class="meta-chip">IoT</span>--}}
{{--                        </div>--}}
{{--                        --}}{{-- TODO: Replace with real case study --}}
{{--                        <h4>VFD Remote Control System for Industrial Automation</h4>--}}
{{--                        <p>--}}
{{--                            A remote-control system for Variable Frequency Drives using--}}
{{--                            ESP32, Android, and a Laravel backend. Enabled real-time--}}
{{--                            motor monitoring and control from any location.--}}
{{--                        </p>--}}
{{--                        <div class="case-study-stats">--}}
{{--                            <div class="case-stat">--}}
{{--                                <strong>2 engineers</strong>--}}
{{--                                Team Size--}}
{{--                            </div>--}}
{{--                            <div class="case-stat">--}}
{{--                                <strong>3 months</strong>--}}
{{--                                Project Lifetime--}}
{{--                            </div>--}}
{{--                            <div class="case-stat">--}}
{{--                                <strong>Pakistan</strong>--}}
{{--                                Client--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    --}}{{-- ══════════════════════════════════════════════════════--}}
{{--         13. TESTIMONIALS--}}
{{--         ══════════════════════════════════════════════════════ --}}
{{--    <section class="section section-lg">--}}
{{--        <div class="container">--}}
{{--            <div class="section-head-center">--}}
{{--                <span class="tag-label">Testimonials</span>--}}
{{--                <h2>Why Our Clients Can't Stop Talking About Us</h2>--}}
{{--                <p>--}}
{{--                    At Cosmos Algos, we pride ourselves on having 100% satisfied clients.--}}
{{--                    Our dedicated team of technology experts, data analysts, and digital--}}
{{--                    transformation consultants work tirelessly to ensure your success.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="grid cols-2">--}}
{{--                --}}{{-- TODO: Loop $testimonials from controller --}}
{{--                <div class="testimonial-card">--}}
{{--                    <div class="testi-quote">"</div>--}}
{{--                    <p class="testi-text">--}}
{{--                        This is the best tech partner we've ever worked with. Their solutions--}}
{{--                        are innovative and their support is unparalleled. Cosmos Algos truly--}}
{{--                        understands the complexity of industrial systems.--}}
{{--                    </p>--}}
{{--                    <div class="testi-author">--}}
{{--                        <div class="testi-avatar">OD</div>--}}
{{--                        <div>--}}
{{--                            <div class="testi-name">Ostap D.</div>--}}
{{--                            <div class="testi-role">COO, Electronics Manufacturer</div>--}}
{{--                            <div class="rating-row">--}}
{{--                                <span class="star">★</span><span class="star">★</span>--}}
{{--                                <span class="star">★</span><span class="star">★</span>--}}
{{--                                <span class="star">★</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="testimonial-card">--}}
{{--                    <div class="testi-quote">"</div>--}}
{{--                    <p class="testi-text">--}}
{{--                        Cosmos Algos transformed our business with their advanced analytics--}}
{{--                        and custom software. We couldn't be happier with the results. Their--}}
{{--                        architecture-first approach gave us a system that actually scales.--}}
{{--                    </p>--}}
{{--                    <div class="testi-author">--}}
{{--                        <div class="testi-avatar">CA</div>--}}
{{--                        <div>--}}
{{--                            <div class="testi-name">Client A</div>--}}
{{--                            <div class="testi-role">CTO, SaaS Platform</div>--}}
{{--                            <div class="rating-row">--}}
{{--                                <span class="star">★</span><span class="star">★</span>--}}
{{--                                <span class="star">★</span><span class="star">★</span>--}}
{{--                                <span class="star">★</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="testimonial-card">--}}
{{--                    <div class="testi-quote">"</div>--}}
{{--                    <p class="testi-text">--}}
{{--                        Their expertise in IoT solutions has streamlined our operations and--}}
{{--                        significantly boosted our growth. Every deliverable was clean,--}}
{{--                        documented, and production-ready from day one.--}}
{{--                    </p>--}}
{{--                    <div class="testi-author">--}}
{{--                        <div class="testi-avatar">CB</div>--}}
{{--                        <div>--}}
{{--                            <div class="testi-name">Client B</div>--}}
{{--                            <div class="testi-role">Operations Director, Manufacturing</div>--}}
{{--                            <div class="rating-row">--}}
{{--                                <span class="star">★</span><span class="star">★</span>--}}
{{--                                <span class="star">★</span><span class="star">★</span>--}}
{{--                                <span class="star">★</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="testimonial-card">--}}
{{--                    <div class="testi-quote">"</div>--}}
{{--                    <p class="testi-text">--}}
{{--                        Choosing Cosmos Algos was the best decision for our digital--}}
{{--                        transformation. Their team is skilled, responsive, and committed--}}
{{--                        to excellence. They delivered beyond our expectations.--}}
{{--                    </p>--}}
{{--                    <div class="testi-author">--}}
{{--                        <div class="testi-avatar">CC</div>--}}
{{--                        <div>--}}
{{--                            <div class="testi-name">Client C</div>--}}
{{--                            <div class="testi-role">Founder, AgriTech Startup</div>--}}
{{--                            <div class="rating-row">--}}
{{--                                <span class="star">★</span><span class="star">★</span>--}}
{{--                                <span class="star">★</span><span class="star">★</span>--}}
{{--                                <span class="star">★</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            --}}{{-- Review platform badges --}}
{{--            <div class="review-badges">--}}
{{--                <span class="badge">Clutch 5 Stars</span>--}}
{{--                <span class="badge">GoodFirms 5 Stars</span>--}}
{{--                <span class="badge">Top IoT Developers 2025</span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    --}}{{-- ══════════════════════════════════════════════════════--}}
{{--         14. CONTACT / LOCATION--}}
{{--         ══════════════════════════════════════════════════════ --}}
{{--    <section class="section section-alt section-lg">--}}
{{--        <div class="container">--}}
{{--            <div class="contact-section-grid">--}}

{{--                --}}{{-- Left: locations --}}
{{--                <div>--}}
{{--                    <span class="tag-label">Where We Are</span>--}}
{{--                    <h2 class="contact-h2">We Are Located</h2>--}}
{{--                    <div class="location-cards">--}}
{{--                        <div class="location-card">--}}
{{--                            <h5>🇵🇰 Pakistan (HQ)</h5>--}}
{{--                            <p>--}}
{{--                                Bahawalpur, Punjab, Pakistan<br>--}}
{{--                                <a href="mailto:hello@cosmosalgos.com" class="contact-link">hello@cosmosalgos.com</a>--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        --}}{{-- TODO: Add more office locations as they expand --}}
{{--                    </div>--}}
{{--                    <div class="sales-office">--}}
{{--                        <p class="sales-label">Sales Office:</p>--}}
{{--                        <a href="mailto:sales@cosmosalgos.com" class="contact-link">sales@cosmosalgos.com</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                --}}{{-- Right: contact form --}}
{{--                <div class="contact-form-card">--}}
{{--                    <h3>Tell Us About Your Project</h3>--}}
{{--                    <p class="sub">We'll get back to you within 24 hours.</p>--}}

{{--                    @if (session('success'))--}}
{{--                        <div class="alert alert-success">{{ session('success') }}</div>--}}
{{--                    @endif--}}
{{--                    @if (session('error'))--}}
{{--                        <div class="alert alert-error">{{ session('error') }}</div>--}}
{{--                    @endif--}}

{{--                    <form method="POST" action="">--}}
{{--                        @csrf--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="name">Name *</label>--}}
{{--                            <input--}}
{{--                                type="text"--}}
{{--                                id="name"--}}
{{--                                name="name"--}}
{{--                                placeholder="Your full name"--}}
{{--                                value="{{ old('name') }}"--}}
{{--                                required--}}
{{--                            >--}}
{{--                            @error('name')<span class="field-error">{{ $message }}</span>@enderror--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="email">Email *</label>--}}
{{--                            <input--}}
{{--                                type="email"--}}
{{--                                id="email"--}}
{{--                                name="email"--}}
{{--                                placeholder="you@company.com"--}}
{{--                                value="{{ old('email') }}"--}}
{{--                                required--}}
{{--                            >--}}
{{--                            @error('email')<span class="field-error">{{ $message }}</span>@enderror--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="message">Message *</label>--}}
{{--                            <textarea--}}
{{--                                id="message"--}}
{{--                                name="message"--}}
{{--                                placeholder="Tell us about your project..."--}}
{{--                                required--}}
{{--                            >{{ old('message') }}</textarea>--}}
{{--                            @error('message')<span class="field-error">{{ $message }}</span>@enderror--}}
{{--                        </div>--}}
{{--                        <div class="form-check">--}}
{{--                            <input type="checkbox" id="privacy" name="privacy" required>--}}
{{--                            <label for="privacy">--}}
{{--                                I have read and accept the--}}
{{--                                <a href="" class="contact-link">Terms of Use and Privacy Policy</a>.--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <button type="submit" class="btn btn-primary btn-full">--}}
{{--                            Send Message--}}
{{--                        </button>--}}
{{--                    </form>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--@endsection--}}

{{--@push('scripts')--}}
{{--    <script>--}}
{{--        (function () {--}}
{{--            const phrases = [--}}
{{--                'Intelligent Automation.',--}}
{{--                'Scalable SaaS Platforms.',--}}
{{--                'IoT & Embedded Systems.',--}}
{{--                'AI/ML Solutions.',--}}
{{--                'From Idea to Production.',--}}
{{--            ];--}}

{{--            const el     = document.getElementById('heroTypewriter');--}}
{{--            const cursor = document.querySelector('.hero-typewriter-cursor');--}}
{{--            if (!el) return;--}}

{{--            let phraseIdx = 0;--}}
{{--            let charIdx   = 0;--}}
{{--            let deleting  = false;--}}
{{--            let pauseTick = 0;--}}

{{--            const TYPE_SPEED   = 70;   // ms per character while typing--}}
{{--            const DELETE_SPEED = 35;   // ms per character while deleting--}}
{{--            const PAUSE_AFTER  = 60;   // ticks to pause after typing completes (~60×50ms = 3s)--}}
{{--            const PAUSE_BEFORE = 6;    // ticks to pause before typing next phrase--}}

{{--            function tick() {--}}
{{--                const phrase = phrases[phraseIdx];--}}

{{--                if (!deleting && charIdx <= phrase.length) {--}}
{{--                    el.textContent = phrase.slice(0, charIdx);--}}
{{--                    charIdx++;--}}
{{--                    if (charIdx > phrase.length) {--}}
{{--                        // Finished typing — pause then start deleting--}}
{{--                        pauseTick++;--}}
{{--                        if (pauseTick >= PAUSE_AFTER) {--}}
{{--                            deleting  = true;--}}
{{--                            pauseTick = 0;--}}
{{--                        }--}}
{{--                        setTimeout(tick, 50);--}}
{{--                        return;--}}
{{--                    }--}}
{{--                    setTimeout(tick, TYPE_SPEED);--}}

{{--                } else if (deleting && charIdx >= 0) {--}}
{{--                    el.textContent = phrase.slice(0, charIdx);--}}
{{--                    charIdx--;--}}
{{--                    if (charIdx < 0) {--}}
{{--                        // Finished deleting — brief pause then next phrase--}}
{{--                        deleting  = false;--}}
{{--                        charIdx   = 0;--}}
{{--                        pauseTick++;--}}
{{--                        if (pauseTick >= PAUSE_BEFORE) {--}}
{{--                            phraseIdx = (phraseIdx + 1) % phrases.length;--}}
{{--                            pauseTick = 0;--}}
{{--                        }--}}
{{--                        setTimeout(tick, 50);--}}
{{--                        return;--}}
{{--                    }--}}
{{--                    setTimeout(tick, DELETE_SPEED);--}}
{{--                }--}}
{{--            }--}}

{{--            // Small initial delay so page paint finishes first--}}
{{--            setTimeout(tick, 1200);--}}

{{--            // Cursor blink via CSS (see .hero-typewriter-cursor in CSS)--}}
{{--        })();--}}

{{--        (function () {--}}
{{--            const items = document.querySelectorAll('.tl-item');--}}
{{--            const fill  = document.getElementById('tlFill');--}}

{{--            // Mark items for animation (progressive enhancement)--}}
{{--            // Items are visible by default; JS adds the hidden state then animates them in--}}
{{--            items.forEach(el => el.classList.add('tl-will-animate'));--}}

{{--            function revealTimeline() {--}}
{{--                items.forEach(el => el.classList.add('tl-visible'));--}}
{{--                if (fill) fill.style.width = '100%';--}}
{{--            }--}}

{{--            const section = document.getElementById('company-history');--}}

{{--            if (section && 'IntersectionObserver' in window) {--}}
{{--                const io = new IntersectionObserver((entries) => {--}}
{{--                    entries.forEach(entry => {--}}
{{--                        if (entry.isIntersecting) {--}}
{{--                            revealTimeline();--}}
{{--                            io.disconnect();--}}
{{--                        }--}}
{{--                    });--}}
{{--                }, { threshold: 0.1 });--}}
{{--                io.observe(section);--}}
{{--            } else {--}}
{{--                // Fallback: reveal immediately if IntersectionObserver unsupported--}}
{{--                revealTimeline();--}}
{{--            }--}}

{{--            // Hover border highlight--}}
{{--            items.forEach(item => {--}}
{{--                item.addEventListener('mouseenter', () => {--}}
{{--                    const node = item.querySelector('.tl-node');--}}
{{--                    if (node) node.style.borderColor = 'var(--brand)';--}}
{{--                });--}}
{{--                item.addEventListener('mouseleave', () => {--}}
{{--                    const node = item.querySelector('.tl-node');--}}
{{--                    if (node && !node.classList.contains('tl-node-active')) {--}}
{{--                        node.style.borderColor = '';--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}
{{--        })();--}}
{{--    </script>--}}
{{--@endpush--}}
