@props([
    'title',
    'subtitle',
    'primaryCta' => ['label' => 'Get Started', 'href' => '#'],
    'secondaryCta' => ['label' => 'Learn More', 'href' => '#'],
])

<section class="hero">
    <div class="container hero-grid">
        <div>
            <p class="kicker">Cosmos Algos</p>
            <h1>{{ $title }}</h1>
            <p class="lead">{{ $subtitle }}</p>
            <div class="hero-actions">
                <x-ui.button :href="$primaryCta['href']">{{ $primaryCta['label'] }}</x-ui.button>
                <x-ui.button :href="$secondaryCta['href']" variant="ghost">{{ $secondaryCta['label'] }}</x-ui.button>
            </div>
        </div>
        <div class="hero-panel">
            <p>Architecture-first delivery for products that require reliability, scalability, and technical clarity.</p>
        </div>
    </div>
</section>
