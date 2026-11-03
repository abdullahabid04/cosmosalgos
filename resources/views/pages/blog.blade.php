@extends('layouts.app')

@section('title', 'Engineering Notes | ' . $company['name'])
@section('meta_description', 'Engineering notes from Cosmos Algos on embedded systems, industrial software, IoT, and applied AI. The first articles are in preparation.')

@section('content')

    <section class="page-hero">
        <div class="page-hero-bg" aria-hidden="true">
            <div class="hero-orb hero-orb-1"></div>
            <div class="hero-orb hero-orb-2"></div>
        </div>
        <div class="container">
            <span class="tag-label">Notes</span>
            <h1 class="page-hero-title">Engineering <span class="hero-h1-accent">Notes</span></h1>
            <p class="lead" style="max-width:640px;margin-top:1.2rem;">
                Practical notes from building embedded, industrial, and cloud systems.
            </p>
        </div>
    </section>

    <section class="section section-lg">
        <div class="container">
            <div class="card" style="padding:clamp(1.5rem,4vw,3rem);max-width:820px;margin-inline:auto;text-align:center;">
                <div style="font-size:2.4rem;margin-bottom:1rem;" aria-hidden="true">✍️</div>
                <h2>No Articles Published Yet</h2>
                <p class="lead" style="font-size:1rem;margin-top:1rem;">
                    We would rather publish a useful engineering note than fill a blog with marketing copy.
                    Articles are being prepared on the topics below. In the meantime, the project pages
                    contain the technical detail.
                </p>
                <div class="hero-cta-row" style="justify-content:center;margin-top:1.8rem;">
                    <a href="{{ route('projects') }}" class="btn btn-primary">Browse Projects</a>
                    <a href="{{ route('contact') }}" class="btn btn-ghost">Suggest a Topic</a>
                </div>
            </div>

            <div class="mv-values-grid" style="margin-top:2.5rem;" data-reveal-group>
                <div class="mv-value-card card">
                    <div class="mv-value-num">01</div>
                    <h3>Embedded &amp; Industrial</h3>
                    <p>Firmware, device protocols, test rigs, and the realities of deploying software next to machinery.</p>
                </div>
                <div class="mv-value-card card">
                    <div class="mv-value-num">02</div>
                    <h3>IoT &amp; SaaS Architecture</h3>
                    <p>Multi-tenancy, telemetry ingestion, time-series data, OTA updates, and backend design for telemetry workloads.</p>
                </div>
                <div class="mv-value-card card">
                    <div class="mv-value-num">03</div>
                    <h3>Applied AI &amp; Vision</h3>
                    <p>Dataset collection, RGB-D pipelines, model inference, and practical evaluation of whether a model earns its place.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
