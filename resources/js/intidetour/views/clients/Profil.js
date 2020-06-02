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

            apiServices.get('/api/users/' + this.currentUser.id + '/infos').then(({data}) => {
              
                data.data.forEach(element => {
                    this.userInfos.push(element)
                });

                  console.log(this.userInfos)
            })


        },

    },



}