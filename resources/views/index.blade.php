@include('partials.header')
@include('partials.navbar')

<!-- Hero Section -->
<section class="w-full hero-section bg-primary text-white md:h-auto md:mt-20 mt-10 py-9"
    style="background-image: url('{{ asset('images/hero-background.png') }}')">
    <div class="container mx-auto flex flex-col md:flex-row items-center mt-10 md:mt-20 px-4">
        <div class="md:w-1/2 text-center md:text-left mb-10 md:mb-0">
            <h1 class="text-3xl md:text-2xl lg:text-4xl font-bold mb-4">
                Partner Digital Untuk Layanan Bisnis Dan Pemerintahan
            </h1>
            <h2 class="text-md  md:text-xl mb-8">
                Kami Melayani Jasa Pembuatan Website, Aplikasi, Dan Multimedia.
            </h2>
            <a href="#services"
                class="border border-white text-white py-3 px-4 rounded-md hover:bg-white hover:text-blue-900 text-sm transition duration-400">
                Info selengkapnya
            </a>
        </div>
        <div class="hero-images md:w-1/2 flex justify-center">
            <img src="{{ asset('images/hero-image.png') }}" alt="Deskripsi gambar" class="w-full" />
        </div>
    </div>
</section>
<!-- Hero Section -->

