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
</head>
<body class="bg-[#F4F4F4] flex">
    <section class="w-1/5 h-screen bg-[#1D459E] pt-8">
        <div class="flex flex-col items-center">
            <div class="w-[80px] h-[80px] bg-white rounded-full overflow-hidden">
                <img src="images/patrick.png" alt="logo">
            </div>
            <p class="mt-2 text-white">USERNAME</p>
        </div>
        <div class="px-8 mt-12 text-white flex flex-col gap-2">
            <div class="text-lg flex items-center gap-4">
                <i class="fa-solid fa-people-group block w-[20px]"></i>
                <a href="/admin">Data Pendaftar</a>
            </div>
            <div class="text-lg flex items-center gap-4">
                <i class="fa-solid fa-school block w-[20px]"></i>
                <a href="/admin">Data Sekolah Pendaftar</a>
            </div>
            <div class="text-lg flex items-center gap-4">
                <i class="fa-solid fa-gear block w-[20px]"></i>
                <a href="/admin">Pengaturan Sistem</a>
            </div>
        </div>
    </section>
    <section class="h-screen overflow-y-scroll p-8">
        @livewire('admin.data-pendaftar')
    </section>
</body>
</html>