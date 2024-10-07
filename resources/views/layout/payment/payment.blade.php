<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <script type="text/javascript"
        src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Tambahkan CSS jika diperlukan -->
</head>
<body>

<div class="container mx-auto">
    <h1 class="text-center text-2xl font-bold my-5">Pembayaran</h1>
    <button id="pay-button" class="bg-blue-500 text-white px-4 py-2 rounded">Pay!</button>
</div>

<script type="text/javascript">
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
        // Panggil API untuk mendapatkan Snap token
        fetch('/create-transaction', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                // Kirim data transaksi jika diperlukan
            })
        })
        .then(response => response.json())
        .then(data => {
            if(data.snap_token) {
                // Menjalankan Snap Midtrans
                snap.pay(data.snap_token, {
                    onSuccess: function(result) {
                        console.log(result);
                    },
                    onPending: function(result) {
                        console.log(result);
                    },
                    onError: function(result) {
                        console.log(result);
                    },
                    onClose: function() {
                        console.log('Transaction closed');
                    }
                });
            } else {
                console.log(data.error);
            }
        });
    });
</script>

</body>
</html>
