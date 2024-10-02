<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang kita</title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <main class="my-0 mx-auto min-h-full max-w-screen-sm">
        <div class="bg-orange-100 text-black p-4 flex items-center justify-between">
            <!-- Back button with link -->
            <a href="/settings">
                <button class="bg-transparent border-none">
                    <img src="https://cdn-icons-png.flaticon.com/128/545/545680.png" alt="Info Button" class="w-8 h-8">
                </button>
            </a>

            <!-- Title centered in the middle -->
            <h1 class="text-center font-bold text-2xl flex-grow text-center">Tentang</h1>

            <!-- Placeholder for keeping the layout balanced (optional) -->
            <div class="w-8 h-8"></div>
        </div>

        <div class="max-w-screen-lg mx-auto p-6 bg-white">
            <!-- Section 1 -->
            <div class="text-center">
                <h2 class="font-semibold text-xl">Lorem ipsum dolor sit amet</h2>
                <p class="mt-2 text-gray-600">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                <img src="phone-image.png" alt="App Image" class="mx-auto mt-4 w-64">
            </div>

            <!-- Section 2: Stats -->
            <div class="grid grid-cols-2 gap-6 mt-6 text-center">
                <div class="p-4 border rounded-lg shadow">
                    <h3 class="font-bold text-xl">10 Juta</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="p-4 border rounded-lg shadow">
                    <h3 class="font-bold text-xl">1,000,000+</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="p-4 border rounded-lg shadow">
                    <h3 class="font-bold text-xl">5000+</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="p-4 border rounded-lg shadow">
                    <h3 class="font-bold text-xl">400+</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet</p>
                </div>
            </div>

            <!-- Section 3: Mission -->
            <div class="mt-8 p-6 bg-blue-50 rounded-lg">
                <p class="text-lg text-gray-700">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.
                </p>
            </div>

            <!-- Section 4: Impact -->
            <div class="mt-8 flex items-center justify-between">
                <div>
                    <h3 class="font-bold text-xl">Lorem ipsum dolor sit amet</h3>
                    <ul class="mt-2 text-gray-600 list-disc list-inside">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                    </ul>
                </div>
                <img src="donation-image.png" alt="Impact Image" class="w-48">
            </div>

            <!-- Section 5: Continuous Improvement -->
            <div class="mt-8 p-6 bg-blue-50 rounded-lg">
                <p class="text-lg text-gray-700">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus a risus eget purus dictum laoreet.
                </p>
            </div>

            <!-- Section 6: Financials and Organization -->
            <div class="mt-8">
                <h3 class="font-bold text-xl">Lorem ipsum dolor sit amet</h3>
                <div class="flex justify-between items-center mt-4">
                    <div class="p-4 border rounded-lg shadow text-center">
                        <h4 class="font-bold text-lg">Rp 1,041,635,075</h4>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="p-4 border rounded-lg shadow text-center">
                        <h4 class="font-bold text-lg">57,212</h4>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>

            <!-- Footer Section -->
            <div class="mt-8 text-center text-gray-500">
                <p>&copy; 2024 Graha Dhuafa Indonesia. All rights reserved.</p>
            </div>
        </div>

    </main>
</body>
</html>