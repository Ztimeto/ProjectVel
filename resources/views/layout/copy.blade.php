<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaign List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-screen-lg mx-auto mt-10">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Daftar Kampanye</h1>
            <div class="flex space-x-4">
                <button class="bg-blue-500 text-white px-4 py-2 rounded">Kategori</button>
                <button class="bg-blue-500 text-white px-4 py-2 rounded">Urutkan</button>
                <button class="bg-blue-500 text-white px-4 py-2 rounded">Filter</button>
            </div>
        </div>

        <!-- Campaign Cards -->
    <div id="campaigns" class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div id="card-1" class="bg-white shadow-md rounded-lg p-4 cursor-pointer">
                <div class="flex">
                    <img src="https://via.placeholder.com/150" alt="Campaign Image" class="w-24 h-24 rounded-lg">
                    <div class="ml-4 flex-1">
                        <h2 class="text-lg font-bold">Jemput Berkah! Sedekah Pangan untuk Pejuang Nafkah</h2>
                        <p class="text-sm text-gray-600">Gerbang Kebaikan Banten</p>
                        <div class="flex justify-between items-center mt-2">
                            <p class="text-sm font-semibold" id="terkumpul-1">Terkumpul: Rp0</p>
                            <p class="text-sm text-gray-500" id="sisa-hari-1">Sisa hari: 45</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div id="card-2" class="bg-white shadow-md rounded-lg p-4 cursor-pointer">
                <div class="flex">
                    <img src="https://via.placeholder.com/150" alt="Campaign Image" class="w-24 h-24 rounded-lg">
                    <div class="ml-4 flex-1">
                        <h2 class="text-lg font-bold">Pahala Mengalir Dengan Sedekah Air Minum</h2>
                        <p class="text-sm text-gray-600">Sekawan Foundation</p>
                        <div class="flex justify-between items-center mt-2">
                            <p class="text-sm font-semibold" id="terkumpul-2">Terkumpul: Rp0</p>
                            <p class="text-sm text-gray-500" id="sisa-hari-2">Sisa hari: 1</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div id="card-3" class="bg-white shadow-md rounded-lg p-4 cursor-pointer">
                <div class="flex">
                    <img src="https://via.placeholder.com/150" alt="Campaign Image" class="w-24 h-24 rounded-lg">
                    <div class="ml-4 flex-1">
                        <h2 class="text-lg font-bold">Tabungan Pahala, Bantu Pangan Penghafal Quran</h2>
                        <p class="text-sm text-gray-600">ASAR Humanity Sumatera Utara</p>
                        <div class="flex justify-between items-center mt-2">
                            <p class="text-sm font-semibold" id="terkumpul-3">Terkumpul: Rp0</p>
                            <p class="text-sm text-gray-500" id="sisa-hari-3">Sisa hari: 2</p>
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
                        <!-- Options for Campaigns 1 to 10 -->
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

    <script>
        // Data campaign
        const campaigns = [
            { id: 1, terkumpul: 0, target: 10000000, endDate: new Date("2024-09-30") },
            { id: 2, terkumpul: 0, target: 5000000, endDate: new Date("2024-08-17") },
            { id: 3, terkumpul: 0, target: 3000000, endDate: new Date("2024-08-18") },
            { id: 4, terkumpul: 0, target: 2000000, endDate: new Date("2024-08-18") },
            { id: 5, terkumpul: 1000000, target: 7000000, endDate: new Date("2024-08-26") },
            { id: 6, terkumpul: 500000, target: 2000000, endDate: new Date("2024-09-05") },
            { id: 7, terkumpul: 2000000, target: 10000000, endDate: new Date("2024-08-21") },
            { id: 8, terkumpul: 3500000, target: 5000000, endDate: new Date("2024-09-01") },
            { id: 9, terkumpul: 5000000, target: 8000000, endDate: new Date("2024-09-16") },
            { id: 10, terkumpul: 4000000, target: 6000000, endDate: new Date("2024-09-10") },
        ];

        function renderCampaigns() {
            campaigns.forEach(campaign => {
                const card = document.getElementById(`card-${campaign.id}`);
                if (card) {
                    card.querySelector(`#terkumpul-${campaign.id}`).innerText = `Terkumpul: Rp${campaign.terkumpul.toLocaleString()}`;
                    card.querySelector(`#sisa-hari-${campaign.id}`).innerText = `Sisa hari: ${calculateDaysLeft(campaign.endDate)}`;
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
                    card.querySelector(`#sisa-hari-${campaign.id}`).innerText = `Sisa hari: ${Math.max(0, daysLeft)}`;
                }
            });
        }

        function calculateDaysLeft(endDate) {
            const currentDate = new Date();
            const timeDiff = endDate - currentDate;
            return Math.floor(timeDiff / (1000 * 60 * 60 * 24));
        }

        function handleDonation(event) {
            event.preventDefault();
            
            const campaignId = parseInt(document.getElementById('campaign-id').value);
            const donationAmount = parseInt(document.getElementById('donation-amount').value);

            const campaign = campaigns.find(c => c.id === campaignId);
            if (campaign) {
                campaign.terkumpul += donationAmount;
                updateCampaignData();
                closePopup();
            }
        }

        function openPopup() {
            document.getElementById('donation-popup').classList.remove('hidden');
        }

        function closePopup() {
            document.getElementById('donation-popup').classList.add('hidden');
        }

        document.getElementById('donation-form').addEventListener('submit', handleDonation);

        document.querySelectorAll('.campaign-card').forEach(card => {
            card.addEventListener('click', () => {
                openPopup();
            });
        });

        document.getElementById('close-popup').addEventListener('click', closePopup);

        renderCampaigns();
        setInterval(updateCampaignData, 1000);
    </script>
</body>
</html>
