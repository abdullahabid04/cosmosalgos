<footer class="site-footer">

    {{-- ── Main grid ── --}}
    <div class="container footer-main">

        {{-- Col 1: Brand --}}
        <div class="footer-brand-col">
            <a class="footer-brand" href="{{ route('home') }}" aria-label="Cosmos Algos — home">
                <img class="footer-brand-logo"
                     src="{{ asset('images/brand/cosmos-algos-mark.png') }}"
                     alt=""
                     width="523" height="477">
                <span class="footer-brand-wordmark" aria-hidden="true">
                    <span class="brand-wordmark-cosmos">Cosmos</span>
                    <span class="brand-wordmark-algos">Algos</span>
                </span>
            </a>
            <p class="footer-tagline">{{ $company['tagline'] }}</p>
            <div class="footer-socials">
                <a href="{{ $company['linkedin'] }}" class="footer-social-link" aria-label="Abdullah Abid, Cosmos Algos founder, on LinkedIn" target="_blank" rel="noopener">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M20.45 20.45h-3.55v-5.57c0-1.33-.03-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.67H9.36V9h3.41v1.56h.05c.47-.9 1.63-1.85 3.36-1.85 3.59 0 4.25 2.36 4.25 5.44v6.3zM5.34 7.43a2.06 2.06 0 1 1 0-4.12 2.06 2.06 0 0 1 0 4.12zM7.12 20.45H3.56V9h3.56v11.45zM22.22 0H1.77C.79 0 0 .77 0 1.73v20.54C0 23.23.79 24 1.77 24h20.45c.98 0 1.78-.77 1.78-1.73V1.73C24 .77 23.2 0 22.22 0z"/></svg>
                </a>
                <a href="mailto:{{ $company['email'] }}" class="footer-social-link" aria-label="Email Cosmos Algos">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                </a>
            </div>
            <div class="footer-badges">
                <span class="footer-badge">IoT &amp; Embedded</span>
                <span class="footer-badge">AI / ML</span>
            </div>
        </div>

        {{-- Col 2: Company --}}
        <div class="footer-col">
            <h3 class="footer-col-title">Company</h3>
            <ul class="footer-links">
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('history') }}">Our History</a></li>
                <li><a href="{{ route('mission-vision') }}">Mission & Vision</a></li>
                <li><a href="{{ route('culture') }}">Culture</a></li>
                <li><a href="{{ route('careers') }}">Careers</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
        </div>

        {{-- Col 3: Work --}}
        <div class="footer-col">
            <h3 class="footer-col-title">Work</h3>
            <ul class="footer-links">
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('projects') }}">Projects</a></li>
                <li><a href="{{ route('case-studies') }}">Case Studies</a></li>
                <li><a href="{{ route('technologies') }}">Technologies</a></li>
                <li><a href="{{ route('industries') }}">Industries</a></li>
            </ul>
        </div>

        {{-- Col 4: Insights --}}
        <div class="footer-col">
            <h3 class="footer-col-title">Insights</h3>
            <ul class="footer-links">
                <li><a href="{{ route('blog') }}">Engineering Notes</a></li>
                <li><a href="{{ route('social') }}">Social</a></li>
                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                <li><a href="{{ route('testimonials') }}">References</a></li>
                <li><a href="{{ route('faq') }}">FAQ</a></li>
            </ul>
        </div>

        {{-- Col 5: Contact --}}
        <div class="footer-col">
            <h3 class="footer-col-title">Contact</h3>
            <ul class="footer-contact-list">
                <li>
                    <span class="fc-label">HQ</span>
                    <span class="fc-value">Bahawalpur, Punjab, Pakistan</span>
                </li>
                <li>
                    <span class="fc-label">General</span>
                    <a href="mailto:{{ $company['email'] }}" class="fc-value fc-link">{{ $company['email'] }}</a>
                </li>
                <li>
                    <span class="fc-label">Phone</span>
                    <a href="tel:{{ $company['phone_href'] }}" class="fc-value fc-link">{{ $company['phone'] }}</a>
                </li>
                <li>
                    <span class="fc-label">Hours</span>
                    <span class="fc-value">{{ $company['hours'] }}</span>
                </li>
            </ul>
        </div>

    </div>

    {{-- ── Bottom bar ── --}}
    <div class="footer-bottom">
        <div class="container footer-bottom-wrap">
            <p class="footer-copy">
                &copy; {{ date('Y') }} {{ $company['name'] }}. All rights reserved.
            </p>
            <div class="footer-legal">
                <a href="{{ route('privacy') }}">Privacy Policy</a>
                <a href="{{ route('terms') }}">Terms of Use</a>
            </div>
        </div>
    </div>

</footer>
