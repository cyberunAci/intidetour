import { authenticationService } from "./../../_services/authentication.service";
import { apiServices } from '../../_services/api.services'


import passwordUpdate from "../../components/profil/passwordUpdate.vue";


// 0  importer le pakage suite a l installation 
// npm install vuelidate --save
import { validationMixin } from 'vuelidate'
import { required, maxLength, email } from 'vuelidate/lib/validators'



export default {


    components: {
        passwordUpdate
    },


    //1 et 2 
    mixins: [validationMixin],

    validations: {
        name: { required, maxLength: maxLength(10) },
        prenom: { required, maxLength: maxLength(10) },
        telephone: { required, maxLength: maxLength(10) },
        mdp: { required, maxLength: maxLength(10) },
        


        email: { required, email },
        select: { required },
  
    },

    data() {
        return {

            userInfos: [],
            desc: 'Hi,\nI just wanted to check in and see if you had any plans the upcoming weekend. We are thinking of heading up to Napa',


            //3
            name: '',
            prenom: '',
            email: '',
            telephone: '',
            mdp: '',
            select: null,
            items: [
                'Item 1',
                'Item 2',
                'Item 3',
                'Item 4',
            ],
            checkbox: false,
            //fin 3


            //pour la date picker
            date: '',
            menu2: false,

        };
    },


    //4 a mofifier car une fonction par champ ça fait beaucoup je trouve
    computed: {
     
      
        nameErrors() {
            const errors = []
            if (!this.$v.name.$dirty) return errors
            !this.$v.name.maxLength && errors.push('Le nom doit comporte maximun 10 lettres')
            !this.$v.name.required && errors.push('Le champs Nom est requis.')
            return errors
        },

        prenameErrors() {
            const errors = []
            if (!this.$v.prenom.$dirty) return errors
            !this.$v.prenom.maxLength && errors.push('Le prenom doit comporte maximun 10 lettres')
            !this.$v.prenom.required && errors.push('Le champs Prenom est requis.')
            return errors
        },

        telephoneErrors() {
            const errors = []
            if (!this.$v.telephone.$dirty) return errors
            !this.$v.telephone.maxLength && errors.push('Le telephone doit comporte maximun 10 lettres')
            //le telephone est optionel
            //!this.$v.telephone.required && errors.push('Le champs Prenom est requis.')
            return errors
        },


        emailErrors() {
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


        savedate() {
           
            console.log(this.date)
            this.menu2 = false
        },

        //5
        // submit () {
        //     this.$v.$touch()
        //   },
        clear() {
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
            this.prenom = this.userInfos[0].prenom;
            this.email = this.userInfos[0].email;
            this.telephone = this.userInfos[0].tel;
            this.date = this.userInfos[0].date_naissance;
            //6fin
        },



        // 7 envoye la requete


        submit() {
            // console.log('submit')
            // console.log(this.userInfos[0])
            console.log(this.date)

            //envoyer ces donner par post  

            //envoye l id dans la route et le donne
            //  apiServices.post('/api/user/'+this.userInfos[0].id +'/profil' , {
            apiServices.post('/api/user/' + this.userInfos[0].id + '/profil', {
                nom: this.name,
                prenom: this.prenom,
                email: this.email,
                telephone: this.telephone,
                dateNaissance: this.date,
                //ici rajouter les autre champs
            }

            ).then(response => {

                 console.log(response)
                // console.log('----------------------')

                //update le localstorage
                // console.log(JSON.parse(localStorage.getItem("currentUser")).nom);
                //recupere le current user et on le parse (string to objet)
                let currentU = JSON.parse(localStorage.getItem("currentUser"))

                //on modifiie son nom et on remplace par celui returner depuis la bdd 
                currentU.nom = response.data.nom;
                currentU.prenom = response.data.prenom;
                currentU.email = response.data.email;
                currentU.tel = response.data.tel;
                currentU.date_naissance = response.data.date_naissance;
                // console.log('----------------------')
                // console.log(currentU)
                //retransforme (objet to strin)
                currentU = JSON.stringify(currentU)

                //on le stock dans le localstorage
                localStorage.setItem("currentUser", currentU);
                // console.log(response.data.nom);



            }).catch()


        }
        //7 fin (fin du submit)
        //8 voir route api 
        //9 voir controller

    },



}