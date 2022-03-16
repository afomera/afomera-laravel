@props(['title', 'subtitle' => null])

<h1
    class="my-2 text-3xl text-center leading-8 font-bold tracking-tight text-gray-900 dark:text-gray-200 sm:text-4xl sm:leading-10 mt-10">
    {{ $title }}
</h1>
<p class="text-base text-center leading-6 font-medium tracking-wide mb-6 dark:text-gray-400">{{ $subtitle }}</p>
<div
    class="container mx-auto bg-gradient-to-r from-pink-300 to-pink-500 dark:from-gray-600 dark:to-gray-600 h-1 w-2/3 mb-10">
</div>
