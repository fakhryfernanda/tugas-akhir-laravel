<div
    x-data="{ 'showModalLogin': false, 'showPassword': false }"
    x-cloak
    @keydown.escape="showModalLogin = false"
>
    <!-- Trigger for Modal -->
    <p class="p-4 bg-[#D9EDF7] text-[#36829C]">
        <span class="font-semibold">Informasi!</span> Silakan <button @click="showModalLogin = true" class="underline font-semibold">login</button> terlebih dahulu
    </p>

    <!-- Modal -->
    <div
        class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50"
        x-show="showModalLogin"
    >
        <!-- Modal inner -->
        <div
            class="w-[600px] p-4 mx-auto bg-white rounded shadow-lg"
            @click.away="showModalLogin = false"
            x-transition:enter="motion-safe:ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
        >
            <!-- Title / Close-->
            <div class="relative border-b">
                <h5 class="pb-4 text-center text-xl font-semibold">Login</h5>

                <button type="button" class="absolute top-0 right-0 z-50 cursor-pointer" @click="showModalLogin = false">
                    <i class="fa-solid fa-xmark text-gray-400"></i>
                </button>
            </div>

            <!-- content -->
            <div>
                <form action="" class="mt-4 flex flex-col gap-3">
                    <div class="">
                        <label for="nisn" class="">Nomor Pendaftaran</label>
                        <input type="text" id="nisn" name="nisn" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                    </div>
                    <div class="">
                        <label for="password" class="">Password</label>
                        <div class="relative">
                            <input :type="!showPassword ? 'password' : 'text'" id="password" name="password" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            <i x-show="!showPassword" @click="showPassword = true" class="fa-solid fa-eye absolute right-2 top-1/2 -translate-y-1/2"></i>
                            <i x-show="showPassword" @click="showPassword = false" class="fa-solid fa-eye-slash absolute right-2 top-1/2 -translate-y-1/2"></i>
                        </div>
                    </div>
                    <input type="submit" value="Login" class="py-2 text-white bg-green-500 hover:bg-green-600 rounded-md cursor-pointer">
                </form>
            </div>
            <div class="mt-4">
                <p class="text-[13px] text-right">
                    <span>Jika Anda belum memiliki akun, silakan klik tombol Registrasi berikut</span>
                    <button class="py-1 px-2 bg-orange-300 hover:bg-orange-400 text-white rounded-sm">Registrasi</button>
                </p>
            </div>
        </div>
    </div>
</div>