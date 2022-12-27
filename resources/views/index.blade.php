<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-sky-100">
    <header class="bg-black/20 py-4 mb-10">
        <div class="w-[1200px] mx-auto container flex items-center">
            <div class="mr-32 flex items-center gap-3">
                <img src="images/logo-11.jpg" alt="" width="40" class="inline">
                <span class="text-2xl font-bold text-white">SMAN 11 BEKASI</span>
            </div>
            <nav>
                <ul class="flex gap-5">
                    <li class="text-white">
                        <a href="/">BERANDA</a>
                    </li>
                    <li class="text-white">
                        <div x-data="{ open:false }" @mouseleave="open = false" class="relative cursor-pointer">
                            <p @mouseover="open = true">PPDB 2023/2024</p>
                            <div x-show="open" class="absolute top-6 w-[200px] shadow-md bg-gray-300">
                                <a href="/ppdb/informasi" class="block w-full p-2 hover:bg-sky-200">Informasi Pendaftaran</a>
                                <a href="ppdb/formulir" class="block w-full p-2 hover:bg-sky-200">Isi Formulir</a>
                                <a href="ppdb/hasil" class="block w-full p-2 hover:bg-sky-200">Hasil Seleksi PPDB</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    @yield('content')
</body>
</html>