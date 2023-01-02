document.addEventListener('alpine:init', () => {
            
    Alpine.store('pendaftar', {
        data: null,
        detail: null,

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
            })
        },

        getDetailPendaftar(id) {
            fetch('http://127.0.0.1:8000/api/pendaftar/detail/' + id)
                .then(async (response) => {
                    this.detail = await response.json()
                    this.detail = this.detail.data
            })

        }
    })

})