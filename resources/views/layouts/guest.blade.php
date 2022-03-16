<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Andrea Fomera: Developer, Course Author and more.') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="antialiased dark:bg-gray-900 selection:bg-pink-200 h-screen flex flex-col print:mx-10">

    <div id="dark-mode-switch-container" class="absolute right-10 top-5 w-50 h-50 print:hidden">
        <button id="theme-switch" class="h-10 w-10 flex justify-center items-center focus:outline-none text-yellow-500">
            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                </path>
            </svg>
        </button>
    </div>


    <main class="flex-grow">
        <div class="max-w-4xl mx-auto pt-20 print:pt-16 px-6 lg:px-0">
            {{ $slot }}
        </div>
    </main>


    <div class="py-10">
        <div class="pt-20">
            <div class="mb-5">
                <div class="w-full flex justify-center">
                    <a href="/" alt="Andrea Fomera Logo">
                        <x-logo />
                    </a>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="w-full flex justify-center mt-5 md:mt-0">
                    <div class="font-medium text-lg md:text-xl">
                        <x-gradient-link href="/about" class="mr-5">About</x-gradient-link>
                        <x-gradient-link href="/posts" class="mr-5">Posts</x-gradient-link>
                        <x-gradient-link href="/speaking" class="mr-5">Speaking</x-gradient-link>
                        <x-gradient-link href="https://store.afomera.dev" target="_blank" class="mr-5">Courses
                        </x-gradient-link>
                        <x-gradient-link href="mailto:andrea.fomera@gmail.com" class="mr-5">Email Me
                        </x-gradient-link>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://life-on-mars-rewarding.afomera.dev/script.js" data-site="UCFCRLJV" defer></script>

</body>

</html>
