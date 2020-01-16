import Axios from "axios"

export default {
    props: ["circuit", "circuits"],
    data() {
        return {
            dialog: false,
        }
    },
   

    methods: {
        valider() {
            Axios({
                method: 'delete',
                url: '../api/circuits/' + this.circuit.id
            }).then(response=>{
                /* response.forEach(responses => {
                    console.log(responses.id)
                }); */
            })
            .catch()
        },

    },
    created(){
        console.log(this.circuits)
    }
    
    
}