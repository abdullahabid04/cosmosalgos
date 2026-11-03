@extends('layouts.app')

@section('title', 'Projects | Cosmos Algos')
@section('meta_description', 'Documented projects across IoT SaaS, applied AI, industrial automation, embedded systems, and data acquisition — with delivery context and attribution.')

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
                From industrial automation to applied AI — documented systems built for industrial, research, and product environments.
            </p>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
         STATS STRIP
         ═══════════════════════════════════════════ --}}
    <section class="section section-alt section-sm">
        <div class="container">
            <div class="proj-stats-row" data-stagger>
                <div class="proj-stat-item">
                    <span class="proj-stat-value">
                        <span class="proj-stat-num num" data-target="{{ $stats['saas_platforms'] }}">0</span>
                    </span>
                    <span class="proj-stat-label">SaaS Platforms Contributed</span>
                </div>
                <div class="proj-stat-item">
                    <span class="proj-stat-value">
                        <span class="proj-stat-num num" data-target="{{ $stats['projects'] }}">0</span><span class="proj-stat-unit" aria-hidden="true">+</span>
                    </span>
                    <span class="proj-stat-label">Projects &amp; Engagements</span>
                </div>
                <div class="proj-stat-item">
                    <span class="proj-stat-value">
                        <span class="proj-stat-num num" data-target="{{ $stats['care_platforms'] }}">0</span>
                    </span>
                    <span class="proj-stat-label">CARE Lab Platforms</span>
                </div>
                <div class="proj-stat-item">
                    <span class="proj-stat-value">
                        <span class="proj-stat-num num" data-target="{{ $stats['years_experience'] }}">0</span><span class="proj-stat-unit" aria-hidden="true">+</span>
                    </span>
                    <span class="proj-stat-label">Years of Engineering</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
         FEATURED PROJECT — Flock Sense + Flock Sense AI
         ═══════════════════════════════════════════ --}}
    <section class="section section-lg">
        <div class="container">
            <div class="section-head" data-reveal="up">
                <span class="tag-label">Featured Platform</span>
                <h2>Spotlight: Flock Sense + Flock Sense AI</h2>
            </div>

            <div class="proj-featured-card card" data-reveal="up">
                <div class="proj-featured-inner">
                    <div class="proj-featured-left">
                        <div class="proj-featured-thumb has-image">
                            <img src="{{ asset('images/projects/flock-sense-poultry.jpg') }}"
                                 alt="Broiler chickens in a poultry house, representative of the Flock Sense platform environment"
                                 width="1200" height="1600" loading="lazy">
                            <div class="proj-thumb-glow"></div>
                        </div>
                    </div>
                    <div class="proj-featured-right">
                        <div class="badge-row" style="margin-bottom:1rem;">
                            <span class="badge">Poultry IoT SaaS</span>
                            <span class="badge">Computer Vision</span>
                            <span class="badge">Research Contract</span>
                            <span class="badge">Python</span>
                        </div>
                        <h3 class="proj-featured-title">Flock Sense + Flock Sense AI</h3>
                        <p class="proj-featured-desc">
                            <strong>Flock Sense</strong> is the poultry IoT SaaS platform.
                            <strong>Flock Sense AI</strong> is its AI-enabled extension: a
                            data-collection and inference pipeline that estimates broiler weight from
                            camera imagery. The AI work was delivered under a research contract at
                            DeepEmbed Research Lab, while the platform remains the broader product context.
                        </p>
                        <div class="proj-meta-grid">
                            <div class="proj-meta-item">
                                <span class="proj-meta-label">Platform</span>
                                <span class="proj-meta-val">Flock Sense · Poultry IoT SaaS</span>
                            </div>
                            <div class="proj-meta-item">
                                <span class="proj-meta-label">AI Extension</span>
                                <span class="proj-meta-val">Broiler weight estimation</span>
                            </div>
                            <div class="proj-meta-item">
                                <span class="proj-meta-label">Stack</span>
                                <span class="proj-meta-val">Python · OpenCV · Open3D · RealSense</span>
                            </div>
                            <div class="proj-meta-item">
                                <span class="proj-meta-label">Delivery</span>
                                <span class="proj-meta-val">DeepEmbed research contract · 2025</span>
                            </div>
                        </div>
                        <div class="proj-highlights">
                            <div class="proj-highlight-item">✦ Flock Sense provides the poultry operations and IoT platform context</div>
                            <div class="proj-highlight-item">✦ Flock Sense AI adds camera-based broiler weight estimation</div>
                            <div class="proj-highlight-item">✦ Structured RGB-D capture, dataset preparation, and inference workflow</div>
                            <div class="proj-highlight-item">✦ AI work attributed to the DeepEmbed research contract</div>
                        </div>
                        <div class="proj-featured-actions">
                            <a href="#all-projects" class="btn btn-primary">Explore Both Projects <span aria-hidden="true">↓</span></a>
                            <a href="{{ route('contact') }}" class="btn btn-ghost">Discuss a Similar System</a>
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
                <h2>Work Across Several Domains</h2>
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

            <div class="proj-grid" id="projGrid" data-stagger>

                {{-- ── 1. VFD Remote Control System ── --}}
                <div class="proj-card card" data-category="embedded saas mobile">
                    <div class="proj-card-thumb has-image">
                        <img src="{{ asset('images/projects/inverter-ac-repair.jpg') }}"
                             alt="Inverter control board inspected during a VFD repair and testing workflow"
                             width="450" height="600" loading="lazy">
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
                        <span class="proj-card-year">2025</span>
                        <span class="proj-card-type">Industrial Automation</span>
                    </div>
                </div>

                {{-- ── 2. Intel RealSense Data Acquisition Pipeline ── --}}
                <div class="proj-card card" data-category="ai desktop">
                    <div class="proj-card-thumb has-image">
                        <img src="{{ asset('images/projects/rgbd-point-cloud.png') }}"
                             alt="Illustration of an RGB-D point cloud and depth-sensing grid"
                             width="1200" height="800" loading="lazy">
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
                            and point-cloud generation. Delivered structured datasets for AI-assisted poultry weight analysis.
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

                {{-- ── 3. Flock Sense — Poultry IoT SaaS ── --}}
                <div class="proj-card card" data-category="saas">
                    <div class="proj-card-thumb has-image">
                        <img src="{{ asset('images/projects/flock-sense-poultry.jpg') }}"
                             alt="Broiler chickens in a poultry house, representative of the Flock Sense platform environment"
                             width="1200" height="1600" loading="lazy">
                        <div class="proj-card-glow"></div>
                    </div>
                    <div class="proj-card-body">
                        <div class="badge-row" style="margin-bottom:.75rem;">
                            <span class="badge">IoT SaaS</span>
                            <span class="badge">Laravel</span>
                            <span class="badge">AWS</span>
                        </div>
                        <h3 class="proj-card-title">Flock Sense — Poultry IoT SaaS</h3>
                        <p class="proj-card-desc">
                            The poultry IoT SaaS platform behind Flock Sense AI. Work covered backend APIs,
                            role-based access for managers, operators, and admins, Stripe payment integration,
                            OTA firmware updates for connected devices, and time-series sensor aggregation.
                        </p>
                        <div class="proj-card-stack">
                            <span>Laravel</span><span>MySQL</span><span>Stripe</span><span>Flutter</span>
                        </div>
                    </div>
                    <div class="proj-card-footer">
                        <span class="proj-card-year">2023 – Present</span>
                        <span class="proj-card-type">Poultry IoT SaaS Platform</span>
                    </div>
                </div>

                {{-- ── 3b. Flock Sense AI — Broiler Weight Estimation ── --}}
                <div class="proj-card card" data-category="ai saas">
                    <div class="proj-card-thumb has-image">
                        <img src="{{ asset('images/projects/flock-sense-ai-poultry.jpg') }}"
                             alt="Chicken in a farm environment, representative of the poultry imagery used for weight-estimation research"
                             width="1200" height="800" loading="lazy">
                        <div class="proj-card-glow"></div>
                    </div>
                    <div class="proj-card-body">
                        <div class="badge-row" style="margin-bottom:.75rem;">
                            <span class="badge">Computer Vision</span>
                            <span class="badge">Poultry</span>
                            <span class="badge">Research Contract</span>
                        </div>
                        <h3 class="proj-card-title">Flock Sense AI — Broiler Weight Estimation</h3>
                        <p class="proj-card-desc">
                            The AI extension of Flock Sense. A data-collection and inference pipeline
                            estimates broiler weight from camera imagery, with structured image capture,
                            dataset preparation, and an inference workflow. Delivered under a research
                            contract at DeepEmbed Research Lab.
                        </p>
                        <div class="proj-card-stack">
                            <span>Python</span><span>OpenCV</span><span>Open3D</span><span>RealSense</span>
                        </div>
                    </div>
                    <div class="proj-card-footer">
                        <span class="proj-card-year">2025</span>
                        <span class="proj-card-type">AI Extension · DeepEmbed Contract</span>
                    </div>
                </div>

                {{-- ── 4. Climate Monitoring APIs on AWS ── --}}
                <div class="proj-card card" data-category="cloud saas">
                    <div class="proj-card-thumb has-image">
                        <img src="{{ asset('images/projects/climate-monitoring-sensors.png') }}"
                             alt="Illustration of temperature and humidity sensor telemetry feeding a cloud API"
                             width="1200" height="800" loading="lazy">
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

                {{-- ── 4b. Primer Analyzer ── --}}
                <div class="proj-card card" data-category="desktop embedded">
                    <div class="proj-card-thumb has-image">
                        <img src="{{ asset('images/projects/primer-analyzer.jpg') }}"
                             alt="Primer Analyzer test equipment"
                             loading="lazy" width="1200" height="900">
                        <div class="proj-card-glow"></div>
                    </div>
                    <div class="proj-card-body">
                        <div class="badge-row" style="margin-bottom:.75rem;">
                            <span class="badge">Defense</span>
                            <span class="badge">Desktop App</span>
                            <span class="badge">Hardware</span>
                        </div>
                        <h3 class="proj-card-title">Primer Analyzer</h3>
                        <p class="proj-card-desc">
                            Software-assisted test system that performs four electrical tests and one
                            mechanical test on primers, then generates structured reports. Delivered for
                            Pakistan Army Ordnance Corps through CARE Lab.
                        </p>
                        <div class="proj-card-stack">
                            <span>Python</span><span>PyQt5</span><span>Hardware Comms</span><span>Reporting</span>
                        </div>
                    </div>
                    <div class="proj-card-footer">
                        <span class="proj-card-year">2024</span>
                        <span class="proj-card-type">Defense Test Equipment · CARE</span>
                    </div>
                </div>

                {{-- ── 4c. Shell Analyzer ── --}}
                <div class="proj-card card" data-category="desktop ai">
                    <div class="proj-card-thumb has-image">
                        <img src="{{ asset('images/projects/shell-analyzer-dashboard.png') }}"
                             alt="Shell Analyzer inspection dashboard"
                             loading="lazy" width="1200" height="640">
                        <div class="proj-card-glow"></div>
                    </div>
                    <div class="proj-card-body">
                        <div class="badge-row" style="margin-bottom:.75rem;">
                            <span class="badge">Defense</span>
                            <span class="badge">Computer Vision</span>
                            <span class="badge">Desktop App</span>
                        </div>
                        <h3 class="proj-card-title">Shell Analyzer</h3>
                        <p class="proj-card-desc">
                            Image-processing system that analyses shells, identifies corrosion types
                            and grades, and produces inspection reports. Delivered for Pakistan Army
                            Ordnance Corps through CARE Lab.
                        </p>
                        <div class="proj-card-stack">
                            <span>Python</span><span>OpenCV</span><span>Image Processing</span><span>Reporting</span>
                        </div>
                    </div>
                    <div class="proj-card-footer">
                        <span class="proj-card-year">2024</span>
                        <span class="proj-card-type">Defense Inspection · CARE</span>
                    </div>
                </div>

                {{-- ── 4d. Aircraft Battery Charger & Analyzer ── --}}
                <div class="proj-card card" data-category="desktop embedded">
                    <div class="proj-card-thumb has-image">
                        <img src="{{ asset('images/projects/christie-battery-analyzer.jpg') }}"
                             alt="Christie aircraft battery charger and analyzer unit"
                             loading="lazy" width="1200" height="900">
                        <div class="proj-card-glow"></div>
                    </div>
                    <div class="proj-card-body">
                        <div class="badge-row" style="margin-bottom:.75rem;">
                            <span class="badge">Defense</span>
                            <span class="badge">Embedded</span>
                            <span class="badge">Raspberry Pi</span>
                        </div>
                        <h3 class="proj-card-title">Aircraft Battery Charger &amp; Analyzer Upgrade</h3>
                        <p class="proj-card-desc">
                            Rehabilitation of a Christie aircraft battery charger/analyzer with a
                            Raspberry Pi controller, touch display, and modern monitoring software.
                            Delivered for Pakistan Army Ordnance Corps through CARE Lab.
                        </p>
                        <div class="proj-card-stack">
                            <span>Raspberry Pi</span><span>Python</span><span>Touch UI</span><span>Hardware Control</span>
                        </div>
                    </div>
                    <div class="proj-card-footer">
                        <span class="proj-card-year">2023</span>
                        <span class="proj-card-type">Defense Aviation · CARE</span>
                    </div>
                </div>

                {{-- ── 4e. CARE Lab monitoring platforms ── --}}
                <div class="proj-card card" data-category="saas cloud">
                    <div class="proj-card-thumb has-image">
                        <img src="{{ asset('images/projects/vibcare-vibration-analysis.jpg') }}"
                             alt="VibCare vibration analysis visualisation"
                             loading="lazy" width="1200" height="900">
                        <div class="proj-card-glow"></div>
                    </div>
                    <div class="proj-card-body">
                        <div class="badge-row" style="margin-bottom:.75rem;">
                            <span class="badge">IoT SaaS</span>
                            <span class="badge">CARE Lab</span>
                            <span class="badge">Laravel</span>
                        </div>
                        <h3 class="proj-card-title">CARE Lab Monitoring Platforms</h3>
                        <p class="proj-card-desc">
                            Contributions to four CARE Lab platforms: VibCare (vibration monitoring),
                            PowerEye (energy monitoring), Sentron (sensor monitoring), and SolaCon
                            (solar/VFD automation).
                        </p>
                        <div class="proj-card-stack">
                            <span>Laravel</span><span>MySQL</span><span>Flutter</span><span>Sensor Data</span>
                        </div>
                    </div>
                    <div class="proj-card-footer">
                        <span class="proj-card-year">2023 – 2024</span>
                        <span class="proj-card-type">IoT Platforms · CARE</span>
                    </div>
                </div>

                {{-- ── 5. Battery Charger Health Monitor ── --}}
                <div class="proj-card card" data-category="desktop embedded">
                    <div class="proj-card-thumb has-image">
                        <img src="{{ asset('images/projects/battery-charger-manager.png') }}"
                             alt="Illustration of battery cells, charge cycles, and a health-monitoring dashboard"
                             width="1200" height="800" loading="lazy">
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
                    <div class="proj-card-thumb has-image">
                        <img src="{{ asset('images/projects/industrial-test-rig.jpg') }}"
                             alt="Engineer working with an industrial test rig and control equipment"
                             width="1200" height="800" loading="lazy">
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
                            tests, fetch results, and visualise pass/fail outcomes on a real-time dashboard. It replaced
                            repeated manual steps in the test workflow for field engineering teams.
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
                    <div class="proj-card-thumb has-image">
                        <img src="{{ asset('images/projects/oscilloscope-signal-viewer.png') }}"
                             alt="Illustration of a waveform viewer with oscilloscope-style signal traces"
                             width="1200" height="800" loading="lazy">
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
                            desktop interface — making signal analysis easier to inspect than raw oscilloscope
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
                    <div class="proj-card-thumb has-image">
                        <img src="{{ asset('images/projects/smart-door-lock.jpg') }}"
                             alt="Smart door lock prototype used in an IoT device-control project"
                             width="1200" height="900" loading="lazy">
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
                    <div class="proj-card-thumb has-image">
                        <img src="{{ asset('images/projects/saas-server-infrastructure.jpg') }}"
                             alt="Server infrastructure representing multi-tenant SaaS backend work"
                             width="1200" height="800" loading="lazy">
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
                    <div class="proj-card-thumb has-image">
                        <img src="{{ asset('images/projects/automation-toolkit.jpg') }}"
                             alt="Code editor and terminal representing engineering automation scripts"
                             width="1200" height="800" loading="lazy">
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
                    <div class="proj-card-thumb has-image">
                        <img src="{{ asset('images/projects/port-logistics.jpg') }}"
                             alt="Container port and logistics infrastructure"
                             width="1200" height="800" loading="lazy">
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
                    <div class="proj-card-thumb has-image">
                        <img src="{{ asset('images/projects/multiplayer-game-controller.jpg') }}"
                             alt="Game controller representing the 2D multiplayer game project"
                             width="1200" height="800" loading="lazy">
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
                <p class="section-subhead">Tools chosen for the constraint in front of the project — reliability, maintainability, and fit.</p>
            </div>

            <div class="tech-stack-grid" data-stagger>
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
                    we scope the work, build it, and hand it over with documentation.
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

        })();
    </script>
@endpush
