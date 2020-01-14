<template>
  <v-form v-model="valid">
    <v-container>
      <v-row>
        <v-col cols="12" md="4">
          <v-text-field v-model="nomSuccess" :counter="25" :rules="nomRules" label="Nom" required></v-text-field>
        </v-col>

        <v-col cols="12" md="4">
          <v-text-field
            v-model="descriptionSuccess"
            :counter="255"
            :rules="descriptionRules"
            label="Description"
            required
          ></v-text-field>
        </v-col>

        <v-col cols="12" md="4">
          <v-select
            v-model="select"
            :items="gradesSuccess"
            :rules="[v => !!v || 'Item is required']"
            label="Grade"
            required
          ></v-select>
        </v-col>
      </v-row>
    </v-container>
  </v-form>
</template>

<style scoped>
.adminDonnee {
  display: flex;
  flex-flow: row;
  justify-content: flex-start;
  height: 50px;
  padding-right: 5%;
  padding-left: 5%;
  padding-top: 15px;
  margin: 10px;
}
</style>

<script>
export default {
  data: () => ({
    valid: true,
    nomSuccess: "",
    nameRules: [
      v => !!v || "Name is required",
      v => (v && v.length <= 10) || "Name must be less than 10 characters"
    ],
    email: "",
    emailRules: [
      v => !!v || "E-mail is required",
      v => /.+@.+\..+/.test(v) || "E-mail must be valid"
    ],
    select: null,
    gradesSuccess: ["Bronze", "Argent", "Or", "Platine"],
    checkbox: false
  }),

  methods: {
    validate() {
      if (this.$refs.form.validate()) {
        this.snackbar = true;
      }
    },
    reset() {
      this.$refs.form.reset();
    },
    resetValidation() {
      this.$refs.form.resetValidation();
    }
  }
};
</script>