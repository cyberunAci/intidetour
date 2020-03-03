

export default {
  
    data() {
        return {

            //objectif eszt de pusher les data dans cette array et recyuper cett array dans la vue pour afficher les data 
            success: [],
            _circuit: {},
            //recupere l id dans l url
            id: this.$route.params.id,
            photos: '',
            listBoolean: [],
            params: {

                nom: {
                    type: 'text',

                },
                image: {
                    type: 'text',

                },

                description: {
                    type: 'text',

                },
              
            }



            }
        },


        created() {
            this.getDatas();
            this.prepareDisplay();
        },


        methods: {
            getDatas() {
    
                axios.get('/api/success/' + this.id)
                    .then(({ data }) => {
                        //console.log('tata');
                       // console.log(data);
                       this.success = data.data;
                      // console.log(this.success);
                    })
                    .catch(error => {
                        console.log(error);
                    });
                    
            },

            prepareDisplay() {


                axios.get('/api/success/' + this.id)
                    .then(({ data }) => {
                        this.success = data.data;
                        this.listBoolean =[];
    
                        for (const property in this.params) {
    
                            this.listBoolean.push({
                                key: property,
                                value: this.success[property],
                                editBoolean: false,
                                type: this.params[property].type,
                            })
    
                        }
                        console.log(this.listBoolean);
    
    
    
    
    
                    })
                    .catch(error => {
                        console.log(error);
                    });

            },



        /**
         * 
         * @param {*} item 
         */

        //on passe l item qui correcspont a un objet qui a une key, une value ,un editBoolean et un type
        updateData(item) {
            console.log(item);
          //  item.key puet egal a   nom,image,descrpition

            //si dans l input la valeur est differente du circuit en bdd alors 
            if (this.success[item.key] != item.value) {
                //on cree  une variable 
                let datas = this.getUpdatedSuccess(item);
                axios.post('/api/success/' + this.success.id, datas)
                    .then(resp => {
                        if (_.isObject(resp.data)) {
                            this.success[item.key] = resp.data.data[item.key];
                            console.log('toto');
                        }
                        this.prepareDisplay();
                    }).catch(error => {
                        console.log(error);
                    });


            } else {
                item.listBoolean = false;

            }

        },

         /**
         * 
         * @param {*} item 
         */
        //on passe l item qui correcspont a un objet qui a une key, une value ,un editBoolean et un type
        getUpdatedSuccess(item) {
            this.prepareLocalSuccess();
            if (this._success.hasOwnProperty(item.key)) {
                this._success[item.key] = item.value;
            }
            return this._success;
        },

        prepareLocalSuccess() {
            //on recupere un objet vide
            this._success= {};
            //les propriete de thic circuit sont id,  nom,difficulte,duree,latitude,longitude ou description
            for (const property in this.success) {
                // sauf pour l'id
                if (property != 'id') {

                    this._success[property] = this.success[property];
                }
            }
        },







        onFileChange(e) {
            let files = e.target.files || e.dataTransfer.files;
            this.createImg(files[0]);
        },

        createImg(file) {

            let reader = new FileReader;

            reader.onload = (e) => {
                this.photos = e.target.result;
                console.log( this.photos);

            };
            reader.readAsDataURL(file);
        },

        greet: function uploadImg() {
            console.log(this.photos);
              axios.post('../../../api/success/image/' + this.id, {

                photos: this.photos,

             })
                .then(function ({ data }) {
                    console.log(data);

                })
                .catch(function (error) {
                    console.log(error);

                });
        },

        removeImg() {
            this.photos = "";
        },




    }
}
   