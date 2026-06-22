<footer class="site-footer">

    {{-- ── Main grid ── --}}
    <div class="container footer-main">

        {{-- Col 1: Brand --}}
        <div class="footer-brand-col">
            <a class="footer-brand" href="{{ route('home') }}">
                <span class="brand-cosmos">Cosmos</span><span class="brand-algos">Algos</span>
            </a>
            <p class="footer-tagline">{{ $company['tagline'] }}</p>
            <div class="footer-socials">
                <a href="#" class="footer-social-link" aria-label="LinkedIn" target="_blank" rel="noopener">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M20.45 20.45h-3.55v-5.57c0-1.33-.03-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.67H9.36V9h3.41v1.56h.05c.47-.9 1.63-1.85 3.36-1.85 3.59 0 4.25 2.36 4.25 5.44v6.3zM5.34 7.43a2.06 2.06 0 1 1 0-4.12 2.06 2.06 0 0 1 0 4.12zM7.12 20.45H3.56V9h3.56v11.45zM22.22 0H1.77C.79 0 0 .77 0 1.73v20.54C0 23.23.79 24 1.77 24h20.45c.98 0 1.78-.77 1.78-1.73V1.73C24 .77 23.2 0 22.22 0z"/></svg>
                </a>
                <a href="#" class="footer-social-link" aria-label="GitHub" target="_blank" rel="noopener">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .3a12 12 0 0 0-3.79 23.4c.6.1.82-.26.82-.58v-2.03c-3.34.72-4.04-1.61-4.04-1.61-.55-1.39-1.34-1.76-1.34-1.76-1.08-.74.08-.73.08-.73 1.2.09 1.83 1.24 1.83 1.24 1.07 1.83 2.8 1.3 3.49 1 .1-.78.42-1.3.76-1.6-2.67-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.12-.3-.54-1.52.12-3.18 0 0 1.01-.32 3.3 1.23a11.5 11.5 0 0 1 6 0c2.3-1.55 3.3-1.23 3.3-1.23.66 1.66.25 2.88.12 3.18.77.84 1.24 1.91 1.24 3.22 0 4.61-2.8 5.63-5.48 5.92.43.37.82 1.1.82 2.22v3.29c0 .32.22.69.83.57A12 12 0 0 0 12 .3z"/></svg>
                </a>
                <a href="#" class="footer-social-link" aria-label="Twitter / X" target="_blank" rel="noopener">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M18.24 2h3.27l-7.14 8.16L22.78 22h-6.58l-5.15-6.74L4.78 22H1.5l7.64-8.73L1.22 2h6.74l4.65 6.09L18.24 2zm-1.15 17.98h1.81L7.01 3.85H5.07l12.02 16.13z"/></svg>
                </a>
            </div>
            <div class="footer-badges">
                <span class="footer-badge">AWS Partner</span>
                <span class="footer-badge">ISO 9001</span>
            </div>
        </div>

        {{-- Col 2: Company --}}
        <div class="footer-col">
            <h5 class="footer-col-title">Company</h5>
            <ul class="footer-links">
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('history') }}">Our History</a></li>
                <li><a href="{{ route('mission-vision') }}">Mission & Vision</a></li>
                <li><a href="">Culture</a></li>
                <li><a href="{{ route('careers') }}">Careers</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
        </div>

        {{-- Col 3: Work --}}
        <div class="footer-col">
            <h5 class="footer-col-title">Work</h5>
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
            <h5 class="footer-col-title">Insights</h5>
            <ul class="footer-links">
                <li><a href="">Blog & News</a></li>
                <li><a href="">Social Feed</a></li>
                <li><a href="">Gallery</a></li>
                <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
                <li><a href="{{ route('faq') }}">FAQ</a></li>
            </ul>
        </div>

        {{-- Col 5: Contact --}}
        <div class="footer-col">
            <h5 class="footer-col-title">Contact</h5>
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
                    <span class="fc-label">Sales</span>
                    <a href="mailto:sales@cosmosalgos.com" class="fc-value fc-link">sales@cosmosalgos.com</a>
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
