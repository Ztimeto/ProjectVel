<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Akun Page</title>
  
  @vite('resources/css/app.css')
</head>
<script>
    function goToLogin() {
      window.location.href = "/login_akun"; // URL tujuan
    }
</script>
<body class="bg-gray-100">
    <main class="my-0 mx-auto min-h-full max-w-screen-sm">
        <div class="my-0 mx-auto min-h-screen max-w-480 overflow-x-hidden bg-white pb-[66px]">    

            <div class="min-h-screen flex flex-col">

                <!-- Header -->
                <div class="bg-orange-100 text-black p-4 flex items-center justify-between">
                    <!-- Back button with link -->
                    <a href="/">
                        <button class="bg-transparent border-none">
                            <img src="https://cdn-icons-png.flaticon.com/128/545/545680.png" alt="Info Button" class="w-8 h-8">
                        </button>
                    </a>

                    <!-- Title centered in the middle -->
                    <h1 class="text-center font-bold text-2xl flex-grow">Setting</h1>

                    <!-- Placeholder for keeping the layout balanced (optional) -->
                    <div class="w-8 h-8"></div>
                </div>


                <!-- Login Section -->
                <div class="p-6 bg-white text-center">
                    <p class="text-gray-700 mb-4">Masuk untuk nikmati mudahnya donasi dan akses ke fitur lainnya!</p>
                    <button onclick="goToLogin()" class="w-full py-2 border border-orange-100 text-orange-500 rounded-md font-semibold hover:bg-orange-500 hover:text-white transition duration-300  ">
                       Masuk sekarang
                    </button>
                    <p class="text-orange-500 mt-2">Belum punya akun? <a href="/buat_akun" class="underline">Daftar</a></p>
                </div>

                <!-- Menu List -->
                <div class="bg-white mt-4">
                    <ul>
                        <li class="border-t border-gray-200">
                        <!-- Hover effect on the Bantuan item -->
                        <a href="/bantuan" class="flex items-center justify-between p-4 text-gray-600 hover:bg-orange-500 hover:text-white transition duration-300">
                            <span>Bantuan</span>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        </li>
                        <li class="border-t border-gray-200">
                        <a href="/tentang" class="flex items-center justify-between p-4 text-gray-600 hover:bg-orange-500 hover:text-white transition duration-300">
                            <span>Tentang Graha Dhuafa Indonesia</span>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        </li>
                        <li class="border-t border-gray-200">
                        <a href="/syarat" class="flex items-center justify-between p-4 text-gray-600 hover:bg-orange-500 hover:text-white transition duration-300">
                            <span>Syarat & Ketentuan</span>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        </li>
                        <li class="border-t border-gray-200">
                        <a href="/akuntabilitas" class="flex items-center justify-between p-4 text-gray-600 hover:bg-orange-500 hover:text-white transition duration-300">
                            <span>Akuntabilitas & transparasi</span>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        </li>
                    </ul>
                </div>

                <!-- Footer Navigation -->
                <div class="bg-white border-t border-gray-200">
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
                        <a href="{{url('/CampaignList')}}" class="inline-block w-1/5 text-[10px]" id="navbar_my-donations" data-testid="homepage-navbar-my-donations">
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
            </div>
        </div>
    </main>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>    
</body>
</html>
