
  export default {

    methods: {
      handleFileUpload(){
        this.file = this.$refs.file.files[0];
      }
    },


    props: ["circuit"],
    
    data () {
      return {
        dialog: false,
        file: '',
      }
    },
  }
