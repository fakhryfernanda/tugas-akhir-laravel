<div class="shadow-md bg-white rounded-lg"
    x-data="{
        data: null,
        getDataPendaftar()
        {
            fetch('http://127.0.0.1:8000/api/pendaftar/all')
                .then(async (response) => {
                    this.data = await response.json()
                    this.data = this.data.data
            })
        }
    }"
    x-init="getDataPendaftar()"
>

    <template x-if="data != null">
    <table>
        <thead>
            <tr class="bg-sky-600 text-white">
                <th class="py-2 px-4">Peringkat</th>
                <th class="py-2 px-4">NISN</th>
                <th class="py-2 px-4">Nama Lengkap</th>
                <th class="py-2 px-4">Jenis Kelamin</th>
                <th class="py-2 px-4">Tanggal Lahir</th>
                <th class="py-2 px-4">Asal Sekolah</th>
                <th class="py-2 px-4">Rata-Rata Nilai</th>
                <th class="py-2 px-4">Terverifikasi</th>
            </tr>
        </thead>
        <tbody>
            {{-- <tr class="text-center">
                <td class="py-2 px-4">1.</td>
                <td class="py-2 px-4">10118096</td>
                <td class="py-2 px-4">Muhamad Fakhry Fernanda</td>
                <td class="py-2 px-4">L</td>
                <td class="py-2 px-4">2008-03-23</td>
                <td class="py-2 px-4">SMPN 24 Bekasi</td>
                <td class="py-2 px-4">8.75</td>
                <td class="py-2 px-4">
                    <i class="fa-solid fa-check text-green-500"></i>
                </td>
            </tr> --}}
            
            <template x-for="(row, index) in data.data_diri">
                <tr class="text-center">
                    <td x-text="row.id" class="py-2 px-4"></td>
                    <td x-text="row.nisn" class="py-2 px-4"></td>
                    <td x-text="row.nama_lengkap" class="py-2 px-4"></td>
                    <td x-text="row.jenis_kelamin" class="py-2 px-4"></td>
                    <td x-text="row.tanggal_lahir" class="py-2 px-4"></td>
                    <td x-text="data.data_awal[index].sekolah_asal" class="py-2 px-4">SMPN 182 Jakarta</td>
                    <td class="py-2 px-4">10</td>
                    <td class="py-2 px-4">
                        <i class="fa-solid fa-xmark text-red-500"></i>
                    </td>
                </tr>
            </template>

        </tbody>
    </table>
    </template>

    <template x-if="data == null">
        <p>Loading</p>
    </template>

    
</div>