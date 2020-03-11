import axios from 'axios';

export default {

    props: ["success"],
    data() {
        return {
              modalSuccess: [],
              _success: {},
              params: {
                    nom: {
                          type: 'text'
                    },
                    image: {
                          type: 'text'
                    },
                    description: {
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
            if (this.success[item.key] != item.value) {
                let datas = this.getUpdatedSuccess(item);
                axios.post('/api/success/' + this.success.id, datas)
                    .then(resp => {
                        if (_.isObject(resp.data)) {
                            this.success[item.key] = resp.data.data[item.key];
                        }
                        this.prepareDisplay();
                    }).catch(error => {

                    });

            } else {
                item.editBool = false;
            }
        },
        getUpdatedSuccess(item) {
            this.prepareLocalSuccess();
            if (this._success.hasOwnProperty(item.key)) {
                this._success[item.key] = item.value;
            }
            return this._success;
        },
        prepareDisplay() {
            this.modalSuccess = [];
            for (const property in this.success) {
                if (this.params.hasOwnProperty(property)) {
                    this.modalSuccess.push({
                        key: property,
                        value: this.success[property],
                        editBool: false,
                        type: this.params[property].type
                    })
                }
            }
        },
        prepareLocalSuccess() {
            this._success = {};
            for (const property in this.success) {
                if (property != 'id') {
                    this._success[property] = this.success[property];
                }
            }

        }

    }
}