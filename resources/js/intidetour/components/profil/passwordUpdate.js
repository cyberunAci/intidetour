import { authenticationService } from "./../../_services/authentication.service";
import { apiServices } from '../../_services/api.services'


// 0  importer le pakage suite a l installation 
// npm install vuelidate --save
import { validationMixin } from 'vuelidate'
import { required, maxLength, email,sameAs  } from 'vuelidate/lib/validators'

export default{

    mixins: [validationMixin],

    validations: {
        mdp: { required, maxLength: maxLength(10) },
        newmdp:{ required, maxLength: maxLength(10) },
        newmdpConfirmation:{ required, maxLength: maxLength(10),  sameAsPassword: sameAs('newmdp')  },
    },

  
    data() {
        return {
             //3
             mdp: '',
             newmdp:'',
             newmdpConfirmation:'',
        }
    },
   

    computed: {
     
      
        mdpErrors() {
            const errors = []
            if (!this.$v.mdp.$dirty) return errors
            !this.$v.mdp.maxLength && errors.push('Le mdp doit comporte maximun 10 lettres')
            !this.$v.mdp.required && errors.push('Le champs mdp est requis.')
            return errors
        },

        newmdpErrors() {
            const errors = []
            if (!this.$v.newmdp.$dirty) return errors
            !this.$v.newmdp.maxLength && errors.push('Le newmdp doit comporte maximun 10 lettres')
            !this.$v.newmdp.required && errors.push('Le champs newmdp est requis.')
            return errors
        },

        newmdpConfirmationErrors() {
            const errors = []
            if (!this.$v.newmdpConfirmation.$dirty) return errors
            !this.$v.newmdpConfirmation.maxLength && errors.push('Le newmdpConfirmation doit comporte maximun 10 lettres')
            !this.$v.newmdpConfirmation.required && errors.push('Le champs newmdpConfirmation est requis.')
            !this.$v.newmdpConfirmation.sameAsPassword && errors.push('Le champs newmdpConfirmation doit etre egal a password')
            return errors
        },
    },

    created() {
        console.log('pass')
    },

    
}