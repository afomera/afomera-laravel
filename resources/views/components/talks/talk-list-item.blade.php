@props(['talk'])

<div class="mt-8">
    <span class="block uppercase font-semibold tracking-wide text-gray-500 dark:text-gray-400">
        @if ($talk->published_at)
            {{ $talk->published_at->format('F Y') }}
        @else
            <span class="text-yellow-700 dark:text-yellow-300">Draft</span>
        @endif
    </span>

    <span class="block font-bold text-2xl text-pink-500 dark:text-pink-500">
        {{ $talk->title }}
    </span>

    <div class="my-3">
        <div class="prose prose-lg dark:prose-invert flex items-center space-x-8">
            {!! $talk->body !!}
        </div>
    </div>

    <div class="prose prose-xl dark:prose-invert flex items-center space-x-8">
        @if ($talk->recording_link)
            <x-external-link :href="$talk->recording_link">Recording</x-external-link>
        @endif

        @if ($talk->slides_link)
            <x-external-link :href="$talk->slides_link">Slides</x-external-link>
        @endif
    </div>
</div>
