@extends('layouts.app')

@section('title', 'Careers | Cosmos Algos')
@section('meta_description', 'Work with Cosmos Algos on IoT, embedded systems, computer vision, and SaaS engineering. Current openings and speculative applications.')

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
            <span class="tag-label">Work With Us</span>
            <h1 class="page-hero-title">Engineering Work, <span class="hero-h1-accent">Done Properly</span></h1>
            <p class="lead" style="max-width:620px;margin-top:1.2rem;">
                Cosmos Algos is a small engineering company in Bahawalpur working on IoT platforms,
                embedded systems, computer vision, and SaaS backends. We hire infrequently and
                carefully. When there is an opening, it will be listed here.
            </p>
            <div class="hero-cta-row" style="margin-top:2rem;">
                <a href="#open-roles" class="btn btn-primary">Current Openings</a>
                <a href="#culture" class="btn btn-ghost">How We Work</a>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════
         WHY COSMOS ALGOS
    ═══════════════════════════════════ --}}
    <section class="section section-alt section-lg" id="culture">
        <div class="container">
            <div class="section-head" data-reveal="up">
                <span class="tag-label">How We Work</span>
                <h2>What the Work Is Actually Like</h2>
            </div>

            <div class="careers-perks-grid" data-reveal-group>
                <div class="careers-perk card">
                    <span class="careers-perk-icon">🚀</span>
                    <h3>Systems, Not Demos</h3>
                    <p>The work is judged by whether it operates in the field — in industrial, agricultural, and research settings, not just on a development machine.</p>
                </div>
                <div class="careers-perk card">
                    <span class="careers-perk-icon">🧠</span>
                    <h3>Across the Full Stack</h3>
                    <p>Backend, embedded, mobile, AI, cloud — you get exposure across the stack. We don't believe in boxing engineers into a single layer.</p>
                </div>
                <div class="careers-perk card">
                    <span class="careers-perk-icon">📈</span>
                    <h3>Direct Ownership</h3>
                    <p>A small company means less layering. You would own features end-to-end and see the consequences of your decisions.</p>
                </div>
                <div class="careers-perk card">
                    <span class="careers-perk-icon">🌍</span>
                    <h3>Location &amp; Arrangement</h3>
                    <p>Based in Bahawalpur, Pakistan. Whether a role is on-site, hybrid, or remote depends on the work and will be stated in the listing.</p>
                </div>
                <div class="careers-perk card">
                    <span class="careers-perk-icon">🔬</span>
                    <h3>Applied Technology</h3>
                    <p>Python, Laravel, Flutter, ESP32/STM32, OpenCV, Open3D, Intel RealSense, and AWS — chosen for the problem, not for the logo.</p>
                </div>
                <div class="careers-perk card">
                    <span class="careers-perk-icon">🤝</span>
                    <h3>No Bureaucracy</h3>
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
                    <h2>What We Value</h2>
                    <p>
                        We care more about how someone works than the title they held. The
                        qualities below matter more than a perfect keyword match on a CV.
                    </p>
                    <p class="secondary-para">
                        If you are self-driven, can point to work you have actually built, and care
                        about how your code behaves under real constraints, you would likely fit.
                    </p>
                </div>
                <div class="apart-list">
                    <div class="apart-item">
                        <span class="apart-check">✓</span>
                        <div>
                            <strong>Builder's Mindset</strong>
                            <p>You learn by making things and can point to something you have built — a project, a tool, or a system in production.</p>
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

            <div class="careers-open-app card" data-reveal="up">
                <span class="careers-open-icon">📭</span>
                <div>
                    <h3>No open positions are listed right now.</h3>
                    <p>
                        We are a small company and do not always have openings. When a role is
                        available, it will be posted here with the work arrangement, requirements,
                        and application instructions. There are no hidden or unlisted roles.
                    </p>
                </div>
                <a href="mailto:{{ $company['email'] }}?subject=Speculative%20Application"
                   class="btn btn-ghost">Send a Speculative Application</a>
            </div>

            <div class="careers-open-app card" data-reveal="up">
                <span class="careers-open-icon">💡</span>
                <div>
                    <h3>Speculative Applications</h3>
                    <p>
                        If you want to be considered for future work, send a short note, your CV or
                        portfolio, and a link to something you built. Relevant areas include
                        Laravel/PHP, Python, Flutter, embedded C/C++, computer vision, and IoT
                        backends. We cannot promise a reply to every application, but we do read them.
                    </p>
                </div>
                <a href="{{ route('contact') }}" class="btn btn-ghost">Contact Us</a>
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
                <p class="section-subhead">A straightforward process, described here so expectations are clear.</p>
            </div>

            <div class="careers-process-steps" data-reveal-group>
                <div class="careers-process-step">
                    <div class="careers-process-num">01</div>
                    <h3>Apply</h3>
                    <p>Send us your portfolio, GitHub, or a message explaining what you've built and what you want to work on.</p>
                </div>
                <div class="careers-process-connector"></div>
                <div class="careers-process-step">
                    <div class="careers-process-num">02</div>
                    <h3>Short Chat</h3>
                    <p>A short call to talk about your background, what we're building, and whether there's a strong mutual fit.</p>
                </div>
                <div class="careers-process-connector"></div>
                <div class="careers-process-step">
                    <div class="careers-process-num">03</div>
                    <h3>Technical Exercise</h3>
                    <p>A short exercise relevant to the role, with the scope and time commitment agreed in advance.</p>
                </div>
                <div class="careers-process-connector"></div>
                <div class="careers-process-step">
                    <div class="careers-process-num">04</div>
                    <h3>Offer</h3>
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
