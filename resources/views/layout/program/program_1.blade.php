<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Campaign</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <main class="my-0 mx-auto min-h-full max-w-screen-sm">
        <div class="my-0 mx-auto min-h-screen max-w-480 overflow-x-hidden bg-white pb-[66px]">
            <!-- Header Section -->
            <section class="bg-cover bg-center text-white" style="background-image: url('https://kitabisa.com/_next/image?url=https%3A%2F%2Fimgix.kitabisa.com%2F31792a2c-65cd-4d29-b0b2-78cdaeb19508.jpg%3Fauto%3Dformat%26fm%3Dpjpg%26ch%3DWidth%2CDPR%2CSave-Data%2CViewport-Width&w=640&q=75');">
                <div class="bg-black bg-opacity-60 py-10">
                    <div class="container mx-auto px-4">
                        <h1 class="text-3xl font-bold">Raih Keutamaan Sedekah Jariyah</h1>
                        <p class="text-lg">Bantu Mahasiswa Dhuafa Bisa Menghafal Qur'an</p>
                    </div>
                </div>
            </section>

            <!-- Campaign Info -->
            <div class="bg-white shadow-lg rounded-lg max-w-4xl mx-auto my-8">
                <div class="p-4">
                    <div class="flex items-center space-x-4">
                        <div>
                            <h2 class="text-xl font-bold">Senyum</h2>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h3 class="text-2xl font-semibold">Sedekah Jariyah Wujudkan Mimpi Penghafal Quran</h3>
                        <p class="text-red-600 text-3xl font-bold mt-2">Rp20.000.000</p>
                        <button class="mt-2 text-sm text-blue-500">Lihat semua</button>
                    </div>
                    <div class="bg-blue-100 text-blue-800 p-2 mt-4 rounded-lg">
                        <p>Semakin banyak donasi yang tersedia, semakin besar bantuan yang bisa disalurkan oleh gerakan ini.</p>
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
                        <h2 class="text-center text-lg font-bold text-blue-700">Sedekah Jariyah Wujudkan Mimpi Penghafal Quran</h2>
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
                        <h2 class="text-center text-lg font-bold text-blue-700">Atur Donasi Otomatis</h2>
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
                    Mutiara Nur Aziza salah satunya, Mahasiswi dari Cibarusah Cikarang saat ini sedang menempuh pendidikan Sarjana Manajemen Bisnis Syariah. 
                    <span id="dots">...</span><span id="more" class="hidden">Ini menjadi salah satu Mahasiswi berprestasi yang terancam putus sekolah karena masalah ekonomi. 
                    Hal itu terjadi karena orangtua mahasiswa di-PHK atau ekonomi keluarganya menurun karena resesi, dan banyak hal lainnya.</span>
                </p>
                <button id="readMoreBtn" class="mt-2 text-sm text-blue-500">Baca selengkapnya</button>
            </div>

            <!-- Latest Updates and Donations -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-4xl mx-auto mb-8">
                <!-- Latest Updates -->
                <div class="bg-white shadow-lg rounded-lg p-4">
                    <h4 class="text-lg font-bold">Update Terbaru</h4>
                    <ul id="updatesList" class="mt-2 space-y-2">
                        <!-- Update items -->
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
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Handle normal donation modal
        document.getElementById('donasiBtn').onclick = function() {
            document.getElementById('donationModal').classList.remove('hidden');
        };
        
        document.getElementById('continueDonationBtn').onclick = function() {
            const donationAmount = document.getElementById('donationAmount').value;
            const donorName = document.getElementById('donorName').value;
            const anonymousDonation = document.getElementById('anonymousDonation').checked;
            const displayName = anonymousDonation ? "Sahabat Baik" : donorName;

            if (displayName && donationAmount >= 10000) {
                const donationsList = document.getElementById('donationsList');
                const newDonation = document.createElement('li');
                newDonation.classList.add('flex', 'justify-between', 'border-b', 'py-2');
                newDonation.innerHTML = `
                    <span class="text-gray-700">${displayName}</span>
                    <span class="font-bold">Rp${parseInt(donationAmount).toLocaleString()}</span>
                `;
                donationsList.appendChild(newDonation);
                document.getElementById('donationModal').classList.add('hidden');
            } else {
                alert('Pastikan semua field diisi dan nominal donasi minimal Rp10.000.');
            }
        };

        // Show automatic donation modal
        document.getElementById('donasiOtomatisBtn').onclick = function() {
            document.getElementById('donationOtomatisModal').classList.remove('hidden');
        };

        // Handle automatic donation
        document.getElementById('activateAutoDonationBtn').onclick = function() {
            const donationAmount = document.getElementById('otomatisDonationAmount').value;
            const donorName = document.getElementById('otomatisDonorName').value;
            const anonymousDonation = document.getElementById('otomatisAnonymousDonation').checked;
            const displayName = anonymousDonation ? "Sahabat Baik" : donorName;

            // Determine selected frequency
            const selectedFrequencyBtn = document.querySelector('.bg-green-500');
            const frequency = selectedFrequencyBtn ? selectedFrequencyBtn.textContent.trim() : '';

            if (displayName && donationAmount >= 10000 && frequency) {
                const donationsList = document.getElementById('donationsList');
                const newDonation = document.createElement('li');
                newDonation.classList.add('flex', 'justify-between', 'border-b', 'py-2');
                newDonation.innerHTML = `
                    <span class="text-gray-700">${displayName} - Donasi ${frequency}</span>
                    <span class="font-bold">Rp${parseInt(donationAmount).toLocaleString()}</span>
                `;
                donationsList.appendChild(newDonation);

                // Reset modal fields and hide it
                document.getElementById('otomatisDonorName').value = '';
                document.getElementById('otomatisDonationAmount').value = '';
                document.getElementById('otomatisAnonymousDonation').checked = false;
                document.getElementById('donationOtomatisModal').classList.add('hidden');

                // Reset frequency buttons
                const frequencyButtons = document.querySelectorAll('#dailyBtn, #weeklyBtn, #monthlyBtn, #yearlyBtn');
                frequencyButtons.forEach(btn => {
                    btn.classList.remove('bg-green-500', 'text-white');
                    btn.classList.add('bg-gray-200', 'text-gray-700');
                });
            } else {
                alert('Pastikan semua field diisi dan nominal donasi minimal Rp10.000 serta frekuensi dipilih.');
            }
        };

        // Handle "read more" button
        const readMoreBtn = document.getElementById('readMoreBtn');
        const dots = document.getElementById('dots');
        const moreText = document.getElementById('more');

        readMoreBtn.onclick = function() {
            if (dots.style.display === "none") {
                dots.style.display = "inline";
                moreText.classList.add('hidden');
                readMoreBtn.textContent = "Baca selengkapnya";
            } else {
                dots.style.display = "none";
                moreText.classList.remove('hidden');
                readMoreBtn.textContent = "Tutup";
            }
        };

        // Frequency button selection
        const frequencyButtons = document.querySelectorAll('#dailyBtn, #weeklyBtn, #monthlyBtn, #yearlyBtn');
        frequencyButtons.forEach((button) => {
            button.onclick = function() {
                // Reset all buttons to default style
                frequencyButtons.forEach(btn => {
                    btn.classList.remove('bg-green-500', 'text-white');
                    btn.classList.add('bg-gray-200', 'text-gray-700');
                });
                
                // Apply green background to the clicked button
                button.classList.add('bg-green-500', 'text-white');
            };
        });
    </script>
</body>
</html>
