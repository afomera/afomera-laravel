<x-guest-layout>
    <h1 class="text-5xl">{{ $post->title }}</h1>

    published_at : {{ $post->published_at }}
    slug: {{ $post->slug }}

    <div>Body:</div>
    {!! $post->body !!}
</x-guest-layout>
