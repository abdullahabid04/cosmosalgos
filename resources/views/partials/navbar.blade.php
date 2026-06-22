<header class="site-header" id="siteHeader">
    <div class="container nav-wrap">

        {{-- ── Brand ── --}}
        <a class="brand" href="{{ route('home') }}">
            <span class="brand-cosmos">Cosmos</span><span class="brand-algos">Algos</span>
        </a>

        {{-- ── Center nav ── --}}
        <nav class="nav-center" id="navMenu" aria-label="Main navigation">
            <ul class="nav-list">

                {{-- Home --}}
                <li>
                    <a href="{{ route('home') }}"
                        @class(['is-active' => request()->routeIs('home')])>
                        Home
                    </a>
                </li>

                {{-- Company dropdown --}}
                <li class="nav-item-dropdown" id="ddCompany">
                    <button class="nav-dropdown-trigger"
                            aria-haspopup="true"
                            aria-expanded="false"
                            aria-controls="ddCompanyPanel"
                        @class(['is-active' => request()->routeIs(
                            'about','history','mission-vision','culture','careers'
                        )])>
                        Company
                        <svg class="dd-chevron" width="10" height="10" viewBox="0 0 10 10" fill="none" aria-hidden="true">
                            <path d="M2 3.5L5 6.5L8 3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div class="nav-dropdown" id="ddCompanyPanel" role="region">
                        <ul>
                            <li>
                                <a href="{{ route('about') }}" @class(['is-active' => request()->routeIs('about')])>
                                    <span class="dd-icon">🏢</span>
                                    <span class="dd-text">
                                        <strong>About Us</strong>
                                        <small>Who we are & what we stand for</small>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('history') }}" @class(['is-active' => request()->routeIs('history')])>
                                    <span class="dd-icon">📅</span>
                                    <span class="dd-text">
                                        <strong>Our History</strong>
                                        <small>From 2020 to today</small>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('mission-vision') }}" @class(['is-active' => request()->routeIs('mission-vision')])>
                                    <span class="dd-icon">🎯</span>
                                    <span class="dd-text">
                                        <strong>Mission & Vision</strong>
                                        <small>Our purpose and direction</small>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="" @class(['is-active' => request()->routeIs('culture')])>
                                    <span class="dd-icon">🌱</span>
                                    <span class="dd-text">
                                        <strong>Culture</strong>
                                        <small>Values, environment & team life</small>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('careers') }}" @class(['is-active' => request()->routeIs('careers')])>
                                    <span class="dd-icon">💼</span>
                                    <span class="dd-text">
                                        <strong>Careers</strong>
                                        <small>Join the Cosmos Algos team</small>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Work dropdown --}}
                <li class="nav-item-dropdown" id="ddWork">
                    <button class="nav-dropdown-trigger"
                            aria-haspopup="true"
                            aria-expanded="false"
                            aria-controls="ddWorkPanel"
                        @class(['is-active' => request()->routeIs(
                            'services','projects','technologies','case-studies','industries'
                        )])>
                        Work
                        <svg class="dd-chevron" width="10" height="10" viewBox="0 0 10 10" fill="none" aria-hidden="true">
                            <path d="M2 3.5L5 6.5L8 3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div class="nav-dropdown" id="ddWorkPanel" role="region">
                        <ul>
                            <li>
                                <a href="{{ route('services') }}" @class(['is-active' => request()->routeIs('services')])>
                                    <span class="dd-icon">⚙️</span>
                                    <span class="dd-text">
                                        <strong>Services</strong>
                                        <small>What we build & deliver</small>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('projects') }}" @class(['is-active' => request()->routeIs('projects')])>
                                    <span class="dd-icon">🗂️</span>
                                    <span class="dd-text">
                                        <strong>Projects</strong>
                                        <small>Featured work & case portfolios</small>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('case-studies') }}" @class(['is-active' => request()->routeIs('case-studies')])>
                                    <span class="dd-icon">📊</span>
                                    <span class="dd-text">
                                        <strong>Case Studies</strong>
                                        <small>Deep-dive project breakdowns</small>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('technologies') }}" @class(['is-active' => request()->routeIs('technologies')])>
                                    <span class="dd-icon">🛠️</span>
                                    <span class="dd-text">
                                        <strong>Technologies</strong>
                                        <small>Our stack & tools</small>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('industries') }}" @class(['is-active' => request()->routeIs('industries')])>
                                    <span class="dd-icon">🏭</span>
                                    <span class="dd-text">
                                        <strong>Industries</strong>
                                        <small>Sectors we serve</small>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Insights dropdown --}}
                <li class="nav-item-dropdown" id="ddInsights">
                    <button class="nav-dropdown-trigger"
                            aria-haspopup="true"
                            aria-expanded="false"
                            aria-controls="ddInsightsPanel"
                        @class(['is-active' => request()->routeIs(
                            'blog','gallery','testimonials','faq','social'
                        )])>
                        Insights
                        <svg class="dd-chevron" width="10" height="10" viewBox="0 0 10 10" fill="none" aria-hidden="true">
                            <path d="M2 3.5L5 6.5L8 3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div class="nav-dropdown" id="ddInsightsPanel" role="region">
                        <ul>
                            <li>
                                <a href="" @class(['is-active' => request()->routeIs('blog')])>
                                    <span class="dd-icon">✍️</span>
                                    <span class="dd-text">
                                        <strong>Blog & News</strong>
                                        <small>Articles, updates & announcements</small>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="" @class(['is-active' => request()->routeIs('social')])>
                                    <span class="dd-icon">📣</span>
                                    <span class="dd-text">
                                        <strong>Social Feed</strong>
                                        <small>Latest posts from the team</small>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="" @class(['is-active' => request()->routeIs('gallery')])>
                                    <span class="dd-icon">🖼️</span>
                                    <span class="dd-text">
                                        <strong>Gallery</strong>
                                        <small>Events, team & behind the scenes</small>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('testimonials') }}" @class(['is-active' => request()->routeIs('testimonials')])>
                                    <span class="dd-icon">💬</span>
                                    <span class="dd-text">
                                        <strong>Testimonials</strong>
                                        <small>What our clients say</small>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('faq') }}" @class(['is-active' => request()->routeIs('faq')])>
                                    <span class="dd-icon">❓</span>
                                    <span class="dd-text">
                                        <strong>FAQ</strong>
                                        <small>Common questions answered</small>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Contact (standalone) --}}
                <li>
                    <a href="{{ route('contact') }}"
                        @class(['is-active' => request()->routeIs('contact')])>
                        Contact
                    </a>
                </li>

            </ul>
        </nav>

        {{-- ── Right: CTA + hamburger ── --}}
        <div class="nav-right">
            <a href="{{ route('contact') }}" class="btn-nav-cta">
                Get In Touch <span class="cta-arrow" aria-hidden="true">↗</span>
            </a>
            <button class="nav-toggle" id="navToggle"
                    aria-label="Toggle navigation"
                    aria-expanded="false">
                <span></span><span></span><span></span>
            </button>
        </div>

    </div>
