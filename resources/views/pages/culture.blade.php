@extends('layouts.app')

@section('title', 'Culture | ' . $company['name'])
@section('meta_description', 'How Cosmos Algos works: hands-on engineering, direct communication, careful delivery, and a small-team approach to connected software.')

@section('content')

    <section class="page-hero">
        <div class="page-hero-bg" aria-hidden="true">
            <div class="hero-orb hero-orb-1"></div>
            <div class="hero-orb hero-orb-2"></div>
        </div>
        <div class="container">
            <span class="tag-label">How We Work</span>
            <h1 class="page-hero-title">Engineering <span class="hero-h1-accent">Culture</span></h1>
            <p class="lead" style="max-width:680px;margin-top:1.2rem;">
                Cosmos Algos is a small, hands-on engineering company. The way we work is simple:
                understand the problem, build the smallest reliable system that solves it, document it,
                and stay available after delivery.
            </p>
        </div>
    </section>

    <section class="section section-lg">
        <div class="container">
            <div class="section-head-center" data-reveal="up">
                <span class="tag-label">Principles</span>
                <h2>What We Optimise For</h2>
                <p class="section-head-sub">These are working principles, not perks or promises about office life.</p>
            </div>

            <div class="mv-values-grid" data-reveal-group>
                <div class="mv-value-card card">
                    <div class="mv-value-num">01</div>
                    <h3>Close to the Hardware</h3>
                    <p>We work across firmware, device protocols, desktop tooling, and cloud APIs. That range keeps us honest about what can actually be deployed.</p>
                </div>
                <div class="mv-value-card card">
                    <div class="mv-value-num">02</div>
                    <h3>Small Team, Direct Contact</h3>
                    <p>You speak with the people doing the work. There is no account layer between a technical decision and the person who understands it.</p>
                </div>
                <div class="mv-value-card card">
                    <div class="mv-value-num">03</div>
                    <h3>Documentation as Part of Delivery</h3>
                    <p>Code without context is a liability. Documentation is part of the agreed scope; where included, it covers architecture, setup, and handover.</p>
                </div>
                <div class="mv-value-card card">
                    <div class="mv-value-num">04</div>
                    <h3>Test Against Real Conditions</h3>
                    <p>Industrial and field systems fail at the edges: noisy signals, unreliable networks, operator error. We design and test for those conditions.</p>
                </div>
                <div class="mv-value-card card">
                    <div class="mv-value-num">05</div>
                    <h3>No Inflated Claims</h3>
                    <p>We publish the work we can substantiate. No invented client logos, review scores, or delivery metrics.</p>
                </div>
                <div class="mv-value-card card">
                    <div class="mv-value-num">06</div>
                    <h3>Learning Is Part of the Job</h3>
                    <p>Our founder continues a BSc in Artificial Intelligence alongside client work. Research and commercial delivery inform each other.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-alt section-lg">
        <div class="container">
            <div class="text-two-col">
                <div>
                    <span class="tag-label">The Team</span>
                    <h2>Founder-Led, Deliberately Small</h2>
                    <p>
                        Cosmos Algos was founded in June 2023 by Abdullah Abid, who leads the company and
                        contributes directly to architecture and implementation. The company also works
                        with collaborators on larger engagements.
                    </p>
                    <p class="secondary-para">
                        Abdullah's background combines industrial automation at the Center of Automation,
                        Robotics and Embedded Systems (CARE) with multi-tenant SaaS engineering, embedded
                        firmware, and computer-vision work. That mix is why the work can span a sensor
                        on a machine to a dashboard in the cloud.
                    </p>
                    <div class="hero-cta-row" style="margin-top:1.5rem;">
                        <a href="{{ route('about') }}" class="btn btn-primary">About the Founder</a>
                        <a href="{{ route('careers') }}" class="btn btn-ghost">Work With Us</a>
                    </div>
                </div>
                <div class="card" style="padding:2rem;">
                    <span class="tag-label">At a Glance</span>
                    <ul class="contact-detail-list" style="margin-top:1rem;">
                        <li class="contact-detail-item">
                            <div class="contact-detail-body">
                                <span class="contact-detail-label">Founded</span>
                                <span class="contact-detail-value">{{ $company['founded'] }}</span>
                                <span class="contact-detail-note">Bahawalpur, Punjab, Pakistan</span>
                            </div>
                        </li>
                        <li class="contact-detail-item">
                            <div class="contact-detail-body">
                                <span class="contact-detail-label">Experience</span>
                                <span class="contact-detail-value">{{ $stats['years_experience'] }}+ years</span>
                                <span class="contact-detail-note">Building software since 2020</span>
                            </div>
                        </li>
                        <li class="contact-detail-item">
                            <div class="contact-detail-body">
                                <span class="contact-detail-label">SaaS platforms</span>
                                <span class="contact-detail-value">{{ $stats['saas_platforms'] }}</span>
                                <span class="contact-detail-note">Multi-tenant products contributed to</span>
                            </div>
                        </li>
                        <li class="contact-detail-item">
                            <div class="contact-detail-body">
                                <span class="contact-detail-label">CARE Lab platforms</span>
                                <span class="contact-detail-value">{{ $stats['care_platforms'] }}</span>
                                <span class="contact-detail-note">VibCare, PowerEye, Sentron, SolaCon</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
