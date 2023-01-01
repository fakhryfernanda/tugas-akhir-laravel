<div 
    x-data="$store.pendaftar"
    x-init="getDataPendaftar();"
>
    
    <template x-if="data != null">
    <table x-init="" class="bg-white">
        <thead>
            <tr class="bg-sky-600 text-white">
                <th class="py-2 px-4">Nomor Urut</th>
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
            <template x-for="(row, index) in data">
                <tr class="text-center">
                    <td x-text="row.id" class="py-2 px-4"></td>
                    <td x-text="row.nisn" class="py-2 px-4"></td>
                    <td x-text="row.nama_lengkap" class="py-2 px-4"></td>
                    <td x-text="row.jenis_kelamin" class="py-2 px-4"></td>
                    <td x-text="row.tanggal_lahir" class="py-2 px-4"></td>
                    <td x-text="row.sekolah_asal" class="py-2 px-4"></td>
                    <td x-text="row.mean" class="py-2 px-4"></td>
                    <td class="py-2 px-4">
                        <i class="fa-solid fa-xmark text-red-500"></i>
                    </td>
                </tr>
            </template>

        </tbody>
    </table>
    </template>

    <template x-if="data == null">
        <p class="shadow-md bg-white rounded-lg p-4 text-2xl font-semibold">Sedang memuat..</p>
    </template>

</div>