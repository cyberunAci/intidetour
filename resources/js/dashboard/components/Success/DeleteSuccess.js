import Axios from 'axios';

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
        getId(e) { },
        valider() {
            Axios({
                method: 'delete',
                url: '../api/success/' + this.success.id
            }).then(response => {
                console.log(response)
                if (response.data.status === "ok") {
                    this.snackbar = true;
                    this.text = 'Le success a bien été supprimé'
                    this.$emit('successToDelete', this.success.id)
                    
                }

            })
                .catch(error => {
                    this.snackbar = true;
                    this.text = 'Une erreur est survenue'
                })
        }
    },
}