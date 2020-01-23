import Axios from "axios"

export default {
    props: ["circuits"],

    data() {
        return {
            dialog: false,
            snackbar: false,
            text: '',
            timeout: 20000,
            nom: '',
            nomRules: [
                v => !!v || 'Un nom de circuit est requis',
                v => (v && v.length <= 25) || 'Le nom ne doit pas être supérieure à 25 Caractères',
            ],
            image: '',
            imageRules: [
                v => !!v || 'Une image est requise',
            ],
            difficulte: '',
            difficulteRules: [
                v => !!v || 'Une difficulte est requise',
            ],
            description: '',
            descriptionRules: [
                v => !!v || 'Une description est requis',
            ],
            duree: '',
            dureeRules: [
                v => !!v || 'Une duree est requise',
            ],
            distance: '',
            distanceRules: [
                v => !!v || 'Une distance est requise',
            ],
            latitude: '',
            latitudeRules: [
                v => !!v || 'Une latitude est requise',
            ],
            longitude: '',
            longitudeRules: [
                v => !!v || 'Une longitude est requise',
            ],
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
                if (response.status == 201) {
                    this.dialog = false;
                    location.reload(true);
                    this.snackbar = true;
                    this.text = 'Le circuit a bien été ajouté'
                }
            }).catch()
        },


    }
}