import axios from 'axios';
import DeleteSuccess from "./DeleteSuccess.vue";

export default {
    components: {
        DeleteSuccess
    },
    data: () => ({
        // props: ["success", "successes"],
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