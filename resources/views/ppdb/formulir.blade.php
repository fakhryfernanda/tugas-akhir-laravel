@extends('index')

@section('content')
<section class="mb-20">
    <div class="container w-[1200px] mx-auto">
        <h1 class="text-3xl font-semibold mb-5">FORMULIR PENERIMAAN PESERTA DIDIK BARU TAHUN 2023/2024</h1>
        <form action="" method="post" enctype="multipart/form-data" class="py-6 px-8 bg-white border flex flex-col gap-3">
            <div class="flex items-center">
                <label for="jalur" class="block w-[800px]">Jalur Pendaftaran</label>
                <select name="jalur" id="jalur" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                    <option>Pilih :</option>
                    <option value="umum">Umum</option>
                    <option value="prestasi">Prestasi</option>
                </select>
            </div>
            <div class="flex items-center">
                <label for="jurusan" class="block w-[800px]">Jurusan</label>
                <select name="jurusan" id="jurusan" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                    <option>Pilih :</option>
                    <option value="ipa">IPA</option>
                    <option value="ips">IPS</option>
                </select>
            </div>
            <div class="flex items-center">
                <label for="sekolah_asal" class="block w-[800px]">Nama Sekolah Asal</label>
                <input type="text" id="sekolah_asal" name="sekolah_asal" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
            </div>
            <div class="flex items-center">
                <label for="nomor_skhun" class="block w-[800px]">Nomor Seri SKHUN Sebelumnya</label>
                <input type="text" id="nomor_skhun" name="nomor_skhun" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300" placeholder="Nomor Seri Surat Keterangan Hasil Ujian Nasional">
            </div>
            <div class="flex items-center">
                <label for="nomor_ijazah" class="block w-[800px]">Nomor Seri Ijazah Sebelumnya</label>
                <input type="text" id="nomor_ijazah" name="nomor_ijazah" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300" placeholder="Nomor Seri Ijazah">
            </div>
            <div class="flex items-center">
                <label for="nama_lengkap" class="block w-[800px]">Nama Lengkap</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
            </div>
            <div class="flex items-center">
                <label for="jenis_kelamin" class="block w-[800px]">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                    <option>Pilih :</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="flex items-center">
                <label for="nisn" class="block w-[800px]">NISN</label>
                <input type="text" id="nisn" name="nisn" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300" placeholder="Nomor Induk Siswa Nasional">
            </div>
            <div class="flex items-center">
                <label for="tempat_lahir" class="block w-[800px]">Tempat Lahir</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
            </div>
            <div class="flex items-center">
                <label for="tanggal_lahir" class="block w-[800px]">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
            </div>
            <div class="flex items-center">
                <label for="agama" class="block w-[800px]">Agama</label>
                <select name="agama" id="agama" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                    <option>Pilih :</option>
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="katolik">Katolik</option>
                    <option value="hindu">Hindu</option>
                    <option value="buddha">Buddha</option>
                    <option value="konghuchu">Kong Hu</option>
                    <option value="lainnya">Lainnya</option>
                </select>
            </div>
            <div class="flex items-center">
                <label for="alamat_jalan" class="block w-[800px] self-start">Alamat Jalan</label>
                <textarea id="alamat_jalan" name="alamat_jalan" rows="4" class="resize-none w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300"></textarea>
            </div>
            <div class="flex items-center">
                <label for="kelurahan" class="block w-[800px]">Kelurahan / Desa</label>
                <input type="text" id="kelurahan" name="kelurahan" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
            </div>
            <div class="flex items-center">
                <label for="kecamatan" class="block w-[800px]">Kecamatan</label>
                <input type="text" id="kecamatan" name="kecamatan" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
            </div>
            <div class="flex items-center">
                <label for="kota" class="block w-[800px]">Kabupaten / Kota</label>
                <input type="text" id="kota" name="kota" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
            </div>
            <div class="flex items-center">
                <label for="kode_pos" class="block w-[800px]">Kode Pos</label>
                <input type="text" id="kode_pos" name="kode_pos" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
            </div>
            <div class="flex items-center">
                <label for="foto" class="block w-[800px]">Foto</label>
                <div class="w-full">
                    <input type="file" id="foto" name="foto">
                    <p class="mt-1 text-sm text-gray-400">Foto harus format JPG dan ukuran file maksimum 1 mb</p>
                </div>
            </div>
            <div class="flex items-center">
                <p for="" class="block w-[800px]">Pernyataan</p>
                <div class="w-full">
                    <input type="checkbox" id="pernyataan" name="pernyataan" class="">
                    <label for="pernyataan">Saya menyatakan bahwa data yang tertera di atas adalah data yang sebenar-benarnya.</label>
                </div>
            </div>
        </form>
        <div class="py-4 bg-[#F7F7F7] border border-t-slate-300">
            <input type="submit" value="Simpan Formulir Pendaftaran" class="block w-fit mx-auto p-2 bg-[#0F6FC7] text-white">
        </div>
    </div>
</section>
@endsection