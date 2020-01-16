import Axios from "axios"

export default {
    data() {
        return {
            dialog: false,
        }
    },
    props: ["circuit"],

    methods: {
        valider() {
            Axios({
                method: 'delete',
                url: '../api/circuits/' + this.circuit.id
            })
        },

    }
    
}