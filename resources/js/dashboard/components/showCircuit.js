
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
      console.log(event)
      this.selectedFile = event.target.files[0]
    },
    onUpload() {
      axios.post();
    }
  },
}
