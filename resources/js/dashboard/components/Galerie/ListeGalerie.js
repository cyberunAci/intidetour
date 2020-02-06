import axios from 'axios';
import CreateGalerie from './CreateGalerie.vue';
import RealImage from './RealImage.vue';
import draggable from "vuedraggable";

export default {
    components: {
        CreateGalerie,
        RealImage,
        draggable
    },
    data: () => ({
        title: 'Intidetour',
        enabled: true,
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
                    })
                })
                .catch();
        },
        getId(e) {
            console.log(e);
        },
        
    },
}