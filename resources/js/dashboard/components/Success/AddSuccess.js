import axios from 'axios';

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
            axios.post('/api/success', {
                    nom: this.nom,
                    image: this.image,
                    description: this.description,
                })
                .then(({ data }) => {
                    console.log(data.data);
                    $(".testio").append(
                        "<v-card width='30%' outlined class='ma-1 pa-2'><v-row><v-col>" + data.data.nom + "</v-col><v-col><v-card-title>" + data.data.image + "</v-card-title><v-card-text>" + data.data.description + "</v-card-text></v-col></v-row><v-row class='d-flex justify-end ma-1'><v-btn class='ma-1'>Éditer</v-btn><v-btn class='ma-1'>Supprimer</v-btn></v-row></v-card>");
                })
                .catch(error => {
                    console.log(error.response)
                });
        },
    }
};