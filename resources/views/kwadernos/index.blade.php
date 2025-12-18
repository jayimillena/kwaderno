<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kwaderno</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Tailwind Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-b from-sky-50 via-white to-sky-50 text-gray-800 font-sans antialiased">

    <!-- Container -->
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header -->
        <header class="flex flex-col sm:flex-row items-center justify-between py-6 sm:py-8 sticky top-0 bg-white/90 backdrop-blur-md shadow-md z-10 rounded-b-lg px-4 sm:px-6 lg:px-8">
            <a href="{{ route('kwadernos.index') }}" class="text-4xl font-extrabold text-sky-600 hover:text-sky-700 transition-colors">
                Kwaderno
            </a>

            <nav class="mt-4 sm:mt-0 flex items-center space-x-4 sm:space-x-6">
                <a href="{{ route('kwadernos.create') }}" class="px-4 py-2 text-sm font-medium text-white bg-sky-600 hover:bg-sky-700 rounded-lg shadow-sm transition-all">
                    Create New Kwaderno
                </a>
            </nav>
        </header>

        <!-- Main Content -->
        <main class="mt-12 sm:mt-16">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($kwadernos as $kwaderno)
                    <a href="{{ route('kwadernos.show', $kwaderno) }}" class="group block rounded-xl border border-sky-200 p-6 sm:p-8 bg-white shadow-lg hover:shadow-2xl transition-transform transform hover:-translate-y-1 hover:bg-sky-50">
                        <h2 class="text-2xl sm:text-2xl font-semibold text-sky-600 group-hover:text-sky-700 mb-3">
                            {{ $kwaderno->title }}
                            <span class="inline-block transition-transform group-hover:translate-x-2">→</span>
                        </h2>
                        <p class="text-gray-500 text-sm sm:text-base group-hover:text-gray-700 leading-relaxed">
                            {{ Str::limit($kwaderno->content, 120) }}
                        </p>
                    </a>
                @endforeach
            </div>
        </main>

        <!-- Footer -->
        <footer class="mt-16 py-12 text-center text-sm sm:text-base text-gray-600 bg-white/90 backdrop-blur-md rounded-t-lg shadow-inner px-4 sm:px-6 lg:px-8">
            <p>Kwaderno &copy; 2025 All rights reserved.</p>
            <nav class="mt-4 flex justify-center space-x-4 sm:space-x-6">
                <a href="#contact" class="text-sky-600 hover:text-sky-700 transition-colors">Contact Us</a>
                <span class="text-gray-400">|</span>
                <a href="#terms" class="text-sky-600 hover:text-sky-700 transition-colors">Terms & Conditions</a>
            </nav>
        </footer>

    </div>
</body>
</html>
