import Axios from "axios"

export default {
    props: ["circuits"],

    data() {
        return {
            dialog: false,
            nom: '',
            image: '',
            difficulte: '',
            description: '',
            duree: '',
            distance: '',
            latitude: '',
            longitude: '',
        }
    },
    methods: {
        ajout() {
            axios.post('/api/circuits/add', {
                nom: this.nom,
                image: this.image,
                difficulte: this.difficulte,
                description: this.description,
                duree: this.duree,
                distance: this.distance,
                latitude: this.latitude,
                longitude: this.longitude
            }).then(response => {
                if(response.status ==201){
                    console.log(this.circuits)
                    // this.$emit('circuitToAdd', this.circuit.id)

                }
            }).catch()
        }
    }
}