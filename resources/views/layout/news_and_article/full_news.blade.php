<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News dan Article</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen py-6 px-4">
    <main class="my-0 mx-auto min-h-full max-w-screen-sm">
        <a href="{{ url('/') }}" class="inline-block mb-4 py-2 px-4 text-white bg-green-700 rounded-lg shadow hover:bg-green-900">
            &larr; Kembali
        </a>
        <div class="max-w-4xl mx-auto">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h1 class="text-2xl font-bold mb-4">{{ $article->title }}</h1>
                @if($article->image_url)
                    <img src="{{ asset('storage/' . $article->image_url) }}" alt="{{ $article->title }}" class="w-full h-auto mb-4 rounded-md">
                @else
                    <img src="{{ asset('images/default-image.jpg') }}" alt="Default Image" class="w-full h-auto mb-4 rounded-md">
                @endif
                <p>{{ $article->content }}</p>
            </div>
        </div>
    </main>
</body>
</html>