<!-- Services Section -->
<section id="services" class="w-full relative">
    <img src="{{ asset('images/absolute1.png') }}" class="absolute top-0 right-0" width="740px">
    <div class="bg-white py-20 lg:py-24">
        <div class="container mx-auto px-6 lg:px-8">
            <div class=" mx-auto max-w-full lg:text-center">
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl text-center">
                    <span class="z-40 text-primary">Layanan Kami</span>
                </p>
                <p class="mt-6 md:text-base text-sm font-bold text-gray-600 text-center">
                    <span class="z-40 text-primary">
                        LAYANAN DIGITAL TERBAIK, UNTUK KEBUTUHAN ANDA
                    </span>
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-16">

                <div data-aos="zoom-in" class="bg-white rounded-lg p-5 mb-4 lg:m-1  z-20"
                    style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1)">
                    <div class="flex items-center justify-center h-20 w-20"
                        style="background-color: #0076dd42; border-radius: 50%;">
                        <img src="{{ asset('images/icon1.png') }}" alt="SSL Certificates Icon"
                            class="h-12 w-12 text-white">
                    </div>
                    <div class="mt-8 mb-5">
                        <h3 class="lg:text-3xl font-semibold"><span class="text-primary">IT Solution</span></h3>
                        <p class="mt-2 text-base font-semibold text-gray-600">
                            <span class="text-skyblue">Kami Menyediakan Berbagai Macam Layanan IT, Mulai Dari Pembuatan
                                Website, Pembuatan Aplikasi, Penyedia Server Dan Layanan Lainnya.</span>
                        </p>
                    </div>
                </div>

                <div data-aos="zoom-in" class="bg-white rounded-lg p-5 mb-4 lg:m-1  z-20"
                    style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1)">
                    <div class="flex items-center justify-center h-20 w-20"
                        style="background-color: #9833fd50; border-radius: 50%;">
                        <img src="{{ asset('images/icon2.png') }}" alt="SSL Certificates Icon"
                            class="h-12 w-12 text-white">
                    </div>
                    <div class="mt-8 mb-5 text-primary">
                        <h3 class="lg:text-3xl font-semibold">Multimedia</h3>
                        <p class="mt-2 text-base font-semibold text-gray-600">
                            <span class="text-skyblue">Kami Menyediakan Berbagai Macam Layanan IT, Mulai Dari Pembuatan
                                Website, Pembuatan Aplikasi, Penyedia Server Dan Layanan Lainnya.</span>
                        </p>
                    </div>
                </div>

                <div data-aos="zoom-in" class=" bg-white rounded-lg p-5 mb-4 lg:m-1  z-20"
                    style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1)">
                    <div class="flex items-center justify-center h-20 w-20"
                        style="background-color: #c3f23673; border-radius: 50%;">
                        <img src="{{ asset('images/icon3.png') }}" alt="SSL Certificates Icon"
                            class="h-12 w-12 text-white">
                    </div>
                    <div class="mt-8 mb-5 text-primary">
                        <h3 class="lg:text-3xl font-semibold">Advertising</h3>
                        <p class="mt-2 text-base font-semibold text-gray-600">
                            <span class="text-skyblue">Kami Menyediakan Berbagai Macam Layanan IT, Mulai Dari Pembuatan
                                Website, Pembuatan Aplikasi, Penyedia Server Dan Layanan Lainnya.</span>
                        </p>
                    </div>
                </div>

                <!-- Gambar absolut 2 tengah-kanan -->
                <img src="{{ asset('images/absolute2.png') }}"class="absolute top-3/4 transform -translate-y-3/4 right-0"
                    width="312px">

                <div data-aos="zoom-in" class="bg-white rounded-lg p-5 mb-4 lg:m-1  z-20"
                    style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1)">
                    <div class="flex items-center justify-center h-20 w-20"
                        style="background-color: #1aa0ff2f; border-radius: 50%;">
                        <img src="{{ asset('images/icon4.png') }}" alt="SSL Certificates Icon"
                            class="h-12 w-12 text-white">
                    </div>
                    <div class="mt-8 mb-5 text-primary">
                        <h3 class="lg:text-3xl font-semibold">Trainer</h3>
                        <p class="mt-2 text-base font-semibold text-gray-600">
                            <span class="text-skyblue">Kami Menyediakan Berbagai Macam Layanan IT, Mulai Dari Pembuatan
                                Website, Pembuatan Aplikasi, Penyedia Server Dan Layanan Lainnya.</span>
                        </p>
                    </div>
                </div>

                <!-- Gambar absolut 3 kiri bawah -->
                <div class="mb-56 absolute left-0 bottom-0" style="margin-bottom: 0px;">
                    <img src="{{ asset('images/absolute3.png') }}" width="312px">
                </div>

                <div data-aos="zoom-in" class="bg-white rounded-lg p-5 mb-4 lg:m-1  z-20"
                    style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1)">
                    <div class="flex items-center justify-center h-20 w-20"
                        style="background-color: #307cd34f; border-radius: 50%;">
                        <img src="{{ asset('images/icon5.png') }}" alt="SSL Certificates Icon"
                            class="h-12 w-12 text-white">
                    </div>
                    <div class="mt-8 mb-5 text-primary">
                        <h3 class="lg:text-3xl font-semibold">Animasi explainer</h3>
                        <p class="mt-2 text-base font-semibold text-gray-600">
                            <span class="text-skyblue">Kami Menyediakan Berbagai Macam Layanan IT, Mulai Dari Pembuatan
                                Website, Pembuatan Aplikasi, Penyedia Server Dan Layanan Lainnya.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section -->

<!-- About Section -->
<div id="about" class="anchor bg-fixed bg-cover bg-no-repeat py-28"
    style="background-image: url('{{ asset('images/bg-about.webp') }}')">
    <section class="mx-auto max-w-screen-full">
        <div class="container mx-auto px-6 xl:px-10">
            <div class=" lg:p-9 p-4 lg:max-w-none lg:flex lg:items-center rounded-md ring-1 bg-white ring-gray-200">
                <div class="lg:w-1/2 flex justify-center lg:justify-start md:justify-center md:mb-10 lg:mb-0">
                    <div class="lg:max-w-lg">
                        <video data-aos="zoom-in" class="rounded-md w-full h-auto" loop controls
                            controlsList="nodownload">
                            <source src="{{ asset('videos/zmi.webm') }}" type="video/webm">
                        </video>
                    </div>
                </div>
                <div class="md:p-7 lg:w-1/2 lg:mt-0 text-blue-900">
                    <h3 class="text-2xl md:mt-0 mt-10 font-bold tracking-tight">Tentang Kami</h3>
                    <p class="mt-6 text-base">
                        PT Zen Multimedia Indonesia adalah sebuah perusahaan yang bergerak di bidang IT Consultant
                        (Web & Developer System),
                        Multimedia, Video Explainer, Advertiser & Music Publisher yang berada di Jawa Barat. PT Zen
                        Multimedia Indonesia hadir dengan SDM
                        yang mumpuni di bidangnya.
                    </p>
                    <img src="{{ asset('images/wm.png') }}" alt="Deskripsi gambar kecil" class="mt-9 w-48 h-auto">
                </div>
            </div>
        </div>
    </section>
