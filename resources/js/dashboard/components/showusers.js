import axios from 'axios';

export default {

  data() {
    return {
        users: [],

        formTitle: 'LISTE DES UTILISATEURS'
    }
  },
  methods: {
      getDatas() {
        this.error = this.users = null;
        this.loading = true;
          this.users = [];
          axios.get('/api/users/')
          .then(({ data }) => {
            data.data.forEach(_user => {
                this.users.push(_user)
                console.log(_user)
          })
          })
          .catch(error => {
            console.log(error);
        });
      },
    //   formData(data) {
    //       console.log(data);
    //   }
  },
  created() {
    this.getDatas();
},


};