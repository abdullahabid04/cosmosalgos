@extends('layouts.app')

@section('title', 'FAQ — ' . $company['name'])
@section('meta_description', 'Frequently asked questions about Cosmos Algos — our services, process, technology, pricing, IoT, AI/ML, embedded systems, mobile and web development.')
@section('og_title', 'FAQ — Cosmos Algos')
@section('og_description', 'Common questions about Cosmos Algos services, process, technology, and pricing.')

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
                <p class="faq-hero-sub">Common questions about working with Cosmos Algos — services, process, technology, and pricing. Can't find your answer? <a href="{{ route('contact') }}" class="faq-inline-link">Reach out directly.</a></p>
                <div class="faq-hero-stats" data-stagger>
                    <div class="faq-stat card">
                        <span class="faq-stat-num">7</span>
                        <span class="faq-stat-label">Categories</span>
                    </div>
                    <div class="faq-stat card">
                        <span class="faq-stat-num">39</span>
                        <span class="faq-stat-label">Questions Answered</span>
                    </div>
                    <div class="faq-stat card">
                        <span class="faq-stat-num">8–4</span>
                        <span class="faq-stat-label">Office Hours (PKT)</span>
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
                                    <p>Cosmos Algos is a technology company based in Bahawalpur, Pakistan. Founded by Abdullah Abid, we build advanced hardware and software solutions — from custom IoT systems and embedded firmware to cloud platforms, mobile apps, and web applications. We help businesses solve complex technical challenges and turn them into reliable, working systems.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Where is Cosmos Algos based, and do you work internationally?</summary>
                                <div class="faq-a">
                                    <p>Our headquarters are in Bahawalpur, Punjab, Pakistan. We work with clients on-site and remotely, and agree communication hours and channels before an engagement begins.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">What industries do you serve?</summary>
                                <div class="faq-a">
                                    <p>Documented work spans agriculture and livestock, industrial automation, energy and utilities, research and academic labs, defense-related test equipment through CARE Lab, logistics and ports, consumer IoT, and technology products. The common thread is a system that has to work outside a demo environment.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">What makes Cosmos Algos different from other software companies?</summary>
                                <div class="faq-a">
                                    <p>Most software firms work purely in software. We work across both worlds — hardware and software. The founder has hands-on experience with embedded systems (ESP32, Raspberry Pi), IoT pipelines, applied AI/ML, and cloud-to-device integration. That means one team can work from sensor firmware through to a client-facing dashboard, rather than handing the project between vendors.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Can I see examples of your previous work?</summary>
                                <div class="faq-a">
                                    <p>Yes. Our <a href="{{ route('projects') }}" class="faq-inline-link">Projects page</a> includes Flock Sense AI (broiler weight estimation from camera imagery, an extension of the Flock Sense poultry IoT platform), a VFD motor remote-control system using MODBUS and Flutter, an Intel RealSense RGB-D acquisition pipeline, and CARE Lab automation systems. Where a project was delivered through CARE Lab or a research contract, the attribution is stated.</p>
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
                                    <p>Our core service areas are: Embedded Systems &amp; Firmware; Industrial Automation &amp; Test Rigs; IoT Platforms &amp; Cloud Backends; AI &amp; Computer Vision; Mobile &amp; Desktop Applications; SaaS Product Engineering; Data Acquisition &amp; Visualisation; and Research, Prototyping &amp; Upgrades. A service can be delivered on its own or as part of a wider system.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">What does your IoT development service include?</summary>
                                <div class="faq-a">
                                    <p>Our IoT work spans sensor selection and hardware integration, embedded firmware (ESP32 and Raspberry Pi), data pipelines, cloud storage and APIs (AWS, DynamoDB), and client-facing dashboards or mobile apps. We've built systems for agriculture, industrial motor control, and environmental monitoring. Work has included device connectivity and MODBUS/serial protocol integration.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Do you build custom AI and machine learning solutions?</summary>
                                <div class="faq-a">
                                    <p>Yes. We work on applied AI/ML: data pipelines, computer vision (OpenCV and Intel RealSense), model evaluation, and inference integrated into desktop or web tools. The founder's degree is in artificial intelligence, and the work includes a computer-vision research contract at DeepEmbed Research Lab. Models are integrated where they fit the workflow, not added for their own sake.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">What platforms do you target for mobile app development?</summary>
                                <div class="faq-a">
                                    <p>We primarily build cross-platform mobile applications using Flutter, which gives one codebase for Android and iOS. Mobile clients have been integrated with hardware and backend services over Wi-Fi and REST APIs. Native Android work is considered where the platform requires it.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Can you build a complete SaaS platform from scratch?</summary>
                                <div class="faq-a">
                                    <p>Yes. We have experience with multi-tenant SaaS platforms using Laravel backends, role-based access control, RESTful APIs, data ingestion, and analytics dashboards. The architecture is agreed around the web, mobile, and third-party integrations the platform actually needs.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Do you offer Research &amp; Development (R&amp;D) as a service?</summary>
                                <div class="faq-a">
                                    <p>Yes. We take on applied R&amp;D work, with ties to university research labs. That has included exploratory work in computer vision, 3D point-cloud processing, and embedded systems. If an idea is not yet a defined product, we can help scope, prototype, and evaluate it.</p>
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
                                    <p>Our process has four clear phases: (1) <strong>Discovery</strong> — an initial conversation to understand your goals and constraints; (2) <strong>Proposal &amp; Scoping</strong> — a written technical proposal with timeline, stack, and pricing; (3) <strong>Development</strong> — iterative builds with regular demos and check-ins; (4) <strong>Delivery &amp; Handover</strong> — testing, documentation, deployment, and an agreed support window.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">How long does a typical project take?</summary>
                                <div class="faq-a">
                                    <p>Timelines vary by scope. A focused mobile app or IoT integration typically takes 6–12 weeks. A larger SaaS platform or embedded firmware system can range from 3–6 months. Projects with R&amp;D or novel hardware components may take longer. A timeline is agreed during the proposal phase; if the scope changes, the timeline is re-estimated rather than quietly ignored.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">How do you handle communication during a project?</summary>
                                <div class="faq-a">
                                    <p>Each engagement has an agreed point of contact. Progress calls and written updates are agreed at the start — the frequency depends on the project pace. Day-to-day questions can go by email or messaging, and the aim is that you know the current state of the work.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Do you work with agile or fixed-scope methodology?</summary>
                                <div class="faq-a">
                                    <p>We adapt to the project. For well-defined work, a fixed-scope, milestone-based approach makes the deliverables clear at each stage. For exploratory or evolving work, short delivery cycles work better. The methodology is discussed and agreed during scoping.</p>
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
                                    <p>Intellectual property is addressed in the contract. Our standard position is that ownership of the delivered codebase transfers on final payment, with any pre-existing or third-party components identified separately. The exact terms are confirmed in writing before work begins.</p>
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
                                    <p>Our primary languages are Python, PHP, C++, JavaScript, and Dart. Laravel (PHP) is the main backend framework, and Flutter (Dart) is used for cross-platform mobile apps. Firmware is written in C/C++ for ESP32, STM32, and similar microcontrollers. Python is used for data and vision work with NumPy, Pandas, OpenCV, Open3D, and scikit-learn.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">What cloud platforms and infrastructure do you work with?</summary>
                                <div class="faq-a">
                                    <p>We work primarily within the AWS ecosystem — including IoT Core, Lambda, DynamoDB, API Gateway, Cognito, EC2, and S3. We can also work in other cloud environments your organisation already uses. Docker is used where containerisation helps, and deployment can follow your existing workflow.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">What embedded hardware platforms do you support?</summary>
                                <div class="faq-a">
                                    <p>Hands-on work includes ESP32 (Wi-Fi/BLE), Raspberry Pi (Linux-based edge computing), STM32, FPGA, Intel RealSense D435i (RGB-D depth sensing), and MODBUS-connected industrial devices such as VFDs.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">How do you handle data security and privacy in IoT systems?</summary>
                                <div class="faq-a">
                                    <p>Security is considered during design rather than added at the end. Where the system requires it, we use TLS/HTTPS for data in transit, encrypted credentials, token-based API authentication (Laravel Sanctum or JWT), and role-based access control. Device authentication and transport security are agreed per deployment; not every project needs the same model.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Can you integrate with existing systems and third-party APIs?</summary>
                                <div class="faq-a">
                                    <p>Yes. Work has included third-party REST APIs, webhooks, MODBUS/serial industrial protocols, MQTT brokers, payment gateways, and communication services. Where a documented API or protocol exists, the integration can be assessed and scoped.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Do you provide API documentation and technical handover materials?</summary>
                                <div class="faq-a">
                                    <p>Where documentation is part of the agreed scope, APIs are documented with OpenAPI (Swagger) and Postman collections. Handover can also include architecture notes, deployment steps, and a README. The aim is that another engineer can maintain and extend the work without reverse-engineering it.</p>
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
                                    <p>We offer both fixed-price and time-and-materials (T&amp;M) pricing depending on the project. Fixed-price suits well-defined scopes, with the cost agreed upfront. T&amp;M works better for exploratory, R&amp;D, or evolving work where the scope may change. Proposals include a cost breakdown so the basis of the price is visible.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">How does a project start?</summary>
                                <div class="faq-a">
                                    <p>We start with a short discovery call to understand the project. There is no charge for that initial conversation and no obligation to proceed. If there is a fit, we agree the next steps and prepare a written proposal.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Can you work within a fixed budget?</summary>
                                <div class="faq-a">
                                    <p>If the budget is fixed, the project can be scoped to fit it — prioritising the highest-value features and phasing the rest. We will say so if a scope cannot realistically fit the budget, rather than agreeing to something undeliverable.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">What are your payment terms?</summary>
                                <div class="faq-a">
                                    <p>Payment terms are usually structured around project milestones: an initial deposit to start work, intermediate payments at agreed milestones, and a final payment on delivery. Specific terms are agreed in the contract before work begins.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Are there any hidden costs I should be aware of?</summary>
                                <div class="faq-a">
                                    <p>Proposals are intended to make the agreed costs explicit — development, design, testing, deployment, and documentation where included. Third-party costs such as cloud hosting, API subscriptions, and hardware are itemised separately as pass-through costs. Additional work is quoted and approved before it starts.</p>
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
                                    <p>Support terms are agreed in the contract. A post-launch support window can be included for defects found in the delivered scope, and ongoing maintenance can be arranged separately. The exact duration and scope are written into the agreement rather than assumed.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">What is your response time for critical bugs or outages?</summary>
                                <div class="faq-a">
                                    <p>Response targets are agreed in the support agreement. We do not publish a blanket SLA because a critical outage on a production platform and a minor cosmetic issue should not be treated the same way. For clients on a maintenance retainer, the escalation path and response windows are defined in writing.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Can I make changes or add features after the project is delivered?</summary>
                                <div class="faq-a">
                                    <p>Yes. Planning for future iterations early can make later changes cheaper, so it is worth discussing at the start. Change requests are scoped, costed, and approved before additional work begins. If a second phase is needed, it is treated as a new piece of work with its own scope.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Will my team be able to maintain the codebase without you?</summary>
                                <div class="faq-a">
                                    <p>That is a design goal. Documentation is part of the agreed scope, and the exact set depends on the project. It can include architecture notes, API references, deployment steps, and a handover session. The aim is that another engineer can pick up the work without reverse-engineering it.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Do you monitor live systems after deployment?</summary>
                                <div class="faq-a">
                                    <p>Monitoring can be configured as part of a support agreement. For IoT deployments that may include device-connectivity alerts, sensor-anomaly checks, and API error tracking. It is not switched on by default unless the engagement includes it.</p>
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
                                    <p>Cosmos Algos was founded by Abdullah Abid — a software engineer based in Bahawalpur, Pakistan. Abdullah is pursuing a Bachelor's degree in Artificial Intelligence at The Islamia University of Bahawalpur and has hands-on experience spanning backend API development, embedded systems, computer vision, and full-stack product engineering. He works as a Software Developer at CARE (Center of Automation, Robotics, and Embedded Systems) and has delivered computer-vision work under a research contract at DeepEmbed Research Lab.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">How experienced is the Cosmos Algos team?</summary>
                                <div class="faq-a">
                                    <p>The founder has been building software since 2020 and has contributed to {{ $stats['care_rnd_projects'] }} documented CARE Lab R&amp;D projects, {{ $stats['saas_platforms'] }} SaaS platforms, and research contracts in computer vision. That experience spans academic research, industrial automation, client product development, and internal R&amp;D.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">What is the culture and working style at Cosmos Algos?</summary>
                                <div class="faq-a">
                                    <p>We are a small, hands-on team. We value precision, ownership, and continuous learning, and we approach projects with maintenance in mind — thinking about how the system will be run and changed after delivery. We communicate directly: clear scope, honest status, and no invented metrics.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Do you have partnerships with technology vendors?</summary>
                                <div class="faq-a">
                                    <p>Our engineering is built on established platforms and vendor ecosystems — AWS for cloud, Espressif (ESP32), Raspberry Pi, and Intel RealSense for hardware, and the Laravel and Flutter communities for application development. Where a project needs component sourcing or vendor support, we work with the appropriate distributors and support channels.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">Is Cosmos Algos open to long-term partnerships or retainer arrangements?</summary>
                                <div class="faq-a">
                                    <p>Longer engagements can work well when there is a continuing stream of work. A retainer can be discussed where it fits both sides, with the allocation of engineering time and the boundaries written down. It is not the right arrangement for every project, and we will say so if a fixed scope makes more sense.</p>
                                </div>
                            </details>

                            <details class="faq-item card">
                                <summary class="faq-q">How can I stay updated on what Cosmos Algos is building?</summary>
                                <div class="faq-a">
                                    <p>Follow the founder on <a href="{{ $company['linkedin'] }}" class="faq-inline-link" target="_blank" rel="noopener">LinkedIn</a> for public project updates and engineering notes. This site does not run a newsletter or an embedded social feed. For a direct conversation, <a href="{{ route('contact') }}" class="faq-inline-link">reach out</a>.</p>
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
                <p class="faq-cta-sub">Send us a message and we'll reply personally during office hours — no bots, no templates.</p>
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
