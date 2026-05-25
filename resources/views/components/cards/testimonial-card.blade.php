@props(['item'])

<article class="card">
    <blockquote>"{{ $item['quote'] }}"</blockquote>
    <p class="author">{{ $item['author'] }}</p>
</article>
