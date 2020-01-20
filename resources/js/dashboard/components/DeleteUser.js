import Axios from "axios"

export default {
    props: ["users", "users"],
    data() {
        return {
            dialog: false,
        }
    },
   

    methods: {
        valider() {
            Axios({
                method: 'delete',
                url: '../api/users/' + this.User.id
            }).then(response=>{
                /* response.forEach(responses => {
                    console.log(responses.id)
                }); */
            })
            .catch()
        },

    },
    created(){
        console.log(this.users)
    }
    
    
}