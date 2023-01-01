<section class="mb-20">

    <div class="container w-[1200px] mx-auto">
        @if (session()->has('success'))
        <div x-show.transition="step === 'complete'" class="p-4 shadow-md bg-white mb-6 text-center">
            <i class="fa-solid fa-circle-check mt-4 text-[72px] text-green-500"></i>
            <h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">Pendaftaran Berhasil</h2>

            <p class="text-gray-600">
                Terima kasih sudah mendaftar. Data akan diverifikasi oleh petugas.
            </p>
            <p class="text-gray-600 mb-8">
                Pengumuman hasil PPDB dapat diakses pada <span class="font-semibold text-blue-400">16 Januari 2023</span>
            </p>
        </div>
        @endif
        <div class="p-4 shadow-md bg-white mb-6">
            <h1 class="text-3xl font-semibold mb-4">
                Hasil Seleksi
            </h1>
            <p>
                Halaman ini berisi hasil seleksi Penerimaan Peserta Didik Baru SMAN 11 Bekasi Periode 2023 / 2024.
            </p>
        </div>
        <livewire:login /> 
        <livewire:registrasi />
    </div>
</section>