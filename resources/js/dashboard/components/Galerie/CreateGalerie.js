import axios from 'axios';

export default {
    data() {
        return {
            images: []
        }
    },
    created () {
        this.getDatas()
    },
    methods: {
        getDatas() {
            axios.get('../api/circuits/photos')
            .then(({data}) => {
                data.data.forEach(circuit => {
                this.images.push(circuit);
                })
            })
        }
    }

}