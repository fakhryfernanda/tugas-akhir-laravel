<div>
    <section class="mb-20" x-cloak x-data="$store" x-init="login.checkSession()">
        <div class="container w-[1200px] mx-auto">
            {{-- Fungsi livewire prevent gak bisa jalan kalo pake tag template --}}
            {{-- <template x-if="login.isLoggedIn"> --}}
                <div class="p-4 shadow-md bg-white mb-6">
                    <h1 class="uppercase text-3xl font-semibold">Formulir Pendaftaran PPDB 2023/2024</h1>
                </div>
                <div x-init="$store.dataDiri.getDataDiri" x-show="$store.dataDiri.isExisted" class="mt-4 p-4 shadow-md bg-white">
                    <p class="p-4 bg-[#D9EDF7] text-[#36829C]">
                        <span>Kamu sudah mengisi formulir. </span>
                        <span>Lihat data pendaftaranmu <a class="font-medium underline" href="/ppdb/hasil">di sini</a>.</span>
                    </p>
                </div>
                @livewire('halaman-pendaftaran.formulir')
            {{-- </template> --}}
            @livewire('login')
            @livewire('registrasi')
        </div>
    </section>
    
    <script>
        function app() {
            return {
                step: 1,
                totalStep: 7
            }
        }
    </script>
</div>
