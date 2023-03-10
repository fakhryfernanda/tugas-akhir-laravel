document.addEventListener('alpine:init', () => {
    Alpine.store('dataDiri', {
        'isExisted': false,
        getDataDiri() {
            const user_id = localStorage.getItem('user_id')

            if (user_id != "")
            {
                fetch('http://127.0.0.1:8000/api/datadiri/' + user_id)
                    .then(async (response) => {
                        let data = await response.json()
                        this.isExisted = data.status
                })
            }
        }
    })
    
    Alpine.store('login', {
        'baseUrl': window.location.origin,
        'isLoggedIn': false,
        'showModalLogin': false,
        'showPassword': false,
        'nomor_pendaftaran': null,
        'password': null,
        'response': null,
        'token': null,

        checkSession() {
            const token = localStorage.getItem('token')
            this.isLoggedIn = token ? true : false
            this.isLoggedIn ? console.log('Sudah masuk') : console.log('Belum masuk')
        },

        getActiveUserId() {
            const user_id = localStorage.getItem('user_id')
            console.log(user_id)
            return user_id
        },

        logout() {
            localStorage.removeItem('token')
            localStorage.removeItem('user_id')
            this.token = null
            window.location.replace(window.location.href)
        },

        async fetchLogin() {
            if (this.nomor_pendaftaran != null && this.password != null) {
                // fetch api
                const formData = new FormData()
                formData.append('nomor_pendaftaran', this.nomor_pendaftaran)
                formData.append('password', this.password)

                const response = await fetch('http://127.0.0.1:8000/api/login', {
                    method: 'POST',
                    body: formData
                })

                this.response = await response.json()

                this.token = this.response.data.auth.token_type + ' ' + this.response.data.auth.token
                const user_id = this.response.data.user.id
                
                // console.log(this.response)
                // console.log(this.token)

                this.isLoggedIn = true
                localStorage.setItem('token', this.token)
                localStorage.setItem('user_id', user_id)
                
                window.location.replace(this.baseUrl + '/ppdb/formulir')

            }
        }
    })

    Alpine.store('register', {
        'isRegistered': false,
        'showModalRegistration': false,
        'showPassword': false,
        'showPasswordConfirmation': false,
        'passwordBox1': '',
        'passwordBox2': '',
        'email': '',
        'nik': '',
        'response': null,
        'error_message': null,

        async fetchRegister() {
            if (this.passwordBox1 == this.passwordBox2 && this.passwordBox1 != null && this.nik != null && this.email != null) {

                // fetch api
                const formData = new FormData()
                formData.append('nik', this.nik)
                formData.append('email', this.email)
                formData.append('password', this.passwordBox1)

                const response = await fetch('http://127.0.0.1:8000/api/register', {
                    method: 'POST',
                    body: formData
                })

                this.response = await response.json()

                // Jika registrasi gagal
                if (!this.response.status) {
                    this.error_message = this.response.message
                    console.log(this.error_message)
                } else {
                    this.isRegistered = true
                }
            }
        },

        resetRegistration() {
            this.isRegistered = false;
            this.passwordBox1 = '';
            this.passwordBox2 = '';
            this.email = '';
            this.nik = '';
            this.response = '';
            this.error_message = '';
        }
    })
})