</div>
<!-- About Section -->

<!-- Project Section -->
<section class="w-full relative py-20">
    <div class="container mx-auto px-6 lg:px-8">
        <div>
            <p class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                <span class="text-primary">Latest Project</span>
            </p>
        </div>
        <div class="relative">
            <div class=" mt-12 swiper-container swiper-latest-project rounded-md">
                <div class="swiper-wrapper">
                    <div class="swiper-slide relative" style="height: 330px; width: 700px;">
                        <img src="{{ asset('images/3.jpg') }}"
                            class="rounded-md absolute inset-0 w-full h-full object-cover hover:opacity-100 transition-opacity duration-300"
                            alt="Slide 1">
                        <div
                            class="bg-black mt-32 absolute inset-0 flex opacity-0 hover:opacity-85 transition-opacity duration-300">
                            <div class="flex flex-col h-full m-9">
                                <p class="text-white text-2xl font-bold mb-2">tempatjualan.com</p>
                                <p class="text-white text-lg mb-4 max-w-lg">tempatjualan.com adalah penyedia layanan
                                    E-Commerce melalui aplikasi seluler dan desktop.</p>
                                <a href="#services"
                                    class="w-44 border text-center border-white text-white py-2 px-4 rounded hover:bg-white hover:text-black text-sm transition duration-400">
                                    Lihat selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide relative" style="height: 330px; width: 700px;">
                        <img src="{{ asset('images/3.jpg') }}"
                            class="rounded-md absolute inset-0 w-full h-full object-cover hover:opacity-100 transition-opacity duration-300"
                            alt="Slide 1">
                        <div
                            class="bg-black mt-32 absolute inset-0 flex opacity-0 hover:opacity-85 transition-opacity duration-300">
                            <div class="flex flex-col h-full m-9">
                                <p class="text-white text-2xl font-bold mb-2">tempatjualan.com</p>
                                <p class="text-white text-lg mb-4 max-w-lg">tempatjualan.com adalah penyedia layanan
                                    E-Commerce melalui aplikasi seluler dan desktop.</p>
                                <a href="#services"
                                    class="w-44 border text-center border-white text-white py-2 px-4 rounded hover:bg-white hover:text-black text-sm transition duration-400">
                                    Lihat selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide relative" style="height: 330px; width: 700px;">
                        <img src="{{ asset('images/3.jpg') }}"
                            class="rounded-md absolute inset-0 w-full h-full object-cover hover:opacity-100 transition-opacity duration-300"
                            alt="Slide 1">
                        <div
                            class="bg-black mt-32 absolute inset-0 flex opacity-0 hover:opacity-85 transition-opacity duration-300">
                            <div class="flex flex-col h-full m-9">
                                <p class="text-white text-2xl font-bold mb-2">tempatjualan.com</p>
                                <p class="text-white text-lg mb-4 max-w-lg">tempatjualan.com adalah penyedia layanan
                                    E-Commerce melalui aplikasi seluler dan desktop.</p>
                                <a href="#services"
                                    class="w-44 border text-center border-white text-white py-2 px-4 rounded hover:bg-white hover:text-black text-sm transition duration-400">
                                    Lihat selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide relative" style="height: 330px; width: 700px;">
                        <img src="{{ asset('images/3.jpg') }}"
                            class="rounded-md absolute inset-0 w-full h-full object-cover hover:opacity-100 transition-opacity duration-300"
                            alt="Slide 1">
                        <div
                            class="bg-black mt-32 absolute inset-0 flex opacity-0 hover:opacity-85 transition-opacity duration-300">
                            <div class="flex flex-col h-full m-9">
                                <p class="text-white text-2xl font-bold mb-2">tempatjualan.com</p>
                                <p class="text-white text-lg mb-4 max-w-lg">tempatjualan.com adalah penyedia layanan
                                    E-Commerce melalui aplikasi seluler dan desktop.</p>
                                <a href="#services"
                                    class="w-44 border text-center border-white text-white py-2 px-4 rounded hover:bg-white hover:text-black text-sm transition duration-400">
                                    Lihat selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide relative" style="height: 330px; width: 700px;">
                        <img src="{{ asset('images/3.jpg') }}"
                            class="rounded-md absolute inset-0 w-full h-full object-cover hover:opacity-100 transition-opacity duration-300"
                            alt="Slide 1">
                        <div
                            class="bg-black mt-32 absolute inset-0 flex opacity-0 hover:opacity-85 transition-opacity duration-300">
                            <div class="flex flex-col h-full m-9">
                                <p class="text-white text-2xl font-bold mb-2">tempatjualan.com</p>
                                <p class="text-white text-lg mb-4 max-w-lg">tempatjualan.com adalah penyedia layanan
                                    E-Commerce melalui aplikasi seluler dan desktop.</p>
                                <a href="#services"
                                    class="w-44 border text-center border-white text-white py-2 px-4 rounded hover:bg-white hover:text-black text-sm transition duration-400">
                                    Lihat selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide relative" style="height: 330px; width: 700px;">
                        <img src="{{ asset('images/3.jpg') }}"
                            class="rounded-md absolute inset-0 w-full h-full object-cover hover:opacity-100 transition-opacity duration-300"
                            alt="Slide 1">
                        <div
                            class="bg-black mt-32 absolute inset-0 flex opacity-0 hover:opacity-85 transition-opacity duration-300">
                            <div class="flex flex-col h-full m-9">
                                <p class="text-white text-2xl font-bold mb-2">tempatjualan.com</p>
                                <p class="text-white text-lg mb-4 max-w-lg">tempatjualan.com adalah penyedia layanan
                                    E-Commerce melalui aplikasi seluler dan desktop.</p>
                                <a href="#services"
                                    class="w-44 border text-center border-white text-white py-2 px-4 rounded hover:bg-white hover:text-black text-sm transition duration-400">
                                    Lihat selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide relative" style="height: 330px; width: 700px;">
                        <img src="{{ asset('images/3.jpg') }}"
                            class="rounded-md absolute inset-0 w-full h-full object-cover hover:opacity-100 transition-opacity duration-300"
                            alt="Slide 1">
                        <div
                            class="bg-black mt-32 absolute inset-0 flex opacity-0 hover:opacity-85 transition-opacity duration-300">
                            <div class="flex flex-col h-full m-9">
                                <p class="text-white text-2xl font-bold mb-2">tempatjualan.com</p>
                                <p class="text-white text-lg mb-4 max-w-lg">tempatjualan.com adalah penyedia layanan
                                    E-Commerce melalui aplikasi seluler dan desktop.</p>
                                <a href="#services"
                                    class="w-44 border text-center border-white text-white py-2 px-4 rounded hover:bg-white hover:text-black text-sm transition duration-400">
                                    Lihat selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide relative" style="height: 330px; width: 700px;">
                        <img src="{{ asset('images/3.jpg') }}"
                            class="rounded-md absolute inset-0 w-full h-full object-cover hover:opacity-100 transition-opacity duration-300"
                            alt="Slide 1">
                        <div
                            class="bg-black mt-32 absolute inset-0 flex opacity-0 hover:opacity-85 transition-opacity duration-300">
                            <div class="flex flex-col h-full m-9">
                                <p class="text-white text-2xl font-bold mb-2">tempatjualan.com</p>
                                <p class="text-white text-lg mb-4 max-w-lg">tempatjualan.com adalah penyedia layanan
                                    E-Commerce melalui aplikasi seluler dan desktop.</p>
                                <a href="#services"
                                    class="w-44 border text-center border-white text-white py-2 px-4 rounded hover:bg-white hover:text-black text-sm transition duration-400">
                                    Lihat selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="z-40" style="position: absolute; right: 32px; top: 40%; transform: translateY(-50%);">
                    <div class="button-next fixed flex items-center justify-center text-white bg-violet rounded-full"
                        style="width: 55px; height: 55px;">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Project Section -->

