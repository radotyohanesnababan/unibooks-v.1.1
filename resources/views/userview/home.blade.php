<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <title>UniBooks Store</title>
    <style>
        .parallax {
            height: 500px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .parallax-content {
            text-align: center;
            color: white;
            padding: 100px 0;
        }
    </style>
    <link rel="stylesheet" href="{{ url('css/userhome.css') }}" >
</head>

<body>
    <nav class="bg-white dark:bg-gray-900 fixed w-full z-50 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('storage/LogoBook.jpg') }}" class="h-10 w-10" alt="Logo" />
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#home"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                            aria-current="#home">Home</a>
                    </li>
                    <li>
                        <a href="#new"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                            aria-current="#news">New Arrival</a>
                    </li>
                    <li>
                        <a href="#gallery"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                            aria-current="#gallery">Gallery</a>
                    </li>
                    <li>
                        <a href="#about"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                            aria-current="#about">About</a>
                    </li>
                    <li>
                        <a href="#about"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                            aria-current="#about">About</a>
                    </li>
                    {{-- <li>
                        <a href="/usersearch"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                            aria-current="#about">Cari Buku</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>


    <section id="home" class="parallax h-screen flex justify-center items-center bg-cover bg-center bg-no-repeat"
        style="background-image: url('../storage/Book.png')">
        <div class="parallax-content text-center px-4 sm:px-16 lg:px-48">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                UniBooks Store</h1>
            <p class="mb-8 text-lg font-normal text-white lg:text-xl">Temukan Petualangan Tanpa Batas di Setiap Buku
                yang Anda Baca.</p>
            <form class="max-w-md mx-auto" action="{{ route('resultbook') }}" method="GET">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" required id="search" name="query" type="text"
                        value="{{ $query ?? '' }}"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Cari Buku Disini.." />
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>
        </div>
    </section>





    <section id="new" class="new">
        <h2 class="text-center text-6xl font-bold my-8">New Arrival</h2>
        <div class="new-container">
            @forelse ($booksnewarrival as $item)
                <div class="new-item rounded-lg">
                    <a href="{{ url('books/' . $item->id_buku) }}">
                        <img src="{{ asset('storage/coverimage/' . $item->coverimage) }}" alt="{{ $item->judul }}">
                        <h3>{{ $item->judul }}</h3>
                        <p>{{ $item->deskripsi }}</p>
                    </a>

                </div>
            @empty
                <div>No books found.</div>
            @endforelse
        </div>
    </section>


    <div id="gallery" class="relative">
        <h2 class="text-center text-6xl font-bold my-8">Gallery</h2>
        <div id="custom-controls-gallery" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96 mx-auto">
                @forelse ($booksrandom as $item)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <a href="{{ url('books/' . $item->id_buku) }}">
                            <img src="{{ asset('storage/coverimage/' . $item->coverimage) }}"
                                class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="{{ $item->judul }}">
                        </a>

                    </div>
                @empty
                    <div>No books found.</div>
                @endforelse


            </div>
            <div class="flex justify-center items-center pt-4">
                <button type="button"
                    class="flex justify-center items-center me-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                        <svg class="rtl:rotate-180 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="flex justify-center items-center h-full cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                        <svg class="rtl:rotate-180 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="grid grid-cols-5 gap-4">
            @forelse ($booksrandom as $item)
                <div>
                    <a href="{{ url('books/' . $item->id_buku) }}">
                        <img class="h-auto max-w-full rounded-lg"
                            src="{{ asset('storage/coverimage/' . $item->coverimage) }}" alt="">
                    </a>
                </div>
            @empty
            @endforelse

        </div>
    </div>


    <section id="about" class="about">
        <h2 class="text-center text-6xl font-bold my-8">About</h2>

        <div id="accordion-arrow-icon" data-accordion="open">
            <h2 id="accordion-arrow-icon-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                    data-accordion-target="#accordion-arrow-icon-body-1" aria-expanded="true"
                    aria-controls="accordion-arrow-icon-body-1   ">
                    <span>Tentang Kami</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-arrow-icon-body-1" class="hidden" aria-labelledby="accordion-arrow-icon-heading-1">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Unibook Store adalah toko buku yang didirikan oleh
                        seorang pecinta buku dengan tujuan untuk menyediakan berbagai macam buku bagi semua kalangan.
                        Kami berkomitmen untuk menjadi sumber utama pengetahuan dan hiburan bagi masyarakat. Dengan
                        koleksi buku yang luas dan terus berkembang, kami berharap dapat memenuhi kebutuhan para pembaca
                        dari berbagai latar belakang.</p>
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Di Unibook Store, kami memahami bahwa setiap orang
                        memiliki minat dan preferensi membaca yang berbeda. Oleh karena itu, kami menawarkan beragam
                        genre mulai dari fiksi hingga non-fiksi, buku anak-anak hingga dewasa, dan literatur klasik
                        hingga kontemporer. Kami tidak hanya menyediakan buku-buku populer, tetapi juga karya-karya dari
                        penulis independen yang berbakat.</p>
                </div>
            </div>
            <h2 id="accordion-arrow-icon-heading-2">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                    data-accordion-target="#accordion-arrow-icon-body-2" aria-expanded="false"
                    aria-controls="accordion-arrow-icon-body-2">
                    <span>Tujuan Utama Kami</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-arrow-icon-body-2" class="hidden" aria-labelledby="accordion-arrow-icon-heading-2">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                        <li>
                            <p><strong>Visi Kami</strong><br>
                                Menjadi toko buku terdepan yang menyediakan pengalaman berbelanja yang menyenangkan dan
                                inspiratif bagi setiap pelanggan.</p>
                        </li>
                        <li>
                            <p><strong>Misi Kami</strong><br>
                                Menyediakan berbagai macam buku berkualitas dari berbagai genre.<br>
                                Memberikan pelayanan yang ramah dan profesional kepada setiap pelanggan.<br>
                                Mengadakan berbagai acara dan kegiatan yang mendukung literasi dan kecintaan terhadap
                                membaca.<br>
                                Menjalin kerjasama dengan penulis dan penerbit untuk menghadirkan karya-karya terbaik
                                kepada pembaca.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <h2 id="accordion-arrow-icon-heading-3">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                    data-accordion-target="#accordion-arrow-icon-body-3" aria-expanded="false"
                    aria-controls="accordion-arrow-icon-body-3">
                    <span>Kegiatan Kami</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-arrow-icon-body-3" class="hidden" aria-labelledby="accordion-arrow-icon-heading-3">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                        <li>
                            <p>Unibook Store juga aktif mengadakan berbagai acara seperti diskusi buku, peluncuran buku
                                baru, dan lokakarya penulisan. Kami ingin membangun komunitas pembaca yang solid dan
                                mendukung perkembangan literasi di masyarakat. Kami yakin bahwa dengan berbagi
                                pengetahuan dan pengalaman, kita dapat tumbuh dan belajar bersama.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <div class="contact">
                <h3>Contact</h3>
                <p>Email: Cs@Unibooks.com</p>
                <p>Phone: +62 1263 4567 6576</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com" target="_blank">
                        <i class="fab fa-facebook-f"></i><span>UniBooks</span>
                    </a>
                    <a href="https://www.instagram.com" target="_blank">
                        <i class="fab fa-instagram"></i><span>UniBooks</span>
                    </a>
                    <a href="https://www.twitter.com" target="_blank">
                        <i class="fab fa-twitter"></i><span>UniBooks</span>
                    </a>
                    <a href="https://wa.me/62126345676576" target="_blank">
                        <i class="fab fa-whatsapp"></i><span>UniBooks</span>
                    </a>
                </div>
            </div>
            <div class="address-map">
                <div class="address">
                    <h3>Address</h3>
                    <p>Jl.Boulevard Raya Barat Blok RGA no.30 Ruko Grand Galaxy City RT.001, RT.001/RW.002, Jaka Setia,
                        Bekasi Selatan, Bekasi, West Java 17147</p>
                </div>
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.86843835222393!2d106.97411693818009!3d-6.277531763750996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d539b46c9af%3A0xff8faea93bde772!2sHaltev%20IT%20Kursus%20Programming%2C%20Coding%20%2C%20Microsoft%20Office%2C%20Data%20Science%20dan%20Digital%20Marketing!5e0!3m2!1sid!2sid!4v1718259276094!5m2!1sid!2sid"
                        width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <p class="copyright">&copy; <span>2024</span> Informatika ITERA. All Rights Reserved.</p>
    </footer>

</body>

</html>
