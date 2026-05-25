<header class="site-header" id="siteHeader">
    <div class="container nav-wrap">

        {{-- Brand --}}
        <a class="brand" href="{{ route('home') }}">
            <span class="brand-cosmos">Cosmos</span><span class="brand-algos">Algos</span>
        </a>

        {{-- Center nav --}}
        <nav class="nav-center" id="navMenu" aria-label="Main navigation">
            <ul class="nav-list">
                @foreach ($navigation as $item)
                    <li>
                        <a href="{{ route($item['route']) }}"
                            @class(['is-active' => request()->routeIs($item['route'])])>
                            {{ $item['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>

        {{-- Right: CTA + hamburger --}}
        <div class="nav-right">
            <a href="{{ route('contact') }}" class="btn-nav-cta">
                Contact Us <span class="cta-arrow" aria-hidden="true">↗</span>
            </a>
            <button class="nav-toggle" id="navToggle"
                    aria-label="Toggle navigation" aria-expanded="false">
                <span></span><span></span><span></span>
            </button>
        </div>

    </div>
</header>

<script>
    (function () {
        const header = document.getElementById('siteHeader');
        if (header) {
            const onScroll = () => {
                header.classList.toggle('scrolled', window.scrollY > 50);
            };
            window.addEventListener('scroll', onScroll, { passive: true });
            onScroll();
        }

        const toggle = document.getElementById('navToggle');
        const menu   = document.getElementById('navMenu');
        if (toggle && menu) {
            toggle.addEventListener('click', () => {
                const open = toggle.classList.toggle('is-open');
                menu.classList.toggle('is-open', open);
                toggle.setAttribute('aria-expanded', String(open));
            });

            menu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    toggle.classList.remove('is-open');
                    menu.classList.remove('is-open');
                    toggle.setAttribute('aria-expanded', 'false');
                });
            });
        }
    })();
</script>
