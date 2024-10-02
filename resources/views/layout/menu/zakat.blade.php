<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zakat Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-poppins">
    <main class="my-0 mx-auto min-h-full max-w-screen-sm">
        <div class="my-0 mx-auto min-h-screen max-w-480 overflow-x-hidden bg-white pb-[66px]">
            <div class="container mx-auto p-4">
                <div class="flex justify-between items-center mb-8">
                    <div class="flex items-center">
                        <img src="{{url('images/Graha.png')}}" alt="Logo" class="w-20 h-20">
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
            <div class="font-base fixed bottom-0 z-[2] m-0 flex w-full max-w-[640px] list-none border-t border-[#dedede] bg-orange-100 p-2.5 text-center align-middle font-semibold leading-[13px] no-underline justify-center">
                <a href="{{url('/')}}" class="inline-block w-1/5 text-[10px]" id="navbar_home" data-testid="homepage-navbar-home">
                     <div class="relative mb-1 pt-1">
                        <img alt="home" loading="lazy" width="0" height="0" decoding="async" data-nimg="1" class="inline-block h-[24px] w-[24px]" src="https://static.vecteezy.com/system/resources/previews/009/589/471/non_2x/home-icon-transparent-free-png.png" style="color: transparent;">
                    </div>
                    <span class="inline-block whitespace-nowrap text-black " >home</span>
                </a>
                <a href="{{url('/GalangDana')}}" class="inline-block w-1/5 text-[10px]" id="navbar_galang-dana" data-testid="homepage-navbar-galang-dana">
                    <div class="relative mb-1 pt-1">
                        <img alt="galang-dana" loading="lazy" width="0" height="0" decoding="async" data-nimg="1" class="inline-block h-[24px] w-[24px]" src="https://www.pngkit.com/png/full/117-1179085_open-logo-donasi.png" style="color: transparent;">
                    </div>
                    <span class="inline-block whitespace-nowrap text-black" >Dana</span>
                </a>
                <a href="{{url('/dana')}}" class="inline-block w-1/5 text-[10px]" id="navbar_my-donations" data-testid="homepage-navbar-my-donations">
                    <div class="relative mb-1 pt-1">
                       <img alt="my-donations" loading="lazy" width="0" height="0" decoding="async" data-nimg="1" class="inline-block h-[24px] w-[24px]" src="https://cdn.icon-icons.com/icons2/2474/PNG/512/notes_clipboard_icon_149712.png" style="color: transparent;">
                    </div>
                    <span class="inline-block whitespace-nowrap text-black" >donations</span>
                </a>
                <a href="{{url('/settings')}}" class="inline-block w-1/5 text-[10px]" id="navbar_account" data-testid="homepage-navbar-account">
                    <div class="relative mb-1 pt-1">
                        <img alt="account" loading="lazy" width="0" height="0" decoding="async" data-nimg="1" class="inline-block h-[24px] w-[24px]" src="https://cdn.icon-icons.com/icons2/3553/PNG/512/account_profile_user_ecommerce_icon_224942.png" style="color: transparent;">
                    </div>
                    <span class="inline-block whitespace-nowrap text-black" >account</span>
                </a>
            </div>
        </div>
    </main>
</body>
</html>