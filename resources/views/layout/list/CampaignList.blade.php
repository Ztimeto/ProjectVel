<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaign List</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <main class="my-0 mx-auto min-h-full max-w-screen-sm">
        <div class="my-0 mx-auto min-h-screen max-w-480 overflow-x-hidden bg-white pb-[66px]">
            <!-- Header Section -->
            <div class="bg-orange-100 text-black p-4 flex items-center justify-between mb-5">
                <!-- Back button with link -->
                <a href="/">
                    <button class="bg-transparent border-none">
                        <img src="https://cdn-icons-png.flaticon.com/128/545/545680.png" alt="Back Button" class="w-8 h-8">
                    </button>
                </a>

                <!-- Title centered in the middle -->
                <h1 class="text-center font-bold text-2xl flex-grow text-center">Daftar Donasi</h1>

                <!-- Placeholder for keeping the layout balanced -->
                <div class="w-8 h-8"></div>
            </div>

            <!-- Campaign Cards -->
            <div id="campaigns" class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <!-- Card 1 -->
                    <div id="card-1" class="campaign-card bg-white shadow-md rounded-lg p-4 cursor-pointer">
                        <div class="flex">
                            <img src="https://via.placeholder.com/150" alt="Campaign Image" class="w-24 h-24 rounded-lg">
                            <div class="ml-4 flex-1">
                                <h2 class="text-lg font-bold">Jemput Berkah! Sedekah Pangan untuk Pejuang Nafkah</h2>
                                <p class="text-sm text-gray-600">Gerbang Kebaikan Banten</p>
                                <div class="flex flex-col mt-2">
                                    <p class="text-sm font-semibold" id="terkumpul-1">Terkumpul: Rp0</p>
                                    <p class="text-sm text-gray-500" id="target-1">Target: Rp10.000.000</p>
                                    <p class="text-sm text-gray-500" id="sisa-hari-1">Sisa hari: 45</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Card 2 -->
                <div id="card-2" class="campaign-card bg-white shadow-md rounded-lg p-4 cursor-pointer">
                    <div class="flex">
                        <img src="https://via.placeholder.com/150" alt="Campaign Image" class="w-24 h-24 rounded-lg">
                        <div class="ml-4 flex-1">
                            <h2 class="text-lg font-bold">Pahala Mengalir Dengan Sedekah Air Minum</h2>
                            <p class="text-sm text-gray-600">Sekawan Foundation</p>
                            <div class="flex flex-col mt-2">
                                <p class="text-sm font-semibold" id="terkumpul-2">Terkumpul: Rp0</p>
                                <p class="text-sm text-gray-500" id="target-2">Target: Rp5.000.000</p>
                                <p class="text-sm text-gray-500" id="sisa-hari-2">Sisa hari: 30</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div id="card-3" class="campaign-card bg-white shadow-md rounded-lg p-4 cursor-pointer">
                    <div class="flex">
                        <img src="https://via.placeholder.com/150" alt="Campaign Image" class="w-24 h-24 rounded-lg">
                        <div class="ml-4 flex-1">
                            <h2 class="text-lg font-bold">Tabungan Pahala, Bantu Pangan Penghafal Quran</h2>
                            <p class="text-sm text-gray-600">ASAR Humanity Sumatera Utara</p>
                            <div class="flex flex-col mt-2">
                                <p class="text-sm font-semibold" id="terkumpul-3">Terkumpul: Rp0</p>
                                <p class="text-sm text-gray-500" id="target-3">Target: Rp3.000.000</p>
                                <p class="text-sm text-gray-500" id="sisa-hari-3">Sisa hari: 30</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div id="card-4" class="campaign-card bg-white shadow-md rounded-lg p-4 cursor-pointer">
                    <div class="flex">
                        <img src="https://via.placeholder.com/150" alt="Campaign Image" class="w-24 h-24 rounded-lg">
                        <div class="ml-4 flex-1">
                            <h2 class="text-lg font-bold">Membantu panti asuhan</h2>
                            <p class="text-sm text-gray-600">ASAR Humanity</p>
                            <div class="flex flex-col mt-2">
                                <p class="text-sm font-semibold" id="terkumpul-4">Terkumpul: Rp0</p>
                                <p class="text-sm text-gray-500" id="target-4">Target: Rp5.000.000</p>
                                <p class="text-sm text-gray-500" id="sisa-hari-4">Sisa hari: 30</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div id="card-5" class="campaign-card bg-white shadow-md rounded-lg p-4 cursor-pointer">
                    <div class="flex">
                        <img src="https://via.placeholder.com/150" alt="Campaign Image" class="w-24 h-24 rounded-lg">
                        <div class="ml-4 flex-1">
                            <h2 class="text-lg font-bold">Kebutuhan Harian Anak Panti Asuhan</h2>
                            <p class="text-sm text-gray-600">Panti Asuhan Mulia</p>
                            <div class="flex flex-col mt-2">
                                <p class="text-sm font-semibold" id="terkumpul-5">Terkumpul: Rp0</p>
                                <p class="text-sm text-gray-500" id="target-5">Target: Rp7.000.000</p>
                                <p class="text-sm text-gray-500" id="sisa-hari-5">Sisa hari: 30</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div id="card-6" class="campaign-card bg-white shadow-md rounded-lg p-4 cursor-pointer">
                    <div class="flex">
                        <img src="https://via.placeholder.com/150" alt="Campaign Image" class="w-24 h-24 rounded-lg">
                        <div class="ml-4 flex-1">
                            <h2 class="text-lg font-bold">Bantuan Makanan untuk Keluarga Kurang Mampu</h2>
                            <p class="text-sm text-gray-600">Gerakan Peduli Makanan</p>
                            <div class="flex flex-col mt-2">
                                <p class="text-sm font-semibold" id="terkumpul-6">Terkumpul: Rp0</p>
                                <p class="text-sm text-gray-500" id="target-6">Target: Rp4.000.000</p>
                                <p class="text-sm text-gray-500" id="sisa-hari-6">Sisa hari: 45</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 7 -->
                <div id="card-7" class="campaign-card bg-white shadow-md rounded-lg p-4 cursor-pointer">
                    <div class="flex">
                        <img src="https://via.placeholder.com/150" alt="Campaign Image" class="w-24 h-24 rounded-lg">
                        <div class="ml-4 flex-1">
                            <h2 class="text-lg font-bold">Sedekah Pangan untuk Anak Yatim</h2>
                            <p class="text-sm text-gray-600">Yayasan Peduli Anak</p>
                            <div class="flex flex-col mt-2">
                                <p class="text-sm font-semibold" id="terkumpul-7">Terkumpul: Rp0</p>
                                <p class="text-sm text-gray-500" id="target-7">Target: Rp6.000.000</p>
                                <p class="text-sm text-gray-500" id="sisa-hari-7">Sisa hari: 60</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 8 -->
                <div id="card-8" class="campaign-card bg-white shadow-md rounded-lg p-4 cursor-pointer">
                    <div class="flex">
                        <img src="https://via.placeholder.com/150" alt="Campaign Image" class="w-24 h-24 rounded-lg">
                        <div class="ml-4 flex-1">
                            <h2 class="text-lg font-bold">Kebutuhan Panti Asuhan Anak</h2>
                            <p class="text-sm text-gray-600">Panti Asuhan Bahagia</p>
                            <div class="flex flex-col mt-2">
                                <p class="text-sm font-semibold" id="terkumpul-8">Terkumpul: Rp0</p>
                                <p class="text-sm text-gray-500" id="target-8">Target: Rp5.000.000</p>
                                <p class="text-sm text-gray-500" id="sisa-hari-8">Sisa hari: 25</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 9 -->
                <div id="card-9" class="campaign-card bg-white shadow-md rounded-lg p-4 cursor-pointer">
                    <div class="flex">
                        <img src="https://via.placeholder.com/150" alt="Campaign Image" class="w-24 h-24 rounded-lg">
                        <div class="ml-4 flex-1">
                            <h2 class="text-lg font-bold">Pangan Bergizi untuk Lansia</h2>
                            <p class="text-sm text-gray-600">Komunitas Peduli Lansia</p>
                            <div class="flex flex-col mt-2">
                                <p class="text-sm font-semibold" id="terkumpul-9">Terkumpul: Rp0</p>
                                <p class="text-sm text-gray-500" id="target-9">Target: Rp8.000.000</p>
                                <p class="text-sm text-gray-500" id="sisa-hari-9">Sisa hari: 40</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 10 -->
                <div id="card-10" class="campaign-card bg-white shadow-md rounded-lg p-4 cursor-pointer">
                    <div class="flex">
                        <img src="https://via.placeholder.com/150" alt="Campaign Image" class="w-24 h-24 rounded-lg">
                        <div class="ml-4 flex-1">
                            <h2 class="text-lg font-bold">Donasi Minuman Sehat untuk Anak Yatim</h2>
                            <p class="text-sm text-gray-600">Yayasan Cinta Kasih</p>
                            <div class="flex flex-col mt-2">
                                <p class="text-sm font-semibold" id="terkumpul-10">Terkumpul: Rp0</p>
                                <p class="text-sm text-gray-500" id="target-10">Target: Rp2.000.000</p>
                                <p class="text-sm text-gray-500" id="sisa-hari-10">Sisa hari: 50</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Donation Popup Form -->
        <div id="donation-popup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white p-8 rounded-lg max-w-md w-full">
                <h2 class="text-xl font-semibold mb-4">Donasi</h2>
                <form id="donation-form" class="space-y-4">
                    <div>
                        <label for="campaign-id" class="block text-sm font-medium">Pilih Kampanye</label>
                        <select id="campaign-id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                            <option value="1">Jemput Berkah! Sedekah Pangan untuk Pejuang Nafkah</option>
                            <option value="2">Pahala Mengalir Dengan Sedekah Air Minum</option>
                            <option value="3">Tabungan Pahala, Bantu Pangan Penghafal Quran</option>
                            <option value="4">Membantu panti asuhan</option>
                            <option value="5">Kebutuhan Harian Anak Panti Asuhan</option>
                            <option value="6">Bantuan Makanan untuk Keluarga Kurang Mampu</option>
                            <option value="7">Sedekah Pangan untuk Anak Yatim</option>
                            <option value="8">Kebutuhan Panti Asuhan Anak</option>
                            <option value="9">Pangan Bergizi untuk Lansia</option>
                            <option value="10">Donasi Minuman Sehat untuk Anak Yatim</option>
                        </select>
                    </div>
                    <div>
                        <label for="donation-amount" class="block text-sm font-medium">Jumlah Donasi</label>
                        <input type="number" id="donation-amount" min="1" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="payment-method" class="block text-sm font-medium">Metode Pembayaran</label>
                        <select id="payment-method" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" required>
                            <option value="bca">BCA</option>
                            <option value="mandiri">Mandiri</option>
                            <option value="bri">BRI</option>
                            <option value="bni">BNI</option>
                            <option value="paypal">PayPal</option>
                        </select>
                    </div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded w-full">Kirim Donasi</button>
                </form>
                <button id="close-popup" class="mt-4 text-red-500">Tutup</button>
            </div>
        </div>

        <!-- Warning Popup -->
        <div id="warning-popup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white p-8 rounded-lg max-w-md w-full text-center">
                <h2 class="text-xl font-semibold mb-4">Peringatan</h2>
                <p>Kampanye ini telah mencapai target dan ditutup. Anda tidak dapat mendonasi lagi.</p>
                <button id="close-warning" class="bg-blue-500 text-white px-4 py-2 rounded mt-4">Tutup</button>
            </div>
        </div>
    </main>

    <script>
        // Data campaign
        const campaigns = [
            { id: 1, terkumpul: 0, target: 10000000, endDate: new Date("2024-09-30") },
            { id: 2, terkumpul: 0, target: 5000000, endDate: new Date("2024-09-30") },
            { id: 3, terkumpul: 0, target: 3000000, endDate: new Date("2024-09-30") },
            { id: 4, terkumpul: 0, target: 5000000, endDate: new Date("2024-09-30") },
            { id: 5, terkumpul: 0, target: 7000000, endDate: new Date("2024-09-30") },
            { id: 6, terkumpul: 0, target: 4000000, endDate: new Date("2024-09-30") },
            { id: 7, terkumpul: 0, target: 6000000, endDate: new Date("2024-09-30") },
            { id: 8, terkumpul: 0, target: 5000000, endDate: new Date("2024-09-30") },
            { id: 9, terkumpul: 0, target: 8000000, endDate: new Date("2024-09-30") },
            { id: 10, terkumpul: 0, target: 2000000, endDate: new Date("2024-09-30") }
        ];


        function renderCampaigns() {
            campaigns.forEach(campaign => {
                const card = document.getElementById(`card-${campaign.id}`);
                if (card) {
                    card.querySelector(`#terkumpul-${campaign.id}`).innerText = `Terkumpul: Rp${campaign.terkumpul.toLocaleString()}`;
                    card.querySelector(`#target-${campaign.id}`).innerText = `Target: Rp${campaign.target.toLocaleString()}`;
                    card.querySelector(`#sisa-hari-${campaign.id}`).innerText = `Sisa hari: ${calculateDaysLeft(campaign.endDate)}`;
                    
                    if (campaign.terkumpul >= campaign.target) {
                        card.classList.add('bg-green-100');
                        card.querySelector(`#sisa-hari-${campaign.id}`).innerText = "Donasi Telah Selesai";
                        card.classList.add('cursor-default'); // Disable pointer events
                    }
                }
            });
        }

        function updateCampaignData() {
            const currentDate = new Date();

            campaigns.forEach(campaign => {
                const timeDiff = campaign.endDate - currentDate;
                const daysLeft = Math.floor(timeDiff / (1000 * 60 * 60 * 24));

                const card = document.getElementById(`card-${campaign.id}`);
                if (card) {
                    card.querySelector(`#terkumpul-${campaign.id}`).innerText = `Terkumpul: Rp${campaign.terkumpul.toLocaleString()}`;
                    if (campaign.terkumpul >= campaign.target) {
                        card.querySelector(`#sisa-hari-${campaign.id}`).innerText = "Donasi Telah Selesai";
                    } else {
                        card.querySelector(`#sisa-hari-${campaign.id}`).innerText = `Sisa hari: ${Math.max(0, daysLeft)}`;
                    }
                }
            });
        }

        function calculateDaysLeft(endDate) {
            const currentDate = new Date();
            const timeDiff = endDate - currentDate;
            return Math.max(0, Math.floor(timeDiff / (1000 * 60 * 60 * 24)));
        }

        function handleDonation(event) {
            event.preventDefault();
            
            const campaignId = parseInt(document.getElementById('campaign-id').value);
            const donationAmount = parseInt(document.getElementById('donation-amount').value);

            const campaign = campaigns.find(c => c.id === campaignId);
            if (campaign) {
                if (campaign.terkumpul >= campaign.target) {
                    openWarningPopup();
                } else {
                    campaign.terkumpul += donationAmount;
                    updateCampaignData();
                    closePopup();
                }
            }
        }

        function openPopup() {
            document.getElementById('donation-popup').classList.remove('hidden');
        }

        function closePopup() {
            document.getElementById('donation-popup').classList.add('hidden');
        }

        function openWarningPopup() {
            document.getElementById('warning-popup').classList.remove('hidden');
        }

        function closeWarningPopup() {
            document.getElementById('warning-popup').classList.add('hidden');
        }

        document.getElementById('donation-form').addEventListener('submit', handleDonation);

        document.querySelectorAll('.campaign-card').forEach(card => {
            card.addEventListener('click', () => {
                if (!card.classList.contains('cursor-default')) {
                    openPopup();
                }
            });
        });

        document.getElementById('close-popup').addEventListener('click', closePopup);
        document.getElementById('close-warning').addEventListener('click', closeWarningPopup);

        renderCampaigns();
        setInterval(updateCampaignData, 60000); // Update every minute
    </script>
</body>
</html>
