<div class="flex justify-between">

    {{-- Foto --}}
    <div class="w-fit h-fit p-2 bg-white rounded-md shadow-md border border-slate-300">
        <img :src="detail.foto" width="200" alt="foto-pendaftar">
    </div>

    <div class="flex flex-col">
        <div class="flex gap-3">
            {{-- Data Diri --}}
            <div class="shadow-md bg-white mb-6 rounded-md">
                <h2 class="p-4 text-xl text-white font-semibold bg-[#3174AE] rounded-t-md">Data Diri</h2>
                <div class="">
                    <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                        <div class="font-bold w-[200px] flex-shrink-0">Nama Lengkap</div>
                        <div class="w-[230px]" x-text="detail.nama_lengkap"></div>
                    </div>
                    <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                        <div class="font-bold w-[200px]">Jenis Kelamin</div>
                        <div class="w-[230px]" x-text="detail.jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan'"></div>
                    </div>
                    <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                        <div class="font-bold w-[200px]">NISN</div>
                        <div class="w-[230px]" x-text="detail.nisn"></div>
                    </div>
                    <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                        <div class="font-bold w-[200px]">Tempat Lahir</div>
                        <div class="w-[230px]" x-text="detail.tempat_lahir"></div>
                    </div>
                    <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                        <div class="font-bold w-[200px]">Tanggal Lahir</div>
                        <div class="w-[230px]" x-text="detail.tanggal_lahir"></div>
                    </div>
                    <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                        <div class="font-bold w-[200px]">Tinggi Badan</div>
                        <div class="w-[230px]" x-text="detail.tinggi_badan + ' cm'"></div>
                    </div>
                    <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                        <div class="font-bold w-[200px]">Berat Badan</div>
                        <div class="w-[230px]" x-text="detail.berat_badan + ' kg'"></div>
                    </div>
                    <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                        <div class="font-bold w-[200px]">Agama</div>
                        <div class="w-[230px] capitalize" x-text="detail.agama"></div>
                    </div>
                    <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                        <div class="font-bold w-[200px]">Kewarganegaraan</div>
                        <div 
                            class="w-[230px]" 
                            x-text="detail.kewarganegaraan == 'wni' ? 'Warga Negara Indonesia' : 'Warga Negara Asing'"
                        ></div>
                    </div>
                    <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                        <div class="font-bold w-[200px]">Nomor Handphone</div>
                        <div class="w-[230px]" x-text="detail.nomor_handphone"></div>
                    </div>
                    <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                        <div class="font-bold w-[200px]">Email</div>
                        <div class="w-[230px]" x-text="detail.email"></div>
                    </div>
                    <div class="py-1 px-2 bg-[#ffffff] flex gap-4 rounded-b-md">
                        <div class="font-bold w-[200px]">Jumlah Saudara Kandung</div>
                        <div class="w-[230px]" x-text="detail.jumlah_saudara_kandung"></div>
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
                                    <td class="px-2" x-text="detail.alamat_jalan"></td>
                                </tr>
                                <tr class="text-left bg-[#ffffff] border-b border-slate-400">
                                    <th class="px-2">Kelurahan</th>
                                    <td class="px-2" x-text="detail.kelurahan"></td>
                                </tr>
                                <tr class="text-left bg-[#f9f9f9] border-b border-slate-400">
                                    <th class="px-2">Kecamatan</th>
                                    <td class="px-2" x-text="detail.kecamatan"></td>
                                </tr>
                                <tr class="text-left bg-[#ffffff] border-b border-slate-400">
                                    <th class="px-2">Kota</th>
                                    <td class="px-2" x-text="detail.kota"></td>
                                </tr>
                                <tr class="text-left bg-[#f9f9f9] border-b border-slate-400">
                                    <th class="px-2">Kode Pos</th>
                                    <td class="px-2" x-text="detail.kode_pos"></td>
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
                                    <td class="px-2 w-full" x-text="detail.kis == null ? '-' : detail.kis"></td>
                                </tr>
                                <tr class="text-left bg-[#ffffff] border-b border-slate-400">
                                    <th class="px-2">Nomor Kartu Indonesia Pintar (KIP)</th>
                                    <td class="px-2" x-text="detail.kip == null ? '-' : detail.kip"></td>
                                </tr>
                                <tr class="text-left bg-[#f9f9f9] border-b border-slate-400">
                                    <th class="px-2">Nomor Kartu Keluarga Sejahtera (KKS)</th>
                                    <td class="px-2" x-text="detail.kks == null ? '-' : detail.kks"></td>
                                </tr>
                                <tr class="text-left bg-[#ffffff] border-b border-slate-400">
                                    <th class="px-2">Nomor Surat Keterangan Tidak Mampu (SKTM)</th>
                                    <td class="px-2" x-text="detail.sktm == null ? '-' : detail.sktm"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- Data Awal --}}
        <div class="shadow-md bg-white mb-6 rounded-md">
            <h2 class="p-4 text-xl text-white font-semibold bg-[#3174AE] rounded-t-md">Data Awal</h2>
            <div class="">
                <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Jalur</div>
                    <div class="capitalize" x-text="detail.jalur"></div>
                </div>
                <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px]">Jurusan</div>
                    <div class="uppercase" x-text="detail.jurusan"></div>
                </div>
                <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px]">Sekolah Asal</div>
                    <div class="" x-text="detail.sekolah_asal"></div>
                </div>
                <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4 rounded-b-md">
                    <div class="font-bold w-[250px]">Nomor Ijazah</div>
                    <div class="" x-text="detail.nomor_ijazah"></div>
                </div>
            </div>
        </div>

        {{-- Data Orang Tua --}}
        <div class="shadow-md bg-white mb-6 rounded-md">
            <h2 class="p-4 text-xl text-white font-semibold bg-[#3174AE] rounded-t-md">Data Orang Tua</h2>
            <div class="">
                <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Nama Ayah</div>
                    <div class="" x-text="detail.nama_ayah"></div>
                </div>
                <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px]">Tahun Lahir Ayah</div>
                    <div class="" x-text="detail.tahun_lahir_ayah"></div>
                </div>
                <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px]">Pendidikan Ayah</div>
                    <div class="uppercase" x-text="detail.pendidikan_ayah"></div>
                </div>
                <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px]">Pekerjaan Ayah</div>
                    <div class="capitalize" x-text="detail.pekerjaan_ayah"></div>
                </div>
                <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px]">Penghasilan Bulanan Ayah</div>
                    <div class="" x-text="detail.penghasilan_bulanan_ayah"></div>
                </div>
                <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Nama Ibu</div>
                    <div class="" x-text="detail.nama_ibu"></div>
                </div>
                <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px]">Tahun Lahir Ibu</div>
                    <div class="" x-text="detail.tahun_lahir_ibu"></div>
                </div>
                <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px]">Pendidikan Ibu</div>
                    <div class="uppercase" x-text="detail.pendidikan_ibu"></div>
                </div>
                <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px]">Pekerjaan Ibu</div>
                    <div class="capitalize" x-text="detail.pekerjaan_ibu"></div>
                </div>
                <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px]">Penghasilan Bulanan Ibu</div>
                    <div class="" x-text="detail.penghasilan_bulanan_ibu"></div>
                </div>
                <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Nama Wali</div>
                    <div class="" x-text="detail.nama_wali == null ? '-' : detail.nama_wali"></div>
                </div>
                <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px]">Tahun Lahir Wali</div>
                    <div class="" x-text="detail.tahun_lahir_wali == null ? '-' : detail.tahun_lahir_wali"></div>
                </div>
                <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px]">Pendidikan Wali</div>
                    <div class="uppercase" x-text="detail.pendidikan_wali == null ? '-' : detail.pendidikan_wali"></div>
                </div>
                <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px]">Pekerjaan Wali</div>
                    <div class="capitalize" x-text="detail.pekerjaan_wali == null ? '-' : detail.pekerjaan_wali"></div>
                </div>
                <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4 rounded-b-md">
                    <div class="font-bold w-[250px]">Penghasilan Bulanan Wali</div>
                    <div class="" x-text="detail.penghasilan_bulanan_wali == null ? '-' : detail.penghasilan_bulanan_wali"></div>
                </div>
            </div>
        </div>

        {{-- Nilai Rapor --}}
        <div class="w-[400px] shadow-md bg-white mb-6 rounded-md">
            <h2 class="p-4 text-xl text-white font-semibold bg-[#3174AE] rounded-t-md">Nilai Rapor</h2>
            <div class="">
                <h3 class="text-lg font-bold py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">Semester 1</h3>
                <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Bahasa Indonesia</div>
                    <div class="" x-text="detail.indo_1"></div>
                </div>
                <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Bahasa Inggris</div>
                    <div class="" x-text="detail.eng_1"></div>
                </div>
                <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Matematika</div>
                    <div class="" x-text="detail.mtk_1"></div>
                </div>
                <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Ilmu Pengetahuan Alam</div>
                    <div class="" x-text="detail.ipa_1"></div>
                </div>
                <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Ilmu Pengetahuan Sosial</div>
                    <div class="" x-text="detail.ips_1"></div>
                </div>
                
            </div>
            <div class="">
                <h3 class="text-lg font-bold py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">Semester 2</h3>
                <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Bahasa Indonesia</div>
                    <div class="" x-text="detail.indo_2"></div>
                </div>
                <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Bahasa Inggris</div>
                    <div class="" x-text="detail.eng_2"></div>
                </div>
                <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Matematika</div>
                    <div class="" x-text="detail.mtk_2"></div>
                </div>
                <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Ilmu Pengetahuan Alam</div>
                    <div class="" x-text="detail.ipa_2"></div>
                </div>
                <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Ilmu Pengetahuan Sosial</div>
                    <div class="" x-text="detail.ips_2"></div>
                </div>
                
            </div>
            <div class="">
                <h3 class="text-lg font-bold py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">Semester 3</h3>
                <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Bahasa Indonesia</div>
                    <div class="" x-text="detail.indo_3"></div>
                </div>
                <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Bahasa Inggris</div>
                    <div class="" x-text="detail.eng_3"></div>
                </div>
                <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Matematika</div>
                    <div class="" x-text="detail.mtk_3"></div>
                </div>
                <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Ilmu Pengetahuan Alam</div>
                    <div class="" x-text="detail.ipa_3"></div>
                </div>
                <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Ilmu Pengetahuan Sosial</div>
                    <div class="" x-text="detail.ips_3"></div>
                </div>
                
            </div>
            <div class="">
                <h3 class="text-lg font-bold py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">Semester 4</h3>
                <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Bahasa Indonesia</div>
                    <div class="" x-text="detail.indo_4"></div>
                </div>
                <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Bahasa Inggris</div>
                    <div class="" x-text="detail.eng_4"></div>
                </div>
                <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Matematika</div>
                    <div class="" x-text="detail.mtk_4"></div>
                </div>
                <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Ilmu Pengetahuan Alam</div>
                    <div class="" x-text="detail.ipa_4"></div>
                </div>
                <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Ilmu Pengetahuan Sosial</div>
                    <div class="" x-text="detail.ips_4"></div>
                </div>
                
            </div>
            <div class="">
                <h3 class="text-lg font-bold py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">Semester 5</h3>
                <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Bahasa Indonesia</div>
                    <div class="" x-text="detail.indo_5"></div>
                </div>
                <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Bahasa Inggris</div>
                    <div class="" x-text="detail.eng_5"></div>
                </div>
                <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Matematika</div>
                    <div class="" x-text="detail.mtk_5"></div>
                </div>
                <div class="py-1 px-2 bg-[#f9f9f9] border-b border-slate-400 flex gap-4">
                    <div class="font-bold w-[250px] flex-shrink-0">Ilmu Pengetahuan Alam</div>
                    <div class="" x-text="detail.ipa_5"></div>
                </div>
                <div class="py-1 px-2 bg-[#ffffff] border-b border-slate-400 flex gap-4 rounded-b-md">
                    <div class="font-bold w-[250px] flex-shrink-0">Ilmu Pengetahuan Sosial</div>
                    <div class="" x-text="detail.ips_5"></div>
                </div>
                
            </div>
        </div>
    </div>
</div>