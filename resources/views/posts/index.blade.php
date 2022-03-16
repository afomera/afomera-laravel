<x-guest-layout>
    <div class="mb-5">
        <x-gradient-link href="/" class="text-xl">
            <- Go home</x-gradient-link>
    </div>

    <x-page-header title="Andrea's Journal"
        subtitle="Random musings on things I found interesting, or talking about life." />

    @if ($posts->count() > 0)
        <div class="relative px-4 sm:px-6 lg:px-8">
            <div class="text-lg max-w-prose mx-auto">
                @foreach ($posts as $post)
                    <x-posts.post-list-item :post="$post" />
                @endforeach
            </div>
        </div>
    @else
        <x-no-content-placeholder heading="No posts yet.">
            There's nothing written here yet.
            When there are posts to show, they'll show up
            here!
        </x-no-content-placeholder>
    @endif
</x-guest-layout>
