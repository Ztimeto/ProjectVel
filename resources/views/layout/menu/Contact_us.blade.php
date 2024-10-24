<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100" >
    <main class="my-0 mx-auto min-h-full max-w-screen-sm">
        <div class="my-0 mx-auto min-h-screen max-w-480 overflow-x-hidden bg-white pb-[66px]">
            <div class="bg-orange-100 text-black p-4 flex items-center justify-between mb-5">
                <!-- Back button with link -->
                <a href="/">
                    <button class="bg-transparent border-none">
                        <img src="https://cdn-icons-png.flaticon.com/128/545/545680.png" alt="Back Button" class="w-8 h-8">
                    </button>
                </a>

                <!-- Title centered in the middle -->
                <h1 class="text-center font-bold text-2xl flex-grow text-center">Contact Us</h1>

                <!-- Placeholder for keeping the layout balanced -->
                <div class="w-8 h-8"></div>
            </div>

            @if(session('success'))
                <div class="mb-4 p-4 text-green-700 bg-green-100 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Form Contact Us -->
            <div>
            <form action="{{ route('Contact_us.store') }}" method="POST">
                @csrf

                <!-- Nama -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Masukkan nama Anda" class=" w-[99%] px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email Anda" class=" w-[99%] px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- No. Telepon -->
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">No. Telepon:</label>
                    <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Masukkan nomor telepon Anda" class=" w-[99%] px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    @error('phone')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Pesan -->
                <div class="mb-6">
                    <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Pesan:</label>
                    <textarea id="message" name="message" rows="4" placeholder="Tulis pesan Anda di sini" class=" w-[99%] px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tombol Kirim -->
                <div class="text-center">
                    <button type="submit" class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition duration-300">
                        Kirim
                    </button>
                </div>
            </form>
        </div>
        </div>
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
                <span class="inline-block whitespace-nowrap text-black" >GalangDana</span>
            </a>
            <a href="{{url('/CampaignList')}}" class="inline-block w-1/5 text-[10px]" id="navbar_my-donations" data-testid="homepage-navbar-my-donations">
                <div class="relative mb-1 pt-1">
                    <img alt="my-donations" loading="lazy" width="0" height="0" decoding="async" data-nimg="1" class="inline-block h-[24px] w-[24px]" src="https://cdn.icon-icons.com/icons2/2474/PNG/512/notes_clipboard_icon_149712.png" style="color: transparent;">
                </div>
                <span class="inline-block whitespace-nowrap text-black" >donations</span>
            </a>
            <a href="{{url('/Contact_us')}}" class="inline-block w-1/5 text-[10px]" id="navbar_my-donations" data-testid="homepage-navbar-my-donations">
                <div class="relative mb-1 pt-1">
                    <img alt="my-donations" loading="lazy" width="0" height="0" decoding="async" data-nimg="1" class="inline-block h-[24px] w-[24px]" src="https://cdn.icon-icons.com/icons2/1603/PNG/512/mail-box-email-post-delivery-envelope_108534.png" style="color: transparent;">
                </div>
                <span class="inline-block whitespace-nowrap text-black" >Contact Us</span>
            </a>
            <a href="{{url('/settings')}}" class="inline-block w-1/5 text-[10px]" id="navbar_account" data-testid="homepage-navbar-account">
                <div class="relative mb-1 pt-1">
                    <img alt="account" loading="lazy" width="0" height="0" decoding="async" data-nimg="1" class="inline-block h-[24px] w-[24px]" src="https://cdn.icon-icons.com/icons2/3553/PNG/512/account_profile_user_ecommerce_icon_224942.png" style="color: transparent;">
                </div>
                <span class="inline-block whitespace-nowrap text-black" >account</span>
            </a>
        </div>
    </main>
</body>
</html>