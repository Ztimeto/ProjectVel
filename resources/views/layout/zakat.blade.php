<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zakat Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-poppins">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-8">
            <div class="flex items-center">
                <img src="https://www.zakatpedia.com/assets/img/logo.png" alt="Logo" class="w-20 h-20">
                <h1 class="text-2xl font-bold ml-4">Zakat</h1>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-bold mb-4">Kalkulator Zakat</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="income" class="block text-gray-700 font-medium mb-2">Zakat Pendapatan</label>
                    <input type="number" id="income" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Pendapatan">
                </div>
                <div>
                    <label for="bonus" class="block text-gray-700 font-medium mb-2">Bonus/THR/Pendapatan Lain</label>
                    <input type="number" id="bonus" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Pendapatan Lain">
                </div>
            </div>
            <div class="mt-6">
                <button id="calculateBtn" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Hitung Zakat</button>
            </div>
            <div class="mt-6">
                <div class="bg-green-100 border border-green-400 rounded-md p-4 text-green-700">
                    <h3 class="text-lg font-medium mb-2">Jumlah Zakat</h3>
                    <p id="zakatAmount" class="text-gray-600">(2.5% dikali Penghasilan Kena Zakat)</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        const incomeInput = document.getElementById('income');
        const bonusInput = document.getElementById('bonus');
        const calculateBtn = document.getElementById('calculateBtn');
        const zakatAmount = document.getElementById('zakatAmount');

        calculateBtn.addEventListener('click', () => {
            const income = parseFloat(incomeInput.value) || 0;
            const bonus = parseFloat(bonusInput.value) || 0;
            const totalIncome = income + bonus;
            const zakat = (totalIncome * 0.025).toFixed(2);

            zakatAmount.textContent = `Rp. ${zakat}`;
        });
    </script>
</body>
</html>