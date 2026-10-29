<x-layout meta-title="Mi blog" meta-description="Listado de posts">
    <h1>Mi blog</h1>

    @foreach ($posts as $post)
        <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
    @endforeach

    <!-- @if ($post)
        <h2>{{ $post->title }}</h2>
        <p>Id: {{ $post->id }}</p>
        <p>{{ $post->body }}</p>
    @endif -->
</x-layout>
