<div
    x-data=
    "{
        'showModalRegistration': false,
        'showPassword': false,
        'showPasswordConfirmation': false,
        'passwordBox1': '',
        'passwordBox2': '',
        'email': '',
        'nik': '',
        'data': null,
        async fetchRegister() {
            if (this.passwordBox1 == this.passwordBox2) {
                const params = {
                    nik: this.nik,
                    email: this.email,
                    password: this.passwordBox1
                }

                // fetch api
                const formData = new FormData()
                formData.append('nik', this.nik)
                formData.append('email', this.email)
                formData.append('password', this.passwordBox1)

                console.log(formData)

                const response = await fetch('http://127.0.0.1:8000/api/register', {
                    method: 'POST',
                    body: formData
                })

                this.data = await response.json()
            }
        }
    }"
    @keydown.escape="showModalRegistration = false"
>
    <!-- Trigger for Modal -->
    <p class="p-4 bg-[#D9EDF7] text-[#36829C]">
        <span class="font-semibold">Informasi!</span> Silakan <button @click="showModalRegistration = true" class="underline font-semibold">registrasi</button> terlebih dahulu
    </p>

    <!-- Modal -->
    <div
        class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50"
        x-show="showModalRegistration"
    >
        <!-- Modal inner -->
        <div
            class="w-[600px] p-4 mx-auto bg-white rounded shadow-lg"
            @click.away="showModalRegistration = false"
            x-transition:enter="motion-safe:ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
        >
            <!-- Title / Close-->
            <div class="relative border-b">
                <h5 class="pb-4 text-center text-xl font-semibold">Registrasi</h5>

                <button type="button" class="absolute top-0 right-0 z-50 cursor-pointer" @click="showModalRegistration = false">
                    <i class="fa-solid fa-xmark text-gray-400"></i>
                </button>
            </div>

            <!-- content -->
            <div>
                <div class="mt-4 flex flex-col gap-3">
                    <div class="">
                        <label for="nik" class="">NIK</label>
                        <input x-model="nik" type="text" id="nik" name="nik" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                    </div>
                    <div class="">
                        <label for="email" class="">Email</label>
                        <input x-model="email" type="email" id="email" name="email" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                    </div>
                    <div class="">
                        <label for="password" class="">Password</label>
                        <div class="relative">
                            <input
                                x-model="passwordBox1" 
                                :type="!showPassword ? 'password' : 'text'" 
                                id="password" 
                                name="password" 
                                class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300"
                            >
                            <i x-show="!showPassword" @click="showPassword = true" class="fa-solid fa-eye absolute right-2 top-1/2 -translate-y-1/2"></i>
                            <i x-show="showPassword" @click="showPassword = false" class="fa-solid fa-eye-slash absolute right-2 top-1/2 -translate-y-1/2"></i>
                        </div>
                    </div>
                    <div class="">
                        <label for="password_confirmation" class="">Masukkan Ulang Password</label>
                        <div class="relative">
                            <input
                                x-model="passwordBox2"
                                :type="!showPasswordConfirmation ? 'password' : 'text'" id="password_confirmation" 
                                name="password_confirmation" 
                                class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300"
                            >
                            <i x-show="!showPasswordConfirmation" @click="showPasswordConfirmation = true" class="fa-solid fa-eye absolute right-2 top-1/2 -translate-y-1/2"></i>
                            <i x-show="showPasswordConfirmation" @click="showPasswordConfirmation = false" class="fa-solid fa-eye-slash absolute right-2 top-1/2 -translate-y-1/2"></i>
                        </div>
                    </div>
                    <template x-if="passwordBox1 != passwordBox2">
                        <p class="text-red-500 text-sm">Password tidak sama</p>
                    </template>
                    <input @click="fetchRegister()" type="submit" value="Registrasi" class="py-2 text-white bg-orange-300 hover:bg-orange-400 rounded-md cursor-pointer">
                    <button>Click me</button>
                </div>
            </div>
            <div class="mt-4">
                <p class="text-[13px] text-right">
                    <span>Jika Anda sudah memiliki akun, silakan klik tombol Login berikut</span>
                    <button class="py-1 px-2 bg-green-500 hover:bg-green-600 text-white rounded-sm">Login</button>
                </p>
            </div>
        </div>
    </div>
</div>