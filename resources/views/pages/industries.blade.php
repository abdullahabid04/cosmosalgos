@extends('layouts.app')

@section('title', 'Industries We Serve | Cosmos Algos')
@section('meta_description', 'Cosmos Algos delivers AI, IoT, SaaS, and embedded systems work across agriculture, industrial automation, research, logistics, energy, consumer IoT, mobility, and technology products.')

@section('content')

    {{-- ═══════════════════════════════════
         HERO
    ═══════════════════════════════════ --}}
    <section class="page-hero" id="industries-hero">
        <div class="page-hero-bg" aria-hidden="true">
            <div class="hero-orb hero-orb-1"></div>
            <div class="hero-orb hero-orb-2"></div>
        </div>
        <div class="container">
            <span class="tag-label">Where We Operate</span>
            <h1 class="page-hero-title">Industries We <span class="hero-h1-accent">Serve</span></h1>
            <p class="lead" style="max-width:620px;margin-top:1.2rem;">
                We build domain-specific software, IoT infrastructure, and applied AI for
                sectors where the system has to work reliably outside a demo.
            </p>
        </div>
    </section>

    {{-- ═══════════════════════════════════
         INTRO STRIP
    ═══════════════════════════════════ --}}
    <section class="section section-alt section-sm">
        <div class="container">
            <div class="ind-intro-row" data-stagger>
                <div class="ind-intro-stat">
                    <span class="ind-intro-value">
                        <span class="ind-intro-num num" data-target="{{ $stats['industries'] }}">0</span>
                    </span>
                    <span class="ind-intro-label">Industries Served</span>
                </div>
                <div class="ind-intro-divider"></div>
                <div class="ind-intro-stat">
                    <span class="ind-intro-value">
                        <span class="ind-intro-num num" data-target="{{ $stats['projects'] }}">0</span><span class="ind-intro-unit" aria-hidden="true">+</span>
                    </span>
                    <span class="ind-intro-label">Projects &amp; Engagements</span>
                </div>
                <div class="ind-intro-divider"></div>
                <div class="ind-intro-stat">
                    <span class="ind-intro-value">
                        <span class="ind-intro-num num" data-target="{{ $stats['years_experience'] }}">0</span>
                    </span>
                    <span class="ind-intro-label">Years of Cross-Industry Work</span>
                </div>
                <div class="ind-intro-divider"></div>
                <div class="ind-intro-stat">
                    <span class="ind-intro-value">
                        <span class="ind-intro-num num" data-target="{{ $stats['care_rnd_projects'] }}">0</span>
                    </span>
                    <span class="ind-intro-label">CARE Lab R&amp;D Projects</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════
         INDUSTRY CARDS
    ═══════════════════════════════════ --}}
    <section class="section section-lg">
        <div class="container">
            <div class="section-head" data-reveal="up">
                <span class="tag-label">Sector Focus</span>
                <h2>Built for Your Industry</h2>
            </div>

            <div class="ind-cards-grid" data-reveal-group>

                {{-- Agriculture & Poultry --}}
                <div class="ind-card card">
                    <div class="ind-card-icon-wrap">
                        <span class="ind-card-icon">🌾</span>
                        <div class="ind-card-orb"></div>
                    </div>
                    <div class="ind-card-body">
                        <h3 class="ind-card-title">Agriculture & Poultry</h3>
                        <p class="ind-card-desc">
                            IoT-connected farm monitoring, AI-assisted broiler weight estimation,
                            real-time sensor telemetry, and climate monitoring for agricultural operations.
                        </p>
                        <div class="ind-card-solutions">
                            <span>Farm IoT SaaS</span>
                            <span>Weight Estimation</span>
                            <span>Climate Monitoring</span>
                            <span>Remote Sensors</span>
                        </div>
                    </div>
                    <div class="ind-card-accent"></div>
                </div>

                {{-- Industrial Automation --}}
                <div class="ind-card card">
                    <div class="ind-card-icon-wrap">
                        <span class="ind-card-icon">⚙️</span>
                        <div class="ind-card-orb"></div>
                    </div>
                    <div class="ind-card-body">
                        <h3 class="ind-card-title">Industrial Automation</h3>
                        <p class="ind-card-desc">
                            Desktop control software, automated test rigs, embedded hardware integrations,
                            and remote drive control systems for manufacturing and industrial environments.
                        </p>
                        <div class="ind-card-solutions">
                            <span>Test Automation</span>
                            <span>VFD Control</span>
                            <span>MODBUS Integration</span>
                            <span>Equipment Monitoring</span>
                        </div>
                    </div>
                    <div class="ind-card-accent"></div>
                </div>

                {{-- Research & Academic Labs --}}
                <div class="ind-card card">
                    <div class="ind-card-icon-wrap">
                        <span class="ind-card-icon">🔬</span>
                        <div class="ind-card-orb"></div>
                    </div>
                    <div class="ind-card-body">
                        <h3 class="ind-card-title">Research &amp; Academic Labs</h3>
                        <p class="ind-card-desc">
                            Data acquisition pipelines, RGB-D imaging systems, analysis tooling,
                            and research software for academic and industrial labs — including
                            CARE Lab collaborations.
                        </p>
                        <div class="ind-card-solutions">
                            <span>Data Acquisition</span>
                            <span>RGB-D Imaging</span>
                            <span>Analysis Tooling</span>
                            <span>Research Pipelines</span>
                        </div>
                    </div>
                    <div class="ind-card-accent"></div>
                </div>

                {{-- Logistics & Port Management --}}
                <div class="ind-card card">
                    <div class="ind-card-icon-wrap">
                        <span class="ind-card-icon">🚢</span>
                        <div class="ind-card-orb"></div>
                    </div>
                    <div class="ind-card-body">
                        <h3 class="ind-card-title">Logistics & Port Management</h3>
                        <p class="ind-card-desc">
                            SaaS platforms for logistics workflow automation, port operations management,
                            entity tracking, and backend API infrastructure for complex supply chains.
                        </p>
                        <div class="ind-card-solutions">
                            <span>Logistics SaaS</span>
                            <span>Port Operations</span>
                            <span>Workflow APIs</span>
                            <span>Entity Management</span>
                        </div>
                    </div>
                    <div class="ind-card-accent"></div>
                </div>

                {{-- Energy & Utilities --}}
                <div class="ind-card card">
                    <div class="ind-card-icon-wrap">
                        <span class="ind-card-icon">⚡</span>
                        <div class="ind-card-orb"></div>
                    </div>
                    <div class="ind-card-body">
                        <h3 class="ind-card-title">Energy & Utilities</h3>
                        <p class="ind-card-desc">
                            Battery health monitoring systems, charging management software, power signal
                            visualization tools, and IoT telemetry for energy infrastructure.
                        </p>
                        <div class="ind-card-solutions">
                            <span>Battery Monitoring</span>
                            <span>Signal Visualization</span>
                            <span>Energy IoT</span>
                            <span>Charging Automation</span>
                        </div>
                    </div>
                    <div class="ind-card-accent"></div>
                </div>

                {{-- Smart Home & Consumer IoT --}}
                <div class="ind-card card">
                    <div class="ind-card-icon-wrap">
                        <span class="ind-card-icon">🏠</span>
                        <div class="ind-card-orb"></div>
                    </div>
                    <div class="ind-card-body">
                        <h3 class="ind-card-title">Smart Home & Consumer IoT</h3>
                        <p class="ind-card-desc">
                            Mobile apps for home automation, smart appliance control, water dispensers,
                            and connected consumer devices with real-time monitoring and remote access.
                        </p>
                        <div class="ind-card-solutions">
                            <span>Home Automation</span>
                            <span>Mobile Control Apps</span>
                            <span>Smart Devices</span>
                            <span>Real-time Monitoring</span>
                        </div>
                    </div>
                    <div class="ind-card-accent"></div>
                </div>

                {{-- Transport & Mobility --}}
                <div class="ind-card card">
                    <div class="ind-card-icon-wrap">
                        <span class="ind-card-icon">🚲</span>
                        <div class="ind-card-orb"></div>
                    </div>
                    <div class="ind-card-body">
                        <h3 class="ind-card-title">Transport & Mobility</h3>
                        <p class="ind-card-desc">
                            IoT-connected electric vehicle monitoring, real-time telemetry apps,
                            remote control systems, and embedded firmware for mobility hardware.
                        </p>
                        <div class="ind-card-solutions">
                            <span>EV Monitoring</span>
                            <span>EV Telemetry</span>
                            <span>Flutter Apps</span>
                            <span>Embedded Firmware</span>
                        </div>
                    </div>
                    <div class="ind-card-accent"></div>
                </div>

                {{-- SaaS & Tech Products --}}
                <div class="ind-card card">
                    <div class="ind-card-icon-wrap">
                        <span class="ind-card-icon">☁️</span>
                        <div class="ind-card-orb"></div>
                    </div>
                    <div class="ind-card-body">
                        <h3 class="ind-card-title">SaaS & Technology Products</h3>
                        <p class="ind-card-desc">
                            SaaS platform engineering — from backend APIs and device management
                            to Stripe billing, OTA firmware updates, and multi-tenant architecture.
                        </p>
                        <div class="ind-card-solutions">
                            <span>Multi-tenant SaaS</span>
                            <span>Stripe Billing</span>
                            <span>OTA Updates</span>
                            <span>AWS Cloud APIs</span>
                        </div>
                    </div>
                    <div class="ind-card-accent"></div>
                </div>

            </div>{{-- /ind-cards-grid --}}
        </div>
    </section>

    {{-- ═══════════════════════════════════
         HOW WE APPROACH EACH INDUSTRY
    ═══════════════════════════════════ --}}
    <section class="section section-alt section-lg" data-reveal="up">
        <div class="container">
            <div class="section-head-center">
                <span class="tag-label">Our Process</span>
                <h2>How We Enter a New Industry</h2>
                <p class="section-subhead">The same general approach, adapted to the domain's actual constraints.</p>
            </div>

            <div class="ind-process-row" data-reveal-group>
                <div class="ind-process-step">
                    <div class="ind-process-num">01</div>
                    <h3>Domain Research</h3>
                    <p>We study your industry's workflows, regulations, and technical constraints before writing a single line of code.</p>
                </div>
                <div class="ind-process-arrow">→</div>
                <div class="ind-process-step">
                    <div class="ind-process-num">02</div>
                    <h3>Solution Mapping</h3>
                    <p>We map your problem to the right technology stack — not the trendy one, the appropriate one.</p>
                </div>
                <div class="ind-process-arrow">→</div>
                <div class="ind-process-step">
                    <div class="ind-process-num">03</div>
                    <h3>Build & Integrate</h3>
                    <p>We build, integrate with your existing systems, and test against real-world conditions in your environment.</p>
                </div>
                <div class="ind-process-arrow">→</div>
                <div class="ind-process-step">
                    <div class="ind-process-num">04</div>
                    <h3>Handover &amp; Support</h3>
                    <p>Delivery includes documentation and an agreed support window; ongoing work can be arranged separately.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════
         CTA
    ═══════════════════════════════════ --}}
    <section class="section section-lg" data-reveal="up">
        <div class="container">
            <div class="proj-cta-block card">
                <div class="proj-cta-glow" aria-hidden="true"></div>
                <span class="tag-label">Work With Us</span>
                <h2>Don't See Your Industry?</h2>
                <p>If your problem involves software, connected hardware, or automation, tell us about it. We will tell you honestly whether it fits our experience.</p>
                <div class="hero-cta-row" style="justify-content:center;margin-top:2rem;">
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
            /* Counter animation */
            function animateCount(el) {
                const target = parseInt(el.dataset.target, 10);
                const start  = performance.now();
                (function step(now) {
                    const p = Math.min((now - start) / 1500, 1);
                    const e = 1 - Math.pow(1 - p, 3);
                    el.textContent = Math.round(e * target);
                    if (p < 1) requestAnimationFrame(step);
                })(start);
            }
            /* Scroll reveal */
            const io = new IntersectionObserver(entries => {
                entries.forEach(en => {
                    if (!en.isIntersecting) return;
                    const el = en.target;
                    el.classList.add('is-visible');
                    el.querySelectorAll('.num').forEach(animateCount);
                    io.unobserve(el);
                });
            }, { threshold: 0.10 });
            document.querySelectorAll('[data-reveal], [data-reveal-group]').forEach(el => io.observe(el));
        })();
    </script>
@endpush
