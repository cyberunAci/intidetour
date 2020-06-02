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


            
            console.log(this.currentUser);
        },
        
    },



}