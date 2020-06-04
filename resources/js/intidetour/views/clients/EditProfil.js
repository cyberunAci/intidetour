import { authenticationService } from "./../../_services/authentication.service";
import { apiServices } from '../../_services/api.services'
export default {

    data() {
        return {
            userInfos:[],
        };
    },

    created() {

        this.getDatas();
    },

    methods: {

        getDatas() {
            authenticationService.currentUser.subscribe(x => (this.currentUser = x));
            this.userInfos.push(this.currentUser)

        },

    },



}