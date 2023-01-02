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

    Alpine.store('login', {
        'baseUrl': window.location.origin,
        'isLoggedIn': false,
        'showPassword': false,
        'username': null,
        'password': null,
        'response': null,
        'token_admin': null,

        checkSession() {
            const token_admin = localStorage.getItem('token_admin')
            this.isLoggedIn = token_admin ? true : false
            this.isLoggedIn ? console.log('Sudah masuk') : console.log('Belum masuk')
        },

        logout() {
            localStorage.removeItem('token_admin')
            this.token_admin = null
            window.location.replace(window.location.href)
        },

        async fetchLogin() {
            if (this.username != null && this.password != null) {
                // fetch api
                const formData = new FormData()
                formData.append('username', this.username)
                formData.append('password', this.password)

                const response = await fetch('http://127.0.0.1:8000/api/login-admin', {
                    method: 'POST',
                    body: formData
                })

                this.response = await response.json()

                this.token_admin = this.response.data.auth.token_admin_type + ' ' + this.response.data.auth.token_admin
                
                // console.log(this.response)
                // console.log(this.token_admin)

                this.isLoggedIn = true
                localStorage.setItem('token_admin', this.token_admin)
                
                window.location.replace(this.baseUrl + '/admin')

            }
        }
    })
})