@props(['post'])

<div class="mt-8">
    <span class="block uppercase font-semibold tracking-wide text-gray-500 dark:text-gray-400">
        @if ($post->published_at)
            {{ $post->published_at->format('F j, Y') }}
        @else
            <span class="text-yellow-700 dark:text-yellow-300">Draft</span>
        @endif
    </span>
    <a href="{{ $post->slug }}"
        class="block text-2xl text-pink-500 dark:text-pink-500 hover:text-pink-700 dark:hover:text-pink-700">
        {{ $post->title }}
    </a>
</div>
