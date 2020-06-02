import ShowUser from "./ShowUser.vue";
import DeleteUser from "./DeleteUser.vue";
import { apiServices } from "../../_services/api.services";


export default {
  components: {
    ShowUser,
    DeleteUser,
  },


  data() {
    return {
      users: [],

      formTitle: 'LISTE DES UTILISATEURS',

      titleUser: "",
    }
  },
  methods: {
    getDatas() {
      this.error = this.users = null;
      this.loading = true;
      this.users = [];
      this.titleUser = [];
      apiServices.get('/api/users/')
        .then(({ data }) => {
          this.titleUser = [
            data.data[0].id
          ]
          data.data.forEach(_user => {
            this.users.push(_user)
          })
        })
        .catch(error => {
          console.log(error);
        });
    },
    removeUser(id){
      _.remove(this.users, function (_user) {
          return _user.id == id;
      })
  }
  },
  created() {
    this.getDatas();
  },

};