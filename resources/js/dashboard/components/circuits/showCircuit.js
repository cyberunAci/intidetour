
// import UploadFile from './UploadFile.vue';
import axios from 'axios';

export default {
    // components: {
    //      UploadFile
    // },
    props: ["circuit"],

    data() {
        return {
            modalCircuit: [],
            _circuit: {},
            params: {
                nom: {
                    type: 'text'
                },
                image: {
                    type: 'text'
                },
            }
        }
    },


    methods: {

        updateData(item) {
            if (this.circuit[item.key] != item.value) {
                let datas = this.getUpdatedCircuit(item);
                axios.post('/api/circuits' + this.circuit.id, datas)
                    .then(resp => {
                        if (_.isObject(resp.data)) {
                            console.log(resp.data.data)
                            this.circuit[item.key] = resp.data.data[item.key];
                        }
                        this.prepareDisplay();
                    }).catch(error => {

                    });

            } else {
                item.editBool = false;
            }
        },
        getUpdatedCircuit(item) {
            this.prepareLocalCircuit();
            if (this._circuit.hasOwnProperty(item.key)) {
                this._circuit[item.key] = item.value;
            }
            return this._circuit;
        },
        prepareDisplay() {
            this.modalCircuit = [];
            for (const property in this.circuit) {
                if (this.params.hasOwnProperty(property)) {
                    this.modalCircuit.push({
                        key: property,
                        value: this.circuit[property],
                        editBool: false,
                        type: this.params[property].type
                    })
                }
            }
            console.log(this.params)
        },

        prepareLocalCircuit() {
            this._circuit = {};
            for (const property in this.circuit) {
                if (property != 'id') {
                    this._circuit[property] = this.circuit[property];
                }
            }

        }
    },
}
