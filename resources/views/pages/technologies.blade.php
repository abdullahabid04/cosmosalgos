@extends('layouts.app')

@section('title', ($company['name'] ?? 'Cosmos Algos') . ' | Technologies')
@section('meta_description', 'The technologies, tools, and platforms behind Cosmos Algos work in embedded systems, IoT, applied AI, and SaaS.')

@section('content')

    {{-- ── PAGE HERO ── --}}
    <section class="section section-lg tech-hero">
        <div class="container">
            <div class="tech-hero-inner">
                <span class="tag-label">Our Stack</span>
                <h1 class="tech-hero-h1">Built with the Right Tools,<br><span class="hero-h1-accent">for the Right Problems</span></h1>
                <p class="lead">
                    We don't chase trends — we choose technologies that fit the problem.
                    These are the tools and platforms that appear most often in our delivered work.
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
                <p>Tools and platforms that appear in delivered work or active projects — not an exhaustive list of everything installable.</p>
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
                    <h3 class="tech-name">PHP</h3>
                    <p class="tech-desc">Primary server-side language powering our Laravel APIs and SaaS backends.</p>
                </div>

                <div class="tech-item" data-category="languages">
                    <div class="tech-item-top">
                        <span class="tech-icon">🐍</span>
                        <span class="tech-cat-tag">Language</span>
                    </div>
                    <h3 class="tech-name">Python</h3>
                    <p class="tech-desc">Automation scripts, data pipelines, AI inference, IoT simulation, and GUI tooling.</p>
                </div>

                <div class="tech-item" data-category="languages">
                    <div class="tech-item-top">
                        <span class="tech-icon">⚙️</span>
                        <span class="tech-cat-tag">Language</span>
                    </div>
                    <h3 class="tech-name">C++</h3>
                    <p class="tech-desc">Embedded firmware, systems-level programming, and high-performance algorithms on constrained hardware.</p>
                </div>

                <div class="tech-item" data-category="languages">
                    <div class="tech-item-top">
                        <span class="tech-icon">🟨</span>
                        <span class="tech-cat-tag">Language</span>
                    </div>
                    <h3 class="tech-name">JavaScript</h3>
                    <p class="tech-desc">Frontend interactions, web UI logic, and lightweight scripting across web applications.</p>
                </div>

                <div class="tech-item" data-category="languages">
                    <div class="tech-item-top">
                        <span class="tech-icon">💙</span>
                        <span class="tech-cat-tag">Language</span>
                    </div>
                    <h3 class="tech-name">Dart / Flutter</h3>
                    <p class="tech-desc">Cross-platform mobile apps from one codebase for Android and iOS, including device-control and telemetry clients.</p>
                </div>

                <div class="tech-item" data-category="languages">
                    <div class="tech-item-top">
                        <span class="tech-icon">🗄️</span>
                        <span class="tech-cat-tag">Language</span>
                    </div>
                    <h3 class="tech-name">SQL</h3>
                    <p class="tech-desc">Relational queries, analytics aggregations, window functions, and schema design for production databases.</p>
                </div>

                {{-- ── BACKEND & WEB ── --}}
                <div class="tech-item" data-category="backend">
                    <div class="tech-item-top">
                        <span class="tech-icon">🔴</span>
                        <span class="tech-cat-tag">Framework</span>
                    </div>
                    <h3 class="tech-name">Laravel</h3>
                    <p class="tech-desc">Our primary PHP framework for building REST APIs, SaaS platforms, role-based access, and data pipelines.</p>
                </div>

                <div class="tech-item" data-category="backend">
                    <div class="tech-item-top">
                        <span class="tech-icon">🔗</span>
                        <span class="tech-cat-tag">Architecture</span>
                    </div>
                    <h3 class="tech-name">REST APIs</h3>
                    <p class="tech-desc">API-first design with structured JSON responses, resource classes, OpenAPI specs, and Postman collections.</p>
                </div>

                <div class="tech-item" data-category="backend">
                    <div class="tech-item-top">
                        <span class="tech-icon">🏔️</span>
                        <span class="tech-cat-tag">Framework</span>
                    </div>
                    <h3 class="tech-name">PyQt5</h3>
                    <p class="tech-desc">Desktop applications for data acquisition, real-time signal visualisation, and hardware control.</p>
                </div>

                <div class="tech-item" data-category="backend">
                    <div class="tech-item-top">
                        <span class="tech-icon">🐍</span>
                        <span class="tech-cat-tag">Framework</span>
                    </div>
                    <h3 class="tech-name">Spatie QueryBuilder</h3>
                    <p class="tech-desc">Filtering, sorting, and relationship includes for Laravel APIs, used to keep query logic consistent across endpoints.</p>
                </div>

                {{-- ── AI & ML ── --}}
                <div class="tech-item" data-category="ai">
                    <div class="tech-item-top">
                        <span class="tech-icon">👁️</span>
                        <span class="tech-cat-tag">AI / Vision</span>
                    </div>
                    <h3 class="tech-name">OpenCV</h3>
                    <p class="tech-desc">Real-time computer vision — image processing, frame capture, object detection, and depth-map analysis.</p>
                </div>

                <div class="tech-item" data-category="ai">
                    <div class="tech-item-top">
                        <span class="tech-icon">🌐</span>
                        <span class="tech-cat-tag">AI / 3D</span>
                    </div>
                    <h3 class="tech-name">Open3D</h3>
                    <p class="tech-desc">3D data processing — point cloud generation, surface reconstruction, and spatial clustering from depth sensors.</p>
                </div>

                <div class="tech-item" data-category="ai">
                    <div class="tech-item-top">
                        <span class="tech-icon">📷</span>
                        <span class="tech-cat-tag">AI / Sensing</span>
                    </div>
                    <h3 class="tech-name">Intel RealSense SDK</h3>
                    <p class="tech-desc">RGB-D data acquisition, streaming pipelines, and continuous session handling with the D435i depth camera.</p>
                </div>

                <div class="tech-item" data-category="ai">
                    <div class="tech-item-top">
                        <span class="tech-icon">🤖</span>
                        <span class="tech-cat-tag">AI / ML</span>
                    </div>
                    <h3 class="tech-name">ML Inference Pipelines</h3>
                    <p class="tech-desc">Pipelines from data collection through model inference — used in Flock Sense AI, the AI extension of the Flock Sense platform, for broiler weight estimation.</p>
                </div>

                <div class="tech-item" data-category="ai">
                    <div class="tech-item-top">
                        <span class="tech-icon">📊</span>
                        <span class="tech-cat-tag">AI / Data</span>
                    </div>
                    <h3 class="tech-name">Data Analytics (NumPy · Pandas)</h3>
                    <p class="tech-desc">Sensor data ingestion, metric aggregation (ADG, FCR, mortality), and business intelligence for operational systems.</p>
                </div>

                {{-- ── IOT & EMBEDDED ── --}}
                <div class="tech-item" data-category="iot">
                    <div class="tech-item-top">
                        <span class="tech-icon">🔌</span>
                        <span class="tech-cat-tag">Embedded</span>
                    </div>
                    <h3 class="tech-name">ESP32</h3>
                    <p class="tech-desc">Wi-Fi/Bluetooth microcontroller used for firmware, VFD remote control, MODBUS integration, and IoT prototypes.</p>
                </div>

                <div class="tech-item" data-category="iot">
                    <div class="tech-item-top">
                        <span class="tech-icon">🍓</span>
                        <span class="tech-cat-tag">Embedded</span>
                    </div>
                    <h3 class="tech-name">Raspberry Pi</h3>
                    <p class="tech-desc">Single-board computer used for battery monitoring automation, charging control, and industrial data acquisition.</p>
                </div>

                <div class="tech-item" data-category="iot">
                    <div class="tech-item-top">
                        <span class="tech-icon">📡</span>
                        <span class="tech-cat-tag">Protocol</span>
                    </div>
                    <h3 class="tech-name">MQTT</h3>
                    <p class="tech-desc">Lightweight pub/sub messaging protocol for real-time IoT device communication and telemetry data transport.</p>
                </div>

                <div class="tech-item" data-category="iot">
                    <div class="tech-item-top">
                        <span class="tech-icon">🏭</span>
                        <span class="tech-cat-tag">Protocol</span>
                    </div>
                    <h3 class="tech-name">MODBUS</h3>
                    <p class="tech-desc">Industrial serial communication protocol used for VFD control, motor telemetry, and remote command execution.</p>
                </div>

                <div class="tech-item" data-category="iot">
                    <div class="tech-item-top">
                        <span class="tech-icon">📷</span>
                        <span class="tech-cat-tag">Hardware</span>
                    </div>
                    <h3 class="tech-name">Intel RealSense D435i</h3>
                    <p class="tech-desc">Depth + RGB camera used for RGB-D streaming pipelines, 3D point cloud capture, and spatial analysis systems.</p>
                </div>

                <div class="tech-item" data-category="iot">
                    <div class="tech-item-top">
                        <span class="tech-icon">⚡</span>
                        <span class="tech-cat-tag">Industrial</span>
                    </div>
                    <h3 class="tech-name">VFDs &amp; MODBUS Devices</h3>
                    <p class="tech-desc">Variable frequency drives and the MODBUS interfaces used to monitor and control them.</p>
                </div>

                {{-- ── CLOUD & DATABASES ── --}}
                <div class="tech-item" data-category="cloud">
                    <div class="tech-item-top">
                        <span class="tech-icon">☁️</span>
                        <span class="tech-cat-tag">Cloud</span>
                    </div>
                    <h3 class="tech-name">AWS</h3>
                    <p class="tech-desc">Cloud infrastructure, EC2, S3, IoT Core, Lambda, and DynamoDB for cloud-hosted products.</p>
                </div>

                <div class="tech-item" data-category="cloud">
                    <div class="tech-item-top">
                        <span class="tech-icon">🗃️</span>
                        <span class="tech-cat-tag">Database</span>
                    </div>
                    <h3 class="tech-name">MySQL</h3>
                    <p class="tech-desc">Primary relational database for SaaS platforms — schemas, migrations, query optimization, and analytics queries.</p>
                </div>

                <div class="tech-item" data-category="cloud">
                    <div class="tech-item-top">
                        <span class="tech-icon">⚡</span>
                        <span class="tech-cat-tag">Database</span>
                    </div>
                    <h3 class="tech-name">DynamoDB</h3>
                    <p class="tech-desc">AWS NoSQL database used for high-throughput IoT telemetry ingestion and real-time sensor data storage.</p>
                </div>

                <div class="tech-item" data-category="cloud">
                    <div class="tech-item-top">
                        <span class="tech-icon">🍃</span>
                        <span class="tech-cat-tag">Database</span>
                    </div>
                    <h3 class="tech-name">MongoDB</h3>
                    <p class="tech-desc">Document store used where a flexible schema fits the data better than fixed relational tables.</p>
                </div>

                {{-- ── TOOLS ── --}}
                <div class="tech-item" data-category="tools">
                    <div class="tech-item-top">
                        <span class="tech-icon">🐙</span>
                        <span class="tech-cat-tag">DevOps</span>
                    </div>
                    <h3 class="tech-name">Git / GitHub</h3>
                    <p class="tech-desc">Version control and branching across projects, including collaborative work with other engineers.</p>
                </div>

                <div class="tech-item" data-category="tools">
                    <div class="tech-item-top">
                        <span class="tech-icon">🔷</span>
                        <span class="tech-cat-tag">API</span>
                    </div>
                    <h3 class="tech-name">Postman</h3>
                    <p class="tech-desc">API testing, automated collection runs, environment management, and client-facing API documentation.</p>
                </div>

                <div class="tech-item" data-category="tools">
                    <div class="tech-item-top">
                        <span class="tech-icon">📋</span>
                        <span class="tech-cat-tag">API</span>
                    </div>
                    <h3 class="tech-name">OpenAPI / Swagger</h3>
                    <p class="tech-desc">Machine-readable API specifications where an integration needs a stable contract; used on API-heavy projects.</p>
                </div>

                <div class="tech-item" data-category="tools">
                    <div class="tech-item-top">
                        <span class="tech-icon">🖥️</span>
                        <span class="tech-cat-tag">IDE</span>
                    </div>
                    <h3 class="tech-name">PyQt5</h3>
                    <p class="tech-desc">Python GUI framework for desktop data-acquisition tools — electrical signal visualizers and battery health monitors.</p>
                </div>

                <div class="tech-item" data-category="tools">
                    <div class="tech-item-top">
                        <span class="tech-icon">⚡</span>
                        <span class="tech-cat-tag">Build</span>
                    </div>
                    <h3 class="tech-name">Vite</h3>
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
                    <h3>PV & Solar Systems</h3>
                    <p>Design and integration of photovoltaic monitoring and control systems for renewable energy installations.</p>
                </div>

                <div class="hw-item">
                    <div class="hw-icon-wrap">
                        <span class="hw-icon">🏭</span>
                    </div>
                    <h3>Industrial Automation</h3>
                    <p>Automation of industrial processes — sensor integration, actuator control, MODBUS device interfaces, and data logging.</p>
                </div>

                <div class="hw-item">
                    <div class="hw-icon-wrap">
                        <span class="hw-icon">🔬</span>
                    </div>
                    <h3>Scientific Lab Equipment</h3>
                    <p>Custom software and firmware for lab instruments, data acquisition hardware, and precision measurement systems.</p>
                </div>

                <div class="hw-item">
                    <div class="hw-icon-wrap">
                        <span class="hw-icon">🏥</span>
                    </div>
                    <h3>Defense Test Equipment</h3>
                    <p>Test, measurement, and reporting software for defense equipment, delivered through CARE Lab collaborations.</p>
                </div>

                <div class="hw-item">
                    <div class="hw-icon-wrap">
                        <span class="hw-icon">⚡</span>
                    </div>
                    <h3>Power Supplies & UPS</h3>
                    <p>Monitoring, control, and automation software for power systems including uninterruptible power supplies.</p>
                </div>

                <div class="hw-item">
                    <div class="hw-icon-wrap">
                        <span class="hw-icon">🤖</span>
                    </div>
                    <h3>Robotics</h3>
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
                    <h3>Full-Stack Thinking</h3>
                    <p>From microcontroller firmware to cloud APIs — we design the layers together so the system fits as a whole.</p>
                </div>

                <div class="tech-approach-item">
                    <div class="tech-approach-num">02</div>
                    <h3>Right Tool, Right Job</h3>
                    <p>We don't force a single stack on every problem. Technology choices are driven by requirements, not preferences.</p>
                </div>

                <div class="tech-approach-item">
                    <div class="tech-approach-num">03</div>
                    <h3>Documented Where It Matters</h3>
                    <p>API contracts, schemas, setup notes, and version control are used where they reduce handover risk — not as a blanket claim for every line of code.</p>
                </div>

                <div class="tech-approach-item">
                    <div class="tech-approach-num">04</div>
                    <h3>Continuously Evolving</h3>
                    <p>We track the technology landscape and adopt established tools that improve reliability and day-to-day development.</p>
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
