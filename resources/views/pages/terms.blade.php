@extends('layouts.app')

@section('title', 'Terms of Use | ' . $company['name'])
@section('meta_description', 'Terms governing the use of the Cosmos Algos website.')

@section('content')

    <section class="page-hero">
        <div class="page-hero-bg" aria-hidden="true">
            <div class="hero-orb hero-orb-1"></div>
            <div class="hero-orb hero-orb-2"></div>
        </div>
        <div class="container">
            <span class="tag-label">Legal</span>
            <h1 class="page-hero-title">Terms of <span class="hero-h1-accent">Use</span></h1>
            <p class="lead" style="max-width:640px;margin-top:1.2rem;">
                Last updated: {{ date('F j, Y') }}
            </p>
        </div>
    </section>

    <section class="section section-lg">
        <div class="container" style="max-width:820px;">
            <div class="card" style="padding:clamp(1.5rem,4vw,3rem);">
                <h2>Use of This Website</h2>
                <p>
                    This website is provided for information about Cosmos Algos and its work. By using it,
                    you agree to these terms. If you do not agree, please do not use the site.
                </p>

                <h2>Information Is Not a Contract</h2>
                <p>
                    Descriptions of services, projects, and capabilities are informational. They do not
                    create a client relationship or a binding offer. Any engagement is governed by a
                    separate written agreement.
                </p>

                <h2>No Warranty</h2>
                <p>
                    We aim to keep the site accurate and available, but it is provided "as is" without
                    warranties of any kind. We may change, suspend, or remove content at any time.
                </p>

                <h2>Intellectual Property</h2>
                <p>
                    The Cosmos Algos name, logo, site design, and original text are owned by Cosmos Algos
                    unless otherwise stated. Client names, trademarks, and third-party marks remain the
                    property of their owners. You may not copy or republish site content for commercial
                    use without permission.
                </p>

                <h2>Acceptable Use</h2>
                <p>
                    Do not attempt to disrupt the site, submit malicious content through the contact forms,
                    or use the site to violate applicable law.
                </p>

                <h2>External Links</h2>
                <p>
                    Links to third-party sites are provided for convenience. We do not control those sites
                    and are not responsible for their content or privacy practices.
                </p>

                <h2>Limitation of Liability</h2>
                <p>
                    To the extent permitted by law, Cosmos Algos is not liable for indirect or consequential
                    loss arising from use of this website. Nothing in these terms limits rights that cannot
                    be limited under applicable law.
                </p>

                <h2>Governing Law</h2>
                <p>
                    These terms are governed by the laws of Pakistan. Disputes are subject to the jurisdiction
                    of the courts of Bahawalpur, Punjab.
                </p>

                <h2>Contact</h2>
                <p>
                    Questions about these terms: <a href="mailto:{{ $company['email'] }}" class="contact-link">{{ $company['email'] }}</a>
                </p>
            </div>
        </div>
    </section>

@endsection
