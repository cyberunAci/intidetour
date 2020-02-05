import axios from 'axios';
import CreateGalerie from './CreateGalerie';
import RealImage from './RealImage.vue';

export default {
    components: {
        CreateGalerie,
        RealImage
    },
    data: () => ({
        title: 'Intidetour',
        photos: [],
       
    }),
    created() {
        this.getDatas()
    },
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
        },
        
    },
}