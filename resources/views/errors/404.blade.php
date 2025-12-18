<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - Kwaderno</title>

    <!-- TailwindCSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-b from-sky-50 via-white to-sky-50 text-gray-800 font-sans antialiased">

    <!-- Container -->
    <div class="min-h-screen flex flex-col items-center justify-center px-4 sm:px-6 lg:px-8 py-12">

        <!-- Error Code -->
        <h1 class="text-6xl sm:text-7xl font-extrabold text-sky-600 mb-6 text-center">
            404
        </h1>

        <!-- Error Message -->
        <p class="text-lg sm:text-xl text-gray-700 mb-8 text-center px-2 sm:px-0">
            The page you are looking for does not exist.
        </p>

        <!-- Home Button -->
        <a href="{{ route('kwadernos.index') }}" class="bg-sky-600 hover:bg-sky-700 text-white font-semibold py-3 px-6 rounded-lg shadow-md transition-all">
            Go to Homepage
        </a>

        <!-- Footer -->
        <footer class="mt-12 text-center text-sm sm:text-base text-gray-600 px-2 sm:px-0">
            <p>Kwaderno &copy; 2025 All rights reserved.</p>
        </footer>

    </div>
</body>
</html>
