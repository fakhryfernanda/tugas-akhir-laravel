<div>
    <section class="mb-20">
        <div class="container w-[1200px] mx-auto">
            <h1 class="text-3xl font-semibold mb-5">FORMULIR PAKE LIVEWIRE</h1>
            {{-- @auth --}}
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
                                    <div class="text-lg font-bold text-gray-700">Data Awal</div>
                                </div>
                                
                                <div x-show="step === 2">
                                    <div class="text-lg font-bold text-gray-700">Data Diri</div>
                                </div>
    
                                <div x-show="step === 3">
                                    <div class="text-lg font-bold text-gray-700">Data Alamat</div>
                                </div>
    
                                <div x-show="step === 4">
                                    <div class="text-lg font-bold text-gray-700">Berkas Pendukung</div>
                                </div>
    
                                <div x-show="step === 5">
                                    <div class="text-lg font-bold text-gray-700">Data Orang Tua</div>
                                </div>
    
                                <div x-show="step === 6">
                                    <div class="text-lg font-bold text-gray-700">Data Nilai Rapor</div>
                                </div>
    
                                <div x-show="step === 7">
                                    <div class="text-lg font-bold text-gray-700">Pernyataan</div>
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
    
                    {{-- Content --}}
                    <form action="" method="post" id="formulir" wire:submit.prevent="submit" enctype="multipart/form-data">
                        <div x-show.transition.in="step === 1" class="flex flex-col gap-3">
                            <div class="flex items-center">
                                <label for="jalur" class="block w-[800px]">Jalur Pendaftaran</label>
                                <select wire:model="jalur" name="jalur" id="jalur" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                                    <option value="">Pilih :</option>
                                    <option value="akademik">Prestasi Akademik</option>
                                    {{-- <option value="non_akademik">Prestasi non Akademik</option> --}}
                                </select>
                            </div>
                            @error('jalur') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="jurusan" class="block w-[800px]">Jurusan</label>
                                <select wire:model="jurusan" name="jurusan" id="jurusan" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                                    <option value="">Pilih :</option>
                                    <option value="ipa">IPA</option>
                                    <option value="ips">IPS</option>
                                </select>
                            </div>
                            @error('jurusan') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="sekolah_asal" class="block w-[800px]">Nama Sekolah Asal</label>
                                <input wire:model="sekolah_asal" type="text" id="sekolah_asal" name="sekolah_asal" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('sekolah_asal') <span class="text-red-500">{{ $message }}</span> @enderror
                            {{-- <div class="flex items-center">
                                <label for="nomor_skhun" class="block w-[800px]">Nomor Seri SKHUN Sebelumnya</label>
                                <input wire:model="" type="text" id="nomor_skhun" name="nomor_skhun" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300" placeholder="Nomor Seri Surat Keterangan Hasil Ujian Nasional">
                            </div> --}}
                            <div class="flex items-center">
                                <label for="nomor_ijazah" class="block w-[800px]">Nomor Seri Ijazah Sebelumnya</label>
                                <input wire:model="nomor_ijazah" type="text" id="nomor_ijazah" name="nomor_ijazah" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300" placeholder="Nomor Seri Ijazah">
                            </div>
                            @error('nomor_ijazah') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div x-show.transition.in="step === 2" class="flex flex-col gap-3">
                            <div class="flex items-center">
                                <label for="nama_lengkap" class="block w-[800px]">Nama Lengkap</label>
                                <input wire:model="nama_lengkap" type="text" id="nama_lengkap" name="nama_lengkap" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('nama_lengkap') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="jenis_kelamin" class="block w-[800px]">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                                    <option value="">Pilih :</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            @error('jenis_kelamin') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="nisn" class="block w-[800px]">NISN</label>
                                <input wire:model="nisn" type="text" id="nisn" name="nisn" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300" placeholder="Nomor Induk Siswa Nasional">
                            </div>
                            @error('nisn') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="tempat_lahir" class="block w-[800px]">Tempat Lahir</label>
                                <input wire:model="tempat_lahir" type="text" id="tempat_lahir" name="tempat_lahir" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('tempat_lahir') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="tanggal_lahir" class="block w-[800px]">Tanggal Lahir</label>
                                <input wire:model="tanggal_lahir" type="date" id="tanggal_lahir" name="tanggal_lahir" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('tanggal_lahir') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="tinggi_badan" class="block w-[800px]">Tinggi Badan (cm)</label>
                                <input wire:model="tinggi_badan" type="number" id="tinggi_badan" name="tinggi_badan" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('tinggi_badan') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="berat_badan" class="block w-[800px]">Berat Badan (kg)</label>
                                <input wire:model="berat_badan" type="number" id="berat_badan" name="berat_badan" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('berat_badan') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="agama" class="block w-[800px]">Agama</label>
                                <select wire:model="agama" name="agama" id="agama" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                                    <option value="">Pilih :</option>
                                    <option value="islam">Islam</option>
                                    <option value="kristen">Kristen</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="buddha">Buddha</option>
                                    <option value="konghuchu">Kong Hu</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>
                            @error('agama') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="kewarganegaraan" class="block w-[800px]">Kewarganegaraan</label>
                                <select wire:model="kewarganegaraan" name="kewarganegaraan" id="kewarganegaraan" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                                    <option value="">Pilih :</option>
                                    <option value="wni">Warga Negara Indonesia (WNI)</option>
                                    <option value="wna">Warga Negara Asing (WNA)</option>
                                </select>
                            </div>
                            @error('kewarganegaraan') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="nomor_handphone" class="block w-[800px]">Nomor Handphone</label>
                                <input wire:model="nomor_handphone" type="text" id="nomor_handphone" name="nomor_handphone" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('nomor_handphone') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="email" class="block w-[800px]">Email Pribadi</label>
                                <input wire:model="email" type="email" id="email" name="email" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="jumlah_saudara_kandung" class="block w-[800px]">Jumlah Saudara Kandung</label>
                                <input wire:model="jumlah_saudara_kandung" type="number" id="jumlah_saudara_kandung" name="jumlah_saudara_kandung" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('jumlah_saudara_kandung') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="foto" class="block w-[800px]">Foto</label>
                                <div class="w-full">
                                    <input wire:model="foto" type="text" id="foto" name="foto">
                                    <p class="mt-1 text-sm text-gray-400">Foto harus format JPG/JPEG/PNG dan ukuran file maksimum 1 mb</p>
                                </div>
                            </div>
                            @error('foto') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div x-show.transition.in="step === 3" class="flex flex-col gap-3">
                            <div class="flex items-center">
                                <label for="alamat_jalan" class="block w-[800px] self-start">Alamat Jalan</label>
                                <textarea wire:model="alamat_jalan" id="alamat_jalan" name="alamat_jalan" rows="4" class="resize-none w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300"></textarea>
                            </div>
                            @error('alamat_jalan') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="kelurahan" class="block w-[800px]">Kelurahan / Desa</label>
                                <input wire:model="kelurahan" type="text" id="kelurahan" name="kelurahan" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('kelurahan') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="kecamatan" class="block w-[800px]">Kecamatan</label>
                                <input wire:model="kecamatan" type="text" id="kecamatan" name="kecamatan" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('kecamatan') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="kota" class="block w-[800px]">Kabupaten / Kota</label>
                                <input wire:model="kota" type="text" id="kota" name="kota" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('kota') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="kode_pos" class="block w-[800px]">Kode Pos</label>
                                <input wire:model="kode_pos" type="text" id="kode_pos" name="kode_pos" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                        </div>
                        <div x-show.transition.in="step === 4" class="flex flex-col gap-3">
                            <div class="flex items-center">
                                <label for="kis" class="block w-[800px]">Nomor Kartu Indonesia Sehat (KIS)</label>
                                <input wire:model="kis" type="text" id="kis" name="kis" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('nis') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="kip" class="block w-[800px]">Nomor Kartu Indonesia Pintar (KIP)</label>
                                <input wire:model="kip" type="text" id="kip" name="kip" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('kip') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="kks" class="block w-[800px]">Nomor Kartu Keluarga Sejahtera (KKS)</label>
                                <input wire:model="kks" type="text" id="kks" name="kks" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('kks') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="sktm" class="block w-[800px]">Nomor Surat Keterangan Tidak Mampu (SKTM)</label>
                                <input wire:model="sktm" type="text" id="sktm" name="sktm" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('sktm') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div x-show.transition.in="step === 5" class="flex flex-col gap-3">
                            {{-- Ayah --}}
                            <p class="text-lg font-semibold">Ayah</p>
                            <div class="flex items-center">
                                <label for="nama_ayah" class="block w-[800px]">Nama Ayah</label>
                                <input wire:model="nama_ayah" type="text" id="nama_ayah" name="nama_ayah" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('nama_ayah') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="tahun_lahir_ayah" class="block w-[800px]">Tahun Lahir Ayah</label>
                                <input wire:model="tahun_lahir_ayah" type="text" id="tahun_lahir_ayah" name="tahun_lahir_ayah" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('tahun_lahir_ayah') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="pendidikan_ayah" class="block w-[800px]">Pendidikan Ayah</label>
                                <select wire:model="pendidikan_ayah" name="pendidikan_ayah" id="pendidikan_ayah" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                                    <option value="">Pilih :</option>
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
                            @error('pendidikan_ayah') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="pekerjaan_ayah" class="block w-[800px]">Pekerjaan Ayah</label>
                                <select wire:model="pekerjaan_ayah" name="pekerjaan_ayah" id="pekerjaan_ayah" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                                    <option value="">Pilih :</option>
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
                            @error('pekerjaan_ayah') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="penghasilan_bulanan_ayah" class="block w-[800px]">Penghasilan Bulanan Ayah</label>
                                <select wire:model="penghasilan_bulanan_ayah" name="penghasilan_bulanan_ayah" id="penghasilan_bulanan_ayah" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                                    <option value="">Pilih :</option>
                                    <option value="penghasilan_1">Kurang dari Rp 1.000.000</option>
                                    <option value="penghasilan_2">Rp 1.000.000 - Rp 3.000.000</option>
                                    <option value="penghasilan_3">Rp 3.000.000 - Rp 5.000.000</option>
                                    <option value="penghasilan_4">Rp 5.000.000 - Rp 10.000.000</option>
                                    <option value="penghasilan_5">Lebih dari Rp 10.000.000</option>
                                </select>
                            </div>
                            @error('penghasilan_bulanan_ayah') <span class="text-red-500">{{ $message }}</span> @enderror
    
                            {{-- Ibu --}}
                            <p class="text-lg font-semibold mt-4">Ibu</p>
                            <div class="flex items-center">
                                <label for="nama_ibu" class="block w-[800px]">Nama Ibu</label>
                                <input wire:model="nama_ibu" type="text" id="nama_ibu" name="nama_ibu" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('nama_ibu') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="tahun_lahir_ibu" class="block w-[800px]">Tahun Lahir Ibu</label>
                                <input wire:model="tahun_lahir_ibu" type="text" id="tahun_lahir_ibu" name="tahun_lahir_ibu" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('tahun_lahir_ibu') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="pendidikan_ibu" class="block w-[800px]">Pendidikan Ibu</label>
                                <select wire:model="pendidikan_ibu" name="pendidikan_ibu" id="pendidikan_ibu" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                                    <option value="">Pilih :</option>
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
                            @error('pendidikan_ibu') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="pekerjaan_ibu" class="block w-[800px]">Pekerjaan Ibu</label>
                                <select wire:model="pekerjaan_ibu" name="pekerjaan_ibu" id="pekerjaan_ibu" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                                    <option value="">Pilih :</option>
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
                            @error('pekerjaan_ibu') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="penghasilan_bulanan_ibu" class="block w-[800px]">Penghasilan Bulanan Ibu</label>
                                <select wire:model="penghasilan_bulanan_ibu" name="penghasilan_bulanan_ibu" id="penghasilan_bulanan_ibu" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                                    <option value="">Pilih :</option>
                                    <option value="penghasilan_1">Kurang dari Rp 1.000.000</option>
                                    <option value="penghasilan_2">Rp 1.000.000 - Rp 3.000.000</option>
                                    <option value="penghasilan_3">Rp 3.000.000 - Rp 5.000.000</option>
                                    <option value="penghasilan_4">Rp 5.000.000 - Rp 10.000.000</option>
                                    <option value="penghasilan_5">Lebih dari Rp 10.000.000</option>
                                </select>
                            </div>
                            @error('penghasilan_bulanan_ibu') <span class="text-red-500">{{ $message }}</span> @enderror
    
                            {{-- Wali --}}
                            <p class="text-lg font-semibold mt-4">Wali</p>
                            <div class="flex items-center">
                                <label for="nama_wali" class="block w-[800px]">Nama Wali</label>
                                <input wire:model="nama_wali" type="text" id="nama_wali" name="nama_wali" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('nama_wali') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="tahun_lahir_wali" class="block w-[800px]">Tahun Lahir Wali</label>
                                <input wire:model="tahun_lahir_wali" type="text" id="tahun_lahir_wali" name="tahun_lahir_wali" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('tahun_lahir_wali') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="pendidikan_wali" class="block w-[800px]">Pendidikan Wali</label>
                                <select wire:model="pendidikan_wali" name="pendidikan_wali" id="pendidikan_wali" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                                    <option value="">Pilih :</option>
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
                            @error('pendidikan_wali') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="pekerjaan_wali" class="block w-[800px]">Pekerjaan Wali</label>
                                <select wire:model="pekerjaan_wali" name="pekerjaan_wali" id="pekerjaan_wali" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                                    <option value="">Pilih :</option>
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
                            @error('pekerjaan_wali') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="penghasilan_bulanan_wali" class="block w-[800px]">Penghasilan Bulanan Wali</label>
                                <select wire:model="penghasilan_bulanan_wali" name="penghasilan_bulanan_wali" id="penghasilan_bulanan_wali" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                                    <option value="">Pilih :</option>
                                    <option value="penghasilan_1">Kurang dari Rp 1.000.000</option>
                                    <option value="penghasilan_2">Rp 1.000.000 - Rp 3.000.000</option>
                                    <option value="penghasilan_3">Rp 3.000.000 - Rp 5.000.000</option>
                                    <option value="penghasilan_4">Rp 5.000.000 - Rp 10.000.000</option>
                                    <option value="penghasilan_5">Lebih dari Rp 10.000.000</option>
                                </select>
                            </div>
                            @error('penghasilan_bulanan_wali') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div x-show.transition.in="step === 6" class="flex flex-col gap-3">
                            <p class="text-lg font-semibold">Semester 1</p>
                            <div class="flex items-center">
                                <label for="indo_1" class="block w-[800px]">Bahasa Indonesia</label>
                                <input wire:model="indo_1" type="number" id="indo_1" name="indo_1" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('indo_1') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="eng_1" class="block w-[800px]">Bahasa Inggris</label>
                                <input wire:model="eng_1" type="number" id="eng_1" name="eng_1" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('eng_1') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="mtk_1" class="block w-[800px]">Matematika</label>
                                <input wire:model="mtk_1" type="number" id="mtk_1" name="mtk_1" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('mtk_1') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="ipa_1" class="block w-[800px]">IPA</label>
                                <input wire:model="ipa_1" type="number" id="ipa_1" name="ipa_1" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('ipa_1') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="ips_1" class="block w-[800px]">IPS</label>
                                <input wire:model="ips_1" type="number" id="ips_1" name="ips_1" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('ips_1') <span class="text-red-500">{{ $message }}</span> @enderror
    
                            <p class="text-lg font-semibold mt-8">Semester 2</p>
                            <div class="flex items-center">
                                <label for="indo_2" class="block w-[800px]">Bahasa Indonesia</label>
                                <input wire:model="indo_2" type="number" id="indo_2" name="indo_2" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('indo_2') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="eng_2" class="block w-[800px]">Bahasa Inggris</label>
                                <input wire:model="eng_2" type="number" id="eng_2" name="eng_2" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('eng_2') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="mtk_2" class="block w-[800px]">Matematika</label>
                                <input wire:model="mtk_2" type="number" id="mtk_2" name="mtk_2" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('mtk_2') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="ipa_2" class="block w-[800px]">IPA</label>
                                <input wire:model="ipa_2" type="number" id="ipa_2" name="ipa_2" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('ipa_2') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="ips_2" class="block w-[800px]">IPS</label>
                                <input wire:model="ips_2" type="number" id="ips_2" name="ips_2" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('ips_2') <span class="text-red-500">{{ $message }}</span> @enderror
    
                            <p class="text-lg font-semibold mt-8">Semester 3</p>
                            <div class="flex items-center">
                                <label for="indo_3" class="block w-[800px]">Bahasa Indonesia</label>
                                <input wire:model="indo_3" type="number" id="indo_3" name="indo_3" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('indo_3') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="eng_3" class="block w-[800px]">Bahasa Inggris</label>
                                <input wire:model="eng_3" type="number" id="eng_3" name="eng_3" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('eng_3') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="mtk_3" class="block w-[800px]">Matematika</label>
                                <input wire:model="mtk_3" type="number" id="mtk_3" name="mtk_3" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('mtk_3') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="ipa_3" class="block w-[800px]">IPA</label>
                                <input wire:model="ipa_3" type="number" id="ipa_3" name="ipa_3" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('ipa_3') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="ips_3" class="block w-[800px]">IPS</label>
                                <input wire:model="ips_3" type="number" id="ips_3" name="ips_3" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('ips_3') <span class="text-red-500">{{ $message }}</span> @enderror
    
                            <p class="text-lg font-semibold mt-8">Semester 4</p>
                            <div class="flex items-center">
                                <label for="indo_4" class="block w-[800px]">Bahasa Indonesia</label>
                                <input wire:model="indo_4" type="number" id="indo_4" name="indo_4" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('indo_4') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="eng_4" class="block w-[800px]">Bahasa Inggris</label>
                                <input wire:model="eng_4" type="number" id="eng_4" name="eng_4" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('eng_4') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="mtk_4" class="block w-[800px]">Matematika</label>
                                <input wire:model="mtk_4" type="number" id="mtk_4" name="mtk_4" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('mtk_4') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="ipa_4" class="block w-[800px]">IPA</label>
                                <input wire:model="ipa_4" type="number" id="ipa_4" name="ipa_4" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('ipa_4') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="ips_4" class="block w-[800px]">IPS</label>
                                <input wire:model="ips_4" type="number" id="ips_4" name="ips_4" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('ips_4') <span class="text-red-500">{{ $message }}</span> @enderror
    
                            <p class="text-lg font-semibold mt-8">Semester 5</p>
                            <div class="flex items-center">
                                <label for="indo_5" class="block w-[800px]">Bahasa Indonesia</label>
                                <input wire:model="indo_5" type="number" id="indo_5" name="indo_5" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('indo_5') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="eng_5" class="block w-[800px]">Bahasa Inggris</label>
                                <input wire:model="eng_5" type="number" id="eng_5" name="eng_5" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('eng_5') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="mtk_5" class="block w-[800px]">Matematika</label>
                                <input wire:model="mtk_5" type="number" id="mtk_5" name="mtk_5" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('mtk_5') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="ipa_5" class="block w-[800px]">IPA</label>
                                <input wire:model="ipa_5" type="number" id="ipa_5" name="ipa_5" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('ipa_5') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="flex items-center">
                                <label for="ips_5" class="block w-[800px]">IPS</label>
                                <input wire:model="ips_5" type="number" id="ips_5" name="ips_5" class="w-full px-2 py-1 border border-black/20 outline outline-[3.5px] outline-transparent focus:outline-sky-300">
                            </div>
                            @error('ips_5') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div x-show.transition.in="step === 7" class="flex flex-col gap-3">
                            <div class="w-full">
                                <p class="text-lg">
                                    Saya menyatakan bahwa data yang tertera di atas adalah data yang sebenar-benarnya. Jika diketahui melakukan manipulasi data, saya siap untuk dikeluarkan dari status pendaftar. 
                                </p>
                                <div class="mt-2">
                                    <input type="checkbox" id="pernyataan" name="pernyataan" class="">
                                    <label for="pernyataan" class="font-semibold">Saya setuju</label>
                                </div>
                            </div>
                        </div>
                    </form>
                    {{-- Content --}}
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
                                form="formulir"
                                @click="step = 'complete'"
                                x-show="step === totalStep"
                                class="w-32 focus:outline-none cursor-pointer border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium"
                                value="Simpan"
                            >
                        </div>
                    </div>
                </div>
                <!-- Bottom Navigation -->
            </div>
            {{-- @else --}}
            <div class="p-4 shadow-md bg-white">
                <livewire:login /> 
            </div>
            {{-- @endauth --}}
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
