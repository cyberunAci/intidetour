import axios from 'axios';
import { apiServices } from '../../_services/api.services';

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
            apiServices.get('../api/circuits/photos')
            .then(({data}) => {
                data.data.forEach(circuit => {
                this.images.push(circuit);
                })
            })
        }
    }

}