import axios from 'axios';

export default {
    data() {
        return {
            images: [],
            selected: [],
            on: false,
            addToGalerieDialog: false,
         
        }
    },
    created() {
        this.getDatas()
    },
    methods: {
        getDatas() {
            axios.get('../api/circuits/photos')
                .then(({ data }) => {
                    // console.log(data.data),
                    data.data.forEach(item => {
                        this.images.push(item);
                    });
                })
        },
        validate() {
            this.selected.forEach((id) => {
                this.images.forEach((image) => {
                    if (id == image.id) {
                        this.$emit('addImage', image)
                       
                    }
                })
            })
this.addToGalerieDialog=false

        },
    },

}