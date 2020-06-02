import { authenticationService } from "./../../_services/authentication.service";

export default { 

    data() {
        return {
           UserInfo:{},
        };
    },

    created() {
        // this.getDatas()
        authenticationService.currentUser.subscribe(x => (this.currentUser = x));
        console.log(this.currentUser);
    },

    methods: {

        getDatas() {

//apiServices
            axios.get('/api/profil')
            .then(({ data }) => {
                data.data.forEach(circuit => {
                    this.circuits.push(circuit)
                })
            })
            .catch();






            console.log(this.currentUser);
        },
        
    },



}