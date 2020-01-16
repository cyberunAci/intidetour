import axios from 'axios';
import Success from './Success.vue';


export default {
    data: () => ({
        boiteSuccess: false,
        nom: '',
        nomRules: [
            v => !!v || 'le nom est requis',
            v => (v && v.length <= 25) || 'Le nom ne doit pas être supérieure à 25 Caractères',
        ],
        image: '',
        imageRules: [
            v => !!v || 'une image est nécessaire',
        ],
        description: '',
        descriptionRules: [
            v => !!v || 'Une description est requis',
        ],
    }),
    methods: {
        checkSuccess(e) {
            e.preventDefault();
            axios.post('/api/success', {
                    nom: this.nom,
                    image: this.image,
                    description: this.description,

                })
                .then(({ data }) => {
                    console.log(data);
                })
                .catch(error => {
                    console.log(error.response)
                });
        },
    }
};