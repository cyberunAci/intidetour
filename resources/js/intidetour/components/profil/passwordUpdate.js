import { authenticationService } from "./../../_services/authentication.service";
import { apiServices } from '../../_services/api.services'


// 0  importer le pakage suite a l installation 
// npm install vuelidate --save
import { validationMixin } from 'vuelidate'
import { required, maxLength, email,sameAs  } from 'vuelidate/lib/validators'

export default{

    mixins: [validationMixin],

    validations: {
        password: { required, maxLength: maxLength(10) },
        newPassword:{ required, maxLength: maxLength(10) ,  sameAsNewPasswordConfirmation: sameAs('newPasswordConfirmation') },
        newPasswordConfirmation:{ required, maxLength: maxLength(10),  sameAsNewPassword: sameAs('newPassword')  },
    },

  
    data() {
        return {
             //3
             password: '',
             newPassword:'',
             newPasswordConfirmation:'',
        }
    },
   

    computed: {
     
      
        passwordErrors() {
            const errors = []
            console.log(this.$v)
            if (!this.$v.password.$dirty) return errors
            !this.$v.password.maxLength && errors.push('Le mdp doit comporte maximun 10 lettres')
            !this.$v.password.required && errors.push('Le champs mdp est requis.')
            return errors
        },

        newPasswordErrors() {
            const errors = []
            if (!this.$v.newPassword.$dirty) return errors
            !this.$v.newPassword.maxLength && errors.push('Le newPassword doit comporte maximun 10 lettres')
            !this.$v.newPassword.required && errors.push('Le champs newPassword est requis.')
            !this.$v.newPassword.sameAsNewPasswordConfirmation && errors.push('Le champs newPassword doit etre egal a newPasswordConfirmation')
            return errors
        },

        newPasswordConfirmationErrors() {
            const errors = []
            if (!this.$v.newPasswordConfirmation.$dirty) return errors
            !this.$v.newPasswordConfirmation.maxLength && errors.push('Le newPasswordConfirmation doit comporte maximun 10 lettres')
            !this.$v.newPasswordConfirmation.required && errors.push('Le champs newPasswordConfirmation est requis.')
            !this.$v.newPasswordConfirmation.sameAsNewPassword && errors.push('Le champs newPasswordConfirmation doit etre egal a newPassword')
            return errors
        },
    },

    created() {
        console.log('pass')
    },

    
}