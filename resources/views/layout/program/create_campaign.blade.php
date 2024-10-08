<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Campaign</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <main class="my-0 mx-auto min-h-full max-w-screen-sm">
        <div class="my-0 mx-auto min-h-screen max-w-480 overflow-x-hidden bg-white pb-8">
            <h1 class="text-3xl font-bold text-center mt-10">Create a New Campaign</h1>
            
            <!-- Form for creating a campaign -->
            <form action="{{ route('campaigns.store') }}" method="POST" enctype="multipart/form-data" class="mt-8 px-4">
                @csrf
                
                <!-- Name Field -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Campaign Name</label>
                    <input type="text" id="name" name="name" class="w-full mt-2 px-4 py-2 border rounded-lg" required>
                    @error('name')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                
                <!-- Description Field -->
                <div class="mb-4">
                    <label for="description" class="block text-gray-700">Description</label>
                    <textarea id="description" name="description" class="w-full mt-2 px-4 py-2 border rounded-lg" required></textarea>
                    @error('description')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Image Upload Field -->
                <div class="mb-4">
                    <label for="image_url" class="block text-gray-700">Upload Image</label>
                    <input type="file" id="image_url" name="image_url" accept="image/*" class="mt-2">
                    @error('image_url')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Target Amount Field -->
                <div class="mb-4">
                    <label for="target_amount" class="block text-gray-700">Target Amount (in IDR)</label>
                    <input type="number" id="target_amount" name="target_amount" class="w-full mt-2 px-4 py-2 border rounded-lg" required>
                    @error('target_amount')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Division Field -->
                <div class="mb-4">
                    <label for="division" class="block text-gray-700">Division</label>
                    <select id="division" name="division" class="w-full mt-2 px-4 py-2 border rounded-lg" required>
                        <option value="">Select Division</option>
                        <option value="budaya">Budaya</option>
                        <option value="seyum">Seyum</option>
                        <option value="cinta">Cinta</option>
                    </select>
                    @error('division')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="bg-pink-500 text-white px-6 py-2 rounded-md font-bold hover:bg-pink-600 transition-colors">
                    Create Campaign
                </button>
            </form>
        </div>
    </main>
</body>
</html>
