export default {
    name: 'Login',
    data() {
        return {
            username: '',
            password: '',
        }
    },
    methods: {
        login() {
            this.$store.dispatch('retrieveToken', {
                username: this.username,
                password: this.password,
            })
        }
    }
};