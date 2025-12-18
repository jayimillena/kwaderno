<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kwaderno</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" />
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <a href="{{ route('kwadernos.index') }}">
                            <h1 class="m-0 text-4xl font-bold leading-tight tracking-tighter lg:text-5xl">
                                Kwaderno
                            </h1>
                        </a>

                        <nav class="ml-auto flex items-center justify-end space-x-4">
                            <a href="{{ route('kwadernos.create') }}" class="text-sm font-medium underline underline-offset-4 hover:text-black/70 dark:hover:text-white/70">
                                Create New Kwaderno
                            </a>
                        </nav>
                    </header>

                    <main class="mt-6">
                        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                            @foreach ($kwadernos as $kwaderno)
                                <a href="{{ route('kwadernos.show', $kwaderno) }}" class="group rounded-lg border border-gray-200 p-6 text-left hover:border-black/50 hover:dark:border-white/50 dark:border-gray-700">
                                    <h2 class="mb-4 text-2xl font-semibold">
                                        {{ $kwaderno->title }}
                                        <span class="inline-block transition-transform group-hover:translate-x-1 motion-reduce:transform-none">-&gt;</span>
                                    </h2>
                                    <p class="m-0 max-w-[30ch] text-sm opacity-50">
                                        {{ Str::limit($kwaderno->content, 100) }}
                                    </p>
                                </a>
                            @endforeach
                        </div>
                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        Kwaderno @copy 2025 All rights reserved.
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
