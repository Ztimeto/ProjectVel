<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
    @vite('resources/css/app.css')
</head>

<body>
    <main class="my-0 mx-auto min-h-full max-w-screen-sm">
        <!-- Background Image Section -->
        <div class="relative">
            <!-- Background Image -->
            <div class="absolute inset-0 bg-cover bg-center opacity-50" 
                 style="background-image: url('{{ url('images/Pendidikan/Pendidikan_1.jpeg') }}');">
            </div>
            <!-- Content Section -->
            <section class="relative z-10 p-8 text-center">
                <h2 class="text-3xl font-bold text-black">Bantu Pasien</h2>
                <p class="mt-4 text-black">Jadilah pahlawan dan bantu mimpi mereka menjadi kenyataan, dengan menyumbangkan pada PID warriors.</p>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                    <a href="{{url('/payment')}}">Donasikan sekarang!</a>
                </button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                    <a href="{{url('/CampaignList')}}">Donasi Lain</a>
                </button>
            </section>

            <!-- Statistics Section -->
            <section class="relative z-10 mt-12 p-8">
                <div class="flex flex-col md:flex-row justify-around items-center space-y-6 md:space-y-0 text-black">
                    <!-- Donation Amount -->
                    <div class="text-center md:text-left">
                        <h2 class="text-2xl font-bold">Rp. 5.326.909.038</h2>
                        <p class="mt-2">Donasi Terkumpul</p>
                    </div>
                    <!-- Number of Donors -->
                    <div class="text-center md:text-left">
                        <h2 class="text-2xl font-bold">13.174</h2>
                        <p class="mt-2">Jumlah Donatur</p>
                    </div>
                    <!-- Number of Donations -->
                    <div class="text-center md:text-left">
                        <h2 class="text-2xl font-bold">404</h2>
                        <p class="mt-2">Jumlah Donasi</p>
                    </div>
                </div>
            </section>
        </div>

        <!-- Testimonials Section -->
        <section class="mt-12 p-8 bg-gray-100">
            <h3 class="text-2xl font-semibold mb-6 text-center text-gray-800 ">Apa Kata Mereka</h3>
            <div class="flex flex-col md:flex-row justify-around items-center space-y-6 md:space-y-0">
                <div class="max-w-xs text-center">
                    <p class="italic">"Terima kasih atas bantuan Anda, saya bisa melanjutkan perawatan medis yang sangat saya butuhkan!"</p>
                    <p class="mt-4 font-bold">- Nama Penerima Bantuan</p>
                </div>
                <div class="max-w-xs text-center">
                    <p class="italic">"Program donasi ini sangat membantu. Prosesnya mudah dan transparan."</p>
                    <p class="mt-4 font-bold">- Nama Donatur</p>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="mt-12 p-8 bg-gray-100">
            <h3 class="text-2xl font-semibold mb-6 text-center text-gray-800">Pertanyaan yang Sering Diajukan</h3>
            <div class="space-y-4">
                <div>
                    <h4 class="font-semibold">Bagaimana cara donasi?</h4>
                    <p class="text-gray-600">Anda bisa klik tombol "Donasikan sekarang" di atas dan mengikuti langkah-langkah yang ada.</p>
                </div>
                <div>
                    <h4 class="font-semibold">Apakah donasi saya aman?</h4>
                    <p class="text-gray-600">Kami menggunakan sistem pembayaran yang aman dan terpercaya.</p>
                </div>
                <div>
                    <h4 class="font-semibold">Apakah saya bisa mendapatkan laporan donasi?</h4>
                    <p class="text-gray-600">Ya, kami menyediakan laporan donasi yang transparan.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white py-8">
        <!-- Social Media Links -->
        <div class="container mx-auto text-center">
            <h3 class="text-2xl font-semibold mb-4">Ikuti Kami</h3>
            <div class="flex justify-center space-x-6">
                <a href="https://www.facebook.com/gdi" class="hover:text-gray-400">Facebook</a>
                <a href="https://www.instagram.com/grahadhuafa" class="hover:text-gray-400">Instagram</a>
                <a href="#" class="hover:text-gray-400">Twitter</a>
                <a href="#" class="hover:text-gray-400">LinkedIn</a>
            </div>
        </div>

        <!-- Footer Information -->
        <div class="mt-12 text-center">
            <p>&copy; 2024 LAZ GRAHA DHUAFA INDONESIA. All Rights Reserved.</p>
            <p>Alamat: Jl. Cijagra No.21, Cijagra, Kec. Lengkong, Kota Bandung, Jawa Barat, Bandung 4826</p>
            <p>Email: gdhuafa@gmail.com | Telepon: +62 (022) 4572 6111</p>
        </div>
    </footer>
</body>

</html>
