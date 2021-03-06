import DeleteSuccess from "./DeleteSuccess.vue";
import UpdateSuccess from "./UpdateSuccess.vue";
import UploadSuccess from "./UploadSuccess.vue";
import { apiServices } from '../../_services/api.services';
export default {
    components: {
        DeleteSuccess,
        UpdateSuccess,
        UploadSuccess
    },
    data: () => ({
        title: 'Intidetour',
        successes: []
    }),
    methods: {
        getDatas() {
            apiServices.get('../api/success')
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