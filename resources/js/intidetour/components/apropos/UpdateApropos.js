import { apiServices } from '../../_services/api.services';

export default {
    props: ["apropos"],
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

        submitComment() {
            apiServices.post('/api/apropos/1', {
                content: this.text        
            })
            console.log(this.text);
        }
    }
};