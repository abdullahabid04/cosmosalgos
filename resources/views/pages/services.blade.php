@extends('layouts.app')

@section('title', 'Our Services — Cosmos Algos')
@section('meta_description', 'Explore Cosmos Algos\' full suite of AI, IoT, embedded systems, mobile, web, and engineering services. Tailored solutions that drive efficiency, growth, and innovation.')

@push('styles')
    {{-- Services page styles are included below — paste into app.css --}}
@endpush

@section('content')

    {{-- ══════════════════════════════════════════════════════
         1. PAGE HERO
         ══════════════════════════════════════════════════════ --}}
    <section class="svc-page-hero">
        <div class="svc-hero-bg" aria-hidden="true">
            <div class="svc-hero-orb svc-hero-orb-1"></div>
            <div class="svc-hero-orb svc-hero-orb-2"></div>
            <div class="svc-hero-grid"></div>
        </div>
        <div class="container">
            <div class="svc-hero-inner">
                <div class="svc-breadcrumb">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="svc-breadcrumb-sep">›</span>
                    <span>Services</span>
                </div>
                <span class="tag-label">What We Build</span>
                <h1 class="svc-hero-h1">
                    Full-Spectrum<br>
                    <span class="svc-hero-accent">Engineering Services</span>
                </h1>
                <p class="svc-hero-lead">
                    From firmware to cloud — we design, build, and deploy intelligent systems
                    that connect devices, data, and decisions into a single cohesive ecosystem.
                </p>
                <div class="svc-hero-stats">
                    <div class="svc-stat">
                        <span class="svc-stat-num">9+</span>
                        <span class="svc-stat-label">Service Domains</span>
                    </div>
                    <div class="svc-stat-divider"></div>
                    <div class="svc-stat">
                        <span class="svc-stat-num">20+</span>
                        <span class="svc-stat-label">Projects Delivered</span>
                    </div>
                    <div class="svc-stat-divider"></div>
                    <div class="svc-stat">
                        <span class="svc-stat-num">10+</span>
                        <span class="svc-stat-label">Industries Served</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         2. SERVICES FILTER NAV
         ══════════════════════════════════════════════════════ --}}
    <div class="svc-filter-wrap" id="servicesNav">
        <div class="container">
            <div class="svc-filter-bar">
                <button class="svc-filter-btn is-active" data-filter="all">All Services</button>
                <button class="svc-filter-btn" data-filter="software">Software</button>
                <button class="svc-filter-btn" data-filter="hardware">Hardware & IoT</button>
                <button class="svc-filter-btn" data-filter="ai">AI & Data</button>
                <button class="svc-filter-btn" data-filter="engineering">Engineering</button>
            </div>
        </div>
    </div>

    {{-- ══════════════════════════════════════════════════════
         3. SERVICES GRID — ALL CARDS
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-lg" id="servicesGrid">
        <div class="container">

            <div class="svc-cards-grid">

                {{-- ── 1. Cognitive IoT Systems ── --}}
                <article class="svc-card" data-category="hardware" id="svc-iot">
                    <div class="svc-card-header">
                        <div class="svc-card-icon-wrap">
                            <span class="svc-card-icon">🤖</span>
                        </div>
                        <div class="svc-card-meta">
                            <span class="svc-card-tag">Hardware & IoT</span>
                            <h2 class="svc-card-title">Cognitive IoT Systems</h2>
                        </div>
                    </div>
                    <p class="svc-card-desc">
                        Real-time data exchange and optimised processes — our IoT solutions connect
                        devices, systems, and services to elevate your operational performance and
                        unlock new growth opportunities across any industry.
                    </p>
                    <ul class="svc-feature-list">
                        <li>Custom IoT device & platform development</li>
                        <li>Seamless integration with existing infrastructure</li>
                        <li>Real-time monitoring & predictive maintenance</li>
                        <li>Secure, scalable connectivity architecture</li>
                    </ul>
                    <div class="svc-card-footer">
                        <a href="{{ route('contact') }}" class="btn btn-ghost svc-cta-btn">Start a Project</a>
                        <span class="svc-card-tag-pill">ESP32 · MQTT · AWS IoT</span>
                    </div>
                </article>

                {{-- ── 2. AI-Enabled Firmware ── --}}
                <article class="svc-card" data-category="hardware" id="svc-firmware">
                    <div class="svc-card-header">
                        <div class="svc-card-icon-wrap">
                            <span class="svc-card-icon">💡</span>
                        </div>
                        <div class="svc-card-meta">
                            <span class="svc-card-tag">Hardware & IoT</span>
                            <h2 class="svc-card-title">AI-Enabled Firmware</h2>
                        </div>
                    </div>
                    <p class="svc-card-desc">
                        On-device intelligence that thinks and acts without cloud dependency.
                        Transform your embedded hardware with firmware that learns, adapts, and
                        makes autonomous decisions at the edge — reducing latency and operating costs.
                    </p>
                    <ul class="svc-feature-list">
                        <li>TinyML & on-device inference</li>
                        <li>Low-power microcontroller optimisation</li>
                        <li>OTA (Over-the-Air) update pipelines</li>
                        <li>Hardware-software co-design</li>
                    </ul>
                    <div class="svc-card-footer">
                        <a href="{{ route('contact') }}" class="btn btn-ghost svc-cta-btn">Start a Project</a>
                        <span class="svc-card-tag-pill">C/C++ · FreeRTOS · ESP-IDF</span>
                    </div>
                </article>

                {{-- ── 3. Embedded Systems Development ── --}}
                <article class="svc-card" data-category="hardware" id="svc-embedded">
                    <div class="svc-card-header">
                        <div class="svc-card-icon-wrap">
                            <span class="svc-card-icon">🔌</span>
                        </div>
                        <div class="svc-card-meta">
                            <span class="svc-card-tag">Hardware & IoT</span>
                            <h2 class="svc-card-title">Embedded Systems Development</h2>
                        </div>
                    </div>
                    <p class="svc-card-desc">
                        Expertly designed embedded systems that enhance the functionality,
                        reliability, and performance of your products. From Raspberry Pi
                        prototypes to production-grade microcontroller solutions — built for
                        the real world.
                    </p>
                    <ul class="svc-feature-list">
                        <li>Microcontroller & SBC prototyping</li>
                        <li>PCB-level design and integration</li>
                        <li>RTOS and bare-metal firmware</li>
                        <li>Serial comms: MODBUS, I²C, SPI, UART</li>
                    </ul>
                    <div class="svc-card-footer">
                        <a href="{{ route('contact') }}" class="btn btn-ghost svc-cta-btn">Start a Project</a>
                        <span class="svc-card-tag-pill">Raspberry Pi · STM32 · MODBUS</span>
                    </div>
                </article>

                {{-- ── 4. AI & ML Solutions ── --}}
                <article class="svc-card svc-card--featured" data-category="ai" id="svc-ai">
                    <div class="svc-card-featured-glow" aria-hidden="true"></div>
                    <div class="svc-card-header">
                        <div class="svc-card-icon-wrap">
                            <span class="svc-card-icon">🧠</span>
                        </div>
                        <div class="svc-card-meta">
                            <span class="svc-card-tag svc-tag--ai">AI & Data</span>
                            <h2 class="svc-card-title">AI & Machine Learning Solutions</h2>
                        </div>
                    </div>
                    <p class="svc-card-desc">
                        Stay ahead in a competitive landscape with intelligent automation,
                        predictive insights, and decision-support systems built on proven ML
                        frameworks — transforming your raw data into a strategic advantage.
                    </p>
                    <ul class="svc-feature-list">
                        <li>Custom model training & deployment</li>
                        <li>Computer vision & RGB-D pipelines</li>
                        <li>Predictive analytics & anomaly detection</li>
                        <li>LLM integration & AI-powered automation</li>
                    </ul>
                    <div class="svc-card-footer">
                        <a href="{{ route('contact') }}" class="btn btn-primary svc-cta-btn">Start a Project</a>
                        <span class="svc-card-tag-pill">Python · TensorFlow · OpenCV</span>
                    </div>
                </article>

                {{-- ── 5. Data & Analytics ── --}}
                <article class="svc-card" data-category="ai" id="svc-data">
                    <div class="svc-card-header">
                        <div class="svc-card-icon-wrap">
                            <span class="svc-card-icon">📊</span>
                        </div>
                        <div class="svc-card-meta">
                            <span class="svc-card-tag svc-tag--ai">AI & Data</span>
                            <h2 class="svc-card-title">Data & Analytics Pipelines</h2>
                        </div>
                    </div>
                    <p class="svc-card-desc">
                        Empower strategic decision-making with actionable insights. We build
                        end-to-end data pipelines — from ingestion and storage to visualisation
                        and reporting — so every metric is available at a glance.
                    </p>
                    <ul class="svc-feature-list">
                        <li>Real-time telemetry ingestion (DynamoDB, MySQL)</li>
                        <li>Interactive dashboards & visualisation</li>
                        <li>SQL analytics: KPIs, aggregations, window functions</li>
                        <li>OpenAPI-documented data endpoints</li>
                    </ul>
                    <div class="svc-card-footer">
                        <a href="{{ route('contact') }}" class="btn btn-ghost svc-cta-btn">Start a Project</a>
                        <span class="svc-card-tag-pill">MySQL · DynamoDB · Python</span>
                    </div>
                </article>

                {{-- ── 6. Cloud Services ── --}}
                <article class="svc-card" data-category="software" id="svc-cloud">
                    <div class="svc-card-header">
                        <div class="svc-card-icon-wrap">
                            <span class="svc-card-icon">☁️</span>
                        </div>
                        <div class="svc-card-meta">
                            <span class="svc-card-tag">Software</span>
                            <h2 class="svc-card-title">Cloud Services & Infrastructure</h2>
                        </div>
                    </div>
                    <p class="svc-card-desc">
                        Reliable, scalable, and secure cloud environments engineered to grow
                        with your business. From initial architecture to full deployment on
                        AWS and beyond — managed by a team with cloud-native experience.
                    </p>
                    <ul class="svc-feature-list">
                        <li>Cloud architecture design & deployment</li>
                        <li>Serverless functions & managed services</li>
                        <li>CI/CD pipelines & DevOps automation</li>
                        <li>Security hardening & cost optimisation</li>
                    </ul>
                    <div class="svc-card-footer">
                        <a href="{{ route('contact') }}" class="btn btn-ghost svc-cta-btn">Start a Project</a>
                        <span class="svc-card-tag-pill">AWS · Lambda · Docker</span>
                    </div>
                </article>

                {{-- ── 7. Web Application Development ── --}}
                <article class="svc-card" data-category="software" id="svc-web">
                    <div class="svc-card-header">
                        <div class="svc-card-icon-wrap">
                            <span class="svc-card-icon">🌐</span>
                        </div>
                        <div class="svc-card-meta">
                            <span class="svc-card-tag">Software</span>
                            <h2 class="svc-card-title">Web Application Development</h2>
                        </div>
                    </div>
                    <p class="svc-card-desc">
                        Scalable, performant, and fully documented web platforms built
                        API-first. Whether you need a SaaS dashboard, a customer-facing portal,
                        or a complex multi-tenant system — we ship production-ready software.
                    </p>
                    <ul class="svc-feature-list">
                        <li>Laravel API backends with OpenAPI specs</li>
                        <li>Role-based access & multi-tenant architecture</li>
                        <li>SaaS platforms with real-time dashboards</li>
                        <li>Spatie QueryBuilder for filtering & pagination</li>
                    </ul>
                    <div class="svc-card-footer">
                        <a href="{{ route('contact') }}" class="btn btn-ghost svc-cta-btn">Start a Project</a>
                        <span class="svc-card-tag-pill">Laravel · PHP · REST API</span>
                    </div>
                </article>

                {{-- ── 8. Mobile App Development ── --}}
                <article class="svc-card" data-category="software" id="svc-mobile">
                    <div class="svc-card-header">
                        <div class="svc-card-icon-wrap">
                            <span class="svc-card-icon">📱</span>
                        </div>
                        <div class="svc-card-meta">
                            <span class="svc-card-tag">Software</span>
                            <h2 class="svc-card-title">Mobile App Development</h2>
                        </div>
                    </div>
                    <p class="svc-card-desc">
                        Enhance your efficiency and customer satisfaction with custom mobile
                        apps offering seamless performance and intuitive design across both
                        Android and iOS — from a single codebase with Flutter.
                    </p>
                    <ul class="svc-feature-list">
                        <li>Cross-platform Flutter development</li>
                        <li>Native hardware integrations (BLE, camera, sensors)</li>
                        <li>Real-time data sync & push notifications</li>
                        <li>Remote control & telemetry mobile clients</li>
                    </ul>
                    <div class="svc-card-footer">
                        <a href="{{ route('contact') }}" class="btn btn-ghost svc-cta-btn">Start a Project</a>
                        <span class="svc-card-tag-pill">Flutter · Dart · Firebase</span>
                    </div>
                </article>

                {{-- ── 9. Engineering Solutions ── --}}
                <article class="svc-card" data-category="engineering" id="svc-engineering">
                    <div class="svc-card-header">
                        <div class="svc-card-icon-wrap">
                            <span class="svc-card-icon">⚙️</span>
                        </div>
                        <div class="svc-card-meta">
                            <span class="svc-card-tag">Engineering</span>
                            <h2 class="svc-card-title">Engineering Solutions</h2>
                        </div>
                    </div>
                    <p class="svc-card-desc">
                        Comprehensive hardware-software integration, system design, and product
                        development. Robust, efficient, and innovative solutions built to meet
                        the precise requirements of your project — from PCB to production.
                    </p>
                    <ul class="svc-feature-list">
                        <li>PLC & VFD implementation and commissioning</li>
                        <li>PV/solar system integration</li>
                        <li>Industrial automation control systems</li>
                        <li>Biomedical & scientific equipment development</li>
                    </ul>
                    <div class="svc-card-footer">
                        <a href="{{ route('contact') }}" class="btn btn-ghost svc-cta-btn">Start a Project</a>
                        <span class="svc-card-tag-pill">PLC · VFD · SCADA</span>
                    </div>
                </article>

                {{-- ── 10. R&D Services ── --}}
                <article class="svc-card" data-category="engineering" id="svc-rd">
                    <div class="svc-card-header">
                        <div class="svc-card-icon-wrap">
                            <span class="svc-card-icon">🔬</span>
                        </div>
                        <div class="svc-card-meta">
                            <span class="svc-card-tag">Engineering</span>
                            <h2 class="svc-card-title">Research & Development</h2>
                        </div>
                    </div>
                    <p class="svc-card-desc">
                        Drive innovation with dedicated R&D that absorbs technical risk before
                        you commit a serious budget. We validate feasibility, build proof-of-concepts,
                        and explore uncharted technology domains so your roadmap stays solid.
                    </p>
                    <ul class="svc-feature-list">
                        <li>Proof-of-concept & rapid prototyping</li>
                        <li>Technical feasibility assessments</li>
                        <li>Computer vision & RGB-D research (RealSense)</li>
                        <li>Full technical documentation as a deliverable</li>
                    </ul>
                    <div class="svc-card-footer">
                        <a href="{{ route('contact') }}" class="btn btn-ghost svc-cta-btn">Start a Project</a>
                        <span class="svc-card-tag-pill">Open3D · RealSense · Python</span>
                    </div>
                </article>

                {{-- ── 11. UI/UX Design ── --}}
                <article class="svc-card" data-category="software" id="svc-design">
                    <div class="svc-card-header">
                        <div class="svc-card-icon-wrap">
                            <span class="svc-card-icon">🎨</span>
                        </div>
                        <div class="svc-card-meta">
                            <span class="svc-card-tag">Software</span>
                            <h2 class="svc-card-title">UI/UX Design</h2>
                        </div>
                    </div>
                    <p class="svc-card-desc">
                        Interfaces that users actually enjoy using. We design clear, efficient,
                        and satisfying experiences for web, mobile, and embedded touchscreen
                        systems — backed by usability principles and real user thinking.
                    </p>
                    <ul class="svc-feature-list">
                        <li>UX research & user flow mapping</li>
                        <li>Wireframes, prototypes & design systems</li>
                        <li>Responsive web & cross-platform mobile UI</li>
                        <li>Embedded touchscreen GUI design</li>
                    </ul>
                    <div class="svc-card-footer">
                        <a href="{{ route('contact') }}" class="btn btn-ghost svc-cta-btn">Start a Project</a>
                        <span class="svc-card-tag-pill">Figma · Flutter UI · Blade</span>
                    </div>
                </article>

                {{-- ── 12. Desktop Software Development ── --}}
                <article class="svc-card" data-category="software" id="svc-desktop">
                    <div class="svc-card-header">
                        <div class="svc-card-icon-wrap">
                            <span class="svc-card-icon">🖥️</span>
                        </div>
                        <div class="svc-card-meta">
                            <span class="svc-card-tag">Software</span>
                            <h2 class="svc-card-title">Desktop Software Development</h2>
                        </div>
                    </div>
                    <p class="svc-card-desc">
                        Purpose-built desktop tools for industrial, scientific, and business
                        contexts. Real-time data acquisition, signal visualisation, hardware
                        control interfaces, and automation utilities — all production-grade.
                    </p>
                    <ul class="svc-feature-list">
                        <li>PyQt5 GUI applications for data acquisition</li>
                        <li>Real-time signal visualisation & logging</li>
                        <li>Serial/USB device integration</li>
                        <li>Automated testing & scripting utilities</li>
                    </ul>
                    <div class="svc-card-footer">
                        <a href="{{ route('contact') }}" class="btn btn-ghost svc-cta-btn">Start a Project</a>
                        <span class="svc-card-tag-pill">Python · PyQt5 · C++</span>
                    </div>
                </article>

            </div>
            {{-- Empty state when filter returns nothing --}}
            <div class="svc-empty-state" id="svcEmptyState" style="display:none;">
                <span class="svc-empty-icon">🔭</span>
                <p>No services match that filter — <button class="svc-reset-btn" data-filter="all">show all</button></p>
            </div>

        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         4. HOW WE WORK — PROCESS STRIP
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-alt section-lg">
        <div class="container">
            <div class="section-head-center" data-reveal="fade-up">
                <span class="tag-label">Our Approach</span>
                <h2>How We Deliver Every Engagement</h2>
                <p class="section-head-sub" style="margin-inline:auto;">
                    A pragmatic, architecture-first process — from the first call to the final handoff.
                </p>
            </div>
            <div class="svc-process-row" data-stagger>
                <div class="svc-process-item">
                    <div class="svc-process-num">01</div>
                    <div class="svc-process-icon">🎯</div>
                    <h4>Discovery</h4>
                    <p>We map your goals, constraints, and success criteria before writing a single line of code.</p>
                </div>
                <div class="svc-process-connector" aria-hidden="true"></div>
                <div class="svc-process-item">
                    <div class="svc-process-num">02</div>
                    <div class="svc-process-icon">🏗️</div>
                    <h4>Architecture</h4>
                    <p>A scalable system design is produced — covering hardware, firmware, APIs, and cloud layers.</p>
                </div>
                <div class="svc-process-connector" aria-hidden="true"></div>
                <div class="svc-process-item">
                    <div class="svc-process-num">03</div>
                    <div class="svc-process-icon">🧪</div>
                    <h4>Proof of Concept</h4>
                    <p>We validate the riskiest assumptions with a working prototype before full commitment.</p>
                </div>
                <div class="svc-process-connector" aria-hidden="true"></div>
                <div class="svc-process-item">
                    <div class="svc-process-num">04</div>
                    <div class="svc-process-icon">🚀</div>
                    <h4>Build & Deploy</h4>
                    <p>Full-cycle development — end-to-end implementation with testing, documentation, and launch.</p>
                </div>
                <div class="svc-process-connector" aria-hidden="true"></div>
                <div class="svc-process-item">
                    <div class="svc-process-num">05</div>
                    <div class="svc-process-icon">🔄</div>
                    <h4>Optimise & Support</h4>
                    <p>Continuous monitoring, iterative improvements, and ongoing support as your system scales.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         5. TECH STACK STRIP
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-lg">
        <div class="container">
            <div class="section-head-center" data-reveal="fade-up">
                <span class="tag-label">Technologies</span>
                <h2>Built With Production-Grade Tools</h2>
            </div>
            <div class="svc-tech-groups" data-stagger>
                <div class="svc-tech-group">
                    <div class="svc-tech-group-label">Languages</div>
                    <div class="svc-tech-chips">
                        <span class="svc-tech-chip">Python</span>
                        <span class="svc-tech-chip">PHP</span>
                        <span class="svc-tech-chip">C / C++</span>
                        <span class="svc-tech-chip">Dart</span>
                        <span class="svc-tech-chip">JavaScript</span>
                    </div>
                </div>
                <div class="svc-tech-group">
                    <div class="svc-tech-group-label">Frameworks & Platforms</div>
                    <div class="svc-tech-chips">
                        <span class="svc-tech-chip">Laravel</span>
                        <span class="svc-tech-chip">Flutter</span>
                        <span class="svc-tech-chip">PyQt5</span>
                        <span class="svc-tech-chip">Django</span>
                        <span class="svc-tech-chip">FreeRTOS</span>
                    </div>
                </div>
                <div class="svc-tech-group">
                    <div class="svc-tech-group-label">AI / Data</div>
                    <div class="svc-tech-chips">
                        <span class="svc-tech-chip">TensorFlow</span>
                        <span class="svc-tech-chip">OpenCV</span>
                        <span class="svc-tech-chip">Open3D</span>
                        <span class="svc-tech-chip">Intel RealSense</span>
                        <span class="svc-tech-chip">Gemini API</span>
                    </div>
                </div>
                <div class="svc-tech-group">
                    <div class="svc-tech-group-label">Cloud & Infra</div>
                    <div class="svc-tech-chips">
                        <span class="svc-tech-chip">AWS</span>
                        <span class="svc-tech-chip">DynamoDB</span>
                        <span class="svc-tech-chip">MySQL</span>
                        <span class="svc-tech-chip">Docker</span>
                        <span class="svc-tech-chip">MongoDB</span>
                    </div>
                </div>
                <div class="svc-tech-group">
                    <div class="svc-tech-group-label">Hardware & Protocols</div>
                    <div class="svc-tech-chips">
                        <span class="svc-tech-chip">ESP32</span>
                        <span class="svc-tech-chip">Raspberry Pi</span>
                        <span class="svc-tech-chip">MODBUS</span>
                        <span class="svc-tech-chip">MQTT</span>
                        <span class="svc-tech-chip">I²C / SPI</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         6. WHY COSMOS ALGOS — TRUST PILLARS
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-alt section-lg">
        <div class="container">
            <div class="section-head-center" data-reveal="fade-up">
                <span class="tag-label">Why Us</span>
                <h2>Built Different — By Design</h2>
            </div>
            <div class="svc-pillars-grid" data-stagger>
                <div class="svc-pillar-card">
                    <div class="svc-pillar-icon">🛡️</div>
                    <h4>Risk-First Thinking</h4>
                    <p>Our R&D process absorbs technical risk before you commit a serious budget. Launching a complex project shouldn't feel like a gamble.</p>
                </div>
                <div class="svc-pillar-card">
                    <div class="svc-pillar-icon">🔗</div>
                    <h4>End-to-End Ownership</h4>
                    <p>One team. Device to cloud. We manage the full architecture so you don't have to coordinate across multiple vendors.</p>
                </div>
                <div class="svc-pillar-card">
                    <div class="svc-pillar-icon">📄</div>
                    <h4>Documentation as a Deliverable</h4>
                    <p>Every engagement ships with full technical and operational documentation. Your system stays yours — not locked into a single supplier.</p>
                </div>
                <div class="svc-pillar-card">
                    <div class="svc-pillar-icon">🎯</div>
                    <h4>No Hype. Real Results.</h4>
                    <p>We set realistic goals, communicate complexity clearly, and deliver what we promise. Technology is a powerful tool — not a magic pill.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         7. CASE STUDY HIGHLIGHTS (2 featured projects)
         ══════════════════════════════════════════════════════ --}}
    <section class="section section-lg">
        <div class="container">
            <div class="section-head" data-reveal="fade-up">
                <span class="tag-label">Case Studies</span>
                <h2>What We've Shipped</h2>
                <p class="section-head-sub">
                    Real projects. Measurable outcomes.
                </p>
            </div>
            <div class="svc-case-grid" data-stagger>

                <article class="svc-case-card">
                    <div class="svc-case-thumb">
                        <span class="svc-case-thumb-emoji">📡</span>
                        <div class="svc-case-chips">
                            <span class="meta-chip">IoT</span>
                            <span class="meta-chip">AI</span>
                            <span class="meta-chip">Cloud</span>
                        </div>
                    </div>
                    <div class="svc-case-body">
                        <h4>FluxSense AI — Smart Environmental Monitoring</h4>
                        <p>End-to-end IoT platform for real-time sensor monitoring with AI anomaly detection. Reduced manual inspection cycles by providing autonomous alerts and live dashboards accessible from any device.</p>
                        <div class="svc-case-stats">
                            <div class="svc-case-stat"><span class="svc-case-stat-val">Real-time</span><span class="svc-case-stat-label">Data Pipeline</span></div>
                            <div class="svc-case-stat"><span class="svc-case-stat-val">ESP32</span><span class="svc-case-stat-label">Edge Hardware</span></div>
                            <div class="svc-case-stat"><span class="svc-case-stat-val">AWS IoT</span><span class="svc-case-stat-label">Cloud Backend</span></div>
                        </div>
                    </div>
                </article>

                <article class="svc-case-card">
                    <div class="svc-case-thumb">
                        <span class="svc-case-thumb-emoji">⚡</span>
                        <div class="svc-case-chips">
                            <span class="meta-chip">Embedded</span>
                            <span class="meta-chip">Industrial</span>
                            <span class="meta-chip">Mobile</span>
                        </div>
                    </div>
                    <div class="svc-case-body">
                        <h4>VFD Remote Control System — Industrial Automation</h4>
                        <p>ESP32-based MODBUS controller with a Flutter mobile client and Laravel backend, enabling fully remote operation of Variable Frequency Drives with live telemetry and historical logs — from anywhere.</p>
                        <div class="svc-case-stats">
                            <div class="svc-case-stat"><span class="svc-case-stat-val">MODBUS</span><span class="svc-case-stat-label">Protocol</span></div>
                            <div class="svc-case-stat"><span class="svc-case-stat-val">Flutter</span><span class="svc-case-stat-label">Mobile Client</span></div>
                            <div class="svc-case-stat"><span class="svc-case-stat-val">Laravel</span><span class="svc-case-stat-label">API Backend</span></div>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>

    {{-- ══════════════════════════════════════════════════════
         8. CTA BANNER
         ══════════════════════════════════════════════════════ --}}
    <section class="svc-cta-banner" data-reveal="zoom-in">
        <div class="svc-cta-banner-bg" aria-hidden="true">
            <div class="svc-cta-orb svc-cta-orb-1"></div>
            <div class="svc-cta-orb svc-cta-orb-2"></div>
        </div>
        <div class="container">
            <div class="svc-cta-inner">
                <div class="svc-cta-text">
                    <span class="tag-label">Let's Talk</span>
                    <h2 class="svc-cta-heading">Have a Project in Mind?</h2>
                    <p class="svc-cta-sub">
                        Tell us about your challenge. We'll scope it, de-risk it,
                        and ship it — on time, documented, and ready to scale.
                    </p>
                </div>
                <div class="svc-cta-actions">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Get a Free Consultation</a>
                    <a href="{{ route('projects') }}" class="btn btn-ghost">View All Projects</a>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        (function () {
            'use strict';

            /* ── SERVICE CARD FILTER ─────────────────────────────── */
            const filterBtns  = document.querySelectorAll('.svc-filter-btn');
            const cards       = document.querySelectorAll('.svc-card');
            const emptyState  = document.getElementById('svcEmptyState');

            function applyFilter(filter) {
                let visible = 0;

                cards.forEach(card => {
                    const cat = card.dataset.category;
                    const show = filter === 'all' || cat === filter;

                    if (show) {
                        card.style.display = '';
                        // re-trigger reveal animation
                        card.classList.remove('revealed');
                        requestAnimationFrame(() => card.classList.add('revealed'));
                        visible++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                emptyState.style.display = visible === 0 ? 'flex' : 'none';
            }

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    filterBtns.forEach(b => b.classList.remove('is-active'));
                    btn.classList.add('is-active');
                    applyFilter(btn.dataset.filter);
                });
            });

            // Reset button inside empty state
            document.querySelectorAll('.svc-reset-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    filterBtns.forEach(b => {
                        b.classList.toggle('is-active', b.dataset.filter === 'all');
                    });
                    applyFilter('all');
                });
            });

            /* ── FILTER BAR STICKY HIGHLIGHT ON SCROLL ───────────── */
            const sections = document.querySelectorAll('.svc-card[id]');
            const categoryMap = {
                'svc-iot': 'hardware',   'svc-firmware': 'hardware',
                'svc-embedded': 'hardware', 'svc-ai': 'ai',
                'svc-data': 'ai',        'svc-cloud': 'software',
                'svc-web': 'software',   'svc-mobile': 'software',
                'svc-engineering': 'engineering', 'svc-rd': 'engineering',
                'svc-design': 'software','svc-desktop': 'software',
            };

            /* ── URL HASH → auto-scroll & highlight card ─────────── */
            function handleHash() {
                const hash = window.location.hash.replace('#', '');
                if (!hash) return;
                const target = document.getElementById(hash);
                if (!target) return;

                // Activate matching filter
                const cat = categoryMap[hash];
                if (cat) {
                    filterBtns.forEach(b => b.classList.toggle('is-active', b.dataset.filter === cat));
                    applyFilter(cat);
                }

                setTimeout(() => {
                    target.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    target.classList.add('svc-card--highlight');
                    setTimeout(() => target.classList.remove('svc-card--highlight'), 1800);
                }, 200);
            }

            handleHash();
            window.addEventListener('hashchange', handleHash);

            /* ── TECH CHIP HOVER GLOW ─────────────────────────────── */
            document.querySelectorAll('.svc-tech-chip').forEach(chip => {
                chip.addEventListener('mouseenter', () => {
                    chip.style.color      = 'var(--nebula-cyan)';
                    chip.style.borderColor = 'rgba(0,212,255,0.45)';
                    chip.style.boxShadow  = '0 0 12px rgba(0,212,255,0.18)';
                });
                chip.addEventListener('mouseleave', () => {
                    chip.style.color = chip.style.borderColor = chip.style.boxShadow = '';
                });
            });

        })();
    </script>
@endpush
