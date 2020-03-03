

import UploadFile from '../components/circuits/uploadFile';
export default {

    

    data() {



        return {
            circuit: [],
            _circuit: {},
            id: this.$route.params.id,
            photo: '',
            listboolean: [],

            params: {

                nom: {
                    type: 'text',

                },
                difficulte: {
                    type: 'text',

                },

                duree: {
                    type: 'text',

                },
                latitude: {
                    type: 'text',

                },
                longitude: {
                    type: 'text',

                },
                description: {
                    type: 'text',

                },
            }
        };
    },

    created() {
        this.getDatas();
        this.prepareDisplay();

    },
    methods: {
        getDatas() {

            axios.get('/api/circuits/' + this.id)
                .then(({ data }) => {

                    this.circuit = data.data;

                })
                .catch(error => {
                    console.log(error);
                });


        },

        onFileChange(e) {
            let files = e.target.files || e.dataTransfer.files;
            this.createImg(files[0]);
        },

        createImg(file) {

            let reader = new FileReader;

            reader.onload = (e) => {
                this.photo = e.target.result;

            };
            reader.readAsDataURL(file);
        },

        greet: function uploadImg() {

            
            axios.post('/api/circuits/photos/' + this.id, {

                photo: this.photo,

            })
                .then(function ({ data }) {
                    console.log(data);

                })
                .catch(function (error) {
                    console.log(error);

                });
        },

        removeImg() {
            this.photo = "";
        },


        /**
         * 
         * @param {*} item 
         */

        //on passe l item qui correcspont a un objet qui a une key, une value ,un editBoolean et un type
        updateData(item) {

            //item.key puet egal a   nom,difficulte,duree,latitude,longitude ou description

            //si dans l input la valeur est differente du circuit en bdd alors 
            if (this.circuit[item.key] != item.value) {
                //on creer  une variable qui ...
                let datas = this.getUpdatedCircuit(item);
                axios.post('/api/circuits/' + this.circuit.id, datas)
                    .then(resp => {
                        if (_.isObject(resp.data)) {
                            this.circuit[item.key] = resp.data.data[item.key];
                        }
                        this.prepareDisplay();
                    }).catch(error => {
                        console.log(error);
                    });
                    

            } else {
                item.listboolean = false;
                
            }
           
        },



        /**
         * 
         * @param {*} item 
         */
        //on passe l item qui correcspont a un objet qui a une key, une value ,un editBoolean et un type
        getUpdatedCircuit(item) {
            this.prepareLocalCircuit();
            if (this._circuit.hasOwnProperty(item.key)) {
                this._circuit[item.key] = item.value;
            }
            return this._circuit;
        },


        prepareLocalCircuit() {
            //on recupere un objet vide
            this._circuit = {};
            //les propriete de thic circuit sont id,  nom,difficulte,duree,latitude,longitude ou description
            for (const property in this.circuit) {
                // sauf pour l'id
                if (property != 'id') {

                    this._circuit[property] = this.circuit[property];
                }
            }

        },

        /**
         * recupere le circuit associe a l id de la route
         * permet de creer une liste de boolean pour chaque proprieté dans params 
         * pour chaque proprite dans un circuit
         */
        prepareDisplay() {


            axios.get('/api/circuits/' + this.id)
          
                .then(({ data }) => {

                    this.listboolean = [];
                    this.circuit = data.data;

                   


                    for (const property in this.params) {

                        this.listboolean.push({
                            key: property,
                            value: this.circuit[property],
                            editBoolean: false,

                            type: this.params[property].type,
                        })

                    }
                    console.log(this.listboolean);





                })
                .catch(error => {
                    console.log(error);
                });










        },


    },


}