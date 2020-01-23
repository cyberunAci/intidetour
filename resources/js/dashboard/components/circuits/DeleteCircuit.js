import Axios from "axios"

export default {
    props: ["circuit", "circuits"],
    data() {
        return {
            dialog: false,
            snackbar: false,
            text: '',
            timeout: 2000,

        }
    },


    methods: {
        valider() {
            let _this = this;
            
            Axios({
                method: 'delete',
                url: '../api/circuits/' + this.circuit.id
            }).then(response => {
                if (response.data.status === "ok") {
                    this.$emit('circuitToDelete', this.circuit.id)
                    this.snackbar =true;
                    this.text = 'Le circuit ' +this.circuit.nom + ' a bien été supprimé'
                }
                
            })
                .catch(error=>{
                    this.snackbar =true;
                    this.text = 'Une erreur est survenue'
                })
        },
       

    },
    created() {

    }


}