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
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="antialiased dark:bg-gray-900 selection:bg-pink-200 h-screen flex flex-col print:mx-10">
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
                        <a href="/about"
                            class="bg-clip-text text-transparent bg-gradient-to-r from-red-400 to-pink-500 mr-5">About</a>
                        <a href="/posts"
                            class="bg-clip-text text-transparent bg-gradient-to-r from-red-400 to-pink-500 mr-5">Posts</a>
                        <a href="/speaking"
                            class="bg-clip-text text-transparent bg-gradient-to-r from-red-400 to-pink-500 mr-5">Speaking</a>
                        <a href="https://store.afomera.dev" target="_blank"
                            class="bg-clip-text text-transparent bg-gradient-to-r from-red-400 to-pink-500 mr-5">Courses</a>
                        <a href="mailto:andrea.fomera@gmail.com"
                            class="bg-clip-text text-transparent bg-gradient-to-r from-red-400 to-pink-500 mr-5">Email
                            me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://life-on-mars-rewarding.afomera.dev/script.js" data-site="UCFCRLJV" defer></script>

</body>

</html>
