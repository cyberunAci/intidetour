
import axios from 'axios';

export default {




  props: ["circuit"],

  data() {
    return {
      dialog: false,
      selectedFile: null,
    }
  },


  methods: {
    onFileSelected(event) {
    //  console.log(event)
      this.selectedFile = event.target.files[0]
    },


    onUpload() {

      const formData = new FormData();
      formData.append('myFile', this.selectedFile, this.selectedFile.name);

      axios.post('http://localhost:8000/api/file-upload', this.selectedFile)
     // console.log(formData)
.then(res=> {
  console.log(res);
})

    }
  },
}
