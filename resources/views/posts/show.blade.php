<x-layout :meta-title="$post->title" :meta-description="$post->body">
<h2>{{ $post->title }}</h2>
<p>{{ $post->body }}</p>

<a href="{{ route('blog') }}">Regresar</a>

</x-layout>
