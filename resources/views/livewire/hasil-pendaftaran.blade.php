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
        <div class="flex justify-between">
            {{-- Foto --}}
            <div class="w-fit h-fit p-2 bg-white rounded-md shadow-md border border-slate-300">
                <img src="https://images.unsplash.com/photo-1597895386990-a5b1d51690e1?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=800&ixid=MnwxfDB8MXxyYW5kb218MHx8bWFsZXx8fHx8fDE2NzI1Njc3NTk&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=600" width="200" alt="">
            </div>

            <div class="flex flex-col">
                <div class="flex gap-5">
                    {{-- Data Diri --}}
                    <div class="shadow-md bg-white mb-6 rounded-md">
                        <h2 class="p-4 text-xl text-white font-semibold bg-[#3174AE] rounded-t-md">Data Diri</h2>
                        <div class="">
                            <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                                <div class="font-bold w-[200px] flex-shrink-0">Nama Lengkap</div>
                                <div class="w-[200px]">Muhamad Fakhry Fernanda</div>
                            </div>
                            <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                                <div class="font-bold w-[200px]">Jenis Kelamin</div>
                                <div class="w-[200px]">Laki-laki</div>
                            </div>
                            <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                                <div class="font-bold w-[200px]">NISN</div>
                                <div class="w-[200px]">1516232000</div>
                            </div>
                            <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                                <div class="font-bold w-[200px]">Tempat Lahir</div>
                                <div class="w-[200px]">Kota Bekasi</div>
                            </div>
                            <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                                <div class="font-bold w-[200px]">Tanggal Lahir</div>
                                <div class="w-[200px]">23 Maret 2006</div>
                            </div>
                            <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                                <div class="font-bold w-[200px]">Tinggi Badan</div>
                                <div class="w-[200px]">145 cm</div>
                            </div>
                            <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                                <div class="font-bold w-[200px]">Berat Badan</div>
                                <div class="w-[200px]">45 kg</div>
                            </div>
                            <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                                <div class="font-bold w-[200px]">Agama</div>
                                <div class="w-[200px]">Islam</div>
                            </div>
                            <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                                <div class="font-bold w-[200px]">Kewarganegaraan</div>
                                <div class="w-[200px]">Warga Negara Indonesia</div>
                            </div>
                            <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                                <div class="font-bold w-[200px]">Nomor Handphone</div>
                                <div class="w-[200px]">08813096322</div>
                            </div>
                            <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                                <div class="font-bold w-[200px]">Email</div>
                                <div class="w-[200px]">mff023@gmail.com</div>
                            </div>
                            <div class="py-1 px-2 bg-[#ffffff] flex gap-4 rounded-b-md">
                                <div class="font-bold w-[200px]">Jumlah Saudara Kandung</div>
                                <div class="w-[200px]">1</div>
                            </div>
                        </div>
                    </div>

                    <div class="w-[500px] flex flex-col">
                        {{-- Alamat --}}
                        <div class="h-fit shadow-md bg-white mb-6 rounded-md">
                            <h2 class="p-4 text-xl text-white font-semibold bg-[#3174AE] rounded-t-md">Alamat</h2>
                            <div class="">
                                <table class="flex">
                                    <tbody class="w-full">
                                        <tr class="text-left bg-[#f9f9f9] border-b border-slate-400">
                                            <th class="px-2">Jalan</th>
                                            <td class="px-2">
                                                Gang Senggol Kp. Pedurenan Komplek Adem Ayem No. 82 RT 06 / RW 02
                                            </td>
                                        </tr>
                                        <tr class="text-left bg-[#ffffff] border-b border-slate-400">
                                            <th class="px-2">Kelurahan</th>
                                            <td class="px-2">Jatiluhur</td>
                                        </tr>
                                        <tr class="text-left bg-[#f9f9f9] border-b border-slate-400">
                                            <th class="px-2">Kecamatan</th>
                                            <td class="px-2">Jatiasih</td>
                                        </tr>
                                        <tr class="text-left bg-[#ffffff] border-b border-slate-400">
                                            <th class="px-2">Kota</th>
                                            <td class="px-2">Kota Bekasi</td>
                                        </tr>
                                        <tr class="text-left bg-[#f9f9f9] border-b border-slate-400">
                                            <th class="px-2">Kode Pos</th>
                                            <td class="px-2">17425</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
        
                        {{-- Berkas Pendukung --}}
                        <div class="h-fit shadow-md bg-white mb-6 rounded-md">
                            <h2 class="p-4 text-xl text-white font-semibold bg-[#3174AE] rounded-t-md">Berkas Pendukung</h2>
                            <div class="">
                                <table class="flex">
                                    <tbody class="w-full">
                                        <tr class="text-left bg-[#f9f9f9] border-b border-slate-400">
                                            <th class="px-2 w-full">Nomor Kartu Indonesia Sehat (KIS)</th>
                                            <td class="px-2 w-full">12345678</td>
                                        </tr>
                                        <tr class="text-left bg-[#ffffff] border-b border-slate-400">
                                            <th class="px-2">Nomor Kartu Indonesia Pintar (KIP)</th>
                                            <td class="px-2">12345678</td>
                                        </tr>
                                        <tr class="text-left bg-[#f9f9f9] border-b border-slate-400">
                                            <th class="px-2">Nomor Kartu Keluarga Sejahtera (KKS)</th>
                                            <td class="px-2">12345678</td>
                                        </tr>
                                        <tr class="text-left bg-[#ffffff] border-b border-slate-400">
                                            <th class="px-2">Nomor Surat Keterangan Tidak Mampu (SKTM)</th>
                                            <td class="px-2">12345678</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shadow-md bg-white mb-6 rounded-md">
                    <h2 class="p-4 text-xl text-white font-semibold bg-[#3174AE] rounded-t-md">Data Awal</h2>
                    <div class="">
                        <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Jalur</div>
                            <div class="">Akademik</div>
                        </div>
                        <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px]">Jurusan</div>
                            <div class="">IPA</div>
                        </div>
                        <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px]">Sekolah Asal</div>
                            <div class="">SMPN 24 Bekasi</div>
                        </div>
                        <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4 rounded-b-md">
                            <div class="font-bold w-[250px]">Nomor Ijazah</div>
                            <div class="">DN-62 DI-6130664</div>
                        </div>
                    </div>
                </div>
                <div class="shadow-md bg-white mb-6 rounded-md">
                    <h2 class="p-4 text-xl text-white font-semibold bg-[#3174AE] rounded-t-md">Data Orang Tua</h2>
                    <div class="">
                        <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Nama Ayah</div>
                            <div class="">William Shaking Pear</div>
                        </div>
                        <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px]">Tahun Lahir Ayah</div>
                            <div class="">1983</div>
                        </div>
                        <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px]">Pendidikan Ayah</div>
                            <div class="">S2</div>
                        </div>
                        <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px]">Pekerjaan Ayah</div>
                            <div class="">PNS /TNI/POLRI</div>
                        </div>
                        <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px]">Penghasilan Bulanan Ayah</div>
                            <div class="">Lebih dari Rp 10.000.000</div>
                        </div>
                        <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Nama Ibu</div>
                            <div class="">Hermione Granger</div>
                        </div>
                        <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px]">Tahun Lahir Ibu</div>
                            <div class="">1986</div>
                        </div>
                        <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px]">Pendidikan Ibu</div>
                            <div class="">S1</div>
                        </div>
                        <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px]">Pekerjaan Ibu</div>
                            <div class="">Tidak bekerja</div>
                        </div>
                        <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px]">Penghasilan Bulanan Ibu</div>
                            <div class="">Rp 5.000.000 - Rp 10.000.000</div>
                        </div>
                        <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Nama Wali</div>
                            <div class="">-</div>
                        </div>
                        <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px]">Tahun Lahir Wali</div>
                            <div class="">-</div>
                        </div>
                        <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px]">Pendidikan Wali</div>
                            <div class="">-</div>
                        </div>
                        <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px]">Pekerjaan Wali</div>
                            <div class="">-</div>
                        </div>
                        <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4 rounded-b-md">
                            <div class="font-bold w-[250px]">Penghasilan Bulanan Wali</div>
                            <div class="">-</div>
                        </div>
                    </div>
                </div>
                <div class="w-[400px] shadow-md bg-white mb-6 rounded-md">
                    <h2 class="p-4 text-xl text-white font-semibold bg-[#3174AE] rounded-t-md">Nilai Rapor</h2>
                    <div class="">
                        <h3 class="text-lg font-bold py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">Semester 1</h3>
                        <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Bahasa Indonesia</div>
                            <div class="">100</div>
                        </div>
                        <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Bahasa Inggris</div>
                            <div class="">100</div>
                        </div>
                        <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Matematika</div>
                            <div class="">100</div>
                        </div>
                        <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Ilmu Pengetahuan Alam</div>
                            <div class="">100</div>
                        </div>
                        <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Ilmu Pengetahuan Sosial</div>
                            <div class="">100</div>
                        </div>
                        
                    </div>
                    <div class="">
                        <h3 class="text-lg font-bold py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">Semester 2</h3>
                        <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Bahasa Indonesia</div>
                            <div class="">100</div>
                        </div>
                        <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Bahasa Inggris</div>
                            <div class="">100</div>
                        </div>
                        <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Matematika</div>
                            <div class="">100</div>
                        </div>
                        <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Ilmu Pengetahuan Alam</div>
                            <div class="">100</div>
                        </div>
                        <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Ilmu Pengetahuan Sosial</div>
                            <div class="">100</div>
                        </div>
                        
                    </div>
                    <div class="">
                        <h3 class="text-lg font-bold py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">Semester 3</h3>
                        <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Bahasa Indonesia</div>
                            <div class="">100</div>
                        </div>
                        <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Bahasa Inggris</div>
                            <div class="">100</div>
                        </div>
                        <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Matematika</div>
                            <div class="">100</div>
                        </div>
                        <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Ilmu Pengetahuan Alam</div>
                            <div class="">100</div>
                        </div>
                        <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Ilmu Pengetahuan Sosial</div>
                            <div class="">100</div>
                        </div>
                        
                    </div>
                    <div class="">
                        <h3 class="text-lg font-bold py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">Semester 4</h3>
                        <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Bahasa Indonesia</div>
                            <div class="">100</div>
                        </div>
                        <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Bahasa Inggris</div>
                            <div class="">100</div>
                        </div>
                        <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Matematika</div>
                            <div class="">100</div>
                        </div>
                        <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Ilmu Pengetahuan Alam</div>
                            <div class="">100</div>
                        </div>
                        <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Ilmu Pengetahuan Sosial</div>
                            <div class="">100</div>
                        </div>
                        
                    </div>
                    <div class="">
                        <h3 class="text-lg font-bold py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">Semester 5</h3>
                        <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Bahasa Indonesia</div>
                            <div class="">100</div>
                        </div>
                        <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Bahasa Inggris</div>
                            <div class="">100</div>
                        </div>
                        <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Matematika</div>
                            <div class="">100</div>
                        </div>
                        <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                            <div class="font-bold w-[250px] flex-shrink-0">Ilmu Pengetahuan Alam</div>
                            <div class="">100</div>
                        </div>
                        <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4 rounded-b-md">
                            <div class="font-bold w-[250px] flex-shrink-0">Ilmu Pengetahuan Sosial</div>
                            <div class="">100</div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <livewire:login /> 
        <livewire:registrasi />
    </div>
</section>