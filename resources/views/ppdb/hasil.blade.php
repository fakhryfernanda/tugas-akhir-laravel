@extends('index')

@section('content')
<section class="mb-20">
    <div class="container w-[1200px] mx-auto">
        <div class="p-4 shadow-md bg-white mb-6">
            <h1 class="text-3xl font-semibold mb-4">
                Hasil Seleksi
            </h1>
            <p>
                Halaman ini berisi hasil seleksi Penerimaan Peserta Didik Baru SMAN 11 Bekasi Periode 2023 / 2024.
            </p>
        </div>
        <div class="p-4 shadow-md bg-white">
            <livewire:login /> 
        </div>
        <div class="p-4 shadow-md bg-white">
            <livewire:registrasi /> 
        </div>
    </div>
</section>
@endsection