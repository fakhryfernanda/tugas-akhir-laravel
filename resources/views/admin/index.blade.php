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
    <section class="h-screen p-8">
        <div class="shadow-md bg-white rounded-lg">
            <table>
                <thead>
                    <tr class="bg-sky-600 text-white">
                        <th class="py-2 px-4">Peringkat</th>
                        <th class="py-2 px-4">NISN</th>
                        <th class="py-2 px-4">Nama Lengkap</th>
                        <th class="py-2 px-4">Jenis Kelamin</th>
                        <th class="py-2 px-4">Tanggal Lahir</th>
                        <th class="py-2 px-4">Asal Sekolah</th>
                        <th class="py-2 px-4">Rata-Rata Nilai</th>
                        <th class="py-2 px-4">Terverifikasi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td class="py-2 px-4">1.</td>
                        <td class="py-2 px-4">10118096</td>
                        <td class="py-2 px-4">Muhamad Fakhry Fernanda</td>
                        <td class="py-2 px-4">L</td>
                        <td class="py-2 px-4">2008-03-23</td>
                        <td class="py-2 px-4">SMPN 24 Bekasi</td>
                        <td class="py-2 px-4">8.75</td>
                        <td class="py-2 px-4">
                            <i class="fa-solid fa-check text-green-500"></i>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td class="py-2 px-4">2.</td>
                        <td class="py-2 px-4">15161023</td>
                        <td class="py-2 px-4">Maya Septa</td>
                        <td class="py-2 px-4">P</td>
                        <td class="py-2 px-4">2007-11-03</td>
                        <td class="py-2 px-4">SMPN 182 Jakarta</td>
                        <td class="py-2 px-4">8.55</td>
                        <td class="py-2 px-4">
                            <i class="fa-solid fa-xmark text-red-500"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>