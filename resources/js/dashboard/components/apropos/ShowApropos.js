import Axios from 'axios';

export default {
    data: () => ({
        apropos: [],
    }),
    methods: {
        getDatas() {
            Axios.get('/api/apropos/1')
                .then(({ data }) => {
                    data.data.forEach(apropos => {
                        this.push(apropos)
                    })
                })
                .catch();
        }
    },
    created() {
        this.getDatas();
    }
}