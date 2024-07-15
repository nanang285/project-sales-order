@include('partials.header')

<body>

    @include('partials.navbar')

    <section class="w-full py-4">
        <div class="container mx-auto">
            <aside id="default-sidebar"
                class="fixed top-0 left-0 z-40 w-96 h-screen transition-transform -translate-x-full sm:translate-x-0"
                aria-label="Sidebar">

                <div class="h-full px-3 py-4 overflow-y-auto bg-primary">

                    <div class="ml-16 max-w-56 mt-32 ">
                        <h3 class="text-2lg font-bold text-white space-y-0"> Hubungi Sales Solusi Bisnis Kami </h3>
                    </div>

                    <div class="ml-16 max-w mt-6 ">
                        <p class="text-base font-semibold text-gray-300 space-y-0"> Telepon </p>
                        <p class="text-sm text-white space-y-0"> +62 878-1167-6495 </p>
                    </div>

                    <div class="ml-16 max-w mt-6 ">
                        <p class="text-base font-semibold text-gray-300 space-y-0"> Email </p>
                        <p class="text-sm text-white space-y-0"> cs@zenmultimediacorp.com </p>
                    </div>

                    <div class="ml-16  mt-6 ">
                        <p class="text-base font-semibold text-gray-300 space-y-0"> Alamat </p>
                        <p class="text-sm max-w-48 text-white space-y-0"> Jl. Taman Pahlawan No.166, Purwamekar, Kec.
                            Purwakarta, Kabupaten Purwakarta, Jawa Barat
                            41119 </p>
                    </div>

                </div>

            </aside>

            <div class="p-4 sm:ml-96">
                <div class="w-full relative">
                    <div class="bg-white py-12 lg:py-20">
                        <div class="container mx-auto px-6 lg:px-8">
                            <div class="m-5 mx-auto max-w-xl lg:text-center">
                                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 text-center">
                                    <span class="text-primary">Hubungi Kami</span>
                                </p>
                                <p class="mt-2 md:text-base text-sm font-bold text-gray-600 text-center">
                                    <span class="block text-primary">
                                        Isi formulir dan anggota tim penjualan kami akan menghubungi
                                    </span>
                                    <span class="block text-primary">
                                        Anda kembali dalam waktu 24 jam.
                                    </span>
                                </p>
                            </div>
                            <form class=" max-w-full mx-auto">
                                <div class="mb-5">
                                    <label for="name"
                                        class="block mb-2 text-sm font-medium">Nama Lengkap *
                                    </label>
                                    <input type="text" id="name"
                                        class="shadow-sm ring-2 ring-primary focus:ring-blue-800 text-sm rounded-lg block w-full p-2.5"
                                        placeholder="Masukan Nama Lengkap" required />
                                </div>
                                <div class="mb-5">
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium  ">Email *
                                    </label>
                                    <input type="email" id="email"
                                        class="shadow-sm  ring-2 ring-primary focus:ring-blue-800 text-sm rounded-lg block w-full p-2.5"
                                        placeholder="Masukan Email"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="no_telepon"
                                        class="block mb-2 text-sm font-medium  ">No Telepon *
                                    </label>
                                    <input type="number" id="no_telepon"
                                        class="shadow-sm  ring-2 ring-primary focus:ring-blue-800 text-sm rounded-lg block w-full p-2.5"
                                        placeholder="Masukan No Telepon"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="repeat-password"
                                        class="block mb-2 text-sm font-medium ">Pesan *
                                    </label>
                                    <textarea id="message" rows="4" class="block p-2.5 w-full text-sm rounded-lg border ring-2 ring-primary" placeholder=""></textarea>
                                </div>
                                <div class="flex items-start mb-5">
                                    <div class="flex items-center h-5">
                                        <input id="terms" type="checkbox" value=""
                                            class="w-5 h-5 text-primary ring-primary border rounded  focus:ring-3 "
                                            required />
                                    </div>
                                    <label for="terms"
                                        class="ms-8 text-sm font-medium text-gray-900 dark:text-gray-300"><p
                                            class="text-black">Ya, saya setuju untuk menerima panggilan telepon</p></label>
                                </div>
                                <button type="submit"
                                    class="text-lg text-primary rounded-lg border font-bold border-primary hover:bg-primary hover:text-white px-10 py-1.5 text-center transition duration-300">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</body>
