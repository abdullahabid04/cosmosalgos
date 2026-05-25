@extends('layouts.app')

@section('title', 'Projects | Cosmos Algos')
@section('meta_description', 'Explore real-world projects built by Cosmos Algos — IoT SaaS platforms, AI pipelines, industrial automation, embedded systems, and data acquisition.')

@section('content')

    {{-- ═══════════════════════════════════════════
         PAGE HERO
         ═══════════════════════════════════════════ --}}
    <section class="page-hero" id="projects-hero">
        <div class="page-hero-bg" aria-hidden="true">
            <div class="hero-orb hero-orb-1"></div>
            <div class="hero-orb hero-orb-2"></div>
        </div>
        <div class="container">
            <span class="tag-label">Our Work</span>
            <h1 class="page-hero-title">Projects & <span class="hero-h1-accent">Case Studies</span></h1>
            <p class="lead" style="max-width:640px;margin-top:1.2rem;">
                From industrial automation to AI-powered pipelines — real systems built, shipped, and operating in the field.
            </p>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
         STATS STRIP
         ═══════════════════════════════════════════ --}}
    <section class="section section-alt section-sm">
        <div class="container">
            <div class="proj-stats-row" data-reveal-group>
                <div class="proj-stat-item">
                    <span class="proj-stat-num num" data-target="5">0</span><span class="proj-stat-unit">+</span>
                    <span class="proj-stat-label">SaaS Platforms Contributed</span>
                </div>
                <div class="proj-stat-item">
                    <span class="proj-stat-num num" data-target="10">0</span><span class="proj-stat-unit">+</span>
                    <span class="proj-stat-label">Industrial Projects Delivered</span>
                </div>
                <div class="proj-stat-item">
                    <span class="proj-stat-num num" data-target="3">0</span><span class="proj-stat-unit"></span>
                    <span class="proj-stat-label">Research Collaborations</span>
                </div>
                <div class="proj-stat-item">
                    <span class="proj-stat-num num" data-target="5">0</span><span class="proj-stat-unit">+</span>
                    <span class="proj-stat-label">Years of Engineering</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
         FEATURED PROJECT — FluxSense AI
         ═══════════════════════════════════════════ --}}
    <section class="section section-lg">
        <div class="container">
            <div class="section-head" data-reveal="up">
                <span class="tag-label">Featured Project</span>
                <h2>Spotlight: FluxSense AI</h2>
            </div>

            <div class="proj-featured-card card" data-reveal="up">
                <div class="proj-featured-inner">
                    <div class="proj-featured-left">
                        <div class="proj-featured-thumb">
                            <div class="proj-thumb-icon">🧠</div>
                            <div class="proj-thumb-glow"></div>
                        </div>
                    </div>
                    <div class="proj-featured-right">
                        <div class="badge-row" style="margin-bottom:1rem;">
                            <span class="badge">AI / ML</span>
                            <span class="badge">IoT SaaS</span>
                            <span class="badge">Laravel</span>
                            <span class="badge">Poultry Tech</span>
                        </div>
                        <h3 class="proj-featured-title">FluxSense AI — Poultry Farm Intelligence Platform</h3>
                        <p class="proj-featured-desc">
                            A full-stack IoT SaaS platform for intelligent poultry farm management. Built backend APIs,
                            sensor data pipelines, and an AI inference layer for poultry growth prediction. The system
                            connects IoT devices to a central cloud platform serving mobile apps and farm managers with
                            real-time analytics and automated alerts.
                        </p>
                        <div class="proj-meta-grid">
                            <div class="proj-meta-item">
                                <span class="proj-meta-label">Role</span>
                                <span class="proj-meta-val">Backend & API Engineer</span>
                            </div>
                            <div class="proj-meta-item">
                                <span class="proj-meta-label">Stack</span>
                                <span class="proj-meta-val">Laravel · MySQL · AWS · Flutter</span>
                            </div>
                            <div class="proj-meta-item">
                                <span class="proj-meta-label">Year</span>
                                <span class="proj-meta-val">2024 – Present</span>
                            </div>
                            <div class="proj-meta-item">
                                <span class="proj-meta-label">Type</span>
                                <span class="proj-meta-val">IoT SaaS Platform</span>
                            </div>
                        </div>
                        <div class="proj-highlights">
                            <div class="proj-highlight-item">✦ AI/ML growth prediction pipeline for poultry flocks</div>
                            <div class="proj-highlight-item">✦ Real-time sensor data ingestion & time-series aggregation</div>
                            <div class="proj-highlight-item">✦ Role-based access for farm managers, operators & admins</div>
                            <div class="proj-highlight-item">✦ Reduced data query time from minutes to near-instant</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
         ALL PROJECTS GRID
         ═══════════════════════════════════════════ --}}
    <section class="section section-alt section-lg" id="all-projects">
        <div class="container">
            <div class="section-head" data-reveal="up">
                <span class="tag-label">All Projects</span>
                <h2>Work Across Every Domain</h2>
            </div>

            {{-- Filter tabs --}}
            <div class="proj-filter-row" id="projFilters">
                <button class="proj-filter-btn active" data-filter="all">All Projects</button>
                <button class="proj-filter-btn" data-filter="saas">IoT SaaS</button>
                <button class="proj-filter-btn" data-filter="ai">AI / ML</button>
                <button class="proj-filter-btn" data-filter="embedded">Embedded</button>
                <button class="proj-filter-btn" data-filter="desktop">Desktop Apps</button>
                <button class="proj-filter-btn" data-filter="mobile">Mobile</button>
                <button class="proj-filter-btn" data-filter="cloud">Cloud / APIs</button>
            </div>

            <div class="proj-grid" id="projGrid" data-reveal-group>

                {{-- ── 1. VFD Remote Control System ── --}}
                <div class="proj-card card" data-category="embedded saas mobile">
                    <div class="proj-card-thumb">
                        <span class="proj-card-icon">⚙️</span>
                        <div class="proj-card-glow"></div>
                    </div>
                    <div class="proj-card-body">
                        <div class="badge-row" style="margin-bottom:.75rem;">
                            <span class="badge">Embedded</span>
                            <span class="badge">Mobile</span>
                            <span class="badge">IoT SaaS</span>
                        </div>
                        <h3 class="proj-card-title">VFD Remote Control System</h3>
                        <p class="proj-card-desc">
                            End-to-end system for remotely controlling a Variable Frequency Drive over the internet.
                            ESP32 firmware communicates via MODBUS, a Laravel backend handles secure command routing,
                            and a Flutter mobile app provides a real-time control dashboard with historical logs.
                        </p>
                        <div class="proj-card-stack">
                            <span>ESP32</span><span>MODBUS</span><span>Laravel</span><span>Flutter</span><span>Android</span>
                        </div>
                    </div>
                    <div class="proj-card-footer">
                        <span class="proj-card-year">2024</span>
                        <span class="proj-card-type">Industrial Automation</span>
                    </div>
                </div>

                {{-- ── 2. Intel RealSense Data Acquisition Pipeline ── --}}
                <div class="proj-card card" data-category="ai desktop">
                    <div class="proj-card-thumb">
                        <span class="proj-card-icon">📷</span>
                        <div class="proj-card-glow"></div>
                    </div>
                    <div class="proj-card-body">
                        <div class="badge-row" style="margin-bottom:.75rem;">
                            <span class="badge">AI / ML</span>
                            <span class="badge">Data Acquisition</span>
                            <span class="badge">Python</span>
                        </div>
                        <h3 class="proj-card-title">RGB-D Poultry Data Acquisition Pipeline</h3>
                        <p class="proj-card-desc">
                            Python-based acquisition system built for DeepEmbed Research Lab. Captures RGB-D chicken
                            images using Intel RealSense D435i with automated session handling, gesture controls,
                            and point-cloud generation. Delivered structured datasets for AI-powered poultry growth analysis.
                        </p>
                        <div class="proj-card-stack">
                            <span>Python</span><span>RealSense SDK</span><span>OpenCV</span><span>Open3D</span>
                        </div>
                    </div>
                    <div class="proj-card-footer">
                        <span class="proj-card-year">2025</span>
                        <span class="proj-card-type">Research · DeepEmbed Lab</span>
                    </div>
                </div>

                {{-- ── 3. Poultry Farm Management SaaS ── --}}
                <div class="proj-card card" data-category="saas">
                    <div class="proj-card-thumb">
                        <span class="proj-card-icon">🌾</span>
                        <div class="proj-card-glow"></div>
                    </div>
                    <div class="proj-card-body">
                        <div class="badge-row" style="margin-bottom:.75rem;">
                            <span class="badge">IoT SaaS</span>
                            <span class="badge">Laravel</span>
                            <span class="badge">AWS</span>
                        </div>
                        <h3 class="proj-card-title">Poultry Farm Management IoT SaaS</h3>
                        <p class="proj-card-desc">
                            Full-stack IoT SaaS platform for poultry farm operations. Built backend APIs,
                            role-based access (managers, operators, admins), Stripe payment integration,
                            OTA firmware update system for IoT devices, and time-series sensor data aggregation.
                        </p>
                        <div class="proj-card-stack">
                            <span>Laravel</span><span>MySQL</span><span>Stripe</span><span>Flutter</span>
                        </div>
                    </div>
                    <div class="proj-card-footer">
                        <span class="proj-card-year">2023 – Present</span>
                        <span class="proj-card-type">IoT SaaS Platform</span>
                    </div>
                </div>

                {{-- ── 4. Climate Monitoring APIs on AWS ── --}}
                <div class="proj-card card" data-category="cloud saas">
                    <div class="proj-card-thumb">
                        <span class="proj-card-icon">🌡️</span>
                        <div class="proj-card-glow"></div>
                    </div>
                    <div class="proj-card-body">
                        <div class="badge-row" style="margin-bottom:.75rem;">
                            <span class="badge">Cloud / APIs</span>
                            <span class="badge">AWS</span>
                            <span class="badge">IoT</span>
                        </div>
                        <h3 class="proj-card-title">Temperature & Humidity Monitoring APIs</h3>
                        <p class="proj-card-desc">
                            Serverless cloud API layer for real-time climate monitoring of specific sites. IoT Core
                            manages device connectivity, Lambda + DynamoDB handle data ingestion and storage,
                            API Gateway exposes data to mobile clients, and Cognito + IAM manage authentication.
                        </p>
                        <div class="proj-card-stack">
                            <span>AWS IoT Core</span><span>Lambda</span><span>DynamoDB</span><span>API Gateway</span><span>Cognito</span>
                        </div>
                    </div>
                    <div class="proj-card-footer">
                        <span class="proj-card-year">2022 – 2023</span>
                        <span class="proj-card-type">Cloud Infrastructure · CARE</span>
                    </div>
                </div>

                {{-- ── 5. Battery Charger Health Monitor ── --}}
                <div class="proj-card card" data-category="desktop embedded">
                    <div class="proj-card-thumb">
                        <span class="proj-card-icon">🔋</span>
                        <div class="proj-card-glow"></div>
                    </div>
                    <div class="proj-card-body">
                        <div class="badge-row" style="margin-bottom:.75rem;">
                            <span class="badge">Desktop App</span>
                            <span class="badge">PyQt5</span>
                            <span class="badge">Industrial</span>
                        </div>
                        <h3 class="proj-card-title">Battery Charger Health & Charging Manager</h3>
                        <p class="proj-card-desc">
                            PyQt5 desktop application for real-time battery charger monitoring and charging management.
                            Communicates with hardware over serial/USB, visualizes live electrical signals, automates
                            charging cycles, and generates health reports for field engineers.
                        </p>
                        <div class="proj-card-stack">
                            <span>Python</span><span>PyQt5</span><span>Serial/USB</span><span>Signal Processing</span>
                        </div>
                    </div>
                    <div class="proj-card-footer">
                        <span class="proj-card-year">2022</span>
                        <span class="proj-card-type">Industrial Desktop · CARE</span>
                    </div>
                </div>

                {{-- ── 6. Industrial Equipment Testing Platform ── --}}
                <div class="proj-card card" data-category="desktop embedded">
                    <div class="proj-card-thumb">
                        <span class="proj-card-icon">🛠️</span>
                        <div class="proj-card-glow"></div>
                    </div>
                    <div class="proj-card-body">
                        <div class="badge-row" style="margin-bottom:.75rem;">
                            <span class="badge">Desktop App</span>
                            <span class="badge">Automation</span>
                            <span class="badge">Hardware</span>
                        </div>
                        <h3 class="proj-card-title">Automated Industrial Equipment Testing Platform</h3>
                        <p class="proj-card-desc">
                            Desktop software that communicates with industrial hardware to trigger automated equipment
                            tests, fetch results, and visualize pass/fail outcomes on a real-time dashboard. Reduced
                            manual testing overhead significantly for field engineering teams.
                        </p>
                        <div class="proj-card-stack">
                            <span>Python</span><span>PyQt5</span><span>Hardware Comms</span><span>Data Visualization</span>
                        </div>
                    </div>
                    <div class="proj-card-footer">
                        <span class="proj-card-year">2022 – 2023</span>
                        <span class="proj-card-type">Industrial Automation · CARE</span>
                    </div>
                </div>

                {{-- ── 7. Oscilloscope Data Viewer ── --}}
                <div class="proj-card card" data-category="desktop embedded">
                    <div class="proj-card-thumb">
                        <span class="proj-card-icon">📈</span>
                        <div class="proj-card-glow"></div>
                    </div>
                    <div class="proj-card-body">
                        <div class="badge-row" style="margin-bottom:.75rem;">
                            <span class="badge">Desktop App</span>
                            <span class="badge">Signal Processing</span>
                        </div>
                        <h3 class="proj-card-title">Oscilloscope Signal Visualization Tool</h3>
                        <p class="proj-card-desc">
                            Fetches recorded waveform data from oscilloscopes and renders it in a clean, interactive
                            desktop interface — making signal analysis far clearer and faster than reading raw oscilloscope
                            output. Built for electronics engineers at CARE lab.
                        </p>
                        <div class="proj-card-stack">
                            <span>Python</span><span>PyQt5</span><span>Signal Processing</span>
                        </div>
                    </div>
                    <div class="proj-card-footer">
                        <span class="proj-card-year">2022 – 2023</span>
                        <span class="proj-card-type">Engineering Tool · CARE</span>
                    </div>
                </div>

                {{-- ── 8. Flutter Mobile Apps + CodeIgniter Backends ── --}}
                <div class="proj-card card" data-category="mobile saas">
                    <div class="proj-card-thumb">
                        <span class="proj-card-icon">📱</span>
                        <div class="proj-card-glow"></div>
                    </div>
                    <div class="proj-card-body">
                        <div class="badge-row" style="margin-bottom:.75rem;">
                            <span class="badge">Mobile</span>
                            <span class="badge">Flutter</span>
                            <span class="badge">IoT</span>
                        </div>
                        <h3 class="proj-card-title">IoT Device Control Mobile Applications</h3>
                        <p class="proj-card-desc">
                            Built real-time Flutter mobile apps for monitoring and controlling connected devices:
                            electric bikes, smart water dispensers, and home automation systems. Each app paired with
                            a CodeIgniter backend for device communication, state management, and data persistence.
                        </p>
                        <div class="proj-card-stack">
                            <span>Flutter</span><span>Dart</span><span>CodeIgniter</span><span>REST APIs</span>
                        </div>
                    </div>
                    <div class="proj-card-footer">
                        <span class="proj-card-year">2021 – 2022</span>
                        <span class="proj-card-type">Mobile Apps · CARE</span>
                    </div>
                </div>

                {{-- ── 9. Multi-SaaS Platform Contributions ── --}}
                <div class="proj-card card" data-category="saas cloud">
                    <div class="proj-card-thumb">
                        <span class="proj-card-icon">🏗️</span>
                        <div class="proj-card-glow"></div>
                    </div>
                    <div class="proj-card-body">
                        <div class="badge-row" style="margin-bottom:.75rem;">
                            <span class="badge">IoT SaaS</span>
                            <span class="badge">Laravel</span>
                            <span class="badge">Backend</span>
                        </div>
                        <h3 class="proj-card-title">5 IoT SaaS Platform Contributions</h3>
                        <p class="proj-card-desc">
                            Contributed backend engineering across five separate IoT SaaS platforms —
                            designing hierarchical CRUD systems (users → factories → plants → sections),
                            building device APIs, integrating Stripe payments, and implementing OTA firmware
                            update features with versioning dashboards.
                        </p>
                        <div class="proj-card-stack">
                            <span>Laravel</span><span>PHP</span><span>MySQL</span><span>REST APIs</span><span>Stripe</span>
                        </div>
                    </div>
                    <div class="proj-card-footer">
                        <span class="proj-card-year">2023 – Present</span>
                        <span class="proj-card-type">SaaS Backend Engineering</span>
                    </div>
                </div>

                {{-- ── 10. Python Automation Toolkit ── --}}
                <div class="proj-card card" data-category="desktop">
                    <div class="proj-card-thumb">
                        <span class="proj-card-icon">🤖</span>
                        <div class="proj-card-glow"></div>
                    </div>
                    <div class="proj-card-body">
                        <div class="badge-row" style="margin-bottom:.75rem;">
                            <span class="badge">Automation</span>
                            <span class="badge">Python</span>
                            <span class="badge">DevTools</span>
                        </div>
                        <h3 class="proj-card-title">Engineering Automation Script Toolkit</h3>
                        <p class="proj-card-desc">
                            A suite of Python tools built to accelerate engineering workflows: automated API testing
                            pipelines, bulk IoT data pushers for stress-testing SaaS platforms, workflow helper scripts,
                            and code generators for Flutter BLoC structures and project folder scaffolding.
                        </p>
                        <div class="proj-card-stack">
                            <span>Python</span><span>API Testing</span><span>CLI Tools</span><span>Code Gen</span>
                        </div>
                    </div>
                    <div class="proj-card-footer">
                        <span class="proj-card-year">2022 – Present</span>
                        <span class="proj-card-type">Developer Tooling</span>
                    </div>
                </div>

                {{-- ── 11. Port Reform SaaS ── --}}
                <div class="proj-card card" data-category="saas">
                    <div class="proj-card-thumb">
                        <span class="proj-card-icon">🚢</span>
                        <div class="proj-card-glow"></div>
                    </div>
                    <div class="proj-card-body">
                        <div class="badge-row" style="margin-bottom:.75rem;">
                            <span class="badge">SaaS</span>
                            <span class="badge">Laravel</span>
                            <span class="badge">Backend</span>
                        </div>
                        <h3 class="proj-card-title">Port Reform — Logistics SaaS Platform</h3>
                        <p class="proj-card-desc">
                            Backend engineering contributions to Port Reform, a logistics and port management SaaS.
                            Designed and implemented API endpoints, entity management systems, and supporting
                            backend infrastructure for logistics workflow automation.
                        </p>
                        <div class="proj-card-stack">
                            <span>Laravel</span><span>PHP</span><span>MySQL</span><span>REST APIs</span>
                        </div>
                    </div>
                    <div class="proj-card-footer">
                        <span class="proj-card-year">2024 – 2025</span>
                        <span class="proj-card-type">Logistics SaaS</span>
                    </div>
                </div>

                {{-- ── 12. 2D Multiplayer Game ── --}}
                <div class="proj-card card" data-category="desktop">
                    <div class="proj-card-thumb">
                        <span class="proj-card-icon">🎮</span>
                        <div class="proj-card-glow"></div>
                    </div>
                    <div class="proj-card-body">
                        <div class="badge-row" style="margin-bottom:.75rem;">
                            <span class="badge">Game Dev</span>
                            <span class="badge">Python</span>
                            <span class="badge">Networking</span>
                        </div>
                        <h3 class="proj-card-title">2D Multiplayer Game</h3>
                        <p class="proj-card-desc">
                            Built a 2D multiplayer game in Python (Pygame) during the early exploration phase —
                            implementing real-time multiplayer networking, game loop architecture, collision systems,
                            and player-state synchronization. A formative project that cemented backend + networking fundamentals.
                        </p>
                        <div class="proj-card-stack">
                            <span>Python</span><span>Pygame</span><span>Networking</span>
                        </div>
                    </div>
                    <div class="proj-card-footer">
                        <span class="proj-card-year">2021</span>
                        <span class="proj-card-type">Personal Project</span>
                    </div>
                </div>

            </div>{{-- /proj-grid --}}
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
         TECH STACK USED ACROSS PROJECTS
         ═══════════════════════════════════════════ --}}
    <section class="section section-lg" data-reveal="up">
        <div class="container">
            <div class="section-head-center">
                <span class="tag-label">Technology</span>
                <h2>Stack Used Across Projects</h2>
                <p class="section-subhead">Every tool chosen for a reason — reliability, scale, and real-world fit.</p>
            </div>

            <div class="tech-stack-grid" data-reveal-group>
                <div class="tech-stack-item"><span class="tech-stack-icon">🐘</span><span>PHP / Laravel</span></div>
                <div class="tech-stack-item"><span class="tech-stack-icon">🐍</span><span>Python</span></div>
                <div class="tech-stack-item"><span class="tech-stack-icon">📱</span><span>Flutter / Dart</span></div>
                <div class="tech-stack-item"><span class="tech-stack-icon">🖥️</span><span>PyQt5</span></div>
                <div class="tech-stack-item"><span class="tech-stack-icon">☁️</span><span>AWS</span></div>
                <div class="tech-stack-item"><span class="tech-stack-icon">🗄️</span><span>MySQL · DynamoDB</span></div>
                <div class="tech-stack-item"><span class="tech-stack-icon">📷</span><span>Intel RealSense</span></div>
                <div class="tech-stack-item"><span class="tech-stack-icon">🔌</span><span>ESP32 · MODBUS</span></div>
                <div class="tech-stack-item"><span class="tech-stack-icon">👁️</span><span>OpenCV · Open3D</span></div>
                <div class="tech-stack-item"><span class="tech-stack-icon">🔗</span><span>REST APIs</span></div>
                <div class="tech-stack-item"><span class="tech-stack-icon">💳</span><span>Stripe</span></div>
                <div class="tech-stack-item"><span class="tech-stack-icon">⚡</span><span>CodeIgniter</span></div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
         CTA
         ═══════════════════════════════════════════ --}}
    <section class="section section-alt section-lg" data-reveal="up">
        <div class="container">
            <div class="proj-cta-block card">
                <div class="proj-cta-glow" aria-hidden="true"></div>
                <span class="tag-label">Start a Project</span>
                <h2>Have an Idea? Let's Build It.</h2>
                <p>
                    Whether it's an IoT product, an AI pipeline, a SaaS platform, or an embedded system —
                    we take ideas from concept to production.
                </p>
                <div class="hero-cta-row" style="justify-content:center;margin-top:2rem;">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Start the Conversation</a>
                    <a href="{{ route('services') }}" class="btn btn-ghost">View Services</a>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        (function () {

            /* ── Filter tabs ── */
            const filterBtns = document.querySelectorAll('.proj-filter-btn');
            const cards      = document.querySelectorAll('.proj-card');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    filterBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    const filter = btn.dataset.filter;
                    cards.forEach(card => {
                        const cats = card.dataset.category || '';
                        const show = filter === 'all' || cats.includes(filter);
                        card.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                        if (show) {
                            card.style.opacity = '1';
                            card.style.transform = 'scale(1)';
                            card.style.display = '';
                        } else {
                            card.style.opacity = '0';
                            card.style.transform = 'scale(0.95)';
                            setTimeout(() => {
                                if (card.style.opacity === '0') card.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });

            /* ── Counter animation ── */
            function animateCount(el) {
                const target = parseInt(el.dataset.target, 10);
                const duration = 1600;
                const start = performance.now();
                function step(now) {
                    const p = Math.min((now - start) / duration, 1);
                    const ease = 1 - Math.pow(1 - p, 3);
                    el.textContent = Math.round(ease * target);
                    if (p < 1) requestAnimationFrame(step);
                }
                requestAnimationFrame(step);
            }
            const io = new IntersectionObserver(entries => {
                entries.forEach(e => {
                    if (e.isIntersecting) {
                        e.target.querySelectorAll('.num').forEach(animateCount);
                        io.unobserve(e.target);
                    }
                });
            }, { threshold: 0.3 });
            document.querySelectorAll('[data-reveal-group]').forEach(el => io.observe(el));

            /* ── Scroll reveal ── */
            const revealIO = new IntersectionObserver(entries => {
                entries.forEach(e => {
                    if (e.isIntersecting) {
                        e.target.classList.add('is-visible');
                        revealIO.unobserve(e.target);
                    }
                });
            }, { threshold: 0.10 });
            document.querySelectorAll('[data-reveal], [data-reveal-group]').forEach(el => revealIO.observe(el));

        })();
    </script>
@endpush
