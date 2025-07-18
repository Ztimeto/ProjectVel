<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <img src="/assets/logo_LAZ.png" alt="">
        <title>Graha Dhuafa Indonesia</title>
        @vite('resources/css/app.css')
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    </head>
    <style>
        /* Hide scrollbar for Webkit browsers */
        .slider::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for Firefox */
        .slider {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }

        /* Optional: Hide scrollbar for all browsers */
        .scrollbar-hide {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }
    </style>
    <body class="bg-gray-100">
        <div id="layout">
            <main class="my-0 mx-auto min-h-full max-w-screen-sm">
                <div class="my-0 mx-auto min-h-screen max-w-480 overflow-x-hidden bg-white pb-[66px]">
                    <a href="https://api.whatsapp.com/send?phone=6289605293982" class="fixed bottom-20 right-5 bg-green-500 text-white w-16 h-16 rounded-full text-center shadow-lg z-50 hover:bg-green-600 transition">
                        <i class='bx bxl-whatsapp text-3xl my-4'></i>
                    </a>

                    <div class="relative mb-20 h-[400px] bg-[#fcd0b7]">
                        <div class="absolute left-0 top-0 z-20 h-[60px] w-full transition delay-150 ease-in-out bg-transparent flex items-center">
                            <div class="ml-4">
                                <img src="https://www.grahadhuafa.org/website/assets/images/custom/logo_gdi_long.png" alt="logo" class="h-full">
                            </div>
                            <div class="flex-grow">
                                <div class="relative flex h-full max-w-[400px] items-center p-0 px-4 ml-auto">
                                    <a href="" class="flex h-[30px] w-full items-center justify-between rounded-2xl px-4 transition delay-150 ease-in-out bg-white" data-testid="homepage-searchbar">
                                        <span data-testid="homepage-text-searchbar" class="whitespace-nowrap text-sm text-onyx transition delay-150 ease-in-out"></span>
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" class="flex-shrink-0">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.199 17.035a8.312 8.312 0 1 1 1.837-1.837l4.584 4.585a1.299 1.299 0 1 1-1.837 1.837l-4.584-4.585Zm.827-6.723a5.714 5.714 0 1 1-11.429 0 5.714 5.714 0 0 1 11.429 0Z" fill="#6A6A6A"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                            <img class="max-h-[400px] w-full object-cover" src="https://greatmind.id/uploads/article-detail/b986c0e1ea899d19d585004a794c37667056a2b9.jpg" alt="hero cover" height="400" width="480" fetchpriority="high">
                        <div class="absolute bottom-0 left-4 min-h-[122px] w-[calc(100%_-_32px)] translate-y-1/2 rounded-md bg-white p-4 shadow-[0_2px_8px_1px_rgba(152,152,152,0.2)]">
                            <span class="mb-4 block font-semibold xs:text-sm text-balance">Mari bantu sesama kita dengan cara menggalangkan dana.</span>
                            <a href="/GalangDana" data-testid="homepage-button-galangkan-dana" class="py-1.5 bg-orange-400 focus:bg-blue-30 hover:bg-orange-500 bg-blue-400 text-white font-bold leading-5 rounded flex flex-row items-center justify-center min-w-max px-6 focus:outline-none transition duration-300 ease-in-out w-[176px] rounded-full xs:py-1 xs:text-sm opacity-10 hover:opacity-100">Galang Dana</a>
                        </div>
                    </div>
                    <div class="mb-6 px-4">
                        <h2 class="mb-6 text-base font-semibold">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, itaque.</h2>
                        <div class="grid grid-cols-3 gap-y-6">
                            <a href="{{url('/CampaignList')}}" class="flex flex-col items-center">
                                <div class="mb-2 flex h-12 w-12 justify-end">
                                    <img src="https://cdn-icons-png.flaticon.com/128/2618/2618479.png" alt="" width="48" height="48" class="object-contain">
                                </div>
                                <span class="px-1 text-center text-mineshaft">Donasi</span>
                            </a>
                            <a href="{{url('/GalangDana')}}" class="flex flex-col items-center">
                                <div class="mb-2 flex h-12 w-12 justify-end">
                                    <img src="https://cdn-icons-png.flaticon.com/128/3130/3130453.png" alt="" width="48" height="48" class="object-contain">
                                </div>
                                <span class="px-1 text-center text-mineshaft">Galang Dana</span>
                            </a>
                            <a href="{{url('/zakat')}}" class="flex flex-col items-center">
                                <div class="mb-2 flex h-12 w-12 justify-end">
                                    <img src="https://cdn-icons-png.flaticon.com/128/7653/7653150.png" alt="" width="48" height="48" class="object-contain">
                                </div>
                                <span class="px-1 text-center text-mineshaft">Zakat </span>
                            </a>
                        </div>
                    </div>
                    <div class="relative w-full max-w-4xl overflow-hidden mb-10 my-10 mx-auto">
                        <div class="flex transition-transform duration-500 ease-in-out" id="carousel-inner">
                            <div class="flex-shrink-0 w-full h-64 bg-red-500 flex items-center justify-center text-white text-2xl"><img src="https://ethics.org.au/wp-content/uploads/2018/05/Ethics-Centre_Your-donation-is-only-as-good-as-the-charity-you-give-it-to.jpg" alt=""></div>
                            <div class="flex-shrink-0 w-full h-64 bg-blue-500 flex items-center justify-center text-white text-2xl"><img src="{{url('images/auto_photo_1.jpeg')}}" alt=""></div>
                            <div class="flex-shrink-0 w-full h-64 bg-green-500 flex items-center justify-center text-white text-2xl"><img src="{{url('images/auto_photo_2.jpeg')}}" alt=""></div>
                        </div>
                    </div>
                    <script>
                        const carouselInner = document.getElementById('carousel-inner');
                        const items = document.querySelectorAll('.flex-shrink-0');
                        const totalItems = items.length;
                        let index = 0;

                        function nextSlide() {
                            index = (index + 1) % totalItems;
                            carouselInner.style.transform = `translateX(-${index * 100}%)`;
                        }

                        setInterval(nextSlide, 3000); // Change slide every 3 seconds
                    </script>
                    <div class="flex justify-center items-center mb-6 my-6">
                        <h1 class="text-xl font-semibold">Program</h1>
                    </div>
                    <div class="flex w-full max-w-2xl bg-gray-300">
                        <div class="overflow-x-auto scroll-smooth pb-4 py-4 flex space-x-4 px-4 scroll-pl-15">
                            @foreach($campaigns as $campaign)
                                <div class="flex gap-2 px-1 pb-2">
                                    <a href="{{ route('program_1.show', $campaign->id) }}" class="relative w-[220px] flex-shrink-0 rounded-lg bg-white shadow-[0_2px_8px_rgba(152,152,152,0.2)]">
                                        <img src="{{ asset('storage/' . $campaign->image_url) }}" alt="{{ $campaign->name }}" height="220" width="120" class="h-[120px] w-[220px] rounded-tl-lg rounded-tr-lg">
                                        <div class="p-3">
                                            <div class="mb-2 flex">
                                                <span class="inline-block overflow-hidden text-ellipsis whitespace-nowrap text-xs text-onyx">{{ $campaign->division }}</span>
                                            </div>
                                            <div class="mb-2 flex">
                                                <span class="inline-block overflow-hidden text-ellipsis whitespace-nowrap text-xs text-onyx">{{ $campaign->name }}</span>
                                            </div>
                                            
                                            <span class="mb-2 block h-9 overflow-hidden break-words text-sm font-semibold text-mineshaft line-clamp-2">{{ $campaign->description }}</span>
                                            <div class="mb-2">
                                                <span class="mr-2 inline-block text-xs text-mineshaft">Donasi Terkumpul</span>
                                                <span class="text-sm font-semibold" id="raised_amount_{{ $campaign->id }}">Rp{{ number_format($campaign->raised_amount, 0) }}</span>
                                            </div>
                                            <svg width="100%" height="5" aria-label="progressBar">
                                                <rect x="0" rx="3" width="100%" height="100%" fill="#E8E8E8"></rect>
                                                <rect id="progress_bar_{{ $campaign->id }}" x="0" rx="3" width="{{ ($campaign->raised_amount / $campaign->target_amount) * 100 }}%" height="100%" fill="#10A8E5" aria-describedby="progress {{ ($campaign->raised_amount / $campaign->target_amount) * 100 }}%"></rect>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div> 
                    </div>

                    <!-- <a href="/create_campaign">
                        <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
                            buat
                        </button>
                    </a> -->

                    <hr class="m-0 h-2 w-full border-0 bg-gray-100 p-0">
                    <div class="py-4">
                        <h2 class="px-4 text-base font-semibold text-center pb-4">Activity</h2>
                        <div class="relative w-full max-w-2xl bg-gray-300">
                            <img id="arrow-left" class="none absolute top-[40%] left-0 transform -translate-y-1/2 z-1 cursor-pointer" aria-hidden="true" src="https://cdn-icons-png.flaticon.com/128/3114/3114883.png" width="25" height="25" alt="arrow left" decoding="auto" fetchpriority="auto">
                            <img id="arrow-right" class="none absolute top-[40%] right-0 transform -translate-y-1/2 z-1 cursor-pointer" aria-hidden="true" src="https://cdn-icons-png.flaticon.com/128/3114/3114931.png" width="25" height="25" alt="arrow right" decoding="auto" fetchpriority="auto">
                            <div class="slider overflow-x-auto scroll-smooth pb-4 py-4 flex space-x-4 px-4 scroll-pl-15">
                                <div class="flex-shrink-0 w-56 h-56 bg-white rounded-lg shadow-sm flex items-center justify-center hover:shadow-md "><img src="{{url('images/Activity/Activity_1.jpeg')}}" alt="Activity"></div>
                                <div class="flex-shrink-0 w-56 h-56 bg-white rounded-lg shadow-sm flex items-center justify-center hover:shadow-md "><img src="{{url('images/food/charity_food_3.jpeg')}}" alt="Activity"></div>
                                <div class="flex-shrink-0 w-56 h-56 bg-white rounded-lg shadow-sm flex items-center justify-center hover:shadow-md "><img src="{{url('images/Pendidikan/Pendidikan_1.jpeg')}}" alt="Activity"></div>
                                <div class="flex-shrink-0 w-56 h-56 bg-white rounded-lg shadow-sm flex items-center justify-center hover:shadow-md "><img src="{{url('images/Disaster/Disaster_1.jpeg')}}" alt="Activity"></div>
                                <div class="flex-shrink-0 w-56 h-56 bg-white rounded-lg shadow-sm flex items-center justify-center hover:shadow-md "><img src="{{url('images/Disaster/Disaster_3.jpeg')}}" alt="Activity"></div>
                            </div>
                        </div>
                        <script>
                            const slider = document.querySelector('.slider');
                            const leftArrow = document.getElementById('arrow-left');
                            const rightArrow = document.getElementById('arrow-right');

                            leftArrow.addEventListener('click', () => {
                            slider.scrollBy({
                                left: -220,
                                behavior: 'smooth'
                            });
                            });

                            rightArrow.addEventListener('click', () => {
                            slider.scrollBy({
                                left: 220,
                                behavior: 'smooth'
                            });
                            });
                        </script>
                    </div>
                    <hr class="m-0 h-2 w-full border-0 bg-gray-100 p-0">
                    <div class="p-4">
                        <h2 class="px-4 text-base font-semibold text-center">category</h2>
                        <div class="grid grid-cols-4 gap-y-6">
                            <a href="#" class="flex flex-col items-center category" data-category="food">
                                <div class="mb-2 flex h-12 w-12 justify-end">
                                    <img src="https://cdn-icons-png.flaticon.com/128/706/706133.png" alt="" width="48" height="48" class="object-contain">
                                </div>
                                <span class="px-1 text-center text-mineshaft">Makanan & Minuman</span>
                            </a>
                            <a href="#" class="flex flex-col items-center category" data-category="education">
                                <div class="mb-2 flex h-12 w-12 justify-end">
                                    <img src="https://cdn-icons-png.flaticon.com/128/16312/16312791.png" alt="" width="48" height="48" class="object-contain">
                                </div>
                                <span class="px-1 text-center text-mineshaft">Pendidikan</span>
                            </a>
                            <a href="#" class="flex flex-col items-center category" data-category="disaster">
                                <div class="mb-2 flex h-12 w-12 justify-end">
                                    <img src="https://cdn-icons-png.flaticon.com/128/2763/2763089.png" alt="" width="48" height="48" class="object-contain">
                                </div>
                                <span class="px-1 text-center text-mineshaft">Bencana Alam</span>
                            </a>
                            <a href="#" class="flex flex-col items-center category" data-category="health">
                                <div class="mb-2 flex h-12 w-12 justify-end">
                                    <img src="https://cdn-icons-png.flaticon.com/128/9888/9888244.png" alt="" width="48" height="48" class="object-contain">
                                </div>
                                <span class="px-1 text-center text-mineshaft">Kesehatan</span>
                            </a>
                        </div>
                        <br>
                        <br>
                        <div class="relative w-full max-w-2xl bg-gray-300">
                            <div id="slider" class="overflow-y-auto scroll-smooth grid grid-cols-1 gap-y-9 h-[350px] overscroll-y-auto pt-6">
                            </div>
                        </div>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', () => {
                            const categories = document.querySelectorAll('.category');
                            const slider = document.getElementById('slider');

                            const sliderContent = {
                                food: [
                                    { text: '001', img: 'images/food/charity_food.jpeg' },
                                    { text: '002', img: 'images/food/Charity_Food_2.jpeg' },
                                    { text: '003', img: 'images/food/Charity_Food_3.jpeg' }
                                ],
                                education: [
                                    { text: '004', img: 'images/Pendidikan/Pendidikan_1.jpeg' },
                                    { text: '005', img: 'images/Pendidikan/Pendidikan_2.jpeg' },
                                    { text: '006', img: 'images/Pendidikan/Pendidikan_3.jpeg' }
                                ],
                                disaster: [
                                    { text: '007', img: 'images/disaster/Disaster_1.jpeg' },
                                    { text: '008', img: 'images/disaster/Disaster_2.jpeg' },
                                    { text: '009', img: 'images/disaster/Disaster_3.jpeg' }
                                ],
                                health: [
                                    { text: '010', img: 'https://example.com/health1.jpg' },
                                    { text: '011', img: 'https://example.com/health2.jpg' },
                                    { text: '012', img: 'https://example.com/health3.jpg' }
                                ]
                            };

                            categories.forEach(category => {
                                category.addEventListener('click', (event) => {
                                    event.preventDefault();
                                    const categoryType = category.getAttribute('data-category');
                                    updateSlider(categoryType);
                                });
                            });

                            function updateSlider(categoryType) {
                                slider.innerHTML = '';
                                sliderContent[categoryType].forEach(item => {
                                    const slide = document.createElement('div');
                                    slide.className = 'w-90 h-56 bg-white rounded-lg shadow-sm flex flex-col items-center justify-center hover:shadow-md';

                                    const img = document.createElement('img');
                                    img.src = item.img;
                                    img.alt = item.text;
                                    img.className = 'object-contain h-3/4';

                                    const text = document.createElement('span');
                                    text.textContent = item.text;
                                    text.className = 'mt-2 text-center';

                                    slide.appendChild(img);
                                    slide.appendChild(text);
                                    slider.appendChild(slide);
                                });
                            }
                            updateSlider('food');
                        });
                    </script>
                    <hr class="m-0 h-2 w-full border-0 bg-slate-200">
                    <!-- News Section -->
                    <div class="max-w-4xl mx-auto">
                        <div class="flex justify-center items-center mb-6 my-6">
                            <h1 class="text-xl font-semibold">News</h1>
                        </div>
                        <div class="relative">
                            <!-- Slider Container -->
                            <div class="slider-wrapper overflow-x-auto flex space-x-4 py-4 px-2 scrollbar-hidden bg-gray-300" id="news-slider">
                                @forelse ($newsArticles as $article)
                                    <a href="{{ route('full_news.show', $article->id) }}" class="flex-shrink-0">
                                        <div class="bg-white p-4 rounded-lg shadow-md w-72 transform transition-transform duration-300 hover:scale-105 my-4">
                                            <div class="overflow-hidden rounded-md">
                                                @if($article->image_url)
                                                    <img src="{{ asset('storage/' . $article->image_url) }}" alt="{{ $article->title }}" class="w-full h-40 object-cover transition-transform duration-300 hover:scale-110">
                                                @else
                                                    <img src="{{ asset('images/default-image.jpg') }}" alt="Default Image" class="w-full h-40 object-cover transition-transform duration-300 hover:scale-110">
                                                @endif
                                            </div>
                                            <p class="text-sm font-semibold mb-3 transition-colors duration-300 hover:text-green-600">{{ $article->title }}</p>
                                            <p class="text-sm text-gray-700 mb-4">
                                                {{ Str::limit($article->content, 100) }}
                                            </p>
                                        </div>
                                    </a>
                                @empty
                                    <p class="text-center text-gray-500">No news available.</p>
                                @endforelse
                            </div>
                        </div>
                        <!-- <div class="flex my-10 mb-10 justify-center items-center">
                            <a href="{{ route('create_news') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Buat news
                            </a>
                        </div> -->
                    </div>

                    <!-- Articles Section -->
                    <div class="max-w-4xl mx-auto">
                        <div class="flex justify-center items-center mb-6 my-6">
                            <h1 class="text-xl font-semibold">Article</h1>
                        </div>
                        <div class="relative">
                            <!-- Slider Container -->
                            <div class="slider-wrapper overflow-x-auto flex space-x-4 py-4 px-2 scrollbar-hidden bg-gray-300" id="articles-slider">
                                @forelse ($articles as $article)
                                    <a href="{{ route('full_news.show', $article->id) }}" class="flex-shrink-0">
                                        <div class="bg-white p-4 rounded-lg shadow-md w-72 transform transition-transform duration-300 hover:scale-105 my-4">
                                            <div class="overflow-hidden rounded-md">
                                                @if($article->image_url)
                                                    <img src="{{ asset('storage/' . $article->image_url) }}" alt="{{ $article->title }}" class="w-full h-40 object-cover transition-transform duration-300 hover:scale-110">
                                                @else
                                                    <img src="{{ asset('images/default-image.jpg') }}" alt="Default Image" class="w-full h-40 object-cover transition-transform duration-300 hover:scale-110">
                                                @endif
                                            </div>
                                            <p class="text-sm font-semibold mb-3 transition-colors duration-300 hover:text-green-600">{{ $article->title }}</p>
                                            <p class="text-sm text-gray-700 mb-4">
                                                {{ Str::limit($article->content, 100) }}
                                            </p>
                                        </div>
                                    </a>
                                @empty
                                    <p class="text-center text-gray-500">No articles available.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>



                    <hr class="m-0 h-2 w-full border-0 bg-gray-100 p-0">
                    <div class="px-4 pt-6">
                        <div class="mb-8 text-center text-sm text-onyx">
                        <a href="" class="text-onyx">Kebijakan Privasi</a>
                        |
                        <a href="" class="text-onyx">Kebijakan Cookie</a>
                        </div>
                        <div class="mb-8 flex justify-between  px-[10%]">
                            <a href="https://www.instagram.com/grahadhuafa/" class="flex h-9 w-9 items-center justify-center rounded-full" target="_blank">
                                <img class="h-6 w-6" src="https://cdn-icons-png.flaticon.com/128/2111/2111463.png" alt="Instagram"  width="12" height="12" decoding="auto" fetchpriority="low">
                            </a>
                            <a href="#" class="flex h-9 w-9 items-center justify-center rounded-full" target="_blank">
                                <img class="h-6 w-6" src="https://cdn-icons-png.flaticon.com/128/5968/5968764.png" alt="facebook"  width="12" height="12" decoding="auto" fetchpriority="low">
                            </a>
                            <a href="#" class="flex h-9 w-9 items-center justify-center rounded-full" target="_blank">
                                <img class="h-6 w-6" src="https://cdn-icons-png.flaticon.com/128/11823/11823292.png" alt="Twitter"  width="12" height="12" decoding="auto" fetchpriority="low">
                            </a>
                            <a href="https://wa.me/+62 (022) 4572 6111" class="flex h-9 w-9 items-center justify-center rounded-full" target="_blank">
                                <img class="h-6 w-6" src="https://cdn-icons-png.flaticon.com/128/3670/3670051.png" alt="whatsapps"  width="12" height="12" decoding="auto" fetchpriority="low">
                            </a>
                        </div>
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
        </div>
    </body>
</html>
