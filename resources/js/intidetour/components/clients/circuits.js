import { apiServices } from "../../_services/api.services";

export default {
    data() {
        return {
            circuits: [],
            
        }
    },

    methods: {
        getDatas() {
            apiServices.get('/api/circuits')
                .then(({ data }) => {
                    data.data.forEach(circuit => {
                        this.circuits.push(circuit)

                    })
                })
                .catch();
        },
    },
    created() {
        this.getDatas();
    }
}