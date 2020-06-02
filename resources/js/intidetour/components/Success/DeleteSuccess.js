import {apiServices} from '../../_services/api.services'
import Axios from 'axios'
export default {
    props: ["success", "successes"],
    data() {
        return {
            dialog: false,
            snackbar: false,
            text: '',
            timeout: 2000,
        }
    },
    methods: {
        getId(e) {},
        valider() {
            apiServices.delete('/api/success/' + this.success.id).then(response => {
                console.log(response)
            }).catch(error => {
                    this.snackbar = true;
                    this.text = 'Une erreur est survenue'
                })
        }
    },
}