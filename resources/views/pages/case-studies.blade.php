@extends('layouts.app')

@section('title', 'Case Studies — ' . $company['name'])
@section('meta_description', 'Explore real-world projects built by Cosmos Algos — from cognitive IoT systems and AI-powered firmware to SaaS platforms and embedded intelligence. Results, not promises.')
@section('og_title', 'Case Studies — Cosmos Algos')
@section('og_description', 'Deep dives into our most impactful projects. Real problems. Real solutions. Real outcomes.')

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
                    Real Problems.<br>
                    <span class="cs-h1-accent">Real Solutions.</span>
                </h1>
                <p class="cs-hero-sub">We don't just ship code — we engineer outcomes. Each project below is a deep dive into a challenge we solved, the technology we chose, and the measurable results we delivered.</p>

                <div class="cs-hero-stats" data-stagger>
                    <div class="cs-hero-stat">
                        <span class="num cs-stat-num">40</span><span class="cs-stat-unit">+</span>
                        <span class="cs-stat-label">Projects Shipped</span>
                    </div>
                    <div class="cs-hero-stat-divider" aria-hidden="true"></div>
                    <div class="cs-hero-stat">
                        <span class="num cs-stat-num">12</span><span class="cs-stat-unit">+</span>
                        <span class="cs-stat-label">Industries Served</span>
                    </div>
                    <div class="cs-hero-stat-divider" aria-hidden="true"></div>
                    <div class="cs-hero-stat">
                        <span class="num cs-stat-num">98</span><span class="cs-stat-unit">%</span>
                        <span class="cs-stat-label">Client Satisfaction</span>
                    </div>
                    <div class="cs-hero-stat-divider" aria-hidden="true"></div>
                    <div class="cs-hero-stat">
                        <span class="num cs-stat-num">5</span><span class="cs-stat-unit">+</span>
                        <span class="cs-stat-label">Countries Reached</span>
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
                <button class="cs-filter-btn is-active" data-filter="all">All Projects</button>
                <button class="cs-filter-btn" data-filter="iot">IoT Systems</button>
                <button class="cs-filter-btn" data-filter="ai-ml">AI / ML</button>
                <button class="cs-filter-btn" data-filter="firmware">Firmware</button>
                <button class="cs-filter-btn" data-filter="cloud">Cloud & SaaS</button>
                <button class="cs-filter-btn" data-filter="mobile">Mobile</button>
                <button class="cs-filter-btn" data-filter="web">Web Apps</button>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         FEATURED — FLUXSENSE (Full-width hero card)
    ═══════════════════════════════════════════════ --}}
    <section class="section-lg cs-featured-section">
        <div class="container">
            <div class="cs-featured-card card" data-reveal="fade-up" data-filter-tags="iot ai-ml">

                <div class="cs-featured-thumb">
                    {{-- Replace with: <img src="{{ asset('images/case-fluxsense.webp') }}" alt="FluxSense Smart Agriculture Dashboard"> --}}
                    <div class="cs-thumb-placeholder cs-thumb-fluxsense">
                        <span class="cs-thumb-icon" aria-hidden="true">🌾</span>
                        <span class="cs-thumb-label">Smart Agriculture Platform</span>
                    </div>
                    <div class="cs-featured-badge">Featured Project</div>
                </div>

                <div class="cs-featured-body">
                    <div class="cs-card-meta-row">
                        <span class="meta-chip">IoT Systems</span>
                        <span class="meta-chip">AI / ML</span>
                        <span class="meta-chip">Cloud</span>
                        <span class="cs-card-year">2024</span>
                    </div>

                    <h2 class="cs-featured-title glitch-ready">FluxSense — Cognitive IoT Platform for Precision Agriculture</h2>
                    <p class="cs-featured-desc">A Pakistani agri-tech startup needed to move beyond manual crop monitoring. We designed and built FluxSense: a full-stack IoT platform with edge-AI sensors, MQTT telemetry, and a real-time ML inference engine that predicts soil health, irrigation need, and pest risk — all visible through a single farmer-facing dashboard.</p>

                    <div class="cs-result-pills">
                        <div class="cs-result-pill">
                            <span class="cs-result-num">34<span class="cs-result-unit">%</span></span>
                            <span class="cs-result-text">Reduction in water usage</span>
                        </div>
                        <div class="cs-result-pill">
                            <span class="cs-result-num">2.1<span class="cs-result-unit">×</span></span>
                            <span class="cs-result-text">Crop yield improvement</span>
                        </div>
                        <div class="cs-result-pill">
                            <span class="cs-result-num">99<span class="cs-result-unit">%</span></span>
                            <span class="cs-result-text">Sensor uptime over 6 months</span>
                        </div>
                    </div>

                    <div class="cs-tech-stack-row">
                        <span class="cs-stack-label">Stack:</span>
                        <span class="ts-chip">ESP32</span>
                        <span class="ts-chip">MQTT</span>
                        <span class="ts-chip">Python</span>
                        <span class="ts-chip">TensorFlow Lite</span>
                        <span class="ts-chip">Laravel</span>
                        <span class="ts-chip">AWS IoT Core</span>
                        <span class="ts-chip">React</span>
                    </div>

                    <div class="cs-featured-actions">
                        <a href="#fluxsense-detail" class="btn btn-primary">
                            Read Full Case Study <span aria-hidden="true">↗</span>
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-ghost">
                            Start a Similar Project
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         CASE STUDY GRID — All Projects
    ═══════════════════════════════════════════════ --}}
    <section class="section-lg cs-grid-section">
        <div class="container">

            <div class="section-head" data-reveal="fade-up">
                <span class="tag-label">All Projects</span>
                <h2 class="glitch-ready">The Work That Defines Us</h2>
                <p class="section-head-sub">Every project in this grid is a problem that kept someone up at night — until we solved it.</p>
            </div>

            <div class="cs-grid" id="csGrid" data-stagger>

                {{-- CARD 1: VFD Control System --}}
                <article class="cs-card card" data-filter-tags="firmware iot" data-reveal="fade-up">
                    <div class="cs-card-thumb cs-thumb-vfd">
                        {{-- Replace: <img src="{{ asset('images/case-vfd.webp') }}" alt="VFD Control System"> --}}
                        <span class="cs-thumb-icon" aria-hidden="true">⚙️</span>
                    </div>
                    <div class="cs-card-body">
                        <div class="cs-card-meta-row">
                            <span class="meta-chip">Firmware</span>
                            <span class="meta-chip">IoT</span>
                            <span class="cs-card-year">2024</span>
                        </div>
                        <h3 class="cs-card-title">VFD Motor Intelligence — Predictive Fault Detection</h3>
                        <p class="cs-card-desc">Embedded a real-time vibration analysis model into STM32-based variable frequency drives. Fault warnings now appear 48 hours before mechanical failure.</p>
                        <div class="cs-card-outcomes">
                            <span class="cs-outcome"><span class="cs-outcome-num">48h</span> Early fault warning</span>
                            <span class="cs-outcome"><span class="cs-outcome-num">60%</span> Less downtime</span>
                        </div>
                        <div class="cs-card-footer">
                            <div class="cs-card-chips">
                                <span class="ts-chip">STM32</span>
                                <span class="ts-chip">C/C++</span>
                                <span class="ts-chip">DSP</span>
                            </div>
                            <a href="#vfd-detail" class="cs-card-link">
                                View Case <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>
                </article>

                {{-- CARD 2: SaaS Analytics Platform --}}
                <article class="cs-card card" data-filter-tags="cloud ai-ml web" data-reveal="fade-up">
                    <div class="cs-card-thumb cs-thumb-saas">
                        <span class="cs-thumb-icon" aria-hidden="true">📊</span>
                    </div>
                    <div class="cs-card-body">
                        <div class="cs-card-meta-row">
                            <span class="meta-chip">Cloud & SaaS</span>
                            <span class="meta-chip">AI / ML</span>
                            <span class="cs-card-year">2023</span>
                        </div>
                        <h3 class="cs-card-title">PulseBoard — Real-Time Business Intelligence SaaS</h3>
                        <p class="cs-card-desc">Built a multi-tenant analytics SaaS for e-commerce brands. Ingests Shopify + custom APIs, runs ML anomaly detection, and visualises KPIs with sub-second latency.</p>
                        <div class="cs-card-outcomes">
                            <span class="cs-outcome"><span class="cs-outcome-num">12ms</span> P95 dashboard load</span>
                            <span class="cs-outcome"><span class="cs-outcome-num">3×</span> Revenue insights speed</span>
                        </div>
                        <div class="cs-card-footer">
                            <div class="cs-card-chips">
                                <span class="ts-chip">Laravel</span>
                                <span class="ts-chip">Python</span>
                                <span class="ts-chip">AWS</span>
                            </div>
                            <a href="#pulseboard-detail" class="cs-card-link">
                                View Case <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>
                </article>

                {{-- CARD 3: Mobile Health App --}}
                <article class="cs-card card" data-filter-tags="mobile ai-ml" data-reveal="fade-up">
                    <div class="cs-card-thumb cs-thumb-health">
                        <span class="cs-thumb-icon" aria-hidden="true">🩺</span>
                    </div>
                    <div class="cs-card-body">
                        <div class="cs-card-meta-row">
                            <span class="meta-chip">Mobile</span>
                            <span class="meta-chip">AI / ML</span>
                            <span class="cs-card-year">2023</span>
                        </div>
                        <h3 class="cs-card-title">MediTrack — AI-Assisted Patient Monitoring App</h3>
                        <p class="cs-card-desc">Cross-platform mobile app for a private clinic network. Wearable data feeds an on-device ML model for early deterioration alerts, with offline-first architecture for low-connectivity environments.</p>
                        <div class="cs-card-outcomes">
                            <span class="cs-outcome"><span class="cs-outcome-num">4.8★</span> App Store rating</span>
                            <span class="cs-outcome"><span class="cs-outcome-num">22%</span> Faster triage time</span>
                        </div>
                        <div class="cs-card-footer">
                            <div class="cs-card-chips">
                                <span class="ts-chip">Flutter</span>
                                <span class="ts-chip">TFLite</span>
                                <span class="ts-chip">Firebase</span>
                            </div>
                            <a href="#meditrack-detail" class="cs-card-link">
                                View Case <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>
                </article>

                {{-- CARD 4: Smart Grid Monitoring --}}
                <article class="cs-card card" data-filter-tags="iot firmware cloud" data-reveal="fade-up">
                    <div class="cs-card-thumb cs-thumb-grid">
                        <span class="cs-thumb-icon" aria-hidden="true">⚡</span>
                    </div>
                    <div class="cs-card-body">
                        <div class="cs-card-meta-row">
                            <span class="meta-chip">IoT Systems</span>
                            <span class="meta-chip">Cloud</span>
                            <span class="cs-card-year">2023</span>
                        </div>
                        <h3 class="cs-card-title">GridWatch — Smart Energy Monitoring Network</h3>
                        <p class="cs-card-desc">Deployed 200+ edge nodes across a regional utility's distribution network. Each node streams power quality data to a central cloud dashboard with automated anomaly reporting.</p>
                        <div class="cs-card-outcomes">
                            <span class="cs-outcome"><span class="cs-outcome-num">200+</span> Edge nodes live</span>
                            <span class="cs-outcome"><span class="cs-outcome-num">18%</span> Fault resolution speed</span>
                        </div>
                        <div class="cs-card-footer">
                            <div class="cs-card-chips">
                                <span class="ts-chip">ESP32</span>
                                <span class="ts-chip">LoRaWAN</span>
                                <span class="ts-chip">Node.js</span>
                            </div>
                            <a href="#gridwatch-detail" class="cs-card-link">
                                View Case <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>
                </article>

                {{-- CARD 5: E-commerce Web App --}}
                <article class="cs-card card" data-filter-tags="web cloud" data-reveal="fade-up">
                    <div class="cs-card-thumb cs-thumb-ecom">
                        <span class="cs-thumb-icon" aria-hidden="true">🛒</span>
                    </div>
                    <div class="cs-card-body">
                        <div class="cs-card-meta-row">
                            <span class="meta-chip">Web Apps</span>
                            <span class="meta-chip">Cloud & SaaS</span>
                            <span class="cs-card-year">2022</span>
                        </div>
                        <h3 class="cs-card-title">NestMart — High-Performance Multi-Vendor Marketplace</h3>
                        <p class="cs-card-desc">Built a scalable multi-vendor marketplace from scratch for a Middle East retail group. Handles 50k+ daily sessions with a sub-200ms TTFB, full payment gateway integration, and Arabic RTL support.</p>
                        <div class="cs-card-outcomes">
                            <span class="cs-outcome"><span class="cs-outcome-num">50k+</span> Daily active sessions</span>
                            <span class="cs-outcome"><span class="cs-outcome-num">190ms</span> Average TTFB</span>
                        </div>
                        <div class="cs-card-footer">
                            <div class="cs-card-chips">
                                <span class="ts-chip">Laravel</span>
                                <span class="ts-chip">Vue.js</span>
                                <span class="ts-chip">Redis</span>
                            </div>
                            <a href="#nestmart-detail" class="cs-card-link">
                                View Case <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>
                </article>

                {{-- CARD 6: R&D Firmware --}}
                <article class="cs-card card" data-filter-tags="firmware ai-ml" data-reveal="fade-up">
                    <div class="cs-card-thumb cs-thumb-rd">
                        <span class="cs-thumb-icon" aria-hidden="true">🔬</span>
                    </div>
                    <div class="cs-card-body">
                        <div class="cs-card-meta-row">
                            <span class="meta-chip">Firmware</span>
                            <span class="meta-chip">AI / ML</span>
                            <span class="cs-card-year">2022</span>
                        </div>
                        <h3 class="cs-card-title">AeroSense — On-Device Air Quality Classification</h3>
                        <p class="cs-card-desc">Developed a quantised neural network running directly on Cortex-M4 to classify air quality from multi-gas sensor arrays — no cloud dependency, no latency, 3µA average current draw.</p>
                        <div class="cs-card-outcomes">
                            <span class="cs-outcome"><span class="cs-outcome-num">3µA</span> Average draw</span>
                            <span class="cs-outcome"><span class="cs-outcome-num">94%</span> Classification accuracy</span>
                        </div>
                        <div class="cs-card-footer">
                            <div class="cs-card-chips">
                                <span class="ts-chip">Cortex-M4</span>
                                <span class="ts-chip">Edge Impulse</span>
                                <span class="ts-chip">C</span>
                            </div>
                            <a href="#aerosense-detail" class="cs-card-link">
                                View Case <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>
                </article>

            </div>{{-- /cs-grid --}}

            {{-- No results state (shown by JS when filter returns nothing) --}}
            <div class="cs-no-results" id="csNoResults" style="display:none;">
                <span class="cs-no-results-icon" aria-hidden="true">🔭</span>
                <p>No case studies match that filter yet — more are being added.</p>
                <a href="{{ route('contact') }}" class="btn btn-ghost">Discuss Your Project</a>
            </div>

        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         DEEP DIVE — FluxSense Detail
    ═══════════════════════════════════════════════ --}}
    <section class="section-lg section-alt cs-detail-section" id="fluxsense-detail">
        <div class="container">

            <div class="cs-detail-header" data-reveal="fade-up">
                <span class="tag-label">Deep Dive</span>
                <h2 class="glitch-ready">FluxSense — Full Case Study</h2>
            </div>

            <div class="cs-detail-grid">

                {{-- Left: narrative --}}
                <div class="cs-detail-narrative" data-reveal="fade-right">

                    <div class="cs-detail-block">
                        <h3 class="cs-detail-h3">The Problem</h3>
                        <p>A Lahore-based agri-tech startup had 800+ smallholder farmers using paper-based irrigation logs. Crop losses from over-watering and delayed pest response were running at 15–20% per season. They needed a system that a farmer with no technical background could trust and use.</p>
                    </div>

                    <div class="cs-detail-block">
                        <h3 class="cs-detail-h3">Our Approach</h3>
                        <p>We broke the challenge into three layers: edge hardware that survives a Pakistani summer (55°C+), a cloud pipeline that works on 2G, and a dashboard a non-literate farmer can read in Urdu.</p>
                        <ul class="cs-detail-list">
                            <li>Designed custom PCB with soil NPK, moisture, temperature, and humidity sensors.</li>
                            <li>Wrote bare-metal firmware in C with deep-sleep scheduling (3-minute wake cycles, 18-month battery life on 3×AA).</li>
                            <li>Built MQTT broker on AWS IoT Core with retry logic for lossy 2G networks.</li>
                            <li>Trained a TensorFlow Lite model on 18 months of historical crop data for irrigation and pest risk prediction.</li>
                            <li>Deployed a Laravel API + React dashboard with Urdu i18n and SMS alert fallback.</li>
                        </ul>
                    </div>

                    <div class="cs-detail-block">
                        <h3 class="cs-detail-h3">The Outcome</h3>
                        <p>After a 6-month pilot across 120 farms, water usage dropped by 34%, average yield improved by 2.1×, and the platform achieved 99% sensor uptime despite challenging field conditions. The client secured Series A funding citing FluxSense as a core differentiator.</p>
                    </div>

                </div>

                {{-- Right: sidebar --}}
                <aside class="cs-detail-sidebar" data-reveal="fade-left">

                    <div class="cs-sidebar-block card">
                        <h4 class="cs-sidebar-title">Project Snapshot</h4>
                        <dl class="cs-snapshot-list">
                            <div class="cs-snapshot-row">
                                <dt>Client</dt>
                                <dd>Agri-tech startup, Lahore</dd>
                            </div>
                            <div class="cs-snapshot-row">
                                <dt>Duration</dt>
                                <dd>9 months (Aug 2023 – Apr 2024)</dd>
                            </div>
                            <div class="cs-snapshot-row">
                                <dt>Team Size</dt>
                                <dd>4 engineers + 1 PM</dd>
                            </div>
                            <div class="cs-snapshot-row">
                                <dt>Delivery</dt>
                                <dd>On time, within budget</dd>
                            </div>
                            <div class="cs-snapshot-row">
                                <dt>Region</dt>
                                <dd>Punjab, Pakistan</dd>
                            </div>
                        </dl>
                    </div>

                    <div class="cs-sidebar-block card">
                        <h4 class="cs-sidebar-title">Technology Stack</h4>
                        <div class="cs-sidebar-chips">
                            <span class="ts-chip">ESP32</span>
                            <span class="ts-chip">FreeRTOS</span>
                            <span class="ts-chip">C / C++</span>
                            <span class="ts-chip">MQTT</span>
                            <span class="ts-chip">AWS IoT Core</span>
                            <span class="ts-chip">Python</span>
                            <span class="ts-chip">TensorFlow Lite</span>
                            <span class="ts-chip">Laravel 11</span>
                            <span class="ts-chip">React</span>
                            <span class="ts-chip">MySQL</span>
                            <span class="ts-chip">Redis</span>
                            <span class="ts-chip">Twilio SMS</span>
                        </div>
                    </div>

                    <div class="cs-sidebar-block card cs-sidebar-quote">
                        <blockquote class="cs-quote-text">
                            "FluxSense changed how our farmers think about data. They don't call it a sensor anymore — they call it their extra worker."
                        </blockquote>
                        <cite class="cs-quote-cite">— CEO, FluxSense (client)</cite>
                    </div>

                    <a href="{{ route('contact') }}" class="btn btn-primary btn-full" style="text-align:center;">
                        Build Something Like This <span aria-hidden="true">↗</span>
                    </a>

                </aside>

            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         PROCESS CALLOUT
    ═══════════════════════════════════════════════ --}}
    <section class="section-lg cs-process-section">
        <div class="container">
            <div class="section-head-center" data-reveal="fade-up">
                <span class="tag-label">How We Work</span>
                <h2 class="glitch-ready">The Cosmos Algos Method</h2>
                <p class="section-head-sub">Every project in this page followed the same rigorous process — and got the same quality of output.</p>
            </div>

            <div class="cs-process-grid" data-stagger>
                <div class="cs-process-step card">
                    <div class="cs-process-num">01</div>
                    <div class="cs-process-icon" aria-hidden="true">🔍</div>
                    <h4>Discovery & Scoping</h4>
                    <p>We dig into your problem before touching a line of code. Root cause analysis, constraint mapping, and technology selection happen here.</p>
                </div>
                <div class="cs-process-step card">
                    <div class="cs-process-num">02</div>
                    <div class="cs-process-icon" aria-hidden="true">🏗️</div>
                    <h4>Architecture & Design</h4>
                    <p>System architecture, data flows, API contracts, and UI wireframes are locked before a sprint begins. No surprises mid-build.</p>
                </div>
                <div class="cs-process-step card">
                    <div class="cs-process-num">03</div>
                    <div class="cs-process-icon" aria-hidden="true">🔧</div>
                    <h4>Agile Build</h4>
                    <p>Two-week sprints, weekly demos, and a shared project board you can check any time. You see progress — not promises.</p>
                </div>
                <div class="cs-process-step card">
                    <div class="cs-process-num">04</div>
                    <div class="cs-process-icon" aria-hidden="true">🚀</div>
                    <h4>Launch & Support</h4>
                    <p>Production deployment, documentation, and a support window. We don't disappear at go-live — we make sure it sticks.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         TESTIMONIAL STRIP
    ═══════════════════════════════════════════════ --}}
    <section class="section-lg section-alt cs-testimonials-section">
        <div class="container">
            <div class="section-head-center" data-reveal="fade-up">
                <span class="tag-label">What Clients Say</span>
                <h2 class="glitch-ready">Don't Take Our Word for It</h2>
            </div>

            <div class="cs-testimonial-grid" data-stagger>

                <div class="cs-testimonial-card card">
                    <div class="cs-testi-stars" aria-label="5 stars">★★★★★</div>
                    <blockquote class="cs-testi-quote">"The team at Cosmos Algos didn't just build what we asked for — they challenged our assumptions and delivered something far better than we envisioned."</blockquote>
                    <div class="cs-testi-author">
                        <div class="cs-testi-avatar" aria-hidden="true">AK</div>
                        <div>
                            <strong>Ahmed Khan</strong>
                            <span>CTO, NestMart</span>
                        </div>
                    </div>
                </div>

                <div class="cs-testimonial-card card">
                    <div class="cs-testi-stars" aria-label="5 stars">★★★★★</div>
                    <blockquote class="cs-testi-quote">"Their embedded engineers know things that most software houses have never even heard of. The firmware they wrote for our VFD system has been running flawlessly for 14 months."</blockquote>
                    <div class="cs-testi-author">
                        <div class="cs-testi-avatar" aria-hidden="true">SR</div>
                        <div>
                            <strong>Sana Rehman</strong>
                            <span>Head of Engineering, Industrial client</span>
                        </div>
                    </div>
                </div>

                <div class="cs-testimonial-card card">
                    <div class="cs-testi-stars" aria-label="5 stars">★★★★★</div>
                    <blockquote class="cs-testi-quote">"Six months in, we had a product our investors called 'the most technically impressive demo they'd seen from a Pakistani startup'. That's Cosmos Algos."</blockquote>
                    <div class="cs-testi-author">
                        <div class="cs-testi-avatar" aria-hidden="true">FA</div>
                        <div>
                            <strong>Farhan Ali</strong>
                            <span>CEO, FluxSense</span>
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
                <h2 class="cs-cta-h2 glitch-ready">Your Case Study Starts with a Conversation</h2>
                <p class="cs-cta-sub">Every project above began with someone describing a problem they couldn't solve. Tell us yours.</p>
                <div class="cs-cta-actions">
                    <a href="{{ route('contact') }}" class="btn btn-primary">
                        Get a Free Consultation <span aria-hidden="true">↗</span>
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
