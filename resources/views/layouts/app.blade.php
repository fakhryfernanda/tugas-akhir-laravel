<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/e0f8177fe6.js" crossorigin="anonymous"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        [x-cloak] { display: none !important; }
    </style>
    @livewireStyles
</head>
<body class="bg-[#F4F4F4]">
    <header class="bg-sky-400 py-4 mb-10">
        <div class="w-[1200px] mx-auto container flex items-center justify-between">
            <div class="flex items-center">
                <div class="mr-32 flex items-center gap-3">
                    <img src="images/logo-11.jpg" alt="logo" width="40" class="inline">
                    <span class="text-2xl font-bold text-white">SMAN 11 Kota Bekasi</span>
                </div>
                <nav>
                    <ul class="flex gap-5">
                        <li class="text-white">
                            <a href="/">BERANDA</a>
                        </li>
                        <li class="text-white">
                            <div x-data="{ open:false }" @mouseleave="open = false" class="relative cursor-pointer">
                                <p @mouseover="open = true">PPDB 2023/2024</p>
                                <template x-if="open">
                                    <div class="absolute top-6 w-[200px] shadow-md bg-gray-300">
                                        <a href="/ppdb/informasi" class="block w-full p-2 hover:bg-sky-200">Informasi Pendaftaran</a>
                                        <a href="/ppdb/formulir" class="block w-full p-2 hover:bg-sky-200">Isi Formulir</a>
                                        <a href="/ppdb/hasil" class="block w-full p-2 hover:bg-sky-200">Hasil Seleksi PPDB</a>
                                    </div>
                                </template>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            <div x-init="$store.login.checkSession()">
                <template x-if="$store.login.isLoggedIn">
                    <div>
                        <span class="mr-2">Selamat datang</span>
                        <button @click="$store.login.logout()" class="font-medium underline cursor-pointer">Logout</button>
                    </div>
                </template>
            </div>
        </div>
    </header>    

    {{ $slot }}

    <script src="{{ URL::to('js/login-register.js') }}"></script>
    <script src="{{ URL::to('js/data-pendaftar.js') }}"></script>
    
    
    @livewireScripts
</body>
</html>