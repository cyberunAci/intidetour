

export default {
  
    data() {
        return {

            //objectif eszt de pusher les data dans cette array et recyuper cett array dans la vue pour afficher les data 
            success: [],
            //recupere l id dans l url
            id: this.$route.params.id,
            listboolean: [],
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
            
        },


        methods: {
            getDatas() {
    
                axios.get('/api/success/' + this.id)
                    .then(({ data }) => {
                        console.log('tata');
                        console.log(data);
                       this.success = data.data;
                       console.log(this.success);
                    })
                    .catch(error => {
                        console.log(error);
                    });
                    
            },
    
    
    }

}
   