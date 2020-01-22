import axios from 'axios';

export default {

    data() {
        return {
            image: ''
        }
    },
    methods: {
        onFileChange(e) {
            let files = e.target.files || e.dataTransfer.files;
            this.createImg(files[0]);
        },
        createImg(file) {
            let image = new Image;
            let reader = new FileReader;

            reader.onload = (e) => {
                this.image = e.target.result;
            };
            reader.readAsDataURL(file);
        },

        greet: function uploadImg() {
            axios.post('/api/saveImg', {
                image: this.image
            })
            .then(function(response) {
                console.log(response.data);
            })
            .catch(function(error) {
                console.log(error);
            });
        },

        removeImg(){
            this.image = "";
        }
    }

}