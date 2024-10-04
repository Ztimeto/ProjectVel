<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bantu Anak Yatim</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <main class="my-0 mx-auto min-h-full max-w-screen-sm">
        <div class="my-0 mx-auto min-h-screen max-w-480 overflow-x-hidden bg-white pb-[66px]">
            <!-- Header Section -->
            <section class="bg-cover bg-center text-white" style="background-image: url('https://kitabisa.com/_next/image?url=https%3A%2F%2Fimgix.kitabisa.com%2Fabcde12345.jpg%3Fauto%3Dformat%26fm%3Dpjpg%26ch%3DWidth%2CDPR%2CSave-Data%2CViewport-Width&w=640&q=75');">
                <div class="bg-black bg-opacity-60 py-10">
                    <div class="container mx-auto px-4">
                        <h1 class="text-3xl font-bold">Bantu Anak Yatim</h1>
                        <p class="text-lg">Mari kita bantu anak-anak yatim dengan cara berdonasi</p>
                    </div>
                </div>
            </section>

            <!-- Campaign Info -->
            <div class="bg-white shadow-lg rounded-lg max-w-4xl mx-auto my-8">
                <div class="p-4">
                    <div class="flex items-center space-x-4">
                        <div>
                            <h2 class="text-xl font-bold">Anak Yatim</h2>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h3 class="text-2xl font-semibold">Bantu Anak Yatim</h3>
                        <p class="text-red-600 text-3xl font-bold mt-2">Rp30.000.000</p>
                        <button class="mt-2 text-sm text-blue-500">Lihat semua</button>
                    </div>
                    <div class="bg-blue-100 text-blue-800 p-2 mt-4 rounded-lg">
                        <p>Dengan lebih banyak donasi, kita bisa memberikan bantuan lebih banyak kepada anak-anak yatim ini.</p>
                    </div>
                    <div class="mt-4 flex space-x-4">
                        <button id="donasiBtn" class="bg-pink-500 text-white px-6 py-2 rounded-md font-bold hover:bg-pink-600 transition-colors">
                            Donasi
                        </button>
                        <button id="donasiOtomatisBtn" class="bg-red-500 text-white px-6 py-2 rounded-md font-bold hover:bg-red-600 transition-colors">
                            Donasi Otomatis
                        </button>
                    </div>
                </div>
            </div>

            <!-- Donasi biasa -->
            <div id="donationModal" class="fixed z-50 inset-0 hidden bg-gray-800 bg-opacity-50 flex items-center justify-center">
                <div class="bg-white rounded-lg shadow-lg max-w-md w-full">
                    <div class="p-6">
                        <h2 class="text-center text-lg font-bold text-blue-700">Bantu Anak Yatim Sedekah Terbaikmu</h2>
                        <div class="mt-4">
                            <label class="block text-gray-700">Nama Donatur</label>
                            <input type="text" id="donorName" placeholder="Nama Donatur" class="w-full mt-2 px-4 py-2 border rounded-lg" />

                            <label class="block text-gray-700 mt-4">Nominal Donasi Lainnya</label>
                            <input type="number" id="donationAmount" placeholder="Rp" min="10000" class="w-full mt-2 px-4 py-2 border rounded-lg" />
                            <p class="text-sm text-gray-500 mt-1">Min. donasi sebesar Rp10.000</p>
                            
                            <div class="mt-4">
                                <input type="checkbox" id="anonymousDonation" class="mr-2">
                                <label for="anonymousDonation" class="text-sm text-gray-700">Sembunyikan nama saya (Donasi Anonim)</label>
                            </div>
                        </div>

                        <button id="continueDonationBtn" class="w-full bg-pink-500 text-white font-bold py-2 mt-6 rounded-lg hover:bg-pink-600 transition-colors">
                            Lanjut pembayaran
                        </button>
                    </div>
                </div>
            </div>

            <!-- Donasi Otomatis -->
            <div id="donationOtomatisModal" class="fixed z-50 inset-0 hidden bg-gray-800 bg-opacity-50 flex items-center justify-center">
                <div class="bg-white rounded-lg shadow-lg max-w-md w-full">
                    <div class="p-6">
                        <h2 class="text-center text-lg font-bold text-blue-700">Atur Donasi Otomatis untuk Anak Yatim</h2>
                        <div class="mt-4">
                            <label class="block text-gray-700">Jadwal Donasi</label>
                            <div class="flex space-x-2 mt-2">
                                <button id="dailyBtn" class="flex-1 py-2 px-4 text-center bg-gray-200 text-gray-700 rounded-lg">Harian</button>
                                <button id="weeklyBtn" class="flex-1 py-2 px-4 text-center bg-gray-200 text-gray-700 rounded-lg">Mingguan</button>
                                <button id="monthlyBtn" class="flex-1 py-2 px-4 text-center bg-gray-200 text-gray-700 rounded-lg">Bulanan</button>
                                <button id="yearlyBtn" class="flex-1 py-2 px-4 text-center bg-gray-200 text-gray-700 rounded-lg">Tahunan</button>
                            </div>

                            <label class="block text-gray-700 mt-4">Nominal Donasi</label>
                            <input type="number" id="otomatisDonationAmount" placeholder="Rp" min="10000" class="w-full mt-2 px-4 py-2 border rounded-lg" />
                            <p class="text-sm text-gray-500 mt-1">Min. donasi sebesar Rp10.000</p>
                            
                            <div class="mt-4">
                                <input type="checkbox" id="otomatisAnonymousDonation" class="mr-2">
                                <label for="otomatisAnonymousDonation" class="text-sm text-gray-700">Sembunyikan nama saya (Donasi Anonim)</label>
                            </div>

                            <label class="block text-gray-700 mt-4">Nama Donatur (jika tidak anonim)</label>
                            <input type="text" id="otomatisDonorName" placeholder="Nama Donatur" class="w-full mt-2 px-4 py-2 border rounded-lg" />
                        </div>

                        <button id="activateAutoDonationBtn" class="w-full bg-blue-500 text-white font-bold py-2 mt-6 rounded-lg hover:bg-blue-600 transition-colors">
                            Aktifkan Donasi Otomatis
                        </button>
                    </div>
                </div>
            </div>

            <!-- Story Section -->
            <div class="bg-white shadow-lg rounded-lg max-w-4xl mx-auto mb-8 p-4">
                <h4 class="text-lg font-bold">Cerita Penggalangan Dana</h4>
                <p id="story" class="mt-2 text-gray-700">
                    Anak-anak yatim di berbagai wilayah sangat membutuhkan bantuan kita. Mereka tidak hanya membutuhkan dukungan finansial, tapi juga moral. Melalui donasi ini, kita bisa meringankan beban mereka untuk mendapatkan pendidikan yang layak, tempat tinggal, dan masa depan yang lebih baik. 
                    <span id="dots">...</span><span id="more" class="hidden">Dengan sedikit uluran tangan dari kita semua, mereka bisa meraih mimpi mereka. Ayo donasi sekarang dan jadilah bagian dari perubahan besar dalam kehidupan anak-anak yatim.</span>
                </p>
                <button id="readMoreBtn" class="mt-2 text-sm text-blue-500">Baca selengkapnya</button>
            </div>

            <!-- Latest Updates and Donations -->   
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-4xl mx-auto mb-8">
                <!-- Latest Updates -->
                <div class="bg-white shadow-lg rounded-lg p-4">
                    <h4 class="text-lg font-bold">Update Terbaru</h4>
                    <ul id="updatesList" class="mt-2 space-y-2">
                        <li class="flex justify-between border-b py-2">
                            <span class="text-gray-700">Update 1</span>
                            <span class="font-bold">Tanggal</span>
                        </li>
                    </ul>
                </div>

                <!-- Latest Donations -->
                <div class="bg-white shadow-lg rounded-lg p-4">
                    <h4 class="text-lg font-bold">Donasi Terbaru</h4>
                    <ul id="donationsList" class="mt-2 space-y-2">
                        <li class="flex justify-between border-b py-2">
                            <span class="text-gray-700">Donatur 1</span>
                            <span class="font-bold text-pink-500">Rp100.000</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('js/donation.js') }}"></script>
</body>
</html>
