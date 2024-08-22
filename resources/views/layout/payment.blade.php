<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Form</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 p-6">
    <main class="my-0 mx-auto min-h-full max-w-screen-sm">
        <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-8">
            <div class="flex flex-col lg:flex-row gap-6">
                <!-- Donation Form -->
                <div class="w-full lg:w-2/3">
                    <h2 class="text-2xl font-semibold mb-4">Make a Donation</h2>
                    <form>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-medium mb-2" for="full-name">Full name (as displayed on card)*</label>
                            <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" type="text" id="full-name" placeholder="Your Name">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-medium mb-2" for="card-number">Card number*</label>
                            <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" type="text" id="card-number" placeholder="xxxx-xxxx-xxxx-xxxx">
                        </div>
                        <div class="flex gap-4 mb-6">
                            <div class="w-1/2">
                                <label class="block text-gray-700 font-medium mb-2" for="card-expiration">Card expiration*</label>
                                <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" type="text" id="card-expiration" placeholder="12/23">
                            </div>
                            <div class="w-1/2">
                                <label class="block text-gray-700 font-medium mb-2" for="cvv">CVV*</label>
                                <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" type="text" id="cvv" placeholder="•••">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-medium mb-2" for="donation-amount">Donation amount*</label>
                            <input class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" type="number" id="donation-amount" placeholder="50000" oninput="updateDonationSummary()">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 font-medium mb-2" for="payment-method">Payment Method</label>
                            <select class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" id="payment-method" onchange="updateDonationSummary()">
                                <option value="bank">BRI</option>
                                <option value="bank">BCA`</option>
                                <option value="paypal">PayPal</option>
                            </select>
                        </div>
                        <button class="w-full bg-blue-600 text-white font-semibold py-3 rounded-lg hover:bg-blue-700 transition"><a href="{{url("/dana")}}">Donate now</a></button>
                    </form>
                </div>

                <!-- Donation Summary -->
                <div class="w-full lg:w-1/3 bg-gray-100 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">Summary</h3>
                    <ul class="mb-6">
                        <li class="flex justify-between text-gray-700">
                            <span>Donation amount</span>
                            <span id="summary-donation-amount">Rp50.000</span>
                        </li>
                        <li class="flex justify-between text-gray-700">
                            <span>Processing fee</span>
                            <span id="summary-processing-fee">Rp2.000</span>
                        </li>
                    </ul>
                    <div class="flex justify-between text-gray-900 font-bold text-lg">
                        <span>Total</span>
                        <span id="summary-total">Rp52.000</span>
                    </div>
                    <div class="flex justify-center mt-6 space-x-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Paypal_2014_logo.png" alt="PayPal" class="h-8">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b7/MasterCard_Logo.svg" alt="MasterCard" class="h-8">
                    </div>
                </div>
            </div>
            <p class="text-gray-500 text-center mt-6 text-sm">Donation processed by <a href="#" class="text-blue-600 underline">Paddle</a> for <a href="#" class="text-blue-600 underline">Charity Org LLC</a> - United States Of America</p>
        </div>

        <script>
            function updateDonationSummary() {
                const donationAmount = parseFloat(document.getElementById('donation-amount').value) || 0;
                const paymentMethod = document.getElementById('payment-method').value;
                const processingFee = 2000;
                let formattedDonation, formattedFee, formattedTotal;

                if (paymentMethod === 'paypal') {
                    const donationUSD = donationAmount / 15000; // Asumsi kurs 1 USD = 15000 IDR
                    const feeUSD = processingFee / 15000;
                    formattedDonation = `$${donationUSD.toFixed(2)}`;
                    formattedFee = `$${feeUSD.toFixed(2)}`;
                    formattedTotal = `$${(donationUSD + feeUSD).toFixed(2)}`;
                } else {
                    formattedDonation = `Rp${donationAmount.toLocaleString()}`;
                    formattedFee = `Rp${processingFee.toLocaleString()}`;
                    formattedTotal = `Rp${(donationAmount + processingFee).toLocaleString()}`;
                }

                document.getElementById('summary-donation-amount').innerText = formattedDonation;
                document.getElementById('summary-processing-fee').innerText = formattedFee;
                document.getElementById('summary-total').innerText = formattedTotal;
            }
        </script>
    </main>
</body>

</html>
