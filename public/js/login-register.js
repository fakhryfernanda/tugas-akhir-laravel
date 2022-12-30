document.addEventListener('alpine:init', () => {
    Alpine.store('login', {
        'showModalLogin': false,
        'showPassword': false
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
            if (this.passwordBox1 == this.passwordBox2) {
                const params = {
                    nik: this.nik,
                    email: this.email,
                    password: this.passwordBox1
                }

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
                console.log(this.response);

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