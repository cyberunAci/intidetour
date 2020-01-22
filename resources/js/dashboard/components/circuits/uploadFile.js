import axios from 'axios';

export default {
    props: ["circuit"],
    data() {
        return {
            photos: '',
            
        }
    },

    methods: {
        onFileChange(e) {
            let files = e.target.files || e.dataTransfer.files;
            this.createImg(files[0]);
        },
        createImg(file) {
            let photos = new Image;
            let reader = new FileReader;

            reader.onload = (e) => {
                this.photos = e.target.result;
            };
            reader.readAsDataURL(file);
        },

        greet: function uploadImg() {
            axios.post('../api/circuits/photos/' + this.circuit.id, {
                photos: this.photos
            })
                .then(function (response) {
                    console.log(response.data);
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

        removeImg() {
            this.photos = "";
        }

    }

}