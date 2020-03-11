import axios from 'axios';
import alertClient from '../utils/alertClient.vue';


export default {
    components: {
        alertClient,
    },
    props: ["circuit"],
    data() {
        return {
            confirm: false,
            traces: [],
            trace: '',
            alert: {
                text: '',
                error: true,
                actif: false,
            },
        }
    },
    methods: { 
        uploadGpx() {
            this.confirm = true;
        },
        
        getTrace() {
            axios.get('/api/circuits/' + this.circuit.id + '/traces/')
                .then(datas => {
                    this.traces = datas.data.trace;
                })
                .catch(error => {
                    console.log(error);
                });
        },

        confirmGpx(){
            axios.post('/api/circuits/' + this.circuit.id + '/traces/', {
                trace: this.trace, 
            })
            .then(data => {
                this.alert.text = "Le fichier à bien été enregistrer";
                this.alert.error = false;
                this.alert.actif = true;
            })
            .catch(error => {
                this.alert.text = (error.response.data);
                this.alert.error = true;
                this.alert.actif = true;
            });
        },


        onFileChange(e) {
            let files = e.target.files || e.dataTransfer.files;
            this.createGpx(files[0]);
        },
        createGpx(file) {
            let reader = new FileReader;

            reader.onload = (e) => {
                this.trace = e.target.result;
            };
            reader.readAsDataURL(file);
        },

        removeGpx() {
            this.trace = "";
        },

    },

    created() {
        this.getTrace();
    }

}