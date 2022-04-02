<x-guest-layout>
    <div class="mb-5">
        <x-gradient-link href="/" class="text-xl">
            <- Go home</x-gradient-link>
    </div>

    <x-page-header :title="$page->title" />

    <div class="relative">
        <div class="text-lg max-w-prose mx-auto">
            <div class="prose dark:prose-invert prose-pink lg:prose-lg">
                {!! $page->body !!}
            </div>
        </div>
    </div>
</x-guest-layout>
