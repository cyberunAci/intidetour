import axios from 'axios';
import CreateGalerie from './CreateGalerie.vue';
import RealImage from './RealImage.vue';
import draggable from "vuedraggable";
import _ from 'lodash';

let id = 1;
export default {
    test: "simple",
    display: "Simple",

    components: {
        CreateGalerie,
        RealImage,
        draggable
    },
    data: () => ({
        title: 'Intidetour',
        enabled: true,
        photos: [],
        photosId: [],
        tmpPhotosList: [],
        dragging: false
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
                        this.photosId.push(galerie.id);
                    })

                })
                .catch();
        },
        onChange(e) {

            this.setTmpList();
let _photosId = JSON.stringify(this.photosId);
let _tmpsPhotosList = JSON.stringify(this.tmpPhotosList);
if(_photosId == _tmpsPhotosList) {
    console.log('pasmal..');
} 

            console.log('initial');
            console.log(_photosId);
            console.log('tmp');
            console.log(_tmpsPhotosList);
        },
        setTmpList() {
            let _this = this;
            this.tmpPhotosList = [];
            this.photos.forEach(function (photo) {
                _this.tmpPhotosList.push(photo.id);
            })
        }
    },
}