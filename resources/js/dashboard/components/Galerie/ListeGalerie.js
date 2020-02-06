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
                        console.log(galerie)
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