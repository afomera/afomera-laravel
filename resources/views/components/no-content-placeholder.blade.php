@props(['heading'])

<div class="relative px-4 sm:px-6 lg:px-8">
    <div class="text-lg max-w-prose mx-auto text-gray-600 dark:text-gray-300">
        <div class="text-xl font-bold text-center mb-4">{{ $heading }} </div>
        <p class="text-center">
            {{ $slot }}
        </p>
    </div>
</div>
