<div class=""
    {{-- x-data="{
        data: null,
        getDataPendaftar()
        {
            fetch('http://127.0.0.1:8000/api/pendaftar/all')
                .then(async (response) => {
                    this.data = await response.json()
                    this.data = this.data.data
            })
        }
    }" --}}
    {{-- x-data="$store.pendaftar" --}}
    {{-- x-init="getDataPendaftar()" --}}
>
    <script>
        document.addEventListener('alpine:init', () => {
            
            Alpine.store('pendaftar', {
                data: null,

                async sortByKey(array, key)
                {
                    return array.sort(async function(a, b)
                    {
                        var x = await a[key]; var y = b[key]
                        return ((x < y) ? -1 : ((x > y) ? 1 : 0))
                    })
                },
                
                getDataPendaftar()
                {
                    fetch('http://127.0.0.1:8000/api/pendaftar/all')
                        .then(async (response) => {
                            this.data = await response.json()
                            this.data = this.data.data
                            // this.data = sortByKey(this.data, 'nama_lengkap')
                    })
                },

                getMean(obj)
                {
                    var count = 0
                    var sum = 0

                    Object.keys(obj).forEach(key => {
                        if (key != 'id_pendaftar') {
                            count++
                            sum += obj[key]
                        }
                    });

                    mean = sum/count
                    return mean
                },
            })
        })
    </script>

    <div 
        x-data="$store.pendaftar"
        x-init="getDataPendaftar()"
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
                <template x-for="(row, index) in data.data_diri">
                    <tr class="text-center">
                        <td x-text="row.id" class="py-2 px-4"></td>
                        <td x-text="row.nisn" class="py-2 px-4"></td>
                        <td x-text="row.nama_lengkap" class="py-2 px-4"></td>
                        <td x-text="row.jenis_kelamin" class="py-2 px-4"></td>
                        <td x-text="row.tanggal_lahir" class="py-2 px-4"></td>
                        <td x-text="data.data_awal[index].sekolah_asal" class="py-2 px-4"></td>
                        <td x-text="getMean(data.nilai_rapor[index])" class="py-2 px-4"></td>
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

    
</div>