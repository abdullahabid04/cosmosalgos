@extends('layouts.app')

@section('title', 'Gallery | ' . $company['name'])
@section('meta_description', 'A look at the environments and systems behind Cosmos Algos engineering work.')

@section('content')

    <section class="page-hero">
        <div class="page-hero-bg" aria-hidden="true">
            <div class="hero-orb hero-orb-1"></div>
            <div class="hero-orb hero-orb-2"></div>
        </div>
        <div class="container">
            <span class="tag-label">Gallery</span>
            <h1 class="page-hero-title">Inside the <span class="hero-h1-accent">Work</span></h1>
            <p class="lead" style="max-width:640px;margin-top:1.2rem;">
                We only publish images we have the right to show. Client sites and defense engagements
                are not photographed for the public site.
            </p>
        </div>
    </section>

    <section class="section section-lg">
        <div class="container">
            <div class="section-head-center" data-reveal="up">
                <span class="tag-label">Selected Images</span>
                <h2>Documented Work</h2>
                <p class="section-head-sub">
                    These images come from CARE Lab R&amp;D documentation and are attributed to CARE Lab.
                    They show project hardware and software, not Cosmos Algos client sites.
                </p>
            </div>

            <div class="gallery-grid" data-stagger>
                <figure class="gallery-item card">
                    <img src="{{ asset('images/projects/primer-analyzer.jpg') }}" alt="Primer Analyzer test hardware" width="1200" height="900" loading="lazy">
                    <figcaption>
                        <strong>Primer Analyzer</strong>
                        <span>Test hardware · CARE Lab</span>
                    </figcaption>
                </figure>
                <figure class="gallery-item card">
                    <img src="{{ asset('images/projects/shell-analyzer-corrosion.jpg') }}" alt="Shell surface corrosion inspection sample" width="1200" height="900" loading="lazy">
                    <figcaption>
                        <strong>Shell Analyzer</strong>
                        <span>Corrosion inspection · CARE Lab</span>
                    </figcaption>
                </figure>
                <figure class="gallery-item card">
                    <img src="{{ asset('images/projects/christie-battery-analyzer.jpg') }}" alt="Christie aircraft battery charger and analyzer" width="1200" height="900" loading="lazy">
                    <figcaption>
                        <strong>Christie Battery Analyzer</strong>
                        <span>Embedded controller upgrade · CARE Lab</span>
                    </figcaption>
                </figure>
                <figure class="gallery-item card">
                    <img src="{{ asset('images/projects/vibcare-vibration-analysis.jpg') }}" alt="VibCare vibration analysis interface" width="1200" height="900" loading="lazy">
                    <figcaption>
                        <strong>VibCare</strong>
                        <span>Vibration analysis · CARE Lab</span>
                    </figcaption>
                </figure>
                <figure class="gallery-item card">
                    <img src="{{ asset('images/projects/solar-field-monitoring.jpg') }}" alt="Solar field monitoring setup" width="1200" height="900" loading="lazy">
                    <figcaption>
                        <strong>Solar Field Monitoring</strong>
                        <span>Energy monitoring · CARE Lab</span>
                    </figcaption>
                </figure>
                <figure class="gallery-item card">
                    <img src="{{ asset('images/projects/lab-incubator.jpg') }}" alt="Laboratory incubator instrumentation" width="1200" height="900" loading="lazy">
                    <figcaption>
                        <strong>Lab Incubator</strong>
                        <span>Instrumentation · CARE Lab</span>
                    </figcaption>
                </figure>
                <figure class="gallery-item card">
                    <img src="{{ asset('images/projects/smart-door-lock.jpg') }}" alt="Smart door lock prototype" width="1200" height="900" loading="lazy">
                    <figcaption>
                        <strong>Smart Door Lock</strong>
                        <span>Access control prototype · CARE Lab</span>
                    </figcaption>
                </figure>
                <figure class="gallery-item card">
                    <img src="{{ asset('images/projects/inverter-ac-repair.jpg') }}" alt="Inverter and air-conditioner repair test setup" width="1200" height="900" loading="lazy">
                    <figcaption>
                        <strong>Inverter / AC Repair</strong>
                        <span>Electronics test setup · CARE Lab</span>
                    </figcaption>
                </figure>
            </div>

            <div class="card" style="padding:2rem;max-width:760px;margin:2.5rem auto 0;text-align:center;">
                <h2>What Is Not Shown</h2>
                <p class="lead" style="font-size:1rem;margin-top:.75rem;">
                    Client sites, defense engagements, and unpublished dashboards are not photographed
                    for the public site. If a project needs a visual reference, the case studies describe
                    the system and its constraints instead.
                </p>
                <div class="hero-cta-row" style="justify-content:center;margin-top:1.5rem;">
                    <a href="{{ route('case-studies') }}" class="btn btn-primary">Read Case Studies</a>
                    <a href="{{ route('projects') }}" class="btn btn-ghost">See Projects</a>
                </div>
            </div>
        </div>
    </section>

@endsection
