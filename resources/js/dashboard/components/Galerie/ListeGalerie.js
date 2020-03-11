import axios from 'axios';
import AddToGalerie from './AddToGalerie.vue';
import RealImage from './RealImage.vue';
import draggable from "vuedraggable";
import _ from 'lodash';

let id = 1;
export default {

    props: ["image"],

    test: "simple",
    display: "Simple",

    components: {
        AddToGalerie,
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
        addFomServer(datas){
            datas.forEach(galerie => {
                this.photos.push(galerie.photo);
                this.photosId.push(galerie.id);
            })

        },
        getDatas() {
            axios.get('../api/galerie')
                .then(({ data }) => {
                    this.addFomServer(data.data)
                })
                .catch();
        },
        saveGalerie(e) {

            this.setTmpList();
            let _photosId = JSON.stringify(this.photosId);
            let _tmpsPhotosList = JSON.stringify(this.tmpPhotosList);

            if (_photosId!=_tmpsPhotosList) {

                axios.post('/api/galerie/update', {
                    galerie: this.tmpPhotosList
                }).then(({ data }) => {
                    this.addFomServer(data.data)
                })
            } else {

                alert("error")

            }
        },
        setTmpList() {
            let _this = this;
            this.tmpPhotosList = [];
            this.photos.forEach(function (photo) {
                _this.tmpPhotosList.push(photo.id);
            })

        },
        addImage(image) {
            console.log("image*************************************")
            this.photos.push(image);
            console.log( this.photos)
        }

    }
}