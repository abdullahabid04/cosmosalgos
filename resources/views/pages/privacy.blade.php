@extends('layouts.app')

@section('title', 'Privacy Policy | ' . $company['name'])
@section('meta_description', 'How Cosmos Algos handles information submitted through this website.')

@section('content')

    <section class="page-hero">
        <div class="page-hero-bg" aria-hidden="true">
            <div class="hero-orb hero-orb-1"></div>
            <div class="hero-orb hero-orb-2"></div>
        </div>
        <div class="container">
            <span class="tag-label">Legal</span>
            <h1 class="page-hero-title">Privacy <span class="hero-h1-accent">Policy</span></h1>
            <p class="lead" style="max-width:640px;margin-top:1.2rem;">
                Last updated: {{ date('F j, Y') }}
            </p>
        </div>
    </section>

    <section class="section section-lg">
        <div class="container" style="max-width:820px;">
            <div class="card" style="padding:clamp(1.5rem,4vw,3rem);">
                <h2>What This Policy Covers</h2>
                <p>
                    This policy explains how Cosmos Algos handles information submitted through
                    cosmosalgos.com. It covers the contact forms and direct email contact. It does not
                    describe data processing inside client projects, which is governed by separate agreements.
                </p>

                <h2>Information We Collect</h2>
                <p>
                    When you use a contact form, we collect the name, email address, and message you
                    provide. If you include them, we also collect your company, phone number, selected
                    service, and budget range. The server records the request IP address and browser
                    user agent for abuse prevention.
                </p>
                <p>
                    We do not require an account, do not run advertising trackers, and do not sell or
                    rent contact information. The site uses an essential session cookie for form
                    security (CSRF) and flash messages; it is not used for advertising or analytics.
                </p>

                <h2>How We Use It</h2>
                <ul>
                    <li>To read and respond to your enquiry.</li>
                    <li>To prepare a proposal or scope of work if you request one.</li>
                    <li>To keep a record of business correspondence.</li>
                    <li>To protect the site from spam and abuse.</li>
                </ul>

                <h2>Storage and Retention</h2>
                <p>
                    Contact submissions are stored in the website database. We keep them only as long as
                    needed to handle the enquiry and maintain business records. You can ask us to delete
                    your submission by emailing <a href="mailto:{{ $company['email'] }}" class="contact-link">{{ $company['email'] }}</a>.
                </p>

                <h2>Third-Party Services</h2>
                <p>
                    The site uses locally served fonts and does not load third-party font or analytics
                    scripts. It does not embed social feeds or advertising pixels. Links to LinkedIn
                    open the LinkedIn website under its own policy once you follow them.
                </p>

                <h2>Your Choices</h2>
                <p>
                    You may request access to, correction of, or deletion of the contact information you
                    submitted. We may need to verify the request before acting on it.
                </p>

                <h2>Contact</h2>
                <p>
                    Privacy questions: <a href="mailto:{{ $company['email'] }}" class="contact-link">{{ $company['email'] }}</a><br>
                    {{ $company['location'] }}
                </p>
            </div>
        </div>
    </section>

@endsection
