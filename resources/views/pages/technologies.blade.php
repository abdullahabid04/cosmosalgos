@extends('layouts.app')

@section('title', ($company['name'] ?? 'Cosmos Algos') . ' | Technologies')
@section('meta_description', 'Explore the technologies, tools, and platforms Cosmos Algos uses to build intelligent IoT, AI, and SaaS solutions.')

@section('content')

    {{-- ── PAGE HERO ── --}}
    <section class="section section-lg tech-hero">
        <div class="container">
            <div class="tech-hero-inner">
                <span class="tag-label">Our Stack</span>
                <h1 class="tech-hero-h1">Built with the Right Tools,<br><span class="hero-h1-accent">for the Right Problems</span></h1>
                <p class="lead">
                    We don't chase trends — we choose technologies that solve real problems reliably.
                    Here's the stack behind every system we design, build, and ship.
                </p>
                <div class="badge-row">
                    <span class="badge">IoT</span>
                    <span class="badge">AI / ML</span>
                    <span class="badge">Embedded</span>
                    <span class="badge">Cloud</span>
                    <span class="badge">Mobile</span>
                    <span class="badge">Web</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ── FILTERABLE TECH GRID ── --}}
    <section class="section section-alt section-lg">
        <div class="container">

            <div class="section-head-center" style="margin-bottom:2rem;">
                <span class="tag-label">Technologies</span>
                <h2>The Full Stack</h2>
                <p>Every tool, language, protocol, and platform we use across projects.</p>
            </div>

            {{-- Filter bar --}}
            <div class="tech-filter-bar" id="techFilterBar" role="tablist" aria-label="Filter technologies by category">
                <button class="tech-filter-btn is-active" data-filter="all" role="tab" aria-selected="true">All</button>
                <button class="tech-filter-btn" data-filter="languages" role="tab" aria-selected="false">Languages</button>
                <button class="tech-filter-btn" data-filter="backend" role="tab" aria-selected="false">Backend & Web</button>
                <button class="tech-filter-btn" data-filter="ai" role="tab" aria-selected="false">AI & ML</button>
                <button class="tech-filter-btn" data-filter="iot" role="tab" aria-selected="false">IoT & Embedded</button>
                <button class="tech-filter-btn" data-filter="cloud" role="tab" aria-selected="false">Cloud & Databases</button>
                <button class="tech-filter-btn" data-filter="tools" role="tab" aria-selected="false">Tools</button>
            </div>

            {{-- Cards grid --}}
            <div class="tech-grid" id="techGrid">

                {{-- ── LANGUAGES ── --}}
                <div class="tech-item" data-category="languages">
                    <div class="tech-item-top">
                        <span class="tech-icon">🐘</span>
                        <span class="tech-cat-tag">Language</span>
                    </div>
                    <h4 class="tech-name">PHP</h4>
                    <p class="tech-desc">Primary server-side language powering our Laravel APIs and SaaS backends.</p>
                </div>

                <div class="tech-item" data-category="languages">
                    <div class="tech-item-top">
                        <span class="tech-icon">🐍</span>
                        <span class="tech-cat-tag">Language</span>
                    </div>
                    <h4 class="tech-name">Python</h4>
                    <p class="tech-desc">Automation scripts, data pipelines, AI inference, IoT simulation, and GUI tooling.</p>
                </div>

                <div class="tech-item" data-category="languages">
                    <div class="tech-item-top">
                        <span class="tech-icon">⚙️</span>
                        <span class="tech-cat-tag">Language</span>
                    </div>
                    <h4 class="tech-name">C++</h4>
                    <p class="tech-desc">Embedded firmware, systems-level programming, and high-performance algorithms on constrained hardware.</p>
                </div>

                <div class="tech-item" data-category="languages">
                    <div class="tech-item-top">
                        <span class="tech-icon">🟨</span>
                        <span class="tech-cat-tag">Language</span>
                    </div>
                    <h4 class="tech-name">JavaScript</h4>
                    <p class="tech-desc">Frontend interactions, web UI logic, and lightweight scripting across web applications.</p>
                </div>

                <div class="tech-item" data-category="languages">
                    <div class="tech-item-top">
                        <span class="tech-icon">💙</span>
                        <span class="tech-cat-tag">Language</span>
                    </div>
                    <h4 class="tech-name">Dart / Flutter</h4>
                    <p class="tech-desc">Cross-platform mobile and desktop apps. One codebase, native performance on Android and iOS.</p>
                </div>

                <div class="tech-item" data-category="languages">
                    <div class="tech-item-top">
                        <span class="tech-icon">🗄️</span>
                        <span class="tech-cat-tag">Language</span>
                    </div>
                    <h4 class="tech-name">SQL</h4>
                    <p class="tech-desc">Relational queries, analytics aggregations, window functions, and schema design for production databases.</p>
                </div>

                {{-- ── BACKEND & WEB ── --}}
                <div class="tech-item" data-category="backend">
                    <div class="tech-item-top">
                        <span class="tech-icon">🔴</span>
                        <span class="tech-cat-tag">Framework</span>
                    </div>
                    <h4 class="tech-name">Laravel</h4>
                    <p class="tech-desc">Our primary PHP framework for building REST APIs, SaaS platforms, role-based access, and data pipelines.</p>
                </div>

                <div class="tech-item" data-category="backend">
                    <div class="tech-item-top">
                        <span class="tech-icon">🔗</span>
                        <span class="tech-cat-tag">Architecture</span>
                    </div>
                    <h4 class="tech-name">REST APIs</h4>
                    <p class="tech-desc">API-first design with structured JSON responses, resource classes, OpenAPI specs, and Postman collections.</p>
                </div>

                <div class="tech-item" data-category="backend">
                    <div class="tech-item-top">
                        <span class="tech-icon">🏔️</span>
                        <span class="tech-cat-tag">Framework</span>
                    </div>
                    <h4 class="tech-name">Alpine.js</h4>
                    <p class="tech-desc">Lightweight reactivity for web UIs without the overhead of a full SPA framework.</p>
                </div>

                <div class="tech-item" data-category="backend">
                    <div class="tech-item-top">
                        <span class="tech-icon">🐍</span>
                        <span class="tech-cat-tag">Framework</span>
                    </div>
                    <h4 class="tech-name">Django / Flask</h4>
                    <p class="tech-desc">Python web frameworks used for data services, AI API endpoints, and rapid-prototype backends.</p>
                </div>

                {{-- ── AI & ML ── --}}
                <div class="tech-item" data-category="ai">
                    <div class="tech-item-top">
                        <span class="tech-icon">👁️</span>
                        <span class="tech-cat-tag">AI / Vision</span>
                    </div>
                    <h4 class="tech-name">OpenCV</h4>
                    <p class="tech-desc">Real-time computer vision — image processing, frame capture, object detection, and depth-map analysis.</p>
                </div>

                <div class="tech-item" data-category="ai">
                    <div class="tech-item-top">
                        <span class="tech-icon">🌐</span>
                        <span class="tech-cat-tag">AI / 3D</span>
                    </div>
                    <h4 class="tech-name">Open3D</h4>
                    <p class="tech-desc">3D data processing — point cloud generation, surface reconstruction, and spatial clustering from depth sensors.</p>
                </div>

                <div class="tech-item" data-category="ai">
                    <div class="tech-item-top">
                        <span class="tech-icon">📷</span>
                        <span class="tech-cat-tag">AI / Sensing</span>
                    </div>
                    <h4 class="tech-name">Intel RealSense SDK</h4>
                    <p class="tech-desc">RGB-D data acquisition, streaming pipelines, and continuous session handling with the D435i depth camera.</p>
                </div>

                <div class="tech-item" data-category="ai">
                    <div class="tech-item-top">
                        <span class="tech-icon">🤖</span>
                        <span class="tech-cat-tag">AI / ML</span>
                    </div>
                    <h4 class="tech-name">ML Inference Pipelines</h4>
                    <p class="tech-desc">End-to-end pipelines from data collection to model inference — used in FluxSense AI for poultry growth prediction.</p>
                </div>

                <div class="tech-item" data-category="ai">
                    <div class="tech-item-top">
                        <span class="tech-icon">📊</span>
                        <span class="tech-cat-tag">AI / Data</span>
                    </div>
                    <h4 class="tech-name">Data Analytics (NumPy · Pandas)</h4>
                    <p class="tech-desc">Sensor data ingestion, metric aggregation (ADG, FCR, mortality), and business intelligence for operational systems.</p>
                </div>

                {{-- ── IOT & EMBEDDED ── --}}
                <div class="tech-item" data-category="iot">
                    <div class="tech-item-top">
                        <span class="tech-icon">🔌</span>
                        <span class="tech-cat-tag">Embedded</span>
                    </div>
                    <h4 class="tech-name">ESP32</h4>
                    <p class="tech-desc">Wi-Fi/Bluetooth microcontroller used for firmware, VFD remote control, MODBUS integration, and IoT prototypes.</p>
                </div>

                <div class="tech-item" data-category="iot">
                    <div class="tech-item-top">
                        <span class="tech-icon">🍓</span>
                        <span class="tech-cat-tag">Embedded</span>
                    </div>
                    <h4 class="tech-name">Raspberry Pi</h4>
                    <p class="tech-desc">Single-board computer used for battery monitoring automation, charging control, and industrial data acquisition.</p>
                </div>

                <div class="tech-item" data-category="iot">
                    <div class="tech-item-top">
                        <span class="tech-icon">📡</span>
                        <span class="tech-cat-tag">Protocol</span>
                    </div>
                    <h4 class="tech-name">MQTT</h4>
                    <p class="tech-desc">Lightweight pub/sub messaging protocol for real-time IoT device communication and telemetry data transport.</p>
                </div>

                <div class="tech-item" data-category="iot">
                    <div class="tech-item-top">
                        <span class="tech-icon">🏭</span>
                        <span class="tech-cat-tag">Protocol</span>
                    </div>
                    <h4 class="tech-name">MODBUS</h4>
                    <p class="tech-desc">Industrial serial communication protocol used for VFD and PLC control, motor telemetry, and remote command execution.</p>
                </div>

                <div class="tech-item" data-category="iot">
                    <div class="tech-item-top">
                        <span class="tech-icon">📷</span>
                        <span class="tech-cat-tag">Hardware</span>
                    </div>
                    <h4 class="tech-name">Intel RealSense D435i</h4>
                    <p class="tech-desc">Depth + RGB camera used for RGB-D streaming pipelines, 3D point cloud capture, and spatial analysis systems.</p>
                </div>

                <div class="tech-item" data-category="iot">
                    <div class="tech-item-top">
                        <span class="tech-icon">⚡</span>
                        <span class="tech-cat-tag">Industrial</span>
                    </div>
                    <h4 class="tech-name">PLC & VFDs</h4>
                    <p class="tech-desc">Programmable Logic Controllers and Variable Frequency Drives for industrial motor control, process automation.</p>
                </div>

                {{-- ── CLOUD & DATABASES ── --}}
                <div class="tech-item" data-category="cloud">
                    <div class="tech-item-top">
                        <span class="tech-icon">☁️</span>
                        <span class="tech-cat-tag">Cloud</span>
                    </div>
                    <h4 class="tech-name">AWS</h4>
                    <p class="tech-desc">Official AWS Partner. Cloud infrastructure, EC2, S3, IoT Core, and DynamoDB for scalable cloud-hosted products.</p>
                </div>

                <div class="tech-item" data-category="cloud">
                    <div class="tech-item-top">
                        <span class="tech-icon">🗃️</span>
                        <span class="tech-cat-tag">Database</span>
                    </div>
                    <h4 class="tech-name">MySQL</h4>
                    <p class="tech-desc">Primary relational database for SaaS platforms — schemas, migrations, query optimization, and analytics queries.</p>
                </div>

                <div class="tech-item" data-category="cloud">
                    <div class="tech-item-top">
                        <span class="tech-icon">⚡</span>
                        <span class="tech-cat-tag">Database</span>
                    </div>
                    <h4 class="tech-name">DynamoDB</h4>
                    <p class="tech-desc">AWS NoSQL database used for high-throughput IoT telemetry ingestion and real-time sensor data storage.</p>
                </div>

                <div class="tech-item" data-category="cloud">
                    <div class="tech-item-top">
                        <span class="tech-icon">🍃</span>
                        <span class="tech-cat-tag">Database</span>
                    </div>
                    <h4 class="tech-name">MongoDB</h4>
                    <p class="tech-desc">Document store for flexible data schemas in IoT systems where sensor payloads vary across device types.</p>
                </div>

                {{-- ── TOOLS ── --}}
                <div class="tech-item" data-category="tools">
                    <div class="tech-item-top">
                        <span class="tech-icon">🐙</span>
                        <span class="tech-cat-tag">DevOps</span>
                    </div>
                    <h4 class="tech-name">Git / GitHub</h4>
                    <p class="tech-desc">Version control, branching strategies, and collaborative development across all projects and teams.</p>
                </div>

                <div class="tech-item" data-category="tools">
                    <div class="tech-item-top">
                        <span class="tech-icon">🔷</span>
                        <span class="tech-cat-tag">API</span>
                    </div>
                    <h4 class="tech-name">Postman</h4>
                    <p class="tech-desc">API testing, automated collection runs, environment management, and client-facing API documentation.</p>
                </div>

                <div class="tech-item" data-category="tools">
                    <div class="tech-item-top">
                        <span class="tech-icon">📋</span>
                        <span class="tech-cat-tag">API</span>
                    </div>
                    <h4 class="tech-name">OpenAPI / Swagger</h4>
                    <p class="tech-desc">Machine-readable API specifications for every production service — enables third-party integration with zero ambiguity.</p>
                </div>

                <div class="tech-item" data-category="tools">
                    <div class="tech-item-top">
                        <span class="tech-icon">🖥️</span>
                        <span class="tech-cat-tag">IDE</span>
                    </div>
                    <h4 class="tech-name">PyQt5</h4>
                    <p class="tech-desc">Python GUI framework for desktop data-acquisition tools — electrical signal visualizers and battery health monitors.</p>
                </div>

                <div class="tech-item" data-category="tools">
                    <div class="tech-item-top">
                        <span class="tech-icon">⚡</span>
                        <span class="tech-cat-tag">Build</span>
                    </div>
                    <h4 class="tech-name">Vite</h4>
                    <p class="tech-desc">Fast frontend build tool and asset bundler tightly integrated with Laravel via the laravel-vite-plugin.</p>
                </div>

            </div>{{-- /tech-grid --}}
        </div>
    </section>

    {{-- ── HARDWARE & INDUSTRIAL SYSTEMS ── --}}
    <section class="section section-lg">
        <div class="container">
            <div class="section-head-center">
                <span class="tag-label">Hardware Layer</span>
                <h2>Industrial & Embedded Systems</h2>
                <p>Beyond software — we design and integrate systems at the hardware and protocol level, where reliability is non-negotiable.</p>
            </div>
            <div class="hw-grid">

                <div class="hw-item">
                    <div class="hw-icon-wrap">
                        <span class="hw-icon">☀️</span>
                    </div>
                    <h4>PV & Solar Systems</h4>
                    <p>Design and integration of photovoltaic monitoring and control systems for renewable energy installations.</p>
                </div>

                <div class="hw-item">
                    <div class="hw-icon-wrap">
                        <span class="hw-icon">🏭</span>
                    </div>
                    <h4>Industrial Automation</h4>
                    <p>End-to-end automation of industrial processes — sensor integration, actuator control, SCADA interfaces, and data logging.</p>
                </div>

                <div class="hw-item">
                    <div class="hw-icon-wrap">
                        <span class="hw-icon">🔬</span>
                    </div>
                    <h4>Scientific Lab Equipment</h4>
                    <p>Custom software and firmware for lab instruments, data acquisition hardware, and precision measurement systems.</p>
                </div>

                <div class="hw-item">
                    <div class="hw-icon-wrap">
                        <span class="hw-icon">🏥</span>
                    </div>
                    <h4>Biomedical Devices</h4>
                    <p>Embedded firmware and monitoring software for biomedical equipment in clinical and research environments.</p>
                </div>

                <div class="hw-item">
                    <div class="hw-icon-wrap">
                        <span class="hw-icon">⚡</span>
                    </div>
                    <h4>Power Supplies & UPS</h4>
                    <p>Monitoring, control, and automation software for power systems including uninterruptible power supplies.</p>
                </div>

                <div class="hw-item">
                    <div class="hw-icon-wrap">
                        <span class="hw-icon">🤖</span>
                    </div>
                    <h4>Robotics</h4>
                    <p>Firmware, control systems, and software integration for robotic systems and automated mechanical assemblies.</p>
                </div>

            </div>
        </div>
    </section>

    {{-- ── APPROACH STRIP ── --}}
    <section class="section section-alt section-lg">
        <div class="container">
            <div class="tech-approach-grid">

                <div class="tech-approach-item">
                    <div class="tech-approach-num">01</div>
                    <h4>Full-Stack Thinking</h4>
                    <p>From microcontroller firmware to cloud APIs — we design systems end-to-end, so every layer works together reliably.</p>
                </div>

                <div class="tech-approach-item">
                    <div class="tech-approach-num">02</div>
                    <h4>Right Tool, Right Job</h4>
                    <p>We don't force a single stack on every problem. Technology choices are driven by requirements, not preferences.</p>
                </div>

                <div class="tech-approach-item">
                    <div class="tech-approach-num">03</div>
                    <h4>Production-Ready Standards</h4>
                    <p>Every stack choice is backed by OpenAPI specs, documented schemas, automated tests, and version control from day one.</p>
                </div>

                <div class="tech-approach-item">
                    <div class="tech-approach-num">04</div>
                    <h4>Continuously Evolving</h4>
                    <p>We track the technology landscape and adopt proven tools that improve reliability, performance, and developer velocity.</p>
                </div>

            </div>
        </div>
    </section>

    {{-- ── CTA ── --}}
    <section class="section section-lg">
        <div class="container">
            <div class="tech-cta-box card">
                <span class="tag-label">Let's Build</span>
                <h2>Have a Project in Mind?</h2>
                <p>Tell us what you're building — we'll tell you how we'd approach the stack, architecture, and timeline.</p>
                <div class="hero-cta-row" style="justify-content:center; margin-top:1.75rem;">
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
            var filterBtns = document.querySelectorAll('.tech-filter-btn');
            var techItems  = document.querySelectorAll('.tech-item');

            filterBtns.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    var filter = btn.getAttribute('data-filter');

                    // Update active button
                    filterBtns.forEach(function (b) {
                        b.classList.remove('is-active');
                        b.setAttribute('aria-selected', 'false');
                    });
                    btn.classList.add('is-active');
                    btn.setAttribute('aria-selected', 'true');

                    // Filter cards
                    techItems.forEach(function (item) {
                        var cat = item.getAttribute('data-category');
                        if (filter === 'all' || cat === filter) {
                            item.classList.remove('tech-hidden');
                            item.classList.add('tech-visible');
                        } else {
                            item.classList.add('tech-hidden');
                            item.classList.remove('tech-visible');
                        }
                    });
                });
            });
        })();
    </script>
@endpush
