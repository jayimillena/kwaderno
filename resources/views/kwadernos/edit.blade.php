<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kwaderno</title>

    <!-- TailwindCSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-b from-sky-50 via-white to-sky-50 text-gray-800 font-sans antialiased">

    <!-- Container -->
    <div class="max-w-screen-md mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <!-- Header -->
        <h1 class="text-3xl sm:text-4xl font-extrabold text-sky-600 mb-8 text-center sm:text-left px-2 sm:px-0">
            Edit Kwaderno
        </h1>

        <!-- Form Card -->
        <form action="{{ route('kwadernos.update', $kwaderno) }}" method="POST" class="bg-white rounded-xl shadow-lg p-6 sm:p-8 max-w-xl mx-auto">
            @csrf
            @method('PUT')

            <!-- Title Field -->
            <div class="mb-6">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2 px-1">Title</label>
                <input 
                    type="text" 
                    id="title" 
                    name="title" 
                    value="{{ old('title', $kwaderno->title) }}" 
                    required 
                    class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm p-4 transition-all"
                    placeholder="Enter kwaderno title"
                >
            </div>

            <!-- Content Field -->
            <div class="mb-6">
                <label for="content" class="block text-sm font-medium text-gray-700 mb-2 px-1">Content</label>
                <textarea 
                    id="content" 
                    name="content" 
                    required 
                    rows="6" 
                    class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm p-4 transition-all"
                    placeholder="Write your kwaderno content here..."
                >{{ old('content', $kwaderno->content) }}</textarea>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center sm:justify-start">
                <button 
                    type="submit" 
                    class="bg-sky-600 hover:bg-sky-700 text-white font-semibold py-3 px-6 rounded-lg shadow-md transition-all"
                >
                    Update Kwaderno
                </button>
            </div>
        </form>

        <!-- Footer -->
        <footer class="mt-12 text-center text-sm sm:text-base text-gray-600 px-2 sm:px-0">
            <p>Kwaderno &copy; 2025 All rights reserved.</p>
        </footer>

    </div>
</body>
</html>
