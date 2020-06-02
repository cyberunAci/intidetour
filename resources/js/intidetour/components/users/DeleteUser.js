import {apiServices} from '../../_services/api.services'
export default {
    props: ["user", "users"],
    data() {
        return {
            deleteuser: false,
            snackbar: false,
            text: '',
            timeout: 2000,
        }
    },
   

    methods: {
        valider() {
            apiServices({
                method: 'delete',
                url: '../api/users/' + this.user.id
            }).then(response=>{
                    console.log(response.id)
                    if (response.data.status === "ok") {
                    this.$emit('userToDelete', this.user.id)
                    this.text = 'Le client ' +this.user.nom + ' a bien été supprimé'
                    }
            })
            .catch(error=>{
                this.snackbar =true;
                this.text = 'Une erreur est survenue'
            })
        },

    },
    created(){
        console.log(this.users)
    }
    
    
}