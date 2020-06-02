import DatePicker from "./DatePicker.vue";
import { apiServices } from "../../_services/api.services";

export default {
      components: {
            DatePicker,
      },

      props: ["user"],

      data() {
            return {
                  editNom: false,
                  editPrenom: false,
                  editEmail: false,
                  editBirthday: false,
                  editPhoneNumber: false,
                  modalUser: [],
                  _user: {},
                  params: {
                        nom: {
                              type: 'text'
                        },
                        prenom: {
                              type: 'text'
                        },
                        email: {
                              type: 'text'
                        },
                        date_naissance: {
                              type: 'date'
                        },
                        tel: {
                              type: 'text'
                        },
                        photo: {
                              type: 'text'
                        }
                  }
            }
      },

      created() {
            this.prepareDisplay();
      },

      methods: {
            updateData(item) {
                  if (this.user[item.key] != item.value) {
                        let datas = this.getUpdatedUser(item);
                        apiServices.post('/api/users/' + this.user.id, datas)
                              .then(resp => {
                                    if (_.isObject(resp.data)) {
                                          // console.log(resp.data.data)
                                          this.user[item.key] = resp.data.data[item.key];
                                    }
                                    this.prepareDisplay();
                              }).catch(error => {

                              });

                  } else {
                        item.editBool = false;
                  }
            },
            getUpdatedUser(item) {
                  this.prepareLocalUser();
                  if (this._user.hasOwnProperty(item.key)) {
                        this._user[item.key] = item.value;
                  }
                  return this._user;
            },
            prepareDisplay() {
                  this.modalUser = [];
                  for (const property in this.user) {
                        if (this.params.hasOwnProperty(property)) {
                              this.modalUser.push({
                                    key: property,
                                    value: this.user[property],
                                    editBool: false,
                                    type:this.params[property].type
                              })
                        }
                  }
                  // console.log( this.params)
            },
            prepareLocalUser() {
                  this._user = {};
                  for (const property in this.user) {
                        if (property != 'id') {
                              this._user[property] = this.user[property];
                        }
                  }

            }

      }


}