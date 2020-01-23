import axios from 'axios';
import DeleteSuccess from "./DeleteSuccess.vue";
import UpdateSuccess from "./UpdateSuccess.vue";
export default {
    components: {
        DeleteSuccess,
        UpdateSuccess
    },
    data: () => ({
        title: 'Intidetour',
        successes: []
    }),
    methods: {
        getDatas() {
            axios.get('../api/success')
                .then(({ data }) => {
                    data.data.forEach(success => {
                        this.successes.push(success);
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