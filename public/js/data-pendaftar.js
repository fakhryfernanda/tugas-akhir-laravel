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