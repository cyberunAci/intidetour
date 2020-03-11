import axios from 'axios';

export default {
    data() {
        return {
            valid: false,
            username: '',
            password: '',
        }
    },
    methods: {
        login() {
            if (this.$refs.form.validate()) {
                let data = {
                    username: this.username,
                    password: this.password
                };
                axios.post('/api/login', data)
                    .then(({data}) => {
                        auth.login(data.token, data.user);
                        this.$router.push('/dashboard');
                        
                        console.log(data.token);
                    })
                    .catch(({response}) => {
                        console.log(response.data.message);
                    });
            }
        }
    }
};