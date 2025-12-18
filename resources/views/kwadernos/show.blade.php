<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Kwaderno</title>

    <!-- TailwindCSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-b from-sky-50 via-white to-sky-50 text-gray-800 font-sans antialiased">

    <!-- Container -->
    <div class="max-w-screen-md mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <!-- Header -->
        <h1 class="text-3xl sm:text-4xl font-extrabold text-sky-600 mb-8 text-center sm:text-left px-2 sm:px-0">
            Show Kwaderno
        </h1>

        <!-- Kwaderno Card -->
        <div class="bg-white rounded-xl shadow-lg p-6 sm:p-8 space-y-6 mb-6 max-w-xl mx-auto">
            
            <!-- Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2 px-1">Title</label>
                <p id="title" class="mt-1 w-full border border-gray-300 rounded-lg shadow-sm sm:text-sm p-4 text-gray-800">
                    {{ $kwaderno->title }}
                </p>
            </div>

            <!-- Content -->
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700 mb-2 px-1">Content</label>
                <p id="content" class="mt-1 w-full border border-gray-300 rounded-lg shadow-sm sm:text-sm p-4 text-gray-800">
                    {{ $kwaderno->content }}
                </p>
            </div>
        </div>

        <!-- Back Button -->
        <div class="max-w-xl mx-auto">
            <a href="{{ route('kwadernos.index') }}" class="block w-full sm:w-auto text-center bg-sky-600 hover:bg-sky-700 text-white font-semibold py-3 px-6 rounded-lg shadow-md transition-all">
                Back to Kwadernos
            </a>
        </div>

        <!-- Footer -->
        <footer class="mt-12 text-center text-sm sm:text-base text-gray-600 px-2 sm:px-0">
            <p>Kwaderno &copy; 2025 All rights reserved.</p>
        </footer>

    </div>
</body>
</html>
