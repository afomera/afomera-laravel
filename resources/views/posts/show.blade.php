<x-guest-layout>
    <h1 class="text-5xl">{{ $post->title }}</h1>

    <img src="/images/avatar_2021.jpeg" alt="Andrea Fomera avatar"
        class="object-cover shadow-lg rounded-lg h-48 w-48 [clip-path:circle()]">

    published_at : {{ $post->published_at }}
    slug: {{ $post->slug }}

    <div>Body:</div>
    {!! $post->body !!}
</x-guest-layout>
