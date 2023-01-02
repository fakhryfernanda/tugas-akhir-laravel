<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/e0f8177fe6.js" crossorigin="anonymous"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
    <title>Document</title>
</head>
<body class="bg-blue-800 h-screen flex items-center">
    <div class="w-[500px] mx-auto shadow-lg rounded-lg bg-white p-4">
        <h1 class="text-2xl font-medium text-center mb-2">Login Admin</h1>
        <div class="mt-4 flex flex-col gap-3">
            <div class="">
                <label for="nomor_pendaftaran" class="">Username</label>
                <input x-model="nomor_pendaftaran" type="text" id="nomor_pendaftaran" name="nomor_pendaftaran" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
            </div>
            <div class="">
                <label for="password" class="">Password</label>
                <div class="relative">
                    <input x-model="password" :type="!showPassword ? 'password' : 'text'" id="password" name="password" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                    <i x-show="!showPassword" @click="showPassword = true" class="fa-solid fa-eye absolute right-2 top-1/2 -translate-y-1/2"></i>
                    <i x-show="showPassword" @click="showPassword = false" class="fa-solid fa-eye-slash absolute right-2 top-1/2 -translate-y-1/2"></i>
                </div>
            </div>
            <input @click="fetchLogin()" type="submit" value="Login" class="py-2 text-center text-white bg-green-500 hover:bg-green-600 rounded-md cursor-pointer">
        </div>
    </div>

    @livewireScripts
</body>
</html>