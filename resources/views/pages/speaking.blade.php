<x-guest-layout>
    <div class="mb-5">
        <x-gradient-link href="/" class="text-xl">
            <- Go home</x-gradient-link>
    </div>

    <x-page-header title="Speaking" />

    @if ($talks->count() > 0)
        <div class="relative px-4 sm:px-6 lg:px-8">
            <div class="text-lg max-w-prose mx-auto">
                @foreach ($talks as $talk)
                    <x-talks.talk-list-item :talk="$talk" />
                @endforeach
            </div>
        </div>
    @else
        <x-no-content-placeholder heading=" No talks yet.">
            There's no talks here yet.
            When there are talks to show, they'll show up
        </x-no-content-placeholder>
    @endif

</x-guest-layout>
