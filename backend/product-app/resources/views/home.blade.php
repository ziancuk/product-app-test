<!DOCTYPE html>
<html>
<head>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <title>Home</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>

        .slick-next:before {
            color:black; 
        }
        .slick-prev:before {
            color:black; 
        }
    </style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
    <body>
        <div class="container mx-auto">
            <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center">
                    <img src="{{ asset('img/logo.jpeg') }}" class="h-8 mr-3" alt="Flowbite Logo">
                </a>
                <div class="flex items-center md:order-2">
                    @if(Auth::check())
                    <div class="p-1">
                        <span class="font-medium px-4">Hello, <span class="text-blue-500">{{ Auth::user()->name }}</span></span>
                    </div>
                    <div class="p-1">
                        <a href="logout" type="button" class="text-cyan-500 bg-white border border-cyan-500 hover:bg-cyan-800 focus:ring-4 focus:border-cyan-400 focus:outline-none focus:ring-cyan-300 font-medium text-sm px-4 py-2 text-center md:mr-0">LOGOUT</a>
                    </div>
                    @else
                    <div class="p-1">
                        <a href="login" type="button" class="text-cyan-500 bg-white border border-cyan-500 hover:bg-cyan-800 focus:ring-4 focus:border-cyan-400 focus:outline-none focus:ring-cyan-300 font-medium text-sm px-4 py-2 text-center mr-3 md:mr-0">MASUK</a>
                    </div>
                    <div class="p-1">
                        <a href="register" type="button" class="text-white bg-cyan-500 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium text-sm px-4 py-2 text-center mr-3 md:mr-0">DAFTAR</a>
                    </div>
                    @endif
                </div>
                <div class="items-center justify-between hidden w-1/2 md:flex md:order-1" id="navbar-sticky">
                    <div class="relative w-full">
                        <input type="search" id="location-search" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-300 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Cari Parfume kesukaanmu">
                        <button type="submit" class="absolute top-0 right-0 h-full p-2.5 text-sm font-medium text-gray-400 bg-gray-50 rounded-r-lg border border-gray-300 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-blue-800">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container mx-auto mt-20 p-10 flex justify-center items-center">
            <!-- <div class="columns-1 md:h-screen"> -->
                <div class="slickfirst w-3/4 flex justify-center items-center">
                    <img src="{{asset('img/1657.jpg')}}" class="w-200" alt="...">
                    <img src="{{asset('img/2826.jpg')}}" class="w-200" alt="...">
                </div>
            <!-- </div> -->
        </div>

        <div class="container mx-auto mt-8 px-40">
            <div class="grid grid-cols-1 gap-4">
                <span class="font-serif text-xl font-bold">Terbaru</span>
            </div>
            <div class="multiple-items grid grid-cols-5 gap-4">
                @for($i=0; $i < 10; $i++)
                <div class="w-full max-w-sm bg-white hover:border hover:border-gray-200 rounded-lg hover:shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="p-8 rounded-t-lg" src="{{ asset('img/produk.jpeg') }}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-lg font-semibold font-serif tracking-tight text-gray-900 dark:text-white">Benetton Hot</h5>
                        </a>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-bold text-cyan-500">IDR</span>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
            <div class="grid grid-cols-1 gap-4 pt-10">
                <span class="font-serif text-xl font-bold">Produk Tersedia</span>
            </div>
            <div class=" grid grid-cols-5 gap-4">
                @for($i=0; $i < 10; $i++)
                <div class="w-full max-w-sm bg-white hover:border hover:border-gray-200 rounded-lg hover:shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="p-8 rounded-t-lg" src="{{ asset('img/produk.jpeg') }}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-lg font-semibold font-serif tracking-tight text-gray-900 dark:text-white">Benetton Hot</h5>
                        </a>
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-bold text-cyan-500">IDR</span>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
            
            <div class="pt-5 flex justify-center items-center flex-col">
                <button type="button" class="text-cyan-500 bg-white border border-cyan-500 hover:bg-cyan-800 focus:ring-4 focus:border-cyan-400 focus:outline-none focus:ring-cyan-300 font-medium text-sm px-4 py-2 text-center mr-3 md:mr-0">Lihat Lebih Banyak</button>
            </div>
        </div>
        <div class="container mx-auto my-8 py-10">
            <hr>
        </div>
        <!-- More Content -->
        <div class="container mx-auto mt-8 p-10">
            <div class="grid grid-cols-5 gap-4">
                <div class="col-span-2 flex justify-center items-center flex-col">
                    <div class="col-span-2 p-5">
                        <img src="{{ asset('img/logo.jpeg') }}" class="h-8 mr-3" alt="Flowbite Logo">
                    </div>
                    <div class="col-span-2 p-5 text-center">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut commodo in vestibulum, sed dapibus tristique nullam.</span>
                    </div>
                </div>
                <div>
                    <div class="columns-1 py-5">
                        <span class="font-serif text-xl">Layanan</span>
                    </div>
                    <div class="columns-1 py-1"><span>BANTUAN</span></div>
                    <div class="columns-1 py-1"><span>TANYA JAWAB</span></div>
                    <div class="columns-1 py-1"><span>HUBUNGI KAMI</span></div>
                    <div class="columns-1 py-1"><span>CARA BERJUALAN</span></div>
                </div>
                <div>
                    <div class="columns-1 py-5">
                        <span class="font-serif text-xl">Tentang Kami</span>
                    </div>
                    <div class="columns-1 py-1"><span>ABOUT US</span></div>
                    <div class="columns-1 py-1"><span>KARIR</span></div>
                    <div class="columns-1 py-1"><span>BLOG</span></div>
                    <div class="columns-1 py-1"><span>KEBIJAKAN PRIVASI</span></div>
                    <div class="columns-1 py-1"><span>SYARAT DAN KETENTUAN</span></div>
                </div>
                <div>
                    <div class="columns-1 py-5">
                        <span class="font-serif text-xl">Mitra</span>
                    </div>
                    <div class="columns-1 py-1"><span>SUPPLIER</span></div>
                </div>
            </div>
        </div>

        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script>
            $(document).ready(() => {
                $('.slickfirst').slick({
                    autoplay: true,
                    autoplaySpeed: 8000,
                    dots: true,
                });
            });

            $('.multiple-items').slick({
                infinite: true,
                slidesToShow: 5,
                slidesToScroll: 5
            });
        </script>
    </body>
</html>