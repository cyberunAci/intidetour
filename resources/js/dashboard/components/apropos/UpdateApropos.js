import axios from 'axios';

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
            axios.post('/api/apropos/1', {
                content: this.text        
            })
            console.log(this.text);
        }
        // checkApropos(e) {
        //     axios.post('/api/apropos/1', {
        //             text: this.text,
        //         })
        //         .then(({ data }) => {
        //             console.log(data.data.text);
        //             $("#apropos").append(
        //                 "<p>" + data.data.text + "</p>");
        //         })
        //         .catch(error => {
        //             console.log("error : ");
        //             console.log(error.response);
        //         });
        // },
    }
};