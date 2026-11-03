@extends('layouts.app')

@section('title', 'Contact Us — ' . $company['name'])
@section('meta_description', 'Get in touch with Cosmos Algos. Reach out for custom software, IoT systems, AI/ML solutions, and embedded systems development. Based in Bahawalpur, Pakistan.')
@section('og_title', 'Contact Cosmos Algos — Let\'s Build Something')
@section('og_description', 'Have a project in mind? Tell us about it. We reply personally during office hours.')

@section('content')

    {{-- ═══════════════════════════════════════════════
         HERO — Contact page opener
    ═══════════════════════════════════════════════ --}}
    <section class="contact-hero">
        <div class="contact-hero-bg" aria-hidden="true">
            <div class="contact-hero-orb contact-hero-orb-1"></div>
            <div class="contact-hero-orb contact-hero-orb-2"></div>
        </div>
        <div class="container">
            <div class="contact-hero-inner" data-reveal="fade-up">
                <span class="tag-label">Contact Us</span>
                <h1 class="contact-hero-h1 glitch-ready">Let's Build Something <span class="contact-h1-accent">Together</span></h1>
                <p class="contact-hero-sub">Have a project in mind, a question about our services, or just want to explore what's possible? Send a message and we'll reply during office hours.</p>
                <div class="contact-hero-chips">
                    <span class="contact-chip">📍 Bahawalpur, Pakistan</span>
                    <span class="contact-chip">🕗 8:00 AM – 4:00 PM PKT</span>
                    <span class="contact-chip">🔒 Confidential by default</span>
                    <span class="contact-chip">🤝 Direct engineer contact</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         MAIN CONTACT GRID — Form + Info side by side
    ═══════════════════════════════════════════════ --}}
    <section class="section-lg contact-main-section">
        <div class="container">
            <div class="contact-main-grid">

                {{-- LEFT: Contact Form --}}
                <div class="contact-form-panel" data-reveal="fade-right">

                    <div class="contact-form-header">
                        <h2 class="contact-form-title glitch-ready">Send Us a Message</h2>
                        <p class="contact-form-sub">Fill in the details below and we'll get back to you as soon as possible.</p>
                    </div>

                    @if (session('success'))
                        <div class="contact-alert contact-alert-success">
                            <span class="contact-alert-icon">✓</span>
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="contact-alert contact-alert-error">
                            <span class="contact-alert-icon">✕</span>
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.submit') }}" class="contact-form" id="contactForm" novalidate>
                        @csrf

                        <div class="contact-form-row">
                            <div class="form-group">
                                <label for="contact_name">Full Name <span class="req">*</span></label>
                                <input
                                    type="text"
                                    id="contact_name"
                                    name="name"
                                    placeholder="Abdullah Abid"
                                    value="{{ old('name') }}"
                                    autocomplete="name"
                                    required
                                >
                                @error('name')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="contact_email">Email Address <span class="req">*</span></label>
                                <input
                                    type="email"
                                    id="contact_email"
                                    name="email"
                                    placeholder="you@company.com"
                                    value="{{ old('email') }}"
                                    autocomplete="email"
                                    required
                                >
                                @error('email')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="contact-form-row">
                            <div class="form-group">
                                <label for="contact_company">Company / Organisation</label>
                                <input
                                    type="text"
                                    id="contact_company"
                                    name="company"
                                    placeholder="Your company name (optional)"
                                    value="{{ old('company') }}"
                                    autocomplete="organization"
                                >
                            </div>
                            <div class="form-group">
                                <label for="contact_phone">Phone Number</label>
                                <input
                                    type="tel"
                                    id="contact_phone"
                                    name="phone"
                                    placeholder="+92 300 0000000 (optional)"
                                    value="{{ old('phone') }}"
                                    autocomplete="tel"
                                >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contact_service">Service You're Interested In <span class="req">*</span></label>
                            <select id="contact_service" name="service" required>
                                <option value="" disabled {{ old('service') ? '' : 'selected' }}>— Select a service —</option>
                                <option value="embedded" {{ old('service') === 'embedded' ? 'selected' : '' }}>Embedded Systems &amp; Firmware</option>
                                <option value="automation" {{ old('service') === 'automation' ? 'selected' : '' }}>Industrial Automation &amp; Test Rigs</option>
                                <option value="iot" {{ old('service') === 'iot' ? 'selected' : '' }}>IoT Platforms &amp; Cloud Backends</option>
                                <option value="ai" {{ old('service') === 'ai' ? 'selected' : '' }}>AI &amp; Computer Vision</option>
                                <option value="mobile" {{ old('service') === 'mobile' ? 'selected' : '' }}>Mobile &amp; Desktop Applications</option>
                                <option value="saas" {{ old('service') === 'saas' ? 'selected' : '' }}>SaaS Product Engineering</option>
                                <option value="data" {{ old('service') === 'data' ? 'selected' : '' }}>Data Acquisition &amp; Visualisation</option>
                                <option value="research" {{ old('service') === 'research' ? 'selected' : '' }}>Research, Prototyping &amp; Upgrades</option>
                                <option value="other" {{ old('service') === 'other' ? 'selected' : '' }}>Other / Not Sure Yet</option>
                            </select>
                            @error('service')<span class="field-error">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="contact_budget">Approximate Budget</label>
                            <select id="contact_budget" name="budget">
                                <option value="" disabled {{ old('budget') ? '' : 'selected' }}>— Select a range (optional) —</option>
                                <option value="under-1k" {{ old('budget') === 'under-1k' ? 'selected' : '' }}>Under $1,000</option>
                                <option value="1k-5k" {{ old('budget') === '1k-5k' ? 'selected' : '' }}>$1,000 – $5,000</option>
                                <option value="5k-15k" {{ old('budget') === '5k-15k' ? 'selected' : '' }}>$5,000 – $15,000</option>
                                <option value="15k-50k" {{ old('budget') === '15k-50k' ? 'selected' : '' }}>$15,000 – $50,000</option>
                                <option value="50k-plus" {{ old('budget') === '50k-plus' ? 'selected' : '' }}>$50,000+</option>
                                <option value="discuss" {{ old('budget') === 'discuss' ? 'selected' : '' }}>Let's discuss</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="contact_message">Project Details <span class="req">*</span></label>
                            <textarea
                                id="contact_message"
                                name="message"
                                placeholder="Tell us about your project, goals, timeline, and any technical requirements you have in mind..."
                                rows="6"
                                required
                            >{{ old('message') }}</textarea>
                            @error('message')<span class="field-error">{{ $message }}</span>@enderror
                            <span class="char-count" id="charCount">0 / 5000</span>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" id="contact_privacy" name="privacy" {{ old('privacy') ? 'checked' : '' }} required>
                            <label for="contact_privacy">
                                I have read and accept the
                                <a href="{{ route('privacy') ?? '#' }}" class="contact-link">Privacy Policy</a>
                                and
                                <a href="{{ route('terms') ?? '#' }}" class="contact-link">Terms of Use</a>.
                            </label>
                            @error('privacy')<span class="field-error">{{ $message }}</span>@enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-full contact-submit-btn" id="contactSubmit">
                            <span class="submit-label">Send Message</span>
                            <span class="submit-icon" aria-hidden="true">↗</span>
                            <span class="submit-loading" aria-hidden="true" style="display:none;">Sending…</span>
                        </button>

                    </form>
                </div>

                {{-- RIGHT: Contact Info --}}
                <div class="contact-info-panel" data-reveal="fade-left">

                    <div class="contact-info-block">
                        <h3 class="contact-info-title">Get in Touch</h3>
                        <p class="contact-info-lead">Choose whichever channel suits you best. We read every message and reply as soon as possible during office hours.</p>
                    </div>

                    <ul class="contact-detail-list" data-stagger>

                        <li class="contact-detail-item card">
                            <div class="contact-detail-icon" aria-hidden="true">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            </div>
                            <div class="contact-detail-body">
                                <span class="contact-detail-label">Headquarters</span>
                                <span class="contact-detail-value">Bahawalpur, Punjab, Pakistan</span>
                                <span class="contact-detail-note">Remote collaboration can be arranged</span>
                            </div>
                        </li>

                        <li class="contact-detail-item card">
                            <div class="contact-detail-icon" aria-hidden="true">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            </div>
                            <div class="contact-detail-body">
                                <span class="contact-detail-label">General Enquiries</span>
                                <a href="mailto:{{ $company['email'] }}" class="contact-detail-value contact-link">{{ $company['email'] }}</a>
                                <span class="contact-detail-note">We reply as soon as possible</span>
                            </div>
                        </li>

                        <li class="contact-detail-item card">
                            <div class="contact-detail-icon" aria-hidden="true">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            </div>
                            <div class="contact-detail-body">
                                <span class="contact-detail-label">Phone</span>
                                <a href="tel:{{ $company['phone_href'] }}" class="contact-detail-value contact-link">{{ $company['phone'] }}</a>
                                <span class="contact-detail-note">For project proposals and partnerships</span>
                            </div>
                        </li>

                        <li class="contact-detail-item card">
                            <div class="contact-detail-icon" aria-hidden="true">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            </div>
                            <div class="contact-detail-body">
                                <span class="contact-detail-label">Working Hours</span>
                                <span class="contact-detail-value">{{ $company['hours'] }}</span>
                                <span class="contact-detail-note">UTC +5:00 — Pakistan Standard Time</span>
                            </div>
                        </li>

                    </ul>

                    {{-- Social Links --}}
                    <div class="contact-socials-block">
                        <h3 class="contact-socials-title">Follow Our Work</h3>
                        <div class="contact-socials-row">
                            <a href="{{ $company['linkedin'] }}" class="contact-social-btn" aria-label="Cosmos Algos on LinkedIn" target="_blank" rel="noopener">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20.45 20.45h-3.55v-5.57c0-1.33-.03-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.67H9.36V9h3.41v1.56h.05c.47-.9 1.63-1.85 3.36-1.85 3.59 0 4.25 2.36 4.25 5.44v6.3zM5.34 7.43a2.06 2.06 0 1 1 0-4.12 2.06 2.06 0 0 1 0 4.12zM7.12 20.45H3.56V9h3.56v11.45zM22.22 0H1.77C.79 0 0 .77 0 1.73v20.54C0 23.23.79 24 1.77 24h20.45c.98 0 1.78-.77 1.78-1.73V1.73C24 .77 23.2 0 22.22 0z"/></svg>
                                LinkedIn
                            </a>
                            <a href="mailto:{{ $company['email'] }}" class="contact-social-btn" aria-label="Email Cosmos Algos"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                                Email</a>
                        </div>
                    </div>

                    {{-- Response promise card --}}
                    <div class="contact-promise-card card" data-reveal="zoom-in">
                        <div class="contact-promise-icon" aria-hidden="true">🚀</div>
                        <div class="contact-promise-body">
                            <strong>Initial Discussion</strong>
                            <p>We start with a short conversation to understand the problem and decide whether we are the right fit. No obligation.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         WHAT HAPPENS NEXT — Process after contact
    ═══════════════════════════════════════════════ --}}
    <section class="section-lg section-alt">
        <div class="container">
            <div class="section-head-center" data-reveal="fade-up">
                <span class="tag-label">Our Process</span>
                <h2 class="glitch-ready">What Happens After You Reach Out</h2>
                <p class="section-head-sub">We keep things simple, transparent, and fast. Here's exactly what to expect.</p>
            </div>
            <div class="contact-process-grid" data-stagger>

                <div class="contact-process-step card">
                    <div class="contact-process-num">01</div>
                    <div class="contact-process-icon" aria-hidden="true">📩</div>
                    <h3>We Review Your Message</h3>
                    <p>We read every enquiry and reply personally during office hours — not with an automated template.</p>
                </div>

                <div class="contact-process-step card">
                    <div class="contact-process-num">02</div>
                    <div class="contact-process-icon" aria-hidden="true">📞</div>
                    <h3>Discovery Call</h3>
                    <p>We schedule a short call to understand your goals, constraints, and technical requirements before proposing anything.</p>
                </div>

                <div class="contact-process-step card">
                    <div class="contact-process-num">03</div>
                    <div class="contact-process-icon" aria-hidden="true">📋</div>
                    <h3>Proposal &amp; Scoping</h3>
                    <p>We prepare a written technical proposal with a timeline, technology stack, and itemised pricing.</p>
                </div>

                <div class="contact-process-step card">
                    <div class="contact-process-num">04</div>
                    <div class="contact-process-icon" aria-hidden="true">🛠️</div>
                    <h3>We Start Building</h3>
                    <p>Once the scope is agreed, work starts with a clear roadmap, regular updates, and a direct point of contact.</p>
                </div>

            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         FAQ — Common questions
    ═══════════════════════════════════════════════ --}}
    <section class="section-lg">
        <div class="container">
            <div class="contact-faq-grid">

                <div data-reveal="fade-right">
                    <span class="tag-label">FAQ</span>
                    <h2 class="glitch-ready">Common Questions</h2>
                    <p class="contact-faq-lead">Can't find what you're looking for? Just send us a message and we'll answer directly.</p>
                    <a href="mailto:{{ $company['email'] }}" class="btn btn-ghost" style="margin-top:1.5rem;">
                        Email Us Directly <span aria-hidden="true">↗</span>
                    </a>
                </div>

                <div class="contact-faq-list" data-reveal="fade-left">

                    <details class="faq-item card" open>
                        <summary class="faq-question">Do you work with international clients?</summary>
                        <div class="faq-answer">
                            <p>We are based in Bahawalpur, Pakistan, and can collaborate remotely. We agree on communication hours and channels before work begins.</p>
                        </div>
                    </details>

                    <details class="faq-item card">
                        <summary class="faq-question">How long does a typical project take?</summary>
                        <div class="faq-answer">
                            <p>It depends on scope. Rather than quoting a generic range, we define milestones and a timeline in the proposal after the discovery call.</p>
                        </div>
                    </details>

                    <details class="faq-item card">
                        <summary class="faq-question">What information should I prepare before contacting you?</summary>
                        <div class="faq-answer">
                            <p>A rough description of your problem or idea is enough to start. If you have technical requirements, existing systems documentation, or a preferred tech stack, bring those too — but they're not required for an initial conversation.</p>
                        </div>
                    </details>

                    <details class="faq-item card">
                        <summary class="faq-question">Do you offer post-launch support and maintenance?</summary>
                        <div class="faq-answer">
                            <p>Support terms are agreed in the proposal. They can include a post-delivery support window, ongoing maintenance, or monitoring, depending on what the system needs.</p>
                        </div>
                    </details>

                    <details class="faq-item card">
                        <summary class="faq-question">Can you work within a fixed budget?</summary>
                        <div class="faq-answer">
                            <p>Yes. We're transparent about costs from the start. If your budget is fixed, we'll scope the project accordingly — prioritising the highest-value features and phasing the rest for a future iteration.</p>
                        </div>
                    </details>

                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════
         CTA BANNER — bottom of page
    ═══════════════════════════════════════════════ --}}
    <section class="section-lg contact-cta-section">
        <div class="container">
            <div class="contact-cta-inner" data-reveal="zoom-in">
                <div class="contact-cta-bg" aria-hidden="true">
                    <div class="contact-cta-orb"></div>
                </div>
                <span class="tag-label">Ready to Start?</span>
                <h2 class="contact-cta-h2 glitch-ready">Your Next Project Starts with a Single Message</h2>
                <p class="contact-cta-sub">From embedded firmware to cloud SaaS — tell us what you are trying to build and we will tell you honestly whether we can help.</p>
                <div class="contact-cta-actions">
                    <a href="mailto:{{ $company['email'] }}" class="btn btn-primary">
                        Email Us Now <span aria-hidden="true">↗</span>
                    </a>
                    <a href="{{ route('services') }}" class="btn btn-ghost">
                        Explore Our Services
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        (function () {
            'use strict';

            /* ── Character counter for textarea ── */
            const ta    = document.getElementById('contact_message');
            const count = document.getElementById('charCount');
            const MAX   = 5000;

            if (ta && count) {
                ta.addEventListener('input', function () {
                    const len = ta.value.length;
                    count.textContent = len + ' / ' + MAX;
                    count.classList.toggle('char-count-warn', len > MAX * 0.85);
                    count.classList.toggle('char-count-over', len > MAX);
                    if (len > MAX) ta.value = ta.value.slice(0, MAX);
                });
            }

            /* ── Submit loading state ── */
            const form   = document.getElementById('contactForm');
            const btn    = document.getElementById('contactSubmit');
            const label  = btn  ? btn.querySelector('.submit-label')  : null;
            const icon   = btn  ? btn.querySelector('.submit-icon')   : null;
            const loader = btn  ? btn.querySelector('.submit-loading') : null;

            if (form && btn) {
                form.addEventListener('submit', function () {
                    if (label)  label.style.display  = 'none';
                    if (icon)   icon.style.display   = 'none';
                    if (loader) loader.style.display = 'inline';
                    btn.disabled = true;
                });
            }

            /* ── FAQ accordion: only one open at a time ── */
            const faqs = document.querySelectorAll('.faq-item');
            faqs.forEach(item => {
                item.addEventListener('toggle', function () {
                    if (item.open) {
                        faqs.forEach(other => { if (other !== item) other.removeAttribute('open'); });
                    }
                });
            });

            /* ── Input focus glow ── */
            document.querySelectorAll('.contact-form input, .contact-form select, .contact-form textarea').forEach(el => {
                el.addEventListener('focus',  () => el.closest('.form-group')?.classList.add('focused'));
                el.addEventListener('blur',   () => el.closest('.form-group')?.classList.remove('focused'));
            });

        })();
    </script>
@endpush
