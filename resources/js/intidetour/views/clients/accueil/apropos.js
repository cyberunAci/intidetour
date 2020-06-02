import Axios from "axios";

export default {
    data() {
        return {
            apropos: []
        }
    },

    methods: {
        getDatas() {
            Axios.get('/api/apropos')
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