<!-- Gallery Section -->
<section class="w-full">
    <div class=" bg-white py-12 lg:py-20">
        <div class=" container mx-auto px-6 lg:px-8">
            <div class="mx-auto max-w-full lg:text-center">
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl text-center">
                    <span class="text-primary">Galeri</span>
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-4 lg:mt-10">

                <div data-aos="zoom-in" class="lg:mt-12 p-4">
                    <div class=" mt-8 mb-5 text-primary">
                        <h3 class="mt-2 max-w-screen-md lg:text-3xl font-semibold">
                            Beberapa Dokumentasi Dari
                        </h3>
                        <h3 class="mt-0 max-w-screen-md lg:text-3xl font-semibold">
                            Kegiatan Kami
                        </h3>
                        <h3 class="lg:text-3xl font-semibold mt-8">
                            <a href="#services"
                                class="border border-primary text-primary py-3 px-4 rounded hover:bg-primary hover:text-white text-sm">
                                Lihat selengkapnya
                            </a>
                        </h3>
                    </div>
                </div>

                <div data-aos="zoom-in" class="bg-white rounded-lg lg:m-3"
                    style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1)">
                    <a href="{{ asset('images/galeri1.png') }}" data-lightbox="gallery" data-title="Gambar 2">
                        <img src="{{ asset('images/galeri1.png') }}" alt="Gambar 2" class="w-full rounded-md"
                            style="height: 300px; object-fit: cover;">
                    </a>
                </div>
                <div data-aos="zoom-in" class="bg-white rounded-lg lg:m-3"
                    style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1)">
                    <a href="{{ asset('images/galeri2.png') }}" data-lightbox="gallery" data-title="Gambar 3">
                        <img src="{{ asset('images/galeri2.png') }}" alt="Gambar 3" class="w-full rounded-md"
                            style="height: 300px; object-fit: cover;">
                    </a>
                </div>
                <div data-aos="zoom-in" class="bg-white rounded-lg lg:m-3"
                    style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1)">
                    <a href="{{ asset('images/galeri3.png') }}" data-lightbox="gallery" data-title="Gambar 4">
                        <img src="{{ asset('images/galeri3.png') }}" alt="Gambar 4" class="w-full rounded-md"
                            style="height: 300px; object-fit: cover;">
                    </a>
                </div>
            </div>
        </div>
