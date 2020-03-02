import axios from 'axios';

export default {
    props: ["circuit"],
    data() {
        return {
            trace: '',
        }
    },

    methods: {
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

        uploadGpx () {
            axios.post('../api/circuits/' + this.circuit.id + '/traces/', {
                trace: this.trace
            })
                .then(function ({data}) {
                
                    console.log(data);
                })
                .catch(function (error) {
                    console.log('toto');
                    console.log(error);
                });
        },

        removeGpx() {
            this.trace = "";
        }

    }

}