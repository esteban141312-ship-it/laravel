<x-layout meta-title="Mi blog" meta-description="Listado de posts">
    <h1>Mi blog</h1>

    @foreach ($posts as $item)
        <a href="{{ route('posts.show', $item['id']) }}">{{ $item['title'] }}</a>
    @endforeach

    @if ($post)
        <h2>{{ $post['title'] }}</h2>
        <p>Id: {{ $post['id'] }}</p>
        <p>{{ $post['body'] }}</p>
    @endif
</x-layout>
