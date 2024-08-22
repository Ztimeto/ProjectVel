<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <main class="my-0 mx-auto min-h-full max-w-screen-sm">
        <div class="container mx-auto px-4 py-8">
            <div class="flex justify-between items-center mb-8">
                <div class="flex items-center">
                    <img src="{{url('images/Graha.png')}}" alt="LAZ logo" class="w-10 h-10 mr-2">
                    <span class="font-bold text-xl text-gray-800">LAZ Graha Dhuafa Indonesia</span>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <!-- PWKFAIR 2020 Section -->
                <div class="bg-white rounded-lg shadow-md p-4">
                    <img src="https://cdn-icons-png.flaticon.com/512/2911/2911810.png" alt="donation image" class="w-full rounded-md mb-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">PWKFAIR 2020</h3>
                    <p class="text-gray-600">Donasi bagi masyarakat terdampak pandemi COVID-19</p>
                </div>
                <!-- Custom Donation Section -->
                <div class="flex flex-col bg-white rounded-lg shadow-md p-4">
                    <label for="customAmount" class="text-gray-700 font-bold mb-2">Masukkan jumlah donasi</label>
                    <input type="number" id="customAmount" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" placeholder="Jumlah donasi">
                    <button onclick="customDonation()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Donasi</button>
                </div>
            </div>
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Dukungan</h2>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white rounded-lg shadow-md p-4">
                    <div class="flex justify-center items-center mb-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/2911/2911810.png" alt="donation image" class="w-24 h-24">
                        <span class="text-4xl font-bold text-gray-800 ml-4">RP. 10.000</span>
                    </div>
                    <p class="text-gray-600">Dukungan Untuk Korban Dampak Pandemi COVID-19</p>
                    <button onclick="confirmDonation(10000)" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4">Pilih</button>
                </div>
                <div class="bg-white rounded-lg shadow-md p-4">
                    <div class="flex justify-center items-center mb-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/2911/2911810.png" alt="donation image" class="w-24 h-24">
                        <span class="text-4xl font-bold text-gray-800 ml-4">RP. 25.000</span>
                    </div>
                    <p class="text-gray-600">Dukungan Untuk Korban Dampak Pandemi COVID-19</p>
                    <button onclick="confirmDonation(25000)" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4">Pilih</button>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-4">
                <div class="bg-white rounded-lg shadow-md p-4">
                    <div class="flex justify-center items-center mb-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/2911/2911810.png" alt="donation image" class="w-24 h-24">
                        <span class="text-4xl font-bold text-gray-800 ml-4">RP. 50.000</span>
                    </div>
                    <p class="text-gray-600">Dukungan Untuk Korban Dampak Pandemi COVID-19</p>
                    <button onclick="confirmDonation(50000)" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4">Pilih</button>
                </div>
                <div class="bg-white rounded-lg shadow-md p-4">
                    <div class="flex justify-center items-center mb-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/2911/2911810.png" alt="donation image" class="w-24 h-24">
                        <span class="text-4xl font-bold text-gray-800 ml-4">RP. 75.000</span>
                    </div>
                    <p class="text-gray-600">Dukungan Untuk Korban Dampak Pandemi COVID-19</p>
                    <button onclick="confirmDonation(75000)" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4">Pilih</button>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-4">
                <div class="bg-white rounded-lg shadow-md p-4">
                    <div class="flex justify-center items-center mb-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/2911/2911810.png" alt="donation image" class="w-24 h-24">
                        <span class="text-4xl font-bold text-gray-800 ml-4">RP. 100.000</span>
                    </div>
                    <p class="text-gray-600">Dukungan Untuk Korban Dampak Pandemi COVID-19</p>
                    <button onclick="confirmDonation(100000)" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4">Pilih</button>
                </div>
                <div class="bg-white rounded-lg shadow-md p-4">
                    <div class="flex justify-center items-center mb-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/2911/2911810.png" alt="donation image" class="w-24 h-24">
                        <span class="text-4xl font-bold text-gray-800 ml-4">RP. 200.000</span>
                    </div>
                    <p class="text-gray-600">Dukungan Untuk Korban Dampak Pandemi COVID-19</p>
                    <button onclick="confirmDonation(200000)" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4">Pilih</button>
                </div>
            </div>
            <div class="mt-8">
                <p class="text-gray-600 text-center">Jumlah terkumpul sejauh ini</p>
                <h2 id="totalDonation" class="text-2xl font-bold text-gray-800 text-center">Rp0</h2>
            </div>
        </div>
    </main>

    <script>
        let totalDonation = 0;

        function updateDonation(amount) {
            totalDonation += amount;
            document.getElementById('totalDonation').textContent = 'Rp' + totalDonation.toLocaleString();
        }

        function confirmDonation(amount) {
            if (confirm("Apakah Anda yakin ingin mendonasikan sebesar Rp" + amount.toLocaleString() + "?")) {
                updateDonation(amount);
            }
        }

        function customDonation() {
        const customAmount = parseInt(document.getElementById('customAmount').value);
        if (isNaN(customAmount) || customAmount <= 0) {
            alert("Masukkan jumlah donasi yang valid!");
        } else {
            if (confirm("Apakah Anda yakin ingin mendonasikan sebesar Rp" + customAmount.toLocaleString() + "?")) {
                updateDonation(customAmount);
                // Kosongkan input setelah konfirmasi donasi
                document.getElementById('customAmount').value = '';
            }
        }
    }
    </script>
</body>
</html>
