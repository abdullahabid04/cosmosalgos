@extends('layouts.app')

@section('title', 'Public Updates | ' . $company['name'])
@section('meta_description', 'Public updates from Cosmos Algos and founder Abdullah Abid on LinkedIn.')

@section('content')

    <section class="page-hero">
        <div class="page-hero-bg" aria-hidden="true">
            <div class="hero-orb hero-orb-1"></div>
            <div class="hero-orb hero-orb-2"></div>
        </div>
        <div class="container">
            <span class="tag-label">Social</span>
            <h1 class="page-hero-title">Public <span class="hero-h1-accent">Updates</span></h1>
            <p class="lead" style="max-width:620px;margin-top:1.2rem;">
                We do not embed third-party feeds or publish automated posts here. Follow the
                LinkedIn profile below for public updates.
            </p>
        </div>
    </section>

    <section class="section section-lg">
        <div class="container">
            <div class="card" style="padding:clamp(1.5rem,4vw,3rem);max-width:760px;margin-inline:auto;text-align:center;">
                <a href="{{ $company['linkedin'] }}" class="contact-social-btn" style="display:inline-flex;margin-bottom:1.2rem;" target="_blank" rel="noopener">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.45 20.45h-3.55v-5.57c0-1.33-.03-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.67H9.36V9h3.41v1.56h.05c.47-.9 1.63-1.85 3.36-1.85 3.59 0 4.25 2.36 4.25 5.44v6.3zM5.34 7.43a2.06 2.06 0 1 1 0-4.12 2.06 2.06 0 0 1 0 4.12zM7.12 20.45H3.56V9h3.56v11.45zM22.22 0H1.77C.79 0 0 .77 0 1.73v20.54C0 23.23.79 24 1.77 24h20.45c.98 0 1.78-.77 1.78-1.73V1.73C24 .77 23.2 0 22.22 0z"/></svg>
                    LinkedIn
                </a>
                <h2>Abdullah Abid on LinkedIn</h2>
                <p class="lead" style="font-size:1rem;margin-top:1rem;">
                    Project notes, engineering progress, and company updates are posted on the founder's
                    LinkedIn profile. This page is a link-out only; no social feed data is loaded on this site.
                </p>
                <div class="hero-cta-row" style="justify-content:center;margin-top:1.8rem;">
                    <a href="{{ $company['linkedin'] }}" class="btn btn-primary" target="_blank" rel="noopener">Open LinkedIn</a>
                    <a href="{{ route('contact') }}" class="btn btn-ghost">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

@endsection
