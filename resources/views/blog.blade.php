<x-layout meta-title="Home Title" meta-description="Home Description">

<!-- @component('components.layout') -->
<h1>Mi blog</h1>
<!-- @endcomponent -->

@foreach ($posts as $post)
    <p>{{ $post['title'] }}</p>
@endforeach
</x-layout>