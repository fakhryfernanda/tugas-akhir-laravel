@extends('index')

@section('content')
<section class="mb-20">
    <div class="container w-[1200px] mx-auto">
        <h1 class="text-3xl font-semibold mb-5">FORMULIR PENERIMAAN PESERTA DIDIK BARU TAHUN 2023/2024</h1>
        <div>
            <div x-data="app()">
                <div x-show.transition="step === 'complete'" class="p-10 text-center bg-white rounded-lg shadow">
                    <i class="fa-solid fa-circle-check text-[72px] text-green-500"></i>
                    <h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">Pendaftaran Berhasil</h2>

                    <p class="text-gray-600">
                        Terima kasih sudah mendaftar. Data akan diverifikasi oleh petugas.
                    </p>
                    <p class="text-gray-600 mb-8">
                        Pengumuman hasil PPDB dapat diakses pada <span class="font-semibold text-blue-400">16 Januari 2023</span>
                    </p>

                    <a href="/ppdb/hasil"
                        class="w-fit block mx-auto py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border" 
                    >Lihat Data Pendaftaran</a>
                </div>

                <div x-show.transition="step != 'complete'" class="py-6 px-8 bg-white border">
                    <!-- Top Navigation -->
                    <div class="border-b-2 py-4 mb-12">
                        <div class="uppercase text-xs font-bold text-gray-500 mb-1" x-text="`Step: ${step} of ${totalStep}`"></div>
                        <div class="flex justify-between">
                            <div class="flex-1">
                                <div x-show="step === 1">
                                    <div class="text-lg font-bold text-gray-700">Data Kelulusan</div>
                                </div>
                                
                                <div x-show="step === 2">
                                    <div class="text-lg font-bold text-gray-700">Data Diri</div>
                                </div>

                                <div x-show="step === 3">
                                    <div class="text-lg font-bold text-gray-700">Data Alamat</div>
                                </div>

                                <div x-show="step === 4">
                                    <div class="text-lg font-bold text-gray-700">Data Orang Tua</div>
                                </div>
                            </div>

                            <div class="flex items-center w-64">
                                <div class="w-full bg-gray-200 rounded-full mr-2">
                                    <div class="rounded-full bg-green-500 text-xs h-2 text-center text-white" :style="'width: '+ parseInt(step / totalStep * 100) +'%'"></div>
                                </div>
                                <div class="text-xs w-10 text-gray-600" x-text="parseInt(step / totalStep * 100) +'%'"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /Top Navigation -->

                    <form action="" method="post" enctype="multipart/form-data">
                        <div x-show.transition.in="step === 1" class="flex flex-col gap-3">
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
                        </div>
                        <div x-show.transition.in="step === 2" class="flex flex-col gap-3">
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
                                <label for="foto" class="block w-[800px]">Foto</label>
                                <div class="w-full">
                                    <input type="file" id="foto" name="foto">
                                    <p class="mt-1 text-sm text-gray-400">Foto harus format JPG dan ukuran file maksimum 1 mb</p>
                                </div>
                            </div>
                        </div>
                        <div x-show.transition.in="step === 3" class="flex flex-col gap-3">
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
                                <p for="" class="block w-[800px]">Pernyataan</p>
                                <div class="w-full">
                                    <input type="checkbox" id="pernyataan" name="pernyataan" class="">
                                    <label for="pernyataan">Saya menyatakan bahwa data yang tertera di atas adalah data yang sebenar-benarnya.</label>
                                </div>
                            </div>
                        </div>
                        <div x-show.transition.in="step === 4" class="flex flex-col gap-3">
                            {{-- Ayah --}}
                            <p class="text-lg font-semibold">Ayah</p>
                            <div class="flex items-center">
                                <label for="nama_ayah" class="block w-[800px]">Nama Ayah</label>
                                <input type="text" id="nama_ayah" name="nama_ayah" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            <div class="flex items-center">
                                <label for="tahun_lahir_ayah" class="block w-[800px]">Tahun Lahir Ayah</label>
                                <input type="text" id="tahun_lahir_ayah" name="tahun_lahir_ayah" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            <div class="flex items-center">
                                <label for="pendidikan_ayah" class="block w-[800px]">Pendidikan Ayah</label>
                                <select name="pendidikan_ayah" id="pendidikan_ayah" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                                    <option>Pilih :</option>
                                    <option value="tidak_sekolah">Tidak Sekolah</option>
                                    <option value="sd">SD Sederajat</option>
                                    <option value="smp">SMP Sederajat</option>
                                    <option value="sma">SMA Sederajat</option>
                                    <option value="d1">D1</option>
                                    <option value="d2">D2</option>
                                    <option value="d3">D3</option>
                                    <option value="d4/s1">D4/S1</option>
                                    <option value="s2">S2</option>
                                    <option value="s3">S3</option>
                                </select>
                            </div>
                            <div class="flex items-center">
                                <label for="pekerjaan_ayah" class="block w-[800px]">Pekerjaan Ayah</label>
                                <select name="pekerjaan_ayah" id="pekerjaan_ayah" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                                    <option>Pilih :</option>
                                    <option value="tidak_bekerja">Tidak Bekerja</option>
                                    <option value="nelayan">Nelayan</option>
                                    <option value="petani">Petani</option>
                                    <option value="peternak">Peternak</option>
                                    <option value="pns">PNS/TNI/POLRI</option>
                                    <option value="karyawa_swasta">Karyawan Swasta</option>
                                    <option value="wiraswasta">Wiraswasta</option>
                                    <option value="wirausaha">Wirausaha</option>
                                    <option value="buruh">Buruh</option>
                                    <option value="pensiunan">Pensiunan</option>
                                </select>
                            </div>
                            <div class="flex items-center">
                                <label for="penghasilan_bulanan_ayah" class="block w-[800px]">Penghasilan Bulanan Ayah</label>
                                <select name="penghasilan_bulanan_ayah" id="penghasilan_bulanan_ayah" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                                    <option>Pilih :</option>
                                    <option value="penghasilan_1">Kurang dari Rp 1.000.000</option>
                                    <option value="penghasilan_2">Rp 1.000.000 - Rp 3.000.000</option>
                                    <option value="penghasilan_3">Rp 3.000.000 - Rp 5.000.000</option>
                                    <option value="penghasilan_4">Rp 5.000.000 - Rp 10.000.000</option>
                                    <option value="penghasilan_5">Lebih dari Rp 10.000.000</option>
                                </select>
                            </div>

                            {{-- Ibu --}}
                            <p class="text-lg font-semibold mt-4">Ibu</p>
                            <div class="flex items-center">
                                <label for="nama_ibu" class="block w-[800px]">Nama Ibu</label>
                                <input type="text" id="nama_ibu" name="nama_ibu" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            <div class="flex items-center">
                                <label for="tahun_lahir_ibu" class="block w-[800px]">Tahun Lahir Ibu</label>
                                <input type="text" id="tahun_lahir_ibu" name="tahun_lahir_ibu" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            <div class="flex items-center">
                                <label for="pendidikan_ibu" class="block w-[800px]">Pendidikan Ibu</label>
                                <select name="pendidikan_ibu" id="pendidikan_ibu" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                                    <option>Pilih :</option>
                                    <option value="tidak_sekolah">Tidak Sekolah</option>
                                    <option value="sd">SD Sederajat</option>
                                    <option value="smp">SMP Sederajat</option>
                                    <option value="sma">SMA Sederajat</option>
                                    <option value="d1">D1</option>
                                    <option value="d2">D2</option>
                                    <option value="d3">D3</option>
                                    <option value="d4/s1">D4/S1</option>
                                    <option value="s2">S2</option>
                                    <option value="s3">S3</option>
                                </select>
                            </div>
                            <div class="flex items-center">
                                <label for="pekerjaan_ibu" class="block w-[800px]">Pekerjaan Ibu</label>
                                <select name="pekerjaan_ibu" id="pekerjaan_ibu" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                                    <option>Pilih :</option>
                                    <option value="tidak_bekerja">Tidak Bekerja</option>
                                    <option value="nelayan">Nelayan</option>
                                    <option value="petani">Petani</option>
                                    <option value="peternak">Peternak</option>
                                    <option value="pns">PNS/TNI/POLRI</option>
                                    <option value="karyawa_swasta">Karyawan Swasta</option>
                                    <option value="wiraswasta">Wiraswasta</option>
                                    <option value="wirausaha">Wirausaha</option>
                                    <option value="buruh">Buruh</option>
                                    <option value="pensiunan">Pensiunan</option>
                                </select>
                            </div>
                            <div class="flex items-center">
                                <label for="penghasilan_bulanan_ibu" class="block w-[800px]">Penghasilan Bulanan Ibu</label>
                                <select name="penghasilan_bulanan_ibu" id="penghasilan_bulanan_ibu" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                                    <option>Pilih :</option>
                                    <option value="penghasilan_1">Kurang dari Rp 1.000.000</option>
                                    <option value="penghasilan_2">Rp 1.000.000 - Rp 3.000.000</option>
                                    <option value="penghasilan_3">Rp 3.000.000 - Rp 5.000.000</option>
                                    <option value="penghasilan_4">Rp 5.000.000 - Rp 10.000.000</option>
                                    <option value="penghasilan_5">Lebih dari Rp 10.000.000</option>
                                </select>
                            </div>

                            {{-- Wali --}}
                            <p class="text-lg font-semibold mt-4">Wali</p>
                            <div class="flex items-center">
                                <label for="nama_wali" class="block w-[800px]">Nama Wali</label>
                                <input type="text" id="nama_wali" name="nama_wali" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            <div class="flex items-center">
                                <label for="tahun_lahir_wali" class="block w-[800px]">Tahun Lahir Wali</label>
                                <input type="text" id="tahun_lahir_wali" name="tahun_lahir_wali" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            <div class="flex items-center">
                                <label for="pendidikan_wali" class="block w-[800px]">Pendidikan Wali</label>
                                <select name="pendidikan_wali" id="pendidikan_wali" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                                    <option>Pilih :</option>
                                    <option value="tidak_sekolah">Tidak Sekolah</option>
                                    <option value="sd">SD Sederajat</option>
                                    <option value="smp">SMP Sederajat</option>
                                    <option value="sma">SMA Sederajat</option>
                                    <option value="d1">D1</option>
                                    <option value="d2">D2</option>
                                    <option value="d3">D3</option>
                                    <option value="d4/s1">D4/S1</option>
                                    <option value="s2">S2</option>
                                    <option value="s3">S3</option>
                                </select>
                            </div>
                            <div class="flex items-center">
                                <label for="pekerjaan_wali" class="block w-[800px]">Pekerjaan Wali</label>
                                <select name="pekerjaan_wali" id="pekerjaan_wali" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                                    <option>Pilih :</option>
                                    <option value="tidak_bekerja">Tidak Bekerja</option>
                                    <option value="nelayan">Nelayan</option>
                                    <option value="petani">Petani</option>
                                    <option value="peternak">Peternak</option>
                                    <option value="pns">PNS/TNI/POLRI</option>
                                    <option value="karyawa_swasta">Karyawan Swasta</option>
                                    <option value="wiraswasta">Wiraswasta</option>
                                    <option value="wirausaha">Wirausaha</option>
                                    <option value="buruh">Buruh</option>
                                    <option value="pensiunan">Pensiunan</option>
                                </select>
                            </div>
                            <div class="flex items-center">
                                <label for="penghasilan_bulanan_wali" class="block w-[800px]">Penghasilan Bulanan Wali</label>
                                <select name="penghasilan_bulanan_wali" id="penghasilan_bulanan_wali" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                                    <option>Pilih :</option>
                                    <option value="penghasilan_1">Kurang dari Rp 1.000.000</option>
                                    <option value="penghasilan_2">Rp 1.000.000 - Rp 3.000.000</option>
                                    <option value="penghasilan_3">Rp 3.000.000 - Rp 5.000.000</option>
                                    <option value="penghasilan_4">Rp 5.000.000 - Rp 10.000.000</option>
                                    <option value="penghasilan_5">Lebih dari Rp 10.000.000</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Bottom Navigation -->
                <div x-show="step != 'complete'" class="py-4 px-8 bg-[#F7F7F7] border border-t-slate-300">
                    <div class="flex justify-between" x-show="step != 'complete'">
                        <div class="w-1/2">
                            <button
                                x-show="step > 1"
                                @click="step--"
                                class="w-32 focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border" 
                            >Sebelumnya</button>
                        </div>

                        <div class="w-1/2 text-right">
                            <button
                                x-show="step < totalStep"
                                @click="step++"
                                class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium" 
                            >Selanjutnya</button>

                            <input
                                type="submit"
                                @click="step = 'complete'"
                                x-show="step === totalStep"
                                class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium"
                                value="Simpan"
                            >
                        </div>
                    </div>
                </div>
                <!-- Bottom Navigation -->
            </div>
</section>

<script>
    function app() {
        return {
            step: 4,
            totalStep: 4
        }
	}
</script>
@endsection