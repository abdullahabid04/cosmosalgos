@extends('layouts.app')

@section('title', 'Careers | Cosmos Algos')
@section('meta_description', 'Join Cosmos Algos. We are looking for engineers, problem-solvers, and builders who want to work on real IoT, AI, and SaaS products from Pakistan.')

@section('content')

    {{-- ═══════════════════════════════════
         HERO
    ═══════════════════════════════════ --}}
    <section class="page-hero" id="careers-hero">
        <div class="page-hero-bg" aria-hidden="true">
            <div class="hero-orb hero-orb-1"></div>
            <div class="hero-orb hero-orb-2"></div>
        </div>
        <div class="container">
            <span class="tag-label">Join the Team</span>
            <h1 class="page-hero-title">Build the Future <span class="hero-h1-accent">With Us</span></h1>
            <p class="lead" style="max-width:620px;margin-top:1.2rem;">
                We are a small, focused team shipping real products — IoT platforms, AI pipelines,
                embedded systems, and SaaS tools. If you build things and care about quality, you'll fit right in.
            </p>
            <div class="hero-cta-row" style="margin-top:2rem;">
                <a href="#open-roles" class="btn btn-primary">View Open Roles</a>
                <a href="#culture" class="btn btn-ghost">Our Culture</a>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════
         WHY COSMOS ALGOS
    ═══════════════════════════════════ --}}
    <section class="section section-alt section-lg" id="culture">
        <div class="container">
            <div class="section-head" data-reveal="up">
                <span class="tag-label">Why Us</span>
                <h2>Why Work at Cosmos Algos</h2>
            </div>

            <div class="careers-perks-grid" data-reveal-group>
                <div class="careers-perk card">
                    <span class="careers-perk-icon">🚀</span>
                    <h4>Real Products, Real Impact</h4>
                    <p>You'll work on systems that are deployed and operating — not demo prototypes. Your code goes into farms, factories, and research labs.</p>
                </div>
                <div class="careers-perk card">
                    <span class="careers-perk-icon">🧠</span>
                    <h4>Across the Full Stack</h4>
                    <p>Backend, embedded, mobile, AI, cloud — you get exposure across the stack. We don't believe in boxing engineers into a single layer.</p>
                </div>
                <div class="careers-perk card">
                    <span class="careers-perk-icon">📈</span>
                    <h4>Fast Growth, Fast Learning</h4>
                    <p>Small team means big ownership. You'll make decisions, own features end-to-end, and grow faster than in a large org.</p>
                </div>
                <div class="careers-perk card">
                    <span class="careers-perk-icon">🌍</span>
                    <h4>Remote-Friendly</h4>
                    <p>Based in Bahawalpur, Pakistan, with a remote-first mindset. We care about output and quality — not where you sit.</p>
                </div>
                <div class="careers-perk card">
                    <span class="careers-perk-icon">🔬</span>
                    <h4>Cutting-Edge Tech</h4>
                    <p>AI/ML, IoT, ESP32, Intel RealSense, AWS serverless — we work with technologies that are actually interesting to build with.</p>
                </div>
                <div class="careers-perk card">
                    <span class="careers-perk-icon">🤝</span>
                    <h4>No Bureaucracy</h4>
                    <p>Direct communication, fast decisions. If you have a better approach, say so. Good ideas win regardless of seniority.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════
         WHAT WE VALUE
    ═══════════════════════════════════ --}}
    <section class="section section-lg" data-reveal="up">
        <div class="container">
            <div class="text-two-col">
                <div>
                    <span class="tag-label">Our Standards</span>
                    <h2>What We Look For in Every Hire</h2>
                    <p>
                        We don't hire for job titles. We hire for qualities that make someone
                        exceptional to work with — regardless of years of experience.
                    </p>
                    <p class="secondary-para">
                        If you're self-driven, build things in your spare time, care deeply about how
                        your code works under the hood, and want to grow fast — you'll thrive here.
                    </p>
                </div>
                <div class="apart-list">
                    <div class="apart-item">
                        <span class="apart-check">✓</span>
                        <div>
                            <strong>Builder's Mindset</strong>
                            <p>You code outside of work. You've shipped side projects. You learn by making things.</p>
                        </div>
                    </div>
                    <div class="apart-item">
                        <span class="apart-check">✓</span>
                        <div>
                            <strong>Problem-First Thinking</strong>
                            <p>You understand the problem before reaching for a solution. You ask "why" before "how".</p>
                        </div>
                    </div>
                    <div class="apart-item">
                        <span class="apart-check">✓</span>
                        <div>
                            <strong>Reliability Over Brilliance</strong>
                            <p>You do what you say you'll do. You flag blockers early. You ship, then iterate.</p>
                        </div>
                    </div>
                    <div class="apart-item">
                        <span class="apart-check">✓</span>
                        <div>
                            <strong>Clear Communication</strong>
                            <p>You write clearly, update without being asked, and ask good questions when stuck.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════
         OPEN ROLES
    ═══════════════════════════════════ --}}
    <section class="section section-alt section-lg" id="open-roles">
        <div class="container">
            <div class="section-head" data-reveal="up">
                <span class="tag-label">Open Positions</span>
                <h2>Current Openings</h2>
            </div>

            <div class="careers-roles-list" data-reveal-group>

                <div class="careers-role-card card">
                    <div class="careers-role-left">
                        <span class="careers-role-icon">🖥️</span>
                        <div>
                            <h3 class="careers-role-title">Backend Software Engineer</h3>
                            <p class="careers-role-desc">
                                Build and maintain APIs, SaaS platform backends, and data pipelines using Laravel and PHP.
                                You'll work on IoT device APIs, real-time data aggregation, and multi-tenant architectures.
                            </p>
                            <div class="careers-role-tags">
                                <span class="badge">Laravel</span>
                                <span class="badge">PHP</span>
                                <span class="badge">MySQL</span>
                                <span class="badge">REST APIs</span>
                                <span class="badge">AWS</span>
                            </div>
                        </div>
                    </div>
                    <div class="careers-role-meta">
                        <span class="careers-role-type">Full-time / Remote</span>
                        <span class="careers-role-level">Mid–Senior</span>
                        <a href="{{ route('contact') }}" class="btn btn-primary" style="margin-top:1rem;font-size:.82rem;padding:.5rem 1.2rem;">Apply Now</a>
                    </div>
                </div>

                <div class="careers-role-card card">
                    <div class="careers-role-left">
                        <span class="careers-role-icon">📱</span>
                        <div>
                            <h3 class="careers-role-title">Flutter Mobile Developer</h3>
                            <p class="careers-role-desc">
                                Build cross-platform mobile apps for IoT device control and monitoring. You'll connect
                                Flutter UIs to real-time hardware data, REST APIs, and cloud backends.
                            </p>
                            <div class="careers-role-tags">
                                <span class="badge">Flutter</span>
                                <span class="badge">Dart</span>
                                <span class="badge">REST APIs</span>
                                <span class="badge">BLoC</span>
                                <span class="badge">IoT</span>
                            </div>
                        </div>
                    </div>
                    <div class="careers-role-meta">
                        <span class="careers-role-type">Full-time / Remote</span>
                        <span class="careers-role-level">Junior–Mid</span>
                        <a href="{{ route('contact') }}" class="btn btn-primary" style="margin-top:1rem;font-size:.82rem;padding:.5rem 1.2rem;">Apply Now</a>
                    </div>
                </div>

                <div class="careers-role-card card">
                    <div class="careers-role-left">
                        <span class="careers-role-icon">🤖</span>
                        <div>
                            <h3 class="careers-role-title">AI / ML Engineer</h3>
                            <p class="careers-role-desc">
                                Design and deploy ML inference pipelines for real-world IoT data — poultry growth prediction,
                                sensor anomaly detection, and computer vision tasks using Python and cloud infrastructure.
                            </p>
                            <div class="careers-role-tags">
                                <span class="badge">Python</span>
                                <span class="badge">ML Pipelines</span>
                                <span class="badge">OpenCV</span>
                                <span class="badge">AWS</span>
                                <span class="badge">IoT Data</span>
                            </div>
                        </div>
                    </div>
                    <div class="careers-role-meta">
                        <span class="careers-role-type">Contract / Remote</span>
                        <span class="careers-role-level">Mid–Senior</span>
                        <a href="{{ route('contact') }}" class="btn btn-primary" style="margin-top:1rem;font-size:.82rem;padding:.5rem 1.2rem;">Apply Now</a>
                    </div>
                </div>

                <div class="careers-role-card card">
                    <div class="careers-role-left">
                        <span class="careers-role-icon">🔌</span>
                        <div>
                            <h3 class="careers-role-title">Embedded Systems Engineer</h3>
                            <p class="careers-role-desc">
                                Develop firmware for ESP32 and similar microcontrollers, implement communication protocols
                                (MODBUS, UART, SPI), and integrate embedded hardware with cloud and mobile platforms.
                            </p>
                            <div class="careers-role-tags">
                                <span class="badge">ESP32</span>
                                <span class="badge">C / C++</span>
                                <span class="badge">MODBUS</span>
                                <span class="badge">UART / SPI</span>
                                <span class="badge">Firmware</span>
                            </div>
                        </div>
                    </div>
                    <div class="careers-role-meta">
                        <span class="careers-role-type">Full-time / On-site</span>
                        <span class="careers-role-level">Junior–Mid</span>
                        <a href="{{ route('contact') }}" class="btn btn-primary" style="margin-top:1rem;font-size:.82rem;padding:.5rem 1.2rem;">Apply Now</a>
                    </div>
                </div>

            </div>{{-- /careers-roles-list --}}

            {{-- Open application --}}
            <div class="careers-open-app card" data-reveal="up">
                <span class="careers-open-icon">💡</span>
                <div>
                    <h4>Don't See Your Role?</h4>
                    <p>We occasionally hire for roles not listed here. If you're exceptional at what you do and believe you'd add value, send us a message with your portfolio or GitHub.</p>
                </div>
                <a href="{{ route('contact') }}" class="btn btn-ghost">Send an Open Application</a>
            </div>

        </div>
    </section>

    {{-- ═══════════════════════════════════
         HIRING PROCESS
    ═══════════════════════════════════ --}}
    <section class="section section-lg" data-reveal="up">
        <div class="container">
            <div class="section-head-center">
                <span class="tag-label">Hiring Process</span>
                <h2>What to Expect</h2>
                <p class="section-subhead">Straightforward and respectful of your time. No trick questions, no weeks of silence.</p>
            </div>

            <div class="careers-process-steps" data-reveal-group>
                <div class="careers-process-step">
                    <div class="careers-process-num">01</div>
                    <h4>Apply</h4>
                    <p>Send us your portfolio, GitHub, or a message explaining what you've built and what you want to work on.</p>
                </div>
                <div class="careers-process-connector"></div>
                <div class="careers-process-step">
                    <div class="careers-process-num">02</div>
                    <h4>Short Chat</h4>
                    <p>A 30-minute call to talk about your background, what we're building, and whether there's a strong mutual fit.</p>
                </div>
                <div class="careers-process-connector"></div>
                <div class="careers-process-step">
                    <div class="careers-process-num">03</div>
                    <h4>Technical Task</h4>
                    <p>A small, paid take-home task relevant to actual work we do. No algorithmic puzzles for their own sake.</p>
                </div>
                <div class="careers-process-connector"></div>
                <div class="careers-process-step">
                    <div class="careers-process-num">04</div>
                    <h4>Offer</h4>
                    <p>If it's a match on both sides, we move fast. Clear offer, clear expectations, clear start date.</p>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        (function () {
            const io = new IntersectionObserver(entries => {
                entries.forEach(en => {
                    if (en.isIntersecting) {
                        en.target.classList.add('is-visible');
                        io.unobserve(en.target);
                    }
                });
            }, { threshold: 0.10 });
            document.querySelectorAll('[data-reveal], [data-reveal-group]').forEach(el => io.observe(el));
        })();
    </script>
@endpush
