<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Page</title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <main class="my-0 mx-auto min-h-full max-w-screen-sm">
        <div class="my-0 mx-auto min-h-screen max-w-480 overflow-x-hidden bg-white pb-[66px]">

            <!-- Tentang Section -->
            <div class="bg-orange-100 text-black p-4 flex items-center justify-between">
                <!-- Back button with link -->
                <a href="/settings">
                    <button class="bg-transparent border-none">
                        <img src="https://cdn-icons-png.flaticon.com/128/545/545680.png" alt="Info Button" class="w-8 h-8">
                    </button>
                </a>

                <!-- Title centered in the middle -->
                <h1 class="text-center font-bold text-2xl flex-grow text-center">Bantuan</h1>

                <!-- Placeholder for keeping the layout balanced (optional) -->
                <div class="w-8 h-8"></div>
            </div>

            <!-- Header -->
            <div class="bg-green-500 p-5 text-white">
                <h1 class="text-xl font-semibold">Hai, ada yang bisa dibantu?</h1>
                <p>Chat Tim Kitabisa atau baca artikel bantuan untuk menjawab pertanyaanmu.</p>
            </div>

            <!-- Help Topics -->
            <section class="p-6">
                <h2 class="font-semibold text-gray-700 mb-4">Baca Artikel Bantuan</h2>
                <div class="grid grid-cols-3 gap-4">
                    <div class="text-center">
                        <div class="bg-blue-100 rounded-lg p-3">
                            <img src="https://cdn-icons-png.flaticon.com/128/2618/2618479.png" alt="Donasi" class="mx-auto" height="10px" width="50px">
                        </div>
                        <p class="mt-2 text-sm">Donasi</p>
                    </div>
                    <a href="/GalangDana">
                        <div class="text-center">       
                            <div class="bg-blue-100 rounded-lg p-3">
                                <img src="https://cdn-icons-png.flaticon.com/128/3130/3130453.png" alt="Galang Dana" class="mx-auto" height="10px" width="50px">
                            </div>
                            <p class="mt-2 text-sm">Galang Dana</p>
                        </div>
                    </a>
                    
                    <a href="/zakat">
                        <div class="text-center">
                            <div class="bg-blue-100 rounded-lg p-3">
                                <img src="https://cdn-icons-png.flaticon.com/128/7653/7653150.png" alt="Zakat" class="mx-auto" height="10px" width="50px">
                            </div>
                            <p class="mt-2 text-sm">Zakat</p>
                        </div>
                    </a>
                </div>
            </section>

            <!-- Chat Section -->
            <div class="bg-blue-100 p-4 mt-4 mx-4 rounded-lg text-center">
                <div class="flex items-center">
                    <img src="https://cdn-icons-png.flaticon.com/128/2076/2076218.png" alt="Chat Kami" class="w-10 h-10">
                    <div class="ml-4">
                        <p class="text-blue-700 font-semibold">Chat Kami</p>
                        <p class="text-gray-600 text-sm">Tanyakan langsung kendalamu ke Tim Graha Dhuafa Indonesia</p>
                    </div>
                    <button class="ml-auto bg-blue-500 text-white py-2 px-4 rounded-lg">Mulai Chat</button>
                </div>
            </div>

            <!-- Help Center & Email Section -->
            <section class="p-6">
                <div>
                    <a href="mailto:gdhuafa@gmail.com" class="flex items-center p-4 bg-gray-100 rounded-lg">
                        <img src="https://cdn-icons-png.flaticon.com/128/646/646094.png" alt="Hubungi via Email" class="w-8 h-8">
                        <p class="ml-4 font-semibold text-gray-700">Hubungi kami via email</p>
                        <span class="ml-auto text-blue-500">&gt;</span>
                    </a>    
                </div>
            </section>

        </div>            
        <footer class="p-6 bg-orange-100">
            <p class="font-semibold text-gray-700">Yayasan Graha Dhuafa Indonesia</p>
            <p class="text-gray-500">Jl. Cijagra No.21, Cijagra, Kec. Lengkong, Kota Bandung, Jawa Barat, Bandung 4826</p>
        </footer>
    </main>
</body>
</html>