</header>

<script>
    (function () {

        /* ── Scroll state ── */
        const header = document.getElementById('siteHeader');
        if (header) {
            const onScroll = () => header.classList.toggle('scrolled', window.scrollY > 50);
            window.addEventListener('scroll', onScroll, { passive: true });
            onScroll();
        }

        /* ── Mobile hamburger ── */
        const toggle = document.getElementById('navToggle');
        const menu   = document.getElementById('navMenu');
        if (toggle && menu) {
            toggle.addEventListener('click', () => {
                const open = toggle.classList.toggle('is-open');
                menu.classList.toggle('is-open', open);
                toggle.setAttribute('aria-expanded', String(open));
            });
        }

        /* ── Dropdown logic ── */
        const ddItems = document.querySelectorAll('.nav-item-dropdown');

        ddItems.forEach(item => {
            const trigger = item.querySelector('.nav-dropdown-trigger');
            const panel   = item.querySelector('.nav-dropdown');
            if (!trigger || !panel) return;

            /* Desktop: open/close on hover */
            item.addEventListener('mouseenter', () => {
                if (window.innerWidth > 820) openDropdown(trigger, panel);
            });
            item.addEventListener('mouseleave', () => {
                if (window.innerWidth > 820) closeDropdown(trigger, panel);
            });

            /* Mobile + keyboard: toggle on click */
            trigger.addEventListener('click', () => {
                const isOpen = panel.classList.contains('dd-open');
                /* Close all others first */
                ddItems.forEach(other => {
                    if (other !== item) {
                        closeDropdown(
                            other.querySelector('.nav-dropdown-trigger'),
                            other.querySelector('.nav-dropdown')
                        );
                    }
                });
                isOpen ? closeDropdown(trigger, panel) : openDropdown(trigger, panel);
            });

            /* Close on any link click inside */
            panel.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    closeDropdown(trigger, panel);
                    /* Also close mobile menu */
                    if (toggle && menu) {
                        toggle.classList.remove('is-open');
                        menu.classList.remove('is-open');
                        toggle.setAttribute('aria-expanded', 'false');
                    }
                });
            });
        });

        /* Close all dropdowns when clicking outside */
        document.addEventListener('click', e => {
            if (!e.target.closest('.nav-item-dropdown')) {
                ddItems.forEach(item => {
                    closeDropdown(
                        item.querySelector('.nav-dropdown-trigger'),
                        item.querySelector('.nav-dropdown')
                    );
                });
            }
        });

        /* Keyboard: close on Escape */
        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') {
                ddItems.forEach(item => {
                    closeDropdown(
                        item.querySelector('.nav-dropdown-trigger'),
                        item.querySelector('.nav-dropdown')
                    );
                });
            }
        });

        function openDropdown(trigger, panel) {
            if (!trigger || !panel) return;
            panel.classList.add('dd-open');
            trigger.setAttribute('aria-expanded', 'true');
            trigger.classList.add('dd-active');
        }

        function closeDropdown(trigger, panel) {
            if (!trigger || !panel) return;
            panel.classList.remove('dd-open');
            trigger.setAttribute('aria-expanded', 'false');
            trigger.classList.remove('dd-active');
        }

    })();
</script>
