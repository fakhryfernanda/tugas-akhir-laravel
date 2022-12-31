<div>
    <section class="mb-20" x-cloak x-data="$store" x-init="login.checkSession()">
        <div class="container w-[1200px] mx-auto">
            {{-- Fungsi livewire prevent gak bisa jalan kalo pake tag template --}}
            {{-- <template x-if="login.isLoggedIn"> --}}
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
