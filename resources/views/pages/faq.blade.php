@extends('layouts.app')

@section('title', 'FAQ — ' . $company['name'])
@section('meta_description', 'Frequently asked questions about Cosmos Algos — our services, process, technology, pricing, IoT, AI/ML, embedded systems, mobile and web development.')
@section('og_title', 'FAQ — Cosmos Algos')
@section('og_description', 'Everything you need to know before working with us. Questions about services, process, technology, pricing, and more.')

@section('content')

    {{-- ═══════════════════════════════════════════
         HERO
    ═══════════════════════════════════════════ --}}
    <section class="faq-hero">
        <div class="faq-hero-bg" aria-hidden="true">
            <div class="faq-hero-orb faq-hero-orb-1"></div>
            <div class="faq-hero-orb faq-hero-orb-2"></div>
        </div>
        <div class="container">
            <div class="faq-hero-inner" data-reveal="fade-up">
                <span class="tag-label">FAQ</span>
                <h1 class="faq-hero-h1 glitch-ready">Frequently Asked <span class="faq-h1-accent">Questions</span></h1>
                <p class="faq-hero-sub">Everything you need to know about working with Cosmos Algos — our services, process, technology, and more. Can't find your answer? <a href="{{ route('contact') }}" class="faq-inline-link">Reach out directly.</a></p>
                <div class="faq-hero-stats" data-stagger>
                    <div class="faq-stat card">
                        <span class="faq-stat-num">7</span>
                        <span class="faq-stat-label">Categories</span>
                    </div>
                    <div class="faq-stat card">
                        <span class="faq-stat-num">35+</span>
                        <span class="faq-stat-label">Questions Answered</span>
                    </div>
                    <div class="faq-stat card">
                        <span class="faq-stat-num">24h</span>
                        <span class="faq-stat-label">Response Time</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
         SEARCH + CATEGORY NAV
    ═══════════════════════════════════════════ --}}
    <section class="faq-nav-section">
        <div class="container">
            <div class="faq-search-wrap" data-reveal="fade-up">
                <div class="faq-search-inner">
                    <svg class="faq-search-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    <input
                        type="search"
                        id="faqSearch"
                        class="faq-search-input"
                        placeholder="Search questions…"
                        autocomplete="off"
                        aria-label="Search frequently asked questions"
                    >
                    <button class="faq-search-clear" id="faqSearchClear" aria-label="Clear search" style="display:none;">✕</button>
                </div>
                <p class="faq-search-hint" id="faqSearchHint" style="display:none;"></p>
            </div>

            <nav class="faq-cat-nav" aria-label="FAQ categories" data-reveal="fade-up">
                <button class="faq-cat-btn active" data-cat="all">All</button>
                <button class="faq-cat-btn" data-cat="general">General</button>
                <button class="faq-cat-btn" data-cat="services">Services</button>
                <button class="faq-cat-btn" data-cat="process">Process &amp; Workflow</button>
                <button class="faq-cat-btn" data-cat="technology">Technology</button>
                <button class="faq-cat-btn" data-cat="pricing">Pricing &amp; Contracts</button>
                <button class="faq-cat-btn" data-cat="support">Support &amp; Maintenance</button>
                <button class="faq-cat-btn" data-cat="company">Company &amp; Team</button>
            </nav>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
         FAQ BODY — two-column layout
    ═══════════════════════════════════════════ --}}
    <section class="section-lg faq-body-section">
        <div class="container">
            <div class="faq-body-grid">

                {{-- Sticky sidebar ToC --}}
                <aside class="faq-sidebar" aria-label="Jump to category">
                    <p class="faq-sidebar-label">Jump to</p>
                    <ul class="faq-sidebar-list">
                        <li><a href="#cat-general"     class="faq-sidebar-link">General</a></li>
                        <li><a href="#cat-services"    class="faq-sidebar-link">Services</a></li>
                        <li><a href="#cat-process"     class="faq-sidebar-link">Process &amp; Workflow</a></li>
                        <li><a href="#cat-technology"  class="faq-sidebar-link">Technology</a></li>
                        <li><a href="#cat-pricing"     class="faq-sidebar-link">Pricing &amp; Contracts</a></li>
                        <li><a href="#cat-support"     class="faq-sidebar-link">Support &amp; Maintenance</a></li>
                        <li><a href="#cat-company"     class="faq-sidebar-link">Company &amp; Team</a></li>
                    </ul>
                    <div class="faq-sidebar-cta card">
                        <p>Still have questions?</p>
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-full" style="font-size:0.85rem;padding:0.6rem 1rem;">Contact Us ↗</a>
                    </div>
                </aside>

                {{-- Main FAQ content --}}
                <div class="faq-main" id="faqMain">

                    {{-- ── CATEGORY 1: GENERAL ── --}}
                    <div class="faq-category" id="cat-general" data-cat="general">
                        <div class="faq-cat-header" data-reveal="fade-up">
                            <span class="faq-cat-icon" aria-hidden="true">🌐</span>
                            <div>
                                <h2 class="faq-cat-title glitch-ready">General</h2>
                                <p class="faq-cat-desc">The basics about Cosmos Algos and what we do.</p>
                            </div>
                        </div>

                        <div class="faq-list" data-stagger>

                            <details class="faq-item card">
                                <summary class="faq-q">What is Cosmos Algos?</summary>
                                <div class="faq-a">
                                    <p>Cosmos Algos is a pioneering technology company based in Bahawalpur, Pakistan. Founded by Abdullah Abid, we specialize in delivering advanced software and hardware solutions — from custom IoT systems and AI-powered firmware to cloud platforms, mobile apps, and web applications. We work with businesses globally to solve complex technical challenges and drive digital transformation.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Where is Cosmos Algos based, and do you work internationally?</summary>
                                <div class="faq-a">
                                    <p>Our headquarters are in Bahawalpur, Punjab, Pakistan. We are a remote-first company and work with clients across Pakistan, the Middle East, Europe, and North America. Time zones are never a barrier — we adapt our communication schedule to suit you.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">What industries do you serve?</summary>
                                <div class="faq-a">
                                    <p>We serve a wide range of industries including agriculture and smart farming, industrial manufacturing, energy and utilities, healthcare, education, fintech, real estate, insurance, and e-commerce. Our hardware-and-software combination means we can serve both traditional and emerging sectors effectively.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">What makes Cosmos Algos different from other software companies?</summary>
                                <div class="faq-a">
                                    <p>Most software firms work purely in software. We bridge both worlds — hardware and software. Our team has hands-on experience with embedded systems (ESP32, Raspberry Pi), real-time IoT pipelines, AI/ML model development, and full cloud-to-device integration. This cross-disciplinary capability means we can own a project end-to-end, from sensor firmware to a client-facing mobile dashboard.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Can I see examples of your previous work?</summary>
                                <div class="faq-a">
                                    <p>Yes. Our <a href="{{ route('projects') }}" class="faq-inline-link">Projects page</a> showcases case studies including FluxSense AI (a smart poultry monitoring system), a VFD motor remote-control system using MODBUS and Flutter, an Intel RealSense RGB-D 3D scanning pipeline, and CARE Lab automation systems. Each case study details the problem, our approach, and the outcome.</p>
                                </div>
                            </details>

                        </div>
                    </div>

                    {{-- ── CATEGORY 2: SERVICES ── --}}
                    <div class="faq-category" id="cat-services" data-cat="services">
                        <div class="faq-cat-header" data-reveal="fade-up">
                            <span class="faq-cat-icon" aria-hidden="true">⚙️</span>
                            <div>
                                <h2 class="faq-cat-title glitch-ready">Services</h2>
                                <p class="faq-cat-desc">What we build and how our service areas work.</p>
                            </div>
                        </div>

                        <div class="faq-list" data-stagger>

                            <details class="faq-item card">
                                <summary class="faq-q">What services does Cosmos Algos offer?</summary>
                                <div class="faq-a">
                                    <p>Our core service areas are: Cognitive IoT Systems, AI/ML Analytics, AI-Enabled Firmware &amp; Embedded Systems, Cloud Services &amp; SaaS Platforms, Mobile App Development, Web Application Development, Engineering Solutions, and Research &amp; Development. Each service can be delivered standalone or as part of a fully integrated system.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">What does your IoT development service include?</summary>
                                <div class="faq-a">
                                    <p>Our IoT service covers the full stack: sensor selection and hardware integration, embedded firmware (ESP32, Raspberry Pi, custom MCUs), real-time data pipelines, cloud storage and APIs (AWS, DynamoDB), and client-facing dashboards or mobile apps. We've built systems for agriculture, industrial motor control, and environmental monitoring. We handle secure connectivity, OTA firmware updates, and MODBUS/serial protocol integration.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Do you build custom AI and machine learning solutions?</summary>
                                <div class="faq-a">
                                    <p>Yes. We develop custom AI/ML solutions including data analytics pipelines, predictive models, computer vision systems (using OpenCV and Intel RealSense), and AI-powered automation. Our founder specialises in AI and machine learning, and we have hands-on production experience deploying models in both cloud and embedded environments.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">What platforms do you target for mobile app development?</summary>
                                <div class="faq-a">
                                    <p>We primarily build cross-platform mobile applications using Flutter, which means a single codebase delivers native-quality apps on both iOS and Android. We also have experience building Android-native apps and integrating mobile apps with hardware devices via Bluetooth, Wi-Fi, and REST APIs.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Can you build a complete SaaS platform from scratch?</summary>
                                <div class="faq-a">
                                    <p>Absolutely. We have experience designing and building multi-tenant SaaS platforms with Laravel backends, role-based access control, RESTful APIs with full OpenAPI documentation, real-time data ingestion, and analytics dashboards. We follow an API-first architecture so your platform can support web, mobile, and third-party integrations from day one.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Do you offer Research &amp; Development (R&amp;D) as a service?</summary>
                                <div class="faq-a">
                                    <p>Yes. We have an active R&amp;D division with ties to university research labs. We take on exploratory projects in computer vision, edge AI, 3D point cloud processing, and novel embedded system architectures. If you have a technically ambitious idea that isn't yet a defined product, we can help you scope, prototype, and validate it.</p>
                                </div>
                            </details>

                        </div>
                    </div>

                    {{-- ── CATEGORY 3: PROCESS & WORKFLOW ── --}}
                    <div class="faq-category" id="cat-process" data-cat="process">
                        <div class="faq-cat-header" data-reveal="fade-up">
                            <span class="faq-cat-icon" aria-hidden="true">🗺️</span>
                            <div>
                                <h2 class="faq-cat-title glitch-ready">Process &amp; Workflow</h2>
                                <p class="faq-cat-desc">How we work — from first contact to final delivery.</p>
                            </div>
                        </div>

                        <div class="faq-list" data-stagger>

                            <details class="faq-item card">
                                <summary class="faq-q">What does the project process look like from start to finish?</summary>
                                <div class="faq-a">
                                    <p>Our process has four clear phases: (1) <strong>Discovery</strong> — a free consultation call to understand your goals and constraints; (2) <strong>Proposal &amp; Scoping</strong> — a detailed technical proposal with timeline, stack, and fixed pricing; (3) <strong>Development</strong> — iterative builds with regular demos and check-ins; (4) <strong>Delivery &amp; Handover</strong> — testing, documentation, deployment, and a support window.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">How long does a typical project take?</summary>
                                <div class="faq-a">
                                    <p>Timelines vary by scope. A focused mobile app or IoT integration typically takes 6–12 weeks. A full SaaS platform or embedded firmware system can range from 3–6 months. Projects with R&amp;D or novel hardware components may take longer. We define an accurate timeline during the proposal phase, and we stick to it.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">How do you handle communication during a project?</summary>
                                <div class="faq-a">
                                    <p>Every project has a dedicated point of contact. We hold scheduled progress calls (weekly or bi-weekly depending on project pace), share progress via a project management tool, and are reachable over email or messaging for day-to-day questions. You are never left in the dark about the state of your project.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Do you work with agile or fixed-scope methodology?</summary>
                                <div class="faq-a">
                                    <p>We adapt to your preference. For well-defined projects, we use a fixed-scope, milestone-based approach so you know exactly what you're getting at each stage. For exploratory or evolving projects, we use an agile sprint model with bi-weekly deliverables. We discuss and agree on the methodology during scoping so there are no surprises.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">What information should I prepare before our first call?</summary>
                                <div class="faq-a">
                                    <p>A rough description of the problem you want to solve is enough to start. If you have technical requirements documents, existing system diagrams, preferred technologies, or competitor references, bring those — but they are absolutely not required. The discovery call is designed to help us extract that information together.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Will I own the code and intellectual property when the project is complete?</summary>
                                <div class="faq-a">
                                    <p>Yes. Full intellectual property ownership transfers to you upon final payment. This is written explicitly into every contract. We retain no rights to your codebase, designs, or proprietary data after handover.</p>
                                </div>
                            </details>

                        </div>
                    </div>

                    {{-- ── CATEGORY 4: TECHNOLOGY ── --}}
                    <div class="faq-category" id="cat-technology" data-cat="technology">
                        <div class="faq-cat-header" data-reveal="fade-up">
                            <span class="faq-cat-icon" aria-hidden="true">💻</span>
                            <div>
                                <h2 class="faq-cat-title glitch-ready">Technology</h2>
                                <p class="faq-cat-desc">Our tech stack, tools, and technical capabilities.</p>
                            </div>
                        </div>

                        <div class="faq-list" data-stagger>

                            <details class="faq-item card">
                                <summary class="faq-q">What programming languages and frameworks do you use?</summary>
                                <div class="faq-a">
                                    <p>Our primary languages are Python, PHP, C++, JavaScript, and Dart. On the backend we use Laravel (PHP) as our main framework, with Django and Flask for Python-heavy services. For mobile we use Flutter (Dart). On the hardware side we write firmware in C++ for ESP32 and similar microcontrollers. For data and AI we rely heavily on Python with NumPy, OpenCV, Open3D, TensorFlow, and scikit-learn.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">What cloud platforms and infrastructure do you work with?</summary>
                                <div class="faq-a">
                                    <p>We are an AWS Partner and primarily work within the AWS ecosystem — including EC2, Lambda, DynamoDB, S3, and IoT Core. We can also work with DigitalOcean, Hetzner, or any cloud environment your organisation already uses. For containerisation we work with Docker and can integrate with CI/CD pipelines.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">What embedded hardware platforms do you support?</summary>
                                <div class="faq-a">
                                    <p>We have hands-on production experience with ESP32 (Wi-Fi/BLE), Raspberry Pi (Linux-based edge computing), Arduino, Intel RealSense D435i (RGB-D depth sensing), and MODBUS-connected industrial devices (PLCs, VFDs). We also have experience with PCB design for custom hardware prototypes.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">How do you handle data security and privacy in IoT systems?</summary>
                                <div class="faq-a">
                                    <p>Security is designed in from the start, not bolted on after. We use TLS/HTTPS for all data in transit, encrypted credentials, token-based API authentication (Laravel Sanctum / JWT), and role-based access control. For IoT endpoints, devices authenticate via unique certificates and communicate over secured MQTT or HTTPS channels. We never store sensitive data in device firmware.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Can you integrate with existing systems and third-party APIs?</summary>
                                <div class="faq-a">
                                    <p>Yes, this is a common requirement. We routinely integrate with third-party REST APIs, Webhook systems, MODBUS/serial industrial protocols, MQTT brokers, payment gateways, and communication services (email, SMS, push notifications). If it has a documented API or protocol, we can integrate with it.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Do you provide API documentation and technical handover materials?</summary>
                                <div class="faq-a">
                                    <p>Always. Every API we build is documented in OpenAPI (Swagger) format and accompanied by a Postman collection. We also deliver inline code documentation, architecture diagrams, deployment guides, and a handover README. Your team should be able to maintain and extend the codebase confidently after we hand over.</p>
                                </div>
                            </details>

                        </div>
                    </div>

                    {{-- ── CATEGORY 5: PRICING & CONTRACTS ── --}}
                    <div class="faq-category" id="cat-pricing" data-cat="pricing">
                        <div class="faq-cat-header" data-reveal="fade-up">
                            <span class="faq-cat-icon" aria-hidden="true">💰</span>
                            <div>
                                <h2 class="faq-cat-title glitch-ready">Pricing &amp; Contracts</h2>
                                <p class="faq-cat-desc">Transparent answers about cost, payment, and agreements.</p>
                            </div>
                        </div>

                        <div class="faq-list" data-stagger>

                            <details class="faq-item card">
                                <summary class="faq-q">How do you price your projects?</summary>
                                <div class="faq-a">
                                    <p>We offer both fixed-price and time-and-materials (T&amp;M) pricing depending on project type. Fixed-price suits well-defined scopes — you know the cost upfront with no surprises. T&amp;M works better for exploratory, R&amp;D, or evolving projects where scope may change. We provide a full cost breakdown in every proposal so you can see exactly what you are paying for.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Do you offer a free consultation?</summary>
                                <div class="faq-a">
                                    <p>Yes. Every engagement starts with a free 30-minute discovery call. There is no obligation to proceed. We use that call to understand your project, answer your questions, and determine whether we are the right fit. If we are, we follow up with a detailed written proposal within 3–5 business days.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Can you work within a fixed budget?</summary>
                                <div class="faq-a">
                                    <p>Yes. If your budget is fixed, we scope the project to fit it — prioritising the highest-value features first and phasing lower-priority items into future iterations. We are transparent if a scope cannot realistically fit a given budget, and we will always recommend the most cost-effective approach rather than overpromising.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">What are your payment terms?</summary>
                                <div class="faq-a">
                                    <p>Standard payment terms are structured around project milestones: an initial deposit to start work, intermediate payments at agreed milestones, and a final payment on delivery. This structure protects both parties — you don't pay for work not done, and we can sustain delivery quality throughout the engagement. Specific terms are agreed in the contract before work begins.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Are there any hidden costs I should be aware of?</summary>
                                <div class="faq-a">
                                    <p>No. Our proposals include all costs — development, design, testing, deployment, and documentation. Third-party costs (e.g., cloud hosting, API subscriptions, hardware components) are itemised separately and clearly labelled as pass-through costs. We never add fees that weren't in the signed proposal without your prior approval.</p>
                                </div>
                            </details>

                        </div>
                    </div>

                    {{-- ── CATEGORY 6: SUPPORT & MAINTENANCE ── --}}
                    <div class="faq-category" id="cat-support" data-cat="support">
                        <div class="faq-cat-header" data-reveal="fade-up">
                            <span class="faq-cat-icon" aria-hidden="true">🛡️</span>
                            <div>
                                <h2 class="faq-cat-title glitch-ready">Support &amp; Maintenance</h2>
                                <p class="faq-cat-desc">What happens after your project goes live.</p>
                            </div>
                        </div>

                        <div class="faq-list" data-stagger>

                            <details class="faq-item card">
                                <summary class="faq-q">Do you offer post-launch support?</summary>
                                <div class="faq-a">
                                    <p>Yes. All projects include a post-launch support window (typically 30–60 days) during which we fix any bugs or issues that arise at no additional charge. After that, we offer ongoing maintenance packages that cover security updates, dependency management, performance monitoring, and minor feature requests on a monthly retainer basis.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">What is your response time for critical bugs or outages?</summary>
                                <div class="faq-a">
                                    <p>For clients on a maintenance retainer, critical issues (system-down scenarios) are responded to within 4 business hours. Non-critical bugs are addressed within 1–2 business days. For clients not on a retainer, we offer priority response on a case-by-case basis. We always try to be available when it matters most.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Can I make changes or add features after the project is delivered?</summary>
                                <div class="faq-a">
                                    <p>Absolutely. We encourage planning for future iterations from the start — it informs architectural decisions that make future changes easier and cheaper. Change requests are scoped, costed, and approved before we begin any additional work. Many clients return to us for Phase 2 enhancements, and we're always ready to continue from where we left off.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Will my team be able to maintain the codebase without you?</summary>
                                <div class="faq-a">
                                    <p>Yes — that is a design goal. We write clean, well-commented, documented code and deliver full handover documentation including architecture diagrams, API specs, deployment guides, and environment setup instructions. We also offer optional knowledge-transfer sessions where we walk your internal team through the codebase. Your independence after delivery is important to us.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Do you monitor live systems after deployment?</summary>
                                <div class="faq-a">
                                    <p>For clients on a maintenance retainer, we set up uptime monitoring, error tracking, and performance dashboards as part of the service. For IoT deployments specifically, we can configure alerting for device connectivity drops, sensor anomalies, or API error spikes. Monitoring setup is included by default for SaaS and IoT platform projects.</p>
                                </div>
                            </details>

                        </div>
                    </div>

                    {{-- ── CATEGORY 7: COMPANY & TEAM ── --}}
                    <div class="faq-category" id="cat-company" data-cat="company">
                        <div class="faq-cat-header" data-reveal="fade-up">
                            <span class="faq-cat-icon" aria-hidden="true">🚀</span>
                            <div>
                                <h2 class="faq-cat-title glitch-ready">Company &amp; Team</h2>
                                <p class="faq-cat-desc">About the people and culture behind Cosmos Algos.</p>
                            </div>
                        </div>

                        <div class="faq-list" data-stagger>

                            <details class="faq-item card">
                                <summary class="faq-q">Who founded Cosmos Algos?</summary>
                                <div class="faq-a">
                                    <p>Cosmos Algos was founded by Abdullah Abid — a software engineer and AI specialist based in Bahawalpur, Pakistan. Abdullah holds a Bachelor's degree in Artificial Intelligence from The Islamia University of Bahawalpur and has hands-on experience spanning backend API development, embedded systems, computer vision, and full-stack product engineering. He previously worked as a Software Developer at CARE (Center of Automation, Robotics, and Embedded Systems) and as a Teacher Assistant at Deep Embed.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">How experienced is the Cosmos Algos team?</summary>
                                <div class="faq-a">
                                    <p>The team has been active since 2020 and has delivered 20+ projects across IoT, SaaS, mobile, and embedded systems. Our experience spans academic research (CARE Lab), client product development, and internal R&amp;D. The founding team combines AI specialisation, backend engineering, mobile development, and hardware integration — a breadth that most small agencies cannot match.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">What is the culture and working style at Cosmos Algos?</summary>
                                <div class="faq-a">
                                    <p>We are a remote-first, async-friendly team that values precision, ownership, and continuous learning. We approach every project with an architecture-first mindset — thinking about long-term maintainability, scalability, and security before writing the first line of code. We are direct communicators: no unnecessary meetings, no vague status updates, and no surprises on timelines or costs.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Do you have partnerships with technology vendors?</summary>
                                <div class="faq-a">
                                    <p>Yes. We are an AWS Partner and have working relationships with hardware distributors including Avnet and Microchip Technology. These partnerships give us access to technical support resources, discounted pricing on components for hardware projects, and early access to new modules and development kits.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Is Cosmos Algos open to long-term partnerships or retainer arrangements?</summary>
                                <div class="faq-a">
                                    <p>Yes, and we actively prefer them. Long-term partnerships allow us to deeply understand your business domain, move faster on subsequent projects, and provide proactive technical guidance rather than just reactive development. We offer monthly retainer arrangements for clients who want a dedicated allocation of engineering time without committing to a specific project scope upfront.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">How can I stay updated on what Cosmos Algos is building?</summary>
                                <div class="faq-a">
                                    <p>Follow us on LinkedIn and GitHub where we share project updates, technical insights, and company news. You can also subscribe to our newsletter from the homepage. For a more direct conversation about what we're working on, feel free to <a href="{{ route('contact') }}" class="faq-inline-link">reach out</a> — we're always happy to talk technology.</p>
                                </div>
                            </details>

                        </div>
                    </div>

                    {{-- Empty state for search --}}
                    <div class="faq-empty-state" id="faqEmpty" style="display:none;">
                        <div class="faq-empty-icon" aria-hidden="true">🔭</div>
                        <h3>No results found</h3>
                        <p>We couldn't find a question matching your search. Try different keywords or <a href="{{ route('contact') }}" class="faq-inline-link">ask us directly</a>.</p>
                    </div>

                </div>
                {{-- /faq-main --}}

            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
         CTA BANNER
    ═══════════════════════════════════════════ --}}
    <section class="section-lg faq-cta-section">
        <div class="container">
            <div class="faq-cta-inner" data-reveal="zoom-in">
                <div class="faq-cta-bg" aria-hidden="true"><div class="faq-cta-orb"></div></div>
                <span class="tag-label">Still have questions?</span>
                <h2 class="faq-cta-h2 glitch-ready">Can't Find What You're Looking For?</h2>
                <p class="faq-cta-sub">Send us a message and we'll get back to you with a personal, detailed answer within 24 hours — no bots, no templates.</p>
                <div class="faq-cta-actions">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Ask Us a Question ↗</a>
                    <a href="{{ route('services') }}" class="btn btn-ghost">Explore Our Services</a>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        (function () {
            'use strict';

            /* ── elements ── */
            const searchInput  = document.getElementById('faqSearch');
            const searchClear  = document.getElementById('faqSearchClear');
            const searchHint   = document.getElementById('faqSearchHint');
            const catBtns      = document.querySelectorAll('.faq-cat-btn');
            const categories   = document.querySelectorAll('.faq-category');
            const items        = document.querySelectorAll('.faq-item');
            const emptyState   = document.getElementById('faqEmpty');
            const sidebarLinks = document.querySelectorAll('.faq-sidebar-link');

            /* ─────────────────────────────────────────
               CATEGORY FILTER
            ───────────────────────────────────────── */
            catBtns.forEach(btn => {
                btn.addEventListener('click', function () {
                    const cat = this.dataset.cat;

                    catBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');

                    // clear search when switching categories
                    searchInput.value = '';
                    searchClear.style.display = 'none';
                    searchHint.style.display  = 'none';
                    emptyState.style.display  = 'none';
                    items.forEach(i => i.style.display = '');

                    categories.forEach(c => {
                        c.style.display = (cat === 'all' || c.dataset.cat === cat) ? '' : 'none';
                    });
                });
            });

            /* ─────────────────────────────────────────
               SEARCH
            ───────────────────────────────────────── */
            function runSearch() {
                const q = searchInput.value.trim().toLowerCase();

                // show / hide clear button
                searchClear.style.display = q.length > 0 ? 'flex' : 'none';

                if (q.length === 0) {
                    categories.forEach(c => c.style.display = '');
                    items.forEach(i => i.style.display = '');
                    searchHint.style.display = 'none';
                    emptyState.style.display = 'none';
                    return;
                }

                // reset category filter buttons to "all"
                catBtns.forEach(b => b.classList.remove('active'));
                document.querySelector('[data-cat="all"]').classList.add('active');
                categories.forEach(c => c.style.display = '');

                let visibleCount = 0;

                items.forEach(item => {
                    const questionText = item.querySelector('.faq-q')?.textContent.toLowerCase() || '';
                    const answerText   = item.querySelector('.faq-a')?.textContent.toLowerCase() || '';
                    const matches      = questionText.includes(q) || answerText.includes(q);
                    item.style.display = matches ? '' : 'none';
                    if (matches) visibleCount++;
                });

                // hide categories with no visible items
                categories.forEach(cat => {
                    const hasVisible = [...cat.querySelectorAll('.faq-item')].some(i => i.style.display !== 'none');
                    cat.style.display = hasVisible ? '' : 'none';
                });

                // update hint
                searchHint.style.display = 'block';
                searchHint.textContent   = visibleCount > 0
                    ? visibleCount + ' result' + (visibleCount === 1 ? '' : 's') + ' found'
                    : '';

                emptyState.style.display = visibleCount === 0 ? 'flex' : 'none';
            }

            searchInput.addEventListener('input', runSearch);

            searchClear.addEventListener('click', function () {
                searchInput.value = '';
                runSearch();
                searchInput.focus();
            });

            /* ─────────────────────────────────────────
               ONE-OPEN-AT-A-TIME accordion per category
            ───────────────────────────────────────── */
            items.forEach(item => {
                item.addEventListener('toggle', function () {
                    if (!item.open) return;
                    // close siblings in same .faq-list
                    const siblings = item.closest('.faq-list')?.querySelectorAll('.faq-item');
                    siblings?.forEach(s => { if (s !== item) s.removeAttribute('open'); });
                });
            });

            /* ─────────────────────────────────────────
               ACTIVE SIDEBAR LINK on scroll
            ───────────────────────────────────────── */
            const catSections = document.querySelectorAll('.faq-category[id]');

            const sidebarIO = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const id = '#' + entry.target.id;
                        sidebarLinks.forEach(l => l.classList.toggle('active', l.getAttribute('href') === id));
                    }
                });
            }, { rootMargin: '-30% 0px -60% 0px' });

            catSections.forEach(s => sidebarIO.observe(s));

            /* ─────────────────────────────────────────
               SMOOTH SCROLL for sidebar links
            ───────────────────────────────────────── */
            sidebarLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        // reset category filter to show all
                        catBtns.forEach(b => b.classList.remove('active'));
                        document.querySelector('[data-cat="all"]').classList.add('active');
                        categories.forEach(c => c.style.display = '');
                        items.forEach(i => i.style.display = '');
                    }
                });
            });

        })();
    </script>
@endpush
