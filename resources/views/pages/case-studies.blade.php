@extends('layouts.app')

@section('title', 'Case Studies — ' . $company['name'])
@section('meta_description', 'Documented engineering work from Cosmos Algos, CARE Lab, and a DeepEmbed research contract — with the delivery context and attribution stated plainly.')

@section('content')

    {{-- ═══════════════════════════════════════════════
         HERO
    ═══════════════════════════════════════════════ --}}
    <section class="cs-hero">
        <div class="cs-hero-bg" aria-hidden="true">
            <div class="cs-hero-orb cs-hero-orb-1"></div>
            <div class="cs-hero-orb cs-hero-orb-2"></div>
            <div class="cs-hero-grid"></div>
        </div>
        <div class="container">
            <div class="cs-hero-inner" data-reveal="fade-up">
                <span class="tag-label">Case Studies</span>
                <h1 class="cs-hero-h1 glitch-ready">
                    Engineering Work,<br>
                    <span class="cs-h1-accent">Documented.</span>
                </h1>
                <p class="cs-hero-sub">
                    These are systems that were actually built. Where the work was delivered
                    through CARE Lab or under a research contract, this page says so — including
                    which organisation holds the client relationship.
                </p>

                <div class="cs-hero-stats" data-stagger>
                    <div class="cs-hero-stat">
                        <span class="cs-stat-value">
                            <span class="num cs-stat-num" data-target="{{ $stats['projects'] }}">{{ $stats['projects'] }}</span><span class="cs-stat-unit" aria-hidden="true">+</span>
                        </span>
                        <span class="cs-stat-label">Projects &amp; Engagements</span>
                    </div>
                    <div class="cs-hero-stat-divider" aria-hidden="true"></div>
                    <div class="cs-hero-stat">
                        <span class="cs-stat-value">
                            <span class="num cs-stat-num" data-target="{{ $stats['industries'] }}">{{ $stats['industries'] }}</span>
                        </span>
                        <span class="cs-stat-label">Industries Served</span>
                    </div>
                    <div class="cs-hero-stat-divider" aria-hidden="true"></div>
                    <div class="cs-hero-stat">
                        <span class="cs-stat-value">
                            <span class="num cs-stat-num" data-target="{{ $stats['years_experience'] }}">{{ $stats['years_experience'] }}</span><span class="cs-stat-unit" aria-hidden="true">+</span>
                        </span>
                        <span class="cs-stat-label">Years of Engineering</span>
                    </div>
                    <div class="cs-hero-stat-divider" aria-hidden="true"></div>
                    <div class="cs-hero-stat">
                        <span class="cs-stat-value">
                            <span class="num cs-stat-num" data-target="{{ $stats['care_rnd_projects'] }}">{{ $stats['care_rnd_projects'] }}</span>
                        </span>
                        <span class="cs-stat-label">CARE Lab R&amp;D Projects</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         FILTER BAR
    ═══════════════════════════════════════════════ --}}
    <section class="cs-filter-bar-section">
        <div class="container">
            <div class="cs-filter-bar" id="csFilterBar" data-reveal="fade-up">
                <button class="cs-filter-btn is-active" data-filter="all">All Work</button>
                <button class="cs-filter-btn" data-filter="defense">Defense &amp; Industrial</button>
                <button class="cs-filter-btn" data-filter="cv">Computer Vision</button>
                <button class="cs-filter-btn" data-filter="iot">IoT Platforms</button>
                <button class="cs-filter-btn" data-filter="saas">SaaS &amp; Web</button>
                <button class="cs-filter-btn" data-filter="mobile">Mobile</button>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         FEATURED — PRIMER ANALYZER
    ═══════════════════════════════════════════════ --}}
    <section class="section-lg cs-featured-section">
        <div class="container">
            <div class="cs-featured-card card" data-reveal="fade-up" data-filter-tags="defense cv">

                <div class="cs-featured-thumb has-image">
                    <img src="{{ asset('images/projects/primer-analyzer.jpg') }}"
                         alt="Primer Analyzer test equipment used for electrical and mechanical testing"
                         width="1200" height="900" loading="lazy">
                    <div class="cs-featured-badge">Featured Project</div>
                </div>

                <div class="cs-featured-body">
                    <div class="cs-card-meta-row">
                        <span class="meta-chip">Defense Test Equipment</span>
                        <span class="meta-chip">Desktop Software</span>
                        <span class="meta-chip">Hardware Integration</span>
                        <span class="cs-card-year">2024</span>
                    </div>

                    <h2 class="cs-featured-title glitch-ready">Primer Analyzer — Test &amp; Reporting System</h2>
                    <p class="cs-featured-desc">
                        A software-assisted test system for primers that performs four electrical
                        tests and one mechanical test, then generates structured reports. The system
                        was delivered for Pakistan Army Ordnance Corps through CARE Lab at The Islamia
                        University of Bahawalpur.
                    </p>

                    <div class="cs-result-pills">
                        <div class="cs-result-pill">
                            <span class="cs-result-num">5</span>
                            <span class="cs-result-text">Test routines</span>
                        </div>
                        <div class="cs-result-pill">
                            <span class="cs-result-num">1</span>
                            <span class="cs-result-text">Reporting workflow</span>
                        </div>
                        <div class="cs-result-pill">
                            <span class="cs-result-num">CARE</span>
                            <span class="cs-result-text">Delivery attribution</span>
                        </div>
                    </div>

                    <div class="cs-tech-stack-row">
                        <span class="cs-stack-label">Stack:</span>
                        <span class="ts-chip">Python</span>
                        <span class="ts-chip">PyQt5</span>
                        <span class="ts-chip">Hardware Comms</span>
                        <span class="ts-chip">Report Generation</span>
                    </div>

                    <div class="cs-featured-actions">
                        <a href="#primer-detail" class="btn btn-primary">
                            Read the Case Study <span aria-hidden="true">↗</span>
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-ghost">
                            Discuss a Similar System
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         CASE STUDY GRID
    ═══════════════════════════════════════════════ --}}
    <section class="section-lg cs-grid-section">
        <div class="container">

            <div class="section-head" data-reveal="fade-up">
                <span class="tag-label">More Work</span>
                <h2 class="glitch-ready">Selected Projects</h2>
                <p class="section-head-sub">
                    A mix of commercial, research, and CARE Lab work. The delivery context is
                    included because it changes what the project actually demonstrates.
                </p>
            </div>

            <div class="cs-grid" id="csGrid" data-stagger>

                {{-- Shell Analyzer --}}
                <article class="cs-card card" data-filter-tags="defense cv" data-reveal="fade-up">
                    <div class="cs-card-thumb has-image">
                        <img src="{{ asset('images/projects/shell-analyzer-dashboard.png') }}"
                             alt="Shell Analyzer inspection dashboard"
                             width="1200" height="640" loading="lazy">
                    </div>
                    <div class="cs-card-body">
                        <div class="cs-card-meta-row">
                            <span class="meta-chip">Defense</span>
                            <span class="meta-chip">Computer Vision</span>
                            <span class="cs-card-year">2024</span>
                        </div>
                        <h3 class="cs-card-title">Shell Analyzer — Corrosion Inspection</h3>
                        <p class="cs-card-desc">
                            Image-processing software that analyses shell surfaces, identifies
                            corrosion types and grades, and produces inspection reports. Delivered
                            for Pakistan Army Ordnance Corps through CARE Lab.
                        </p>
                        <div class="cs-card-outcomes">
                            <span class="cs-outcome"><span class="cs-outcome-num">OpenCV</span> Image analysis</span>
                            <span class="cs-outcome"><span class="cs-outcome-num">CARE</span> Delivery context</span>
                        </div>
                        <div class="cs-card-footer">
                            <div class="cs-card-chips">
                                <span class="ts-chip">Python</span>
                                <span class="ts-chip">OpenCV</span>
                                <span class="ts-chip">PyQt5</span>
                            </div>
                            <a href="{{ route('projects') }}" class="cs-card-link">
                                Project Details <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>
                </article>

                {{-- Christie Battery --}}
                <article class="cs-card card" data-filter-tags="defense" data-reveal="fade-up">
                    <div class="cs-card-thumb has-image">
                        <img src="{{ asset('images/projects/christie-battery-analyzer.jpg') }}"
                             alt="Christie aircraft battery charger and analyzer unit"
                             width="1200" height="900" loading="lazy">
                    </div>
                    <div class="cs-card-body">
                        <div class="cs-card-meta-row">
                            <span class="meta-chip">Defense</span>
                            <span class="meta-chip">Embedded</span>
                            <span class="cs-card-year">2023</span>
                        </div>
                        <h3 class="cs-card-title">Aircraft Battery Charger &amp; Analyzer Upgrade</h3>
                        <p class="cs-card-desc">
                            Rehabilitation of a Christie aircraft battery charger/analyzer with a
                            Raspberry Pi controller, touch display, and monitoring software. Delivered
                            for Pakistan Army Ordnance Corps through CARE Lab.
                        </p>
                        <div class="cs-card-outcomes">
                            <span class="cs-outcome"><span class="cs-outcome-num">Raspberry Pi</span> Controller</span>
                            <span class="cs-outcome"><span class="cs-outcome-num">CARE</span> Delivery context</span>
                        </div>
                        <div class="cs-card-footer">
                            <div class="cs-card-chips">
                                <span class="ts-chip">Python</span>
                                <span class="ts-chip">Raspberry Pi</span>
                                <span class="ts-chip">Touch UI</span>
                            </div>
                            <a href="{{ route('projects') }}" class="cs-card-link">
                                Project Details <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>
                </article>

                {{-- Flock Sense AI --}}
                <article class="cs-card card" data-filter-tags="cv" data-reveal="fade-up">
                    <div class="cs-card-thumb has-image">
                        <img src="{{ asset('images/projects/flock-sense-ai-poultry.jpg') }}"
                             alt="Chicken in a farm environment, representative of the poultry imagery used for weight-estimation research"
                             width="1200" height="800" loading="lazy">
                    </div>
                    <div class="cs-card-body">
                        <div class="cs-card-meta-row">
                            <span class="meta-chip">Computer Vision</span>
                            <span class="meta-chip">Research Contract</span>
                            <span class="cs-card-year">2025</span>
                        </div>
                        <h3 class="cs-card-title">Flock Sense AI — Broiler Weight Estimation</h3>
                        <p class="cs-card-desc">
                            The AI extension of the Flock Sense poultry IoT platform. A data-collection
                            and inference pipeline estimates broiler weight from camera imagery, delivered
                            under a research contract at DeepEmbed Research Lab.
                        </p>
                        <div class="cs-card-outcomes">
                            <span class="cs-outcome"><span class="cs-outcome-num">Python</span> Data pipeline</span>
                            <span class="cs-outcome"><span class="cs-outcome-num">DeepEmbed</span> Contract</span>
                        </div>
                        <div class="cs-card-footer">
                            <div class="cs-card-chips">
                                <span class="ts-chip">Python</span>
                                <span class="ts-chip">OpenCV</span>
                                <span class="ts-chip">Open3D</span>
                            </div>
                            <a href="{{ route('projects') }}" class="cs-card-link">
                                Project Details <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>
                </article>

                {{-- VFD --}}
                <article class="cs-card card" data-filter-tags="defense iot" data-reveal="fade-up">
                    <div class="cs-card-thumb has-image">
                        <img src="{{ asset('images/projects/inverter-ac-repair.jpg') }}"
                             alt="Inverter control board inspected during a VFD repair and testing workflow"
                             width="450" height="600" loading="lazy">
                    </div>
                    <div class="cs-card-body">
                        <div class="cs-card-meta-row">
                            <span class="meta-chip">Firmware</span>
                            <span class="meta-chip">Industrial</span>
                            <span class="cs-card-year">2025</span>
                        </div>
                        <h3 class="cs-card-title">VFD Remote Control System</h3>
                        <p class="cs-card-desc">
                            ESP32 MODBUS firmware, a Laravel backend, and a Flutter client for remote
                            monitoring and control of Variable Frequency Drives in an industrial
                            setting.
                        </p>
                        <div class="cs-card-outcomes">
                            <span class="cs-outcome"><span class="cs-outcome-num">ESP32</span> Edge firmware</span>
                            <span class="cs-outcome"><span class="cs-outcome-num">Flutter</span> Mobile control</span>
                        </div>
                        <div class="cs-card-footer">
                            <div class="cs-card-chips">
                                <span class="ts-chip">ESP32</span>
                                <span class="ts-chip">MODBUS</span>
                                <span class="ts-chip">Laravel</span>
                                <span class="ts-chip">Flutter</span>
                            </div>
                            <a href="{{ route('projects') }}" class="cs-card-link">
                                Project Details <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>
                </article>

                {{-- VibCare / CARE platforms --}}
                <article class="cs-card card" data-filter-tags="iot saas" data-reveal="fade-up">
                    <div class="cs-card-thumb has-image">
                        <img src="{{ asset('images/projects/vibcare-vibration-analysis.jpg') }}"
                             alt="VibCare vibration analysis visualisation"
                             width="1200" height="900" loading="lazy">
                    </div>
                    <div class="cs-card-body">
                        <div class="cs-card-meta-row">
                            <span class="meta-chip">IoT Platforms</span>
                            <span class="meta-chip">CARE Lab</span>
                            <span class="cs-card-year">2023 – 2024</span>
                        </div>
                        <h3 class="cs-card-title">VibCare, PowerEye, Sentron &amp; SolaCon</h3>
                        <p class="cs-card-desc">
                            Contributions to four CARE Lab monitoring platforms: VibCare (vibration
                            diagnostics), PowerEye (energy monitoring), Sentron (sensor monitoring),
                            and SolaCon (solar/VFD automation).
                        </p>
                        <div class="cs-card-outcomes">
                            <span class="cs-outcome"><span class="cs-outcome-num">4</span> Platforms</span>
                            <span class="cs-outcome"><span class="cs-outcome-num">CARE</span> Delivery context</span>
                        </div>
                        <div class="cs-card-footer">
                            <div class="cs-card-chips">
                                <span class="ts-chip">Laravel</span>
                                <span class="ts-chip">MySQL</span>
                                <span class="ts-chip">Flutter</span>
                            </div>
                            <a href="{{ route('projects') }}" class="cs-card-link">
                                Project Details <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>
                </article>

                {{-- RealSense --}}
                <article class="cs-card card" data-filter-tags="cv" data-reveal="fade-up">
                    <div class="cs-card-thumb has-image">
                        <img src="{{ asset('images/projects/rgbd-point-cloud.png') }}"
                             alt="Illustration of an RGB-D point cloud and depth-sensing grid"
                             width="1200" height="800" loading="lazy">
                    </div>
                    <div class="cs-card-body">
                        <div class="cs-card-meta-row">
                            <span class="meta-chip">Computer Vision</span>
                            <span class="meta-chip">R&amp;D</span>
                            <span class="cs-card-year">2025</span>
                        </div>
                        <h3 class="cs-card-title">Intel RealSense RGB-D Pipeline</h3>
                        <p class="cs-card-desc">
                            Python acquisition and streaming pipeline for the Intel RealSense D435i:
                            RGB-D frame capture, point-cloud generation, surface reconstruction, and
                            clustering with OpenCV and Open3D.
                        </p>
                        <div class="cs-card-outcomes">
                            <span class="cs-outcome"><span class="cs-outcome-num">RGB-D</span> Camera capture</span>
                            <span class="cs-outcome"><span class="cs-outcome-num">Open3D</span> Point clouds</span>
                        </div>
                        <div class="cs-card-footer">
                            <div class="cs-card-chips">
                                <span class="ts-chip">Python</span>
                                <span class="ts-chip">OpenCV</span>
                                <span class="ts-chip">Open3D</span>
                                <span class="ts-chip">RealSense SDK</span>
                            </div>
                            <a href="{{ route('projects') }}" class="cs-card-link">
                                Project Details <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>
                </article>

                {{-- Mobile apps --}}
                <article class="cs-card card" data-filter-tags="mobile iot" data-reveal="fade-up">
                    <div class="cs-card-thumb has-image">
                        <img src="{{ asset('images/projects/smart-door-lock.jpg') }}"
                             alt="Smart door lock prototype used in an IoT device-control project"
                             width="1200" height="900" loading="lazy">
                    </div>
                    <div class="cs-card-body">
                        <div class="cs-card-meta-row">
                            <span class="meta-chip">Mobile</span>
                            <span class="meta-chip">IoT</span>
                            <span class="cs-card-year">2023 – 2024</span>
                        </div>
                        <h3 class="cs-card-title">IoT Device Control Mobile Apps</h3>
                        <p class="cs-card-desc">
                            Flutter applications for monitoring and controlling connected devices —
                            including electric bikes, smart water dispensers, and home automation
                            systems — paired with backends for device communication and state.
                        </p>
                        <div class="cs-card-outcomes">
                            <span class="cs-outcome"><span class="cs-outcome-num">Flutter</span> Cross-platform</span>
                            <span class="cs-outcome"><span class="cs-outcome-num">Real-time</span> Device control</span>
                        </div>
                        <div class="cs-card-footer">
                            <div class="cs-card-chips">
                                <span class="ts-chip">Flutter</span>
                                <span class="ts-chip">Dart</span>
                                <span class="ts-chip">REST APIs</span>
                            </div>
                            <a href="{{ route('projects') }}" class="cs-card-link">
                                Project Details <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>
                </article>

                {{-- SaaS --}}
                <article class="cs-card card" data-filter-tags="saas cloud" data-reveal="fade-up">
                    <div class="cs-card-thumb has-image">
                        <img src="{{ asset('images/projects/saas-server-infrastructure.jpg') }}"
                             alt="Server infrastructure representing multi-tenant SaaS backend work"
                             width="1200" height="800" loading="lazy">
                    </div>
                    <div class="cs-card-body">
                        <div class="cs-card-meta-row">
                            <span class="meta-chip">SaaS</span>
                            <span class="meta-chip">Platform Engineering</span>
                            <span class="cs-card-year">2023 – 2024</span>
                        </div>
                        <h3 class="cs-card-title">Multi-Tenant SaaS Platform Work</h3>
                        <p class="cs-card-desc">
                            Backend work across five SaaS platforms: tenant isolation, role-based
                            access, Stripe subscriptions, OTA update management, and time-series
                            aggregation for connected devices.
                        </p>
                        <div class="cs-card-outcomes">
                            <span class="cs-outcome"><span class="cs-outcome-num">5</span> Platforms</span>
                            <span class="cs-outcome"><span class="cs-outcome-num">Laravel</span> Backend</span>
                        </div>
                        <div class="cs-card-footer">
                            <div class="cs-card-chips">
                                <span class="ts-chip">Laravel</span>
                                <span class="ts-chip">Stripe</span>
                                <span class="ts-chip">MySQL</span>
                                <span class="ts-chip">AWS</span>
                            </div>
                            <a href="{{ route('projects') }}" class="cs-card-link">
                                Project Details <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>
                </article>

            </div>{{-- /cs-grid --}}

            {{-- No results state (shown by JS when filter returns nothing) --}}
            <div class="cs-no-results" id="csNoResults" style="display:none;">
                <span class="cs-no-results-icon" aria-hidden="true">🔭</span>
                <p>No case studies match that filter yet.</p>
                <a href="{{ route('contact') }}" class="btn btn-ghost">Discuss Your Project</a>
            </div>

        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         DEEP DIVE — PRIMER ANALYZER
    ═══════════════════════════════════════════════ --}}
    <section class="section-lg section-alt cs-detail-section" id="primer-detail">
        <div class="container">

            <div class="cs-detail-header" data-reveal="fade-up">
                <span class="tag-label">Deep Dive</span>
                <h2 class="glitch-ready">Primer Analyzer — Full Case Study</h2>
            </div>

            <div class="cs-detail-grid">

                {{-- Left: narrative --}}
                <div class="cs-detail-narrative" data-reveal="fade-right">

                    <div class="cs-detail-block">
                        <h3 class="cs-detail-h3">The Problem</h3>
                        <p>
                            Defense test workflows depend on repeatable measurements and consistent
                            reporting. When test steps are performed manually, results are harder to
                            compare across batches and harder to audit later. The Primer Analyzer was
                            built to give operators a guided sequence for five tests and a structured
                            report at the end.
                        </p>
                    </div>

                    <div class="cs-detail-block">
                        <h3 class="cs-detail-h3">The Approach</h3>
                        <p>
                            The system is a desktop application that communicates with the test
                            hardware, runs the required test routines, and records the results. The
                            scope covered four electrical tests and one mechanical test.
                        </p>
                        <ul class="cs-detail-list">
                            <li>Desktop operator interface built with Python and PyQt5.</li>
                            <li>Hardware communication for test execution and result capture.</li>
                            <li>Four electrical test routines and one mechanical test routine.</li>
                            <li>Structured report generation from the captured results.</li>
                            <li>Delivered through CARE Lab for Pakistan Army Ordnance Corps.</li>
                        </ul>
                    </div>

                    <div class="cs-detail-block">
                        <h3 class="cs-detail-h3">The Outcome</h3>
                        <p>
                            The Primer Analyzer was delivered as a working test and reporting system.
                            It gives operators a defined test sequence and produces a report from the
                            captured measurements. The project is presented here as CARE Lab work;
                            the client relationship belongs to CARE Lab, not Cosmos Algos.
                        </p>
                    </div>

                </div>

                {{-- Right: sidebar --}}
                <aside class="cs-detail-sidebar" data-reveal="fade-left">

                    <div class="cs-sidebar-block card">
                        <h3 class="cs-sidebar-title">Project Snapshot</h3>
                        <dl class="cs-snapshot-list">
                            <div class="cs-snapshot-row">
                                <dt>Client</dt>
                                <dd>Pakistan Army Ordnance Corps (via CARE Lab)</dd>
                            </div>
                            <div class="cs-snapshot-row">
                                <dt>Platform</dt>
                                <dd>Desktop test &amp; reporting software</dd>
                            </div>
                            <div class="cs-snapshot-row">
                                <dt>Role</dt>
                                <dd>Software development</dd>
                            </div>
                            <div class="cs-snapshot-row">
                                <dt>Status</dt>
                                <dd>Delivered, 2024</dd>
                            </div>
                            <div class="cs-snapshot-row">
                                <dt>Region</dt>
                                <dd>Pakistan</dd>
                            </div>
                        </dl>
                    </div>

                    <div class="cs-sidebar-block card">
                        <h3 class="cs-sidebar-title">Technology Stack</h3>
                        <div class="cs-sidebar-chips">
                            <span class="ts-chip">Python</span>
                            <span class="ts-chip">PyQt5</span>
                            <span class="ts-chip">Hardware Comms</span>
                            <span class="ts-chip">Report Generation</span>
                        </div>
                    </div>

                    <div class="cs-sidebar-block card">
                        <h3 class="cs-sidebar-title">Attribution Note</h3>
                        <p style="color:var(--muted);font-size:.85rem;line-height:1.65;margin:0;">
                            This project was delivered through the Center of Automation, Robotics
                            &amp; Embedded Systems (CARE Lab) at The Islamia University of Bahawalpur.
                            Cosmos Algos does not claim the client relationship as its own.
                        </p>
                    </div>

                    <a href="{{ route('contact') }}" class="btn btn-primary btn-full" style="text-align:center;">
                        Discuss a Similar System <span aria-hidden="true">↗</span>
                    </a>

                </aside>

            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         PROCESS
    ═══════════════════════════════════════════════ --}}
    <section class="section-lg cs-process-section">
        <div class="container">
            <div class="section-head-center" data-reveal="fade-up">
                <span class="tag-label">How We Work</span>
                <h2 class="glitch-ready">A Practical Delivery Process</h2>
                <p class="section-head-sub">
                    A general description of how an engagement is run — not a claim that every
                    project used an identical process.
                </p>
            </div>

            <div class="cs-process-grid" data-stagger>
                <div class="cs-process-step card">
                    <div class="cs-process-num">01</div>
                    <div class="cs-process-icon" aria-hidden="true">🔍</div>
                    <h3>Discovery &amp; Scoping</h3>
                    <p>We define the problem, the constraints, and the riskiest assumptions before committing to a build.</p>
                </div>
                <div class="cs-process-step card">
                    <div class="cs-process-num">02</div>
                    <div class="cs-process-icon" aria-hidden="true">🏗️</div>
                    <h3>Architecture &amp; Design</h3>
                    <p>System boundaries, data flows, interfaces, and the hardware/software split are agreed early.</p>
                </div>
                <div class="cs-process-step card">
                    <div class="cs-process-num">03</div>
                    <div class="cs-process-icon" aria-hidden="true">🔧</div>
                    <h3>Iterative Build</h3>
                    <p>Work is delivered in reviewable increments, with demos and written status where the engagement allows.</p>
                </div>
                <div class="cs-process-step card">
                    <div class="cs-process-num">04</div>
                    <div class="cs-process-icon" aria-hidden="true">🚀</div>
                    <h3>Handover</h3>
                    <p>Deployment, documentation, and an agreed support window. The goal is a system the client can operate.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         ATTRIBUTION & EVIDENCE
    ═══════════════════════════════════════════════ --}}
    <section class="section-lg section-alt cs-testimonials-section">
        <div class="container">
            <div class="section-head-center" data-reveal="fade-up">
                <span class="tag-label">Attribution &amp; Evidence</span>
                <h2 class="glitch-ready">Who Delivered What</h2>
                <p class="section-head-sub">
                    We do not publish invented testimonials. Here is what can be verified instead.
                </p>
            </div>

            <div class="cs-testimonial-grid" data-stagger>

                <div class="cs-testimonial-card card">
                    <div class="cs-testi-stars" aria-hidden="true">CARE</div>
                    <blockquote class="cs-testi-quote">
                        Defense and industrial projects shown here were delivered through CARE Lab
                        at The Islamia University of Bahawalpur. The client relationships belong to
                        CARE Lab.
                    </blockquote>
                    <div class="cs-testi-author">
                        <div class="cs-testi-avatar" aria-hidden="true">CL</div>
                        <div>
                            <strong>CARE Lab</strong>
                            <span>Center of Automation, Robotics &amp; Embedded Systems</span>
                        </div>
                    </div>
                </div>

                <div class="cs-testimonial-card card">
                    <div class="cs-testi-stars" aria-hidden="true">R&amp;D</div>
                    <blockquote class="cs-testi-quote">
                        Flock Sense AI was delivered as an extension of the Flock Sense platform under
                        a research contract at DeepEmbed Research Lab (July–August 2025). It is an AI
                        research pipeline, not a client SaaS deployment.
                    </blockquote>
                    <div class="cs-testi-author">
                        <div class="cs-testi-avatar" aria-hidden="true">DE</div>
                        <div>
                            <strong>DeepEmbed Research Lab</strong>
                            <span>Research contract</span>
                        </div>
                    </div>
                </div>

                <div class="cs-testimonial-card card">
                    <div class="cs-testi-stars" aria-hidden="true">REF</div>
                    <blockquote class="cs-testi-quote">
                        Need a reference? We will ask a past client whether they are willing to
                        speak with you. Their consent comes first, and their contact details are
                        not shared without it.
                    </blockquote>
                    <div class="cs-testi-author">
                        <div class="cs-testi-avatar" aria-hidden="true">→</div>
                        <div>
                            <strong>Reference Requests</strong>
                            <span><a href="{{ route('testimonials') }}" class="contact-link">How references work →</a></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         BOTTOM CTA
    ═══════════════════════════════════════════════ --}}
    <section class="section-lg cs-cta-section">
        <div class="container">
            <div class="cs-cta-inner" data-reveal="zoom-in">
                <div class="cs-cta-orb" aria-hidden="true"></div>
                <span class="tag-label">Start Your Project</span>
                <h2 class="cs-cta-h2 glitch-ready">Tell Us About the Problem</h2>
                <p class="cs-cta-sub">
                    We will scope it, identify the technical risks, and tell you honestly whether
                    we are the right fit.
                </p>
                <div class="cs-cta-actions">
                    <a href="{{ route('contact') }}" class="btn btn-primary">
                        Start a Conversation <span aria-hidden="true">↗</span>
                    </a>
                    <a href="{{ route('services') }}" class="btn btn-ghost">
                        Explore Our Services
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        (function () {
            'use strict';

            /* ── Filter logic ─────────────────────────────── */
            const filterBtns = document.querySelectorAll('.cs-filter-btn');
            const cards      = document.querySelectorAll('#csGrid [data-filter-tags]');
            const noResults  = document.getElementById('csNoResults');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', function () {
                    filterBtns.forEach(b => b.classList.remove('is-active'));
                    this.classList.add('is-active');

                    const filter = this.dataset.filter;
                    let visible = 0;

                    cards.forEach(card => {
                        const tags = (card.dataset.filterTags || '').split(' ');
                        const show = filter === 'all' || tags.includes(filter);
                        card.style.display = show ? '' : 'none';
                        if (show) visible++;
                    });

                    if (noResults) noResults.style.display = visible === 0 ? 'flex' : 'none';
                });
            });

        })();
    </script>
@endpush
