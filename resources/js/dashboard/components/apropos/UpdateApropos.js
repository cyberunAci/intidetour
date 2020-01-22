import axios from 'axios';

export default {
    data() {
        return {
            editerAPropos: false,
            text: '',
            textRules: [
                v => !!v || 'le texte est requis',
            ],
        }
    },
    methods: {
        checkApropos(e) {
            axios.post('/api/apropos', {
                    text: this.text,
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