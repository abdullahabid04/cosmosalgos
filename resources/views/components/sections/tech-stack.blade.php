@props(['items' => []])

<section class="section">
    <div class="container">
        <div class="section-head">
            <h2>Technology Stack</h2>
            <p>Core technologies used for fast, stable, and scalable delivery.</p>
        </div>

        <ul class="tech-list">
            @foreach ($items as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</section>
