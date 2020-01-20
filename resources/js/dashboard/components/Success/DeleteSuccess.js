import Axios from 'axios';

export default {
    props: ["success", "successes"],
    data() {
        return {
            dialog: false,
        }
    },
    methods: {
        getId(e) {
            console.log(e);
        },
        valider() {
            let _this = this;
            Axios({
                    method: 'delete',
                    url: '../api/success/' + this.success.id
                }).then(response => {
                    console.log(response)
                    if (response.data.status === "ok") {
                        this.$emit('successToDelete', this.success.id)
                        this.snackbar = true;
                        this.text = 'Le success ' + this.success.nom + ' a bien été supprimé'
                    }

                })
                .catch(error => {
                    this.snackbar = true;
                    this.text = 'Une erreur est survenue'
                })
        }
    },
}