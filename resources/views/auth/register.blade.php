@include('partials.header')

<body>
    @include('partials.navbar')

    <section class="w-full py-4">
        <div class="container mx-auto flex flex-col md:flex-row">
            <aside id="default-sidebar" class="w-full md:w-2/5 h-screen bg-primary md:fixed top-0 md:right-0 z-40">
                <div class="h-full px-3 py-4 overflow-y-auto">
                    <div class="text-center mt-32">
                        <h3 class="text-2lg text-white">Selamat Datang Kembali</h3>
                    </div>
                    <div class="text-center mt-2">
                        <p class="text-base text-gray-300">Masuk ke akun Anda</p>
                    </div>
                    <form class="max-w-full mt-12 mx-4 md:mx-14">
                        
                        <div class="mb-5 relative">
                            <label for="name" class="block mb-2 text-sm text-white font-medium">Nama Pengguna</label>
                            <div class="flex items-center">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 mt-6">
                                    <img src="{{ asset('images/icons/Symbol1.png') }}" alt="Icon" class="h-4 w-5 object-contain">
                                </span>
                                <input type="text" id="name" class="shadow-sm ring-2 text-primary ring-primary focus:ring-blue-800 text-sm rounded-md block w-full p-2.5 pl-10" placeholder="Masukan Nama Pengguna" required />
                            </div>
                        </div>

                        <div class="mb-5 relative">
                            <label for="name" class="block mb-2 text-sm text-white font-medium">Email</label>
                            <div class="flex items-center">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 mt-6">
                                    <img src="{{ asset('images/icons/Symbol1.png') }}" alt="Icon" class="h-4 w-5 object-contain">
                                </span>
                                <input type="text" id="name" class="shadow-sm ring-2 text-primary ring-primary focus:ring-blue-800 text-sm rounded-md block w-full p-2.5 pl-10" placeholder="Masukan Email" required />
                            </div>
                        </div>

                        <div class="mb-5 relative">
                            <label for="password" class="block mb-2 text-sm text-white font-medium">Kata Sandi</label>
                            <div class="flex items-center">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 mt-6">
                                    <img src="{{ asset('images/icons/Symbol2.png') }}" alt="Icon" class="h-4 w-5 object-contain">
                                </span>
                                <input type="password" id="password" class="shadow-sm ring-2 text-primary ring-primary focus:ring-blue-800 text-sm rounded-md block w-full p-2.5 pl-10" placeholder="Masukan Kata sandi" required />
                                <span class="absolute inset-y-0 text-primary hover:text-danger right-0 flex items-center pr-3 mt-7 mr-2 cursor-pointer" onclick="togglePasswordVisibility()">
                                    <i class='fas fa-eye text-base'></i>
                                </span>
                            </div>
                        </div>

                        <div class="mb-5 relative">
                            <label for="password" class="block mb-2 text-sm text-white font-medium">Ulangi Sandi</label>
                            <div class="flex items-center">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 mt-6">
                                    <img src="{{ asset('images/icons/Symbol2.png') }}" alt="Icon" class="h-4 w-5 object-contain">
                                </span>
                                <input type="password" id="password" class="shadow-sm ring-2 text-primary ring-primary focus:ring-blue-800 text-sm rounded-md block w-full p-2.5 pl-10" placeholder="Ulangi sandi" required />
                                <span class="absolute inset-y-0 text-primary hover:text-danger right-0 flex items-center pr-3 mt-7 mr-2 cursor-pointer" onclick="togglePasswordVisibility()">
                                    <i class='fas fa-eye text-base'></i>
                                </span>
                            </div>
                        </div>
                        
                        <div class="flex items-center mb-5 text-white ">
                            <div class="flex-1">
                                <label for="option1" class="text-sm font-medium flex items-center">
                                    <input type="radio" id="option1" name="options" class="mr-2">
                                    <span class="text-lg">Perorangan</span>
                                </label>
                            </div>
                            <div class="flex-1">
                                <label for="option2" class="text-sm font-medium flex items-center">
                                    <input type="radio" id="option2" name="options" class="mr-2">
                                    <span class="text-lg">Perusahaan</span>
                                </label>
                            </div>
                            <div class="flex-1">
                                <label for="option3" class="text-sm font-medium flex items-center">
                                    <input type="radio" id="option3" name="options" class="mr-2">
                                    <span class="text-lg">Pemerintah</span>
                                </label>
                            </div>
                        </div>
                                                
                        <div class="flex mb-5">
                            <button type="submit" class="  max-w-full w-full text-lg text-white rounded-lg border font-bold border-white hover:bg-white hover:text-primary px-10 py-1.5 text-center transition duration-300">Daftar</button>
                        </div>                        
                        <div class="flex mb-5">
                            <a href="{{ route("login") }}" class="  max-w-full w-full text-lg text-white rounded-lg border font-bold border-white hover:bg-white hover:text-primary px-10 py-1.5 text-center transition duration-300">Masuk</a>
                        </div>                        
                    </form>
                    <div class="px-4 py-3 bottom-0 text-center">
                        <span class="text-base font-semibold text-gray-500 dark:text-gray-300">Copyright By :
                            zenmultimediacorp.com</span>
                    </div>
                </div>
            </aside>

            <div class="p-4 md:ml-82 flex-1">
                <div class="w-full relative">
                    <div class="bg-white py-12 lg:py-20">
                        <div class="container mx-auto px-6 lg:px-8">
                            <div class="hero-images md:w-1/2 flex justify-center">
                                <img src="{{ asset('images/help.png') }}" alt="Deskripsi gambar" class="w-full" />
                            </div>
                            <div class="hero-images md:w-1/2 flex justify-center mt-12">
                            <p class="text-center text-md">Partner Digital Untuk layanan Bisnis dan pemerintahan</p>
                            </div>
                            <div class="hero-images md:w-1/2 flex justify-center mt-5">
                            <p class="text-center text-sm">PT ZEN MULTIMEDIA INDONESIA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </section>
</body>

@include('partials.footer')