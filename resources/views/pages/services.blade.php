@extends('layouts.app')

@section('title', 'Our Services — Cosmos Algos')
@section('meta_description', 'Software, embedded systems, IoT, applied AI, and SaaS engineering services from Cosmos Algos in Bahawalpur, Pakistan.')

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
                    Engineering<br>
                    <span class="svc-hero-accent">Services</span>
                </h1>
                <p class="svc-hero-lead">
                    From firmware to cloud — we design and build systems that connect devices,
                    data, and the people operating them.
                </p>
                <div class="svc-hero-stats">
                    <div class="svc-stat">
                        <span class="svc-stat-num">12</span>
                        <span class="svc-stat-label">Service Areas</span>
                    </div>
                    <div class="svc-stat-divider"></div>
                    <div class="svc-stat">
                        <span class="svc-stat-num">{{ $stats['projects'] }}+</span>
                        <span class="svc-stat-label">Projects &amp; Engagements</span>
                    </div>
                    <div class="svc-stat-divider"></div>
                    <div class="svc-stat">
                        <span class="svc-stat-num">{{ $stats['industries'] }}</span>
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

                {{-- ── 1. IoT Systems & Connected Products ── --}}
                <article class="svc-card" data-category="hardware" id="svc-iot">
                    <div class="svc-card-header">
                        <div class="svc-card-icon-wrap">
                            <span class="svc-card-icon">🤖</span>
                        </div>
                        <div class="svc-card-meta">
                            <span class="svc-card-tag">Hardware & IoT</span>
                            <h2 class="svc-card-title">IoT Systems &amp; Connected Products</h2>
                        </div>
                    </div>
                    <p class="svc-card-desc">
                        Connected products and monitoring systems — device firmware, telemetry
                        pipelines, dashboards, and the backend that ties them together.
                    </p>
                    <ul class="svc-feature-list">
                        <li>Custom IoT device &amp; platform development</li>
                        <li>Integration with existing infrastructure where APIs allow</li>
                        <li>Real-time monitoring &amp; alerting</li>
                        <li>Connectivity architecture for devices and backends</li>
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
                            <h2 class="svc-card-title">Firmware &amp; Device Integration</h2>
                        </div>
                    </div>
                    <p class="svc-card-desc">
                        Firmware and device integration for ESP32, STM32, Raspberry Pi, and FPGA
                        platforms. We write the drivers, protocol handling, and control logic that
                        connect software to real hardware — including field devices and industrial
                        controllers.
                    </p>
                    <ul class="svc-feature-list">
                        <li>Sensor drivers and device communication</li>
                        <li>MODBUS, serial, USB, and wireless protocols</li>
                        <li>OTA firmware update flows</li>
                        <li>Hardware-software integration and testing</li>
                    </ul>
                    <div class="svc-card-footer">
                        <a href="{{ route('contact') }}" class="btn btn-ghost svc-cta-btn">Start a Project</a>
                        <span class="svc-card-tag-pill">C/C++ · ESP32 · MODBUS</span>
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
                        Embedded systems built around the hardware and environment they run in.
                        From Raspberry Pi prototypes to microcontroller-based devices, with
                        firmware written for the constraints of the equipment.
                    </p>
                    <ul class="svc-feature-list">
                        <li>Microcontroller &amp; SBC prototyping</li>
                        <li>Hardware-software integration</li>
                        <li>Embedded firmware development in C/C++</li>
                        <li>Serial comms: MODBUS, UART, USB</li>
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
                        Applied AI work: computer vision, data pipelines, and decision-support
                        tools built around the problem rather than a framework. AI is used where
                        it earns its place in the workflow.
                    </p>
                    <ul class="svc-feature-list">
                        <li>Computer vision &amp; RGB-D pipelines</li>
                        <li>Dataset preparation &amp; model evaluation</li>
                        <li>Predictive analytics &amp; anomaly detection</li>
                        <li>Inference integration into desktop and web tools</li>
                    </ul>
                    <div class="svc-card-footer">
                        <a href="{{ route('contact') }}" class="btn btn-primary svc-cta-btn">Start a Project</a>
                        <span class="svc-card-tag-pill">Python · OpenCV · Open3D</span>
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
                        Data pipelines that move telemetry from device to storage to a usable
                        dashboard — ingestion, aggregation, querying, and reporting.
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
                        Reliable cloud backends engineered for connected products. We work with
                        AWS services we have actually deployed — IoT ingestion, serverless
                        processing, managed databases, and documented APIs.
                    </p>
                    <ul class="svc-feature-list">
                        <li>Cloud architecture design &amp; deployment</li>
                        <li>Serverless functions &amp; managed services</li>
                        <li>API security and access control</li>
                        <li>Cost and performance optimisation</li>
                    </ul>
                    <div class="svc-card-footer">
                        <a href="{{ route('contact') }}" class="btn btn-ghost svc-cta-btn">Start a Project</a>
                        <span class="svc-card-tag-pill">AWS · Lambda · DynamoDB</span>
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
                        Web platforms built API-first with Laravel: SaaS dashboards,
                        customer-facing portals, and multi-tenant systems, delivered with
                        documentation for the parts that matter.
                    </p>
                    <ul class="svc-feature-list">
                        <li>Laravel API backends with documented endpoints</li>
                        <li>Role-based access &amp; multi-tenant architecture</li>
                        <li>SaaS platforms with real-time dashboards</li>
                        <li>Subscription billing and OTA update modules</li>
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
                        Flutter applications for field monitoring, device control, and
                        customer-facing workflows, built for Android and iOS from one codebase
                        where the backend supports it.
                    </p>
                    <ul class="svc-feature-list">
                        <li>Cross-platform Flutter development</li>
                        <li>Device and sensor integrations</li>
                        <li>Real-time data sync where the backend supports it</li>
                        <li>Remote control &amp; telemetry mobile clients</li>
                    </ul>
                    <div class="svc-card-footer">
                        <a href="{{ route('contact') }}" class="btn btn-ghost svc-cta-btn">Start a Project</a>
                        <span class="svc-card-tag-pill">Flutter · Dart · REST</span>
                    </div>
                </article>

                {{-- ── 9. Hardware-Software Engineering ── --}}
                <article class="svc-card" data-category="engineering" id="svc-engineering">
                    <div class="svc-card-header">
                        <div class="svc-card-icon-wrap">
                            <span class="svc-card-icon">⚙️</span>
                        </div>
                        <div class="svc-card-meta">
                            <span class="svc-card-tag">Engineering</span>
                            <h2 class="svc-card-title">Hardware-Software Engineering</h2>
                        </div>
                    </div>
                    <p class="svc-card-desc">
                        Hardware-software integration, system design, and product development for
                        industrial and defense environments. We work with the constraints of real
                        equipment, not just a clean development machine.
                    </p>
                    <ul class="svc-feature-list">
                        <li>VFD &amp; MODBUS integration</li>
                        <li>Solar and energy system integration</li>
                        <li>Industrial monitoring and control</li>
                        <li>Defense test and analysis equipment</li>
                    </ul>
                    <div class="svc-card-footer">
                        <a href="{{ route('contact') }}" class="btn btn-ghost svc-cta-btn">Start a Project</a>
                        <span class="svc-card-tag-pill">MODBUS · VFD · Solar</span>
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
                        Applied R&amp;D for problems where the path is not obvious: feasibility
                        checks, proof-of-concepts, and short studies that reduce technical risk
                        before a larger build.
                    </p>
                    <ul class="svc-feature-list">
                        <li>Proof-of-concept & rapid prototyping</li>
                        <li>Technical feasibility assessments</li>
                        <li>Computer vision & RGB-D research (RealSense)</li>
                        <li>Technical documentation scoped as a deliverable</li>
                    </ul>
                    <div class="svc-card-footer">
                        <a href="{{ route('contact') }}" class="btn btn-ghost svc-cta-btn">Start a Project</a>
                        <span class="svc-card-tag-pill">Open3D · RealSense · Python</span>
                    </div>
                </article>

                {{-- ── 11. SaaS Product Engineering ── --}}
                <article class="svc-card" data-category="software" id="svc-saas">
                    <div class="svc-card-header">
                        <div class="svc-card-icon-wrap">
                            <span class="svc-card-icon">🧩</span>
                        </div>
                        <div class="svc-card-meta">
                            <span class="svc-card-tag">Software</span>
                            <h2 class="svc-card-title">SaaS Product Engineering</h2>
                        </div>
                    </div>
                    <p class="svc-card-desc">
                        Multi-tenant product engineering for connected devices and operational
                        data: tenant isolation, subscriptions, role-based access, and the
                        background jobs that keep a platform usable as it grows.
                    </p>
                    <ul class="svc-feature-list">
                        <li>Multi-tenant architecture &amp; tenant isolation</li>
                        <li>Stripe subscription billing</li>
                        <li>OTA firmware update management</li>
                        <li>Time-series aggregation &amp; alerting</li>
                    </ul>
                    <div class="svc-card-footer">
                        <a href="{{ route('contact') }}" class="btn btn-ghost svc-cta-btn">Start a Project</a>
                        <span class="svc-card-tag-pill">Laravel · Stripe · MySQL</span>
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
                        control interfaces, and automation utilities built for operational use.
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
                <h2>How a Typical Engagement Runs</h2>
                <p class="section-head-sub" style="margin-inline:auto;">
                    A general process. The depth of each step is adapted to the engagement.
                </p>
            </div>
            <div class="svc-process-row" data-stagger>
                <div class="svc-process-item">
                    <div class="svc-process-num">01</div>
                    <div class="svc-process-icon">🎯</div>
                    <h3>Discovery</h3>
                    <p>We map your goals, constraints, and success criteria before writing a single line of code.</p>
                </div>
                <div class="svc-process-connector" aria-hidden="true"></div>
                <div class="svc-process-item">
                    <div class="svc-process-num">02</div>
                    <div class="svc-process-icon">🏗️</div>
                    <h3>Architecture</h3>
                    <p>A system design is produced — covering hardware, firmware, APIs, and cloud layers where relevant.</p>
                </div>
                <div class="svc-process-connector" aria-hidden="true"></div>
                <div class="svc-process-item">
                    <div class="svc-process-num">03</div>
                    <div class="svc-process-icon">🧪</div>
                    <h3>Proof of Concept</h3>
                    <p>We validate the riskiest assumptions with a working prototype before full commitment.</p>
                </div>
                <div class="svc-process-connector" aria-hidden="true"></div>
                <div class="svc-process-item">
                    <div class="svc-process-num">04</div>
                    <div class="svc-process-icon">🚀</div>
                    <h3>Build & Deploy</h3>
                    <p>Implementation with testing, documentation, and handover — scoped to what was agreed.</p>
                </div>
                <div class="svc-process-connector" aria-hidden="true"></div>
                <div class="svc-process-item">
                    <div class="svc-process-num">05</div>
                    <div class="svc-process-icon">🔄</div>
                    <h3>Optimise & Support</h3>
                    <p>Where support is agreed, monitoring and iterative improvements follow handover.</p>
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
                <h2>Built With Tools We Use</h2>
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
                    <div class="svc-tech-group-label">Frameworks &amp; Platforms</div>
                    <div class="svc-tech-chips">
                        <span class="svc-tech-chip">Laravel</span>
                        <span class="svc-tech-chip">Flutter</span>
                        <span class="svc-tech-chip">PyQt5</span>
                        <span class="svc-tech-chip">Blade</span>
                        <span class="svc-tech-chip">Vite</span>
                    </div>
                </div>
                <div class="svc-tech-group">
                    <div class="svc-tech-group-label">AI / Data</div>
                    <div class="svc-tech-chips">
                        <span class="svc-tech-chip">OpenCV</span>
                        <span class="svc-tech-chip">Open3D</span>
                        <span class="svc-tech-chip">Intel RealSense</span>
                        <span class="svc-tech-chip">Python</span>
                    </div>
                </div>
                <div class="svc-tech-group">
                    <div class="svc-tech-group-label">Cloud &amp; Infra</div>
                    <div class="svc-tech-chips">
                        <span class="svc-tech-chip">AWS</span>
                        <span class="svc-tech-chip">Lambda</span>
                        <span class="svc-tech-chip">DynamoDB</span>
                        <span class="svc-tech-chip">MySQL</span>
                        <span class="svc-tech-chip">API Gateway</span>
                    </div>
                </div>
                <div class="svc-tech-group">
                    <div class="svc-tech-group-label">Hardware &amp; Protocols</div>
                    <div class="svc-tech-chips">
                        <span class="svc-tech-chip">ESP32</span>
                        <span class="svc-tech-chip">STM32</span>
                        <span class="svc-tech-chip">Raspberry Pi</span>
                        <span class="svc-tech-chip">FPGA</span>
                        <span class="svc-tech-chip">MODBUS</span>
                        <span class="svc-tech-chip">MQTT</span>
                        <span class="svc-tech-chip">UART / USB</span>
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
                <h2>How We Reduce Delivery Risk</h2>
            </div>
            <div class="svc-pillars-grid" data-stagger>
                <div class="svc-pillar-card">
                    <div class="svc-pillar-icon">🛡️</div>
                    <h3>Risk-First Scoping</h3>
                    <p>We identify the riskiest assumptions early and test them before the full build, rather than discovering them at launch.</p>
                </div>
                <div class="svc-pillar-card">
                    <div class="svc-pillar-icon">🔗</div>
                    <h3>End-to-End Ownership</h3>
                    <p>One team from device to cloud. You do not have to coordinate firmware, backend, and app vendors against each other.</p>
                </div>
                <div class="svc-pillar-card">
                    <div class="svc-pillar-icon">📄</div>
                    <h3>Documentation as a Deliverable</h3>
                    <p>Architecture, setup, and handover notes are part of the scope, so the system can be maintained after the engagement.</p>
                </div>
                <div class="svc-pillar-card">
                    <div class="svc-pillar-icon">🎯</div>
                    <h3>No Inflated Claims</h3>
                    <p>We state what the system does, what it does not do, and where the limitations are. No invented metrics.</p>
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
                <h2>Selected Project Highlights</h2>
                <p class="section-head-sub">
                    Documented work with clear attribution — including research contracts and CARE Lab projects.
                </p>
            </div>
            <div class="svc-case-grid" data-stagger>

                <article class="svc-case-card">
                    <div class="svc-case-thumb">
                        <span class="svc-case-thumb-emoji">🐔</span>
                        <div class="svc-case-chips">
                            <span class="meta-chip">Computer Vision</span>
                            <span class="meta-chip">Agriculture</span>
                            <span class="meta-chip">Research</span>
                        </div>
                    </div>
                    <div class="svc-case-body">
                        <h3>Flock Sense AI — Broiler Weight Estimation</h3>
                        <p>The AI extension of the Flock Sense poultry IoT platform: a data-collection and inference pipeline that estimates broiler weight from camera imagery, delivered under a research contract at DeepEmbed Research Lab.</p>
                        <div class="svc-case-stats">
                            <div class="svc-case-stat"><span class="svc-case-stat-val">Python</span><span class="svc-case-stat-label">Language</span></div>
                            <div class="svc-case-stat"><span class="svc-case-stat-val">Computer Vision</span><span class="svc-case-stat-label">Approach</span></div>
                            <div class="svc-case-stat"><span class="svc-case-stat-val">DeepEmbed</span><span class="svc-case-stat-label">Contract</span></div>
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
                        <h3>VFD Remote Control System — Industrial Automation</h3>
                        <p>ESP32-based MODBUS controller with a Flutter mobile client and Laravel backend, allowing remote monitoring and control of Variable Frequency Drives with live telemetry and historical logs.</p>
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
                        Tell us about the problem. We'll scope it, identify the technical
                        risks, and tell you honestly whether we are the right fit.
                    </p>
                </div>
                <div class="svc-cta-actions">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Start a Conversation</a>
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
