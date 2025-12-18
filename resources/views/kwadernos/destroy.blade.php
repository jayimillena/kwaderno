<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Kwaderno</title>

    <!-- TailwindCSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-b from-sky-50 via-white to-sky-50 text-gray-800 font-sans antialiased">

    <!-- Container -->
    <div class="max-w-screen-md mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <!-- Header -->
        <h1 class="text-3xl sm:text-4xl font-extrabold text-sky-600 mb-6 text-center sm:text-left px-2 sm:px-0">
            Delete Kwaderno
        </h1>

        <!-- Confirmation Card -->
        <div class="bg-white rounded-xl shadow-lg p-6 sm:p-8 space-y-6 max-w-lg mx-auto">
            <p class="text-gray-700 px-1 sm:px-0 text-base sm:text-lg">
                Are you sure you want to delete this kwaderno? This action cannot be undone.
            </p>

            <!-- Delete Form -->
            <form action="{{ route('kwadernos.destroy', $kwaderno) }}" method="POST">
                @csrf
                @method('DELETE')
                <button 
                    type="submit" 
                    class="bg-red-500 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-lg shadow-md transition-all w-full sm:w-auto"
                >
                    Delete Kwaderno
                </button>
            </form>
        </div>

        <!-- Footer -->
        <footer class="mt-12 text-center text-sm sm:text-base text-gray-600 px-2 sm:px-0">
            <p>Kwaderno &copy; 2025 All rights reserved.</p>
        </footer>

    </div>
</body>
</html>
