document.addEventListener('alpine:init', () => {
            
    Alpine.store('admin', {
        openTable: true,
        openDetail: false,

        setIdAkun(id) {
            localStorage.clear()
            localStorage.getItem('id_akun', id)
        },

        getIdAkun() {
            return localStorage.getItem('id_akun')
        }
    })
})