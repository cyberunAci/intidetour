import { authenticationService } from "./../../_services/authentication.service";
import { apiServices } from '../../_services/api.services'


// 0  importer le pakage suite a l installation 
// npm install vuelidate --save
import { validationMixin } from 'vuelidate'
import { required, maxLength, email } from 'vuelidate/lib/validators'


  
export default {


  //1 et 2 
  mixins: [validationMixin],

  validations: {
    name: { required, maxLength: maxLength(10) },
    email: { required, email },
    select: { required },
    checkbox: {
      checked (val) {
        return val
      },
    },
  },

    data() {
        return {
            
            userInfos: [],
            desc: 'Hi,\nI just wanted to check in and see if you had any plans the upcoming weekend. We are thinking of heading up to Napa',
       
       
       //3
       name: '',
      email: '',
      select: null,
      items: [
        'Item 1',
        'Item 2',
        'Item 3',
        'Item 4',
      ],
      checkbox: false,
    //fin 3

       
       
        };
    },


//4 a mofifier car une fonction par champ ça fait beaucoup je trouve
computed: {
    checkboxErrors () {
      const errors = []
      if (!this.$v.checkbox.$dirty) return errors
      !this.$v.checkbox.checked && errors.push('You must agree to continue!')
      return errors
    },
    selectErrors () {
      const errors = []
      if (!this.$v.select.$dirty) return errors
      !this.$v.select.required && errors.push('Item is required')
      return errors
    },
    nameErrors () {
      const errors = []
      if (!this.$v.name.$dirty) return errors
      !this.$v.name.maxLength && errors.push('Le nom doit comporte maximun 10 lettres')
      !this.$v.name.required && errors.push('Le champs Nom est requis.')
      return errors
    },
    emailErrors () {
      const errors = []
      if (!this.$v.email.$dirty) return errors
      !this.$v.email.email && errors.push('Must be valid e-mail')
      !this.$v.email.required && errors.push('E-mail is required')
      return errors
    },
  },
//fin 4


    created() {

        this.getDatas();
        console.log(this.currentUser)
    },

    methods: {

//5
        // submit () {
        //     this.$v.$touch()
        //   },
          clear () {
            this.$v.$reset()
            this.name = ''
            this.email = ''
            this.select = null
            this.checkbox = false
          },
// fin 5


        getDatas() {
            authenticationService.currentUser.subscribe(x => (this.currentUser = x));
            this.userInfos.push(this.currentUser)
            // this.userInfos=this.currentUser
//6
             this.name = this.userInfos[0].nom;

            //6fin
        },



       // 7 envoye la requete


        submit() {
            console.log('submit')
            console.log(this.userInfos[0])

            //envoyer ces donner par post  

            //envoye l id dans la route et le donne
          //  apiServices.post('/api/user/'+this.userInfos[0].id +'/profil' , {
                apiServices.post('/api/user/' + this.userInfos[0].id + '/profil', {
                nom: this.name,
                //ici rajouter les autre champs
            }
            
            ).then(response => {
              

                //console.log(response.data.nom)
                console.log(  this.currentUser.nom)

                

            }).catch()


    }
    //7 fin (fin du submit)
    //8 voir route api 
    //9 voir controller

},



}