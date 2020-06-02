import axios from 'axios';
import { apiService } from '../../_services/api.services';

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
            apiService.post('/api/apropos/1', {
                content: this.text        
            })
            console.log(this.text);
        }
    }
};