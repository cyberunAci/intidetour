import axios from 'axios';
export default {
    data: () => ({
        circuits: [],
    }),
    methods: {
        getDatas() {
            axios.get('/api/circuits')
                .then(({ data }) => {
                    data.data.forEach(circuit => {
                        this.circuits.push(circuit)
                    })
                })
                .catch();
        }
    },
    created() {
        this.getDatas();
    }
}