</section>
<!-- Gallery Section -->

<!-- Client Section -->
<section class="bg-lightblue py-20 w-full">
    <div class="container mx-auto px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <p class="mt-2 text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl text-center">
                <span class="text-primary">Klien Kami</span>
            </p>
            <p class="mt-2 text-lg leading-8 font-bold text-gray-600 text-center">
                <span class="text-primary sm:text-1xl">
                    KAMI TELAH MELAYANI BANYAK KLIEN
                </span>
            </p>
        </div>
        <div class="relative mt-20 swiper-container swiper-klien-kami rounded-md">
            <div class="swiper-wrapper">
                <div class="swiper-slide overflow-hidden mb-4 flex-grow">
                    <img src="{{ asset('images/client/client_1.webp') }}" alt="Client 1" class="w-full h-auto">
                </div>
                <div class="swiper-slide overflow-hidden mb-4 flex-grow">
                    <img src="{{ asset('images/client/client_2.webp') }}" alt="Client 2" class="w-full h-auto">
                </div>
                <div class="swiper-slide overflow-hidden mb-4 flex-grow">
                    <img src="{{ asset('images/client/client_3.webp') }}" alt="Client 3" class="w-full h-auto">
                </div>
                <div class="swiper-slide overflow-hidden mb-4 flex-grow">
                    <img src="{{ asset('images/client/client_4.webp') }}" alt="Client 4" class="w-full h-auto">
                </div>
                <div class="swiper-slide overflow-hidden mb-4 flex-grow">
                    <img src="{{ asset('images/client/client_5.webp') }}" alt="Client 5" class="w-full h-auto">
                </div>
                <div class="swiper-slide overflow-hidden mb-4 flex-grow">
                    <img src="{{ asset('images/client/client_6.webp') }}" alt="Client 6" class="w-full h-auto">
                </div>
                <div class="swiper-slide overflow-hidden mb-4 flex-grow">
                    <img src="{{ asset('images/client/client_7.webp') }}" alt="Client 7" class="w-full h-auto">
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- Client Section -->


<!-- Footer -->
<footer class="bg-primary">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 py-6 lg:py-8">
            <div>
                <h2 class="mb-6 text-lg font-semibold text-gray-400">Alamat</h2>
                <ul class="text-white font-medium">
                    <li class="mb-5">
                        <a href="https://maps.app.goo.gl/KRacyKtoEFjQ6awH9" target="_blank" class="text-sm">
                            Jl. Taman Pahlawan No.166, Purwamekar, Kec. Purwakarta, Kabupaten Purwakarta, Jawa Barat
                            41119
                        </a>
                    </li>

                    <li class="text-gray-400 mb-4">
                        <h2 class="mb-6 text-lg font-semibold text-gray-400">Social Media</h2>
                    </li>

                    <li class="mb-5 flex justify-start space-x-6">
                        <a target="_blank" href="https://www.facebook.com/share/CKz2QG2NSM17VPTN/?mibextid=qi2Omg">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a target="_blank"
                            href="https://www.instagram.com/zenmultimediaindonesia?igsh=MXdiOHBndzFpZnhqZQ== text-white">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-lg font-semibold text-gray-400"> Hubungi </h2>
                <ul class="text-white font-medium">
                    <li class="mb-4">
                        <a href="#" class="text-sm"> Tertarik bekerja sama dengan kami? </a>
                    </li>
                    <li class="mb-4 flex items-center space-x-2">
                        <i class="fa fa-whatsapp"></i>
                        <a href="#" class="text-sm"> +62 - 878 - 1167 - 6495 </a>
                    </li>
                    <li class="mb-4 flex items-center space-x-2">
                        <i class="fa fa-envelope-o"></i>
                        <a href="#" class="text-sm"> zenmultimediacorp.com@gmail.com </a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-lg font-semibold text-gray-400">Lokasi Kami</h2>
                <ul class="text-white font-medium">
                    <li>
                        <iframe class="w-full h-48 lg:h-52 rounded-md"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d68498.83710028561!2d107.42375149278843!3d-6.542656233220349!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690f462aae41f9%3A0xd11c7fe16752f4c!2sPT%20Zen%20Multimedia%20Indonesia!5e0!3m2!1sid!2sid!4v1718251973161!5m2!1sid!2sid"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </li>
                </ul>
            </div>
        </div>
        <div class="px-4 py-6 text-center">
            <span class="text-base font-semibold text-gray-500 dark:text-gray-300">Copyright By :
                zenmultimediacorp.com</span>
        </div>
    </div>
</footer>
<!-- Footer -->

@include('partials.footer')
