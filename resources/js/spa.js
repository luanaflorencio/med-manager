const { default: axios } = require("axios")

window.app = () => {
    return{
        'is_logged': false,
        'token': '',
        'user': {},
        'equipment': [],
        login(event) {
            if(event && event.detail && event.detail.token) {
                this.token = event.detail.token
                axios.post(`/api/auth/me?token=${this.token}`, {})
                    .then(response => {
                        this.user = response.data
                        this.is_logged = true
                        this.loadEquipment()
                })
               
            }
        },

        loadEquipment() {
            axios.get(`/api/equipment?token=${this.token}`)
                .then(response => {
                    this.equipment = response.data
                })
        }

    }
}

window.loginForm = (LoginUrl) => {
    return{
        'email': 'luana@gmail.com',
        'pw': 'luanaluana',
        login() {
           axios.post(LoginUrl, {
               'email': this.email,
               'password': this.pw
           }).then(response => {
               console.log(response.data)
               dispatchEvent(
                   new CustomEvent('set-token', {detail: { token: response.data.access_token} })
               )
           }).catch(err_res => {
               console.error(err_res)
           })
        }
    }

}