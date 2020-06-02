import Axios from "axios";

export default {
    data() {
        return {
            circuits: []
        }
    },

    methods: {
        getDatas() {
            Axios.get('/api/circuits').then(({data}) => {
                data.data.forEach(_circuits => {
                    this.circuits.push(_circuits)
                })
            })
        }
    },

    created() {
        this.getDatas();
    }
}