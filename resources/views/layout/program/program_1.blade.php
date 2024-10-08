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
            <img src="{{ asset('storage/' . $campaign->image_url) }}" alt="{{ $campaign->name }}" class="w-full h-64 object-cover" />
            <!-- Campaign Info -->
            <div class="bg-white shadow-lg rounded-lg max-w-4xl mx-auto my-8">
                <div class="p-4">
                    <div class="flex items-center space-x-4">
                        <div>
                            <span>{{ $campaign->division }}</span>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h1 class="text-3xl font-bold">{{ $campaign->name }}</h1>
                        <p class="text-red-600 text-3xl font-bold mt-2">Rp{{ number_format($campaign->raised_amount, 0) }} dari Rp{{ number_format($campaign->target_amount, 0) }}</p>
                        <button class="mt-2 text-sm text-blue-500">Lihat semua</button>
                    </div>
                    <div class="bg-blue-100 text-blue-800 p-2 mt-4 rounded-lg">
                        <p>Semakin banyak donasi yang tersedia, semakin besar bantuan yang bisa disalurkan oleh gerakan ini.</p>
                    </div>
                    <div class="mt-4 flex space-x-4">
                        <button id="donasiBtn" class="bg-pink-500 text-white px-6 py-2 rounded-md font-bold hover:bg-pink-600 transition-colors" data-campaign-id="{{ $campaign->id }}">
                            Donasi
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

            <!-- Story Section -->
            <div class="bg-white shadow-lg rounded-lg max-w-4xl mx-auto mb-8 p-4">
                <h4 class="text-lg font-bold">Cerita Penggalangan Dana</h4>
                <p id="story" class="mt-2 text-gray-700">
                    {{ $campaign->description }}
                </p>
            </div>

            <!-- Latest Updates and Donations -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-4xl mx-auto mb-8">
                <!-- Latest Updates -->
                <div class="bg-white shadow-lg rounded-lg p-4">
                    <h4 class="text-lg font-bold">Update Terbaru</h4>
                    <ul id="updatesList" class="mt-2 space-y-2">
                        @foreach($campaign->updates as $update)
                        <li class="flex justify-between border-b py-2">
                            <span class="text-gray-700">{{ $update->title }}</span>
                            <span class="font-bold">{{ $update->created_at->format('d-m-Y') }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Latest Donations -->
                <div class="bg-white shadow-lg rounded-lg p-4">
                    <h4 class="text-lg font-bold">Donasi Terbaru</h4>
                    <ul id="donationsList" class="mt-2 space-y-2">
                        @foreach($campaign->donations as $donation)
                        <li class="flex justify-between border-b py-2">
                            <span class="text-gray-700">{{ $donation->is_anonymous ? 'Donatur Anonim' : $donation->donor_name }}</span>
                            <span class="font-bold">Rp{{ number_format($donation->amount, 2) }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </main>

    
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{env('MIDTRANS_CLIENT_KEY')}}"></script>


    <script>
        // Handle normal donation modal
        document.getElementById('donasiBtn').onclick = function() {
            const campaignId = this.getAttribute('data-campaign-id');
            document.getElementById('donationModal').classList.remove('hidden');
            document.getElementById('continueDonationBtn').setAttribute('data-campaign-id', campaignId);
        };
        
        document.getElementById('continueDonationBtn').onclick = function() {
            const donationAmount = document.getElementById('donationAmount').value;
            const donorName = document.getElementById('donorName').value;
            const anonymousDonation = document.getElementById('anonymousDonation').checked;
            const campaignId = this.getAttribute('data-campaign-id');
            const displayName = anonymousDonation ? "Sahabat Baik" : donorName;

            if (displayName && donationAmount >= 10000) {
                // Create the donation data on your server
                fetch('/create-donation', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        amount: donationAmount,
                        name: displayName,
                        campaign_id: campaignId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Initialize Midtrans Snap
                        window.snap.pay(data.snap_token, {
                            onSuccess: function(result) {
                                alert('Donasi berhasil dilakukan!');
                                document.getElementById('donationModal').classList.add('hidden');
                                // Optional: Update your UI or state here
                            },
                            onPending: function(result) {
                                alert('Donasi dalam proses.');
                                document.getElementById('donationModal').classList.add('hidden');
                                // Handle pending payment scenario
                            },
                            onError: function(result) {
                                alert('Terjadi kesalahan saat melakukan pembayaran.');
                                console.error('Payment Error:', result);
                                document.getElementById('donationModal').classList.add('hidden');
                            },
                            onClose: function() {
                                alert('Pembayaran dibatalkan.');
                            }
                        });
                    } else {
                        alert('Terjadi kesalahan saat membuat transaksi.');
                        document.getElementById('donationModal').classList.add('hidden');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan, silakan coba lagi.');
                });
            } else {
                alert('Pastikan semua field diisi dan nominal donasi minimal Rp10.000.');
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
    </script>


</body>
</html>
