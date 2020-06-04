import { authenticationService } from "./../../_services/authentication.service";
import { apiServices } from '../../_services/api.services'
export default {

    data() {
        return {
            userInfos:[],
            desc: 'Hi,\nI just wanted to check in and see if you had any plans the upcoming weekend. We are thinking of heading up to Napa',
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