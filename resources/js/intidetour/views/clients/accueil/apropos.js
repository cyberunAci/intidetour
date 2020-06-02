import Axios from "axios";
import { apiServices } from "../../../_services/api.services";

export default {
    data() {
        return {
            apropos: []
        }
    },

    methods: {
        getDatas() {
            apiServices.get('/api/apropos')
                .then(({ data }) => {
                    data.data.forEach(_apropos => {
                        this.apropos.push(_apropos);
                })
            })
                .catch();
        },
    },

    created() {
        this.getDatas();
    }
}