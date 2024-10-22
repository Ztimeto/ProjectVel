<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    @vite('resources/css/app.css')
</head>
<body >
    <main class="my-0 mx-auto min-h-full max-w-screen-sm">
        <div class="my-0 mx-auto min-h-screen max-w-480 overflow-x-hidden bg-white pb-[66px]">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Contact Us</h2>

            <!-- Form Contact Us -->
            <form action="{{ route('Contact_us.store') }}" method="POST">
                @csrf

                <!-- Nama -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Masukkan nama Anda" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email Anda" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- No. Telepon -->
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">No. Telepon:</label>
                    <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Masukkan nomor telepon Anda" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('phone')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Pesan -->
                <div class="mb-6">
                    <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Pesan:</label>
                    <textarea id="message" name="message" rows="4" placeholder="Tulis pesan Anda di sini" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tombol Kirim -->
                <div class="text-center">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">
                        Kirim
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>