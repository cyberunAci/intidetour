export default {
  props: ["text", "actif", "error"],
data() {
    return {
        isActif: this.actif
    }
},
watch: {
    actif: function(newVal, oldVal) {
        this.isActif = true;
    }
}
}
  
