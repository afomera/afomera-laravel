<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="relative antialiased text-white bg-gray-900" style="width: 1200px; height: 627px;">
    <div class="absolute bottom-0 flex flex-col items-start pb-16 pl-16 space-y-8">
        <div class="space-y-4">
            <p class="font-sans text-sm font-medium uppercase">{{ $post->published_at->format('F j, Y') }}</p>
            <h1 class="max-w-2xl text-4xl leading-relaxed">{{ $post->title }}</h1>
        </div>

        <p class="text-sm text-gray-200">afomera.dev</p>
    </div>
</body>

</html>
