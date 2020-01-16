import axios from 'axios';
import DeleteCircuit from "./DeleteCircuit.vue";
export default {
    components:{
        DeleteCircuit,
    },
    data:() => ({
        circuits: [],
        dialog: false,

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
