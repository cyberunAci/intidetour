import ShowCircuit from "./ShowCircuit";
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

    components: { 
        ShowCircuit,
      },

    created() {
        this.getDatas();
    }
}
