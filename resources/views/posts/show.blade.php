<x-guest-layout>
    <div class="mb-5">
        <x-gradient-link href="/posts" class="text-xl">
            <- See more posts</x-gradient-link>
    </div>

    <x-page-header :title="$post->title" />

    <div class="relative">
        <div class="text-lg max-w-prose mx-auto">
            <div class="prose dark:prose-invert prose-pink lg:prose-lg">
                {!! $post->body !!}
            </div>
        </div>
    </div>
</x-guest-layout>
