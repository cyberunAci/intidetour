import axios from 'axios';
import {
    apiServices
} from '../../_services/api.services';

export default {
    props: ["circuit"],
    data() {
        return {
            photo: '',

        }
    },

    methods: {
        onFileChange(e) {
            let files = e.target.files || e.dataTransfer.files;
            this.createImg(files[0]);
        },
        createImg(file) {
            let photo = new Image;
            let reader = new FileReader;

            reader.onload = (e) => {
                this.photo = e.target.result;
            };
            reader.readAsDataURL(file);
        },

        greet: function uploadImg() {


            console.log(this.photo);
            apiServices.post('/api/circuits/photos/' + this.circuit.id, {
                    photo: this.photo

                })
                .then(function ({
                    data
                }) {
                    // console.log(data);
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

        removeImg() {
            this.photo = "";
        }

    }

}