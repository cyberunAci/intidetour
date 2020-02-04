import axios from 'axios';
export default {
    data: () => ({
        title: 'Intidetour',
        photos: []
    }),
    methods: {
        getDatas() {
            axios.get('../api/galerie')
                .then(({ data }) => {
                    data.data.forEach(galerie => {
                        this.photos.push(galerie);
                        console.log(data.data[0].photo.photos);
                    })
                })
                .catch();
        },
        getId(e) {
            console.log(e);
        }
    },
    created() {
        this.getDatas();
    },
}