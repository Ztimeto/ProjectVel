<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pembuatan News</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-r from-purple-400 to-pink-600 min-h-screen flex items-center justify-center">
    <main class="my-0 mx-auto min-h-full max-w-screen-sm">
        <div class="bg-white rounded-lg shadow-lg p-8 max-w-lg w-full">
            <h2 class="text-2xl font-bold text-center mb-6">Create News Article</h2>
            <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="title" class="block text-sm font-semibold text-gray-700">Title</label>
                    <input type="text" name="title" id="title" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                </div>

                <div class="mb-6">
                    <label for="content" class="block text-sm font-semibold text-gray-700">Content</label>
                    <textarea name="content" id="content" rows="5" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500"></textarea>
                </div>

                <div class="mb-6">
                    <label for="status" class="block text-sm font-semibold text-gray-700">Status</label>
                    <select name="status" id="status" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <option value="N">News</option>
                        <option value="A">Article</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="image" class="block text-sm font-semibold text-gray-700">Image</label>
                    <input type="file" name="image_url" id="image" accept="image/*" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                </div>

                <div class="text-center">
                    <button type="submit" class="w-full px-6 py-3 bg-black text-white rounded-lg shadow-md hover:bg-gray-800 focus:ring-2 focus:ring-purple-500">Post</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
