<template>
  <v-form v-model="valid">
    <v-container>
      <v-row>
        <v-col cols="12" md="6">
          <v-text-field v-model="nomSuccess" :counter="25" :rules="nomRules" label="Nom" required></v-text-field>
        </v-col>
        <v-col cols="12" md="6">
          <v-select
            v-model="select"
            :items="gradesSuccess"
            :rules="[v => !!v || 'Item is required']"
            label="Grade"
            required
          ></v-select>
        </v-col>
      </v-row>
      <v-row>
        <v-text-field
          v-model="descriptionSuccess"
          :counter="255"
          :rules="descriptionRules"
          label="Description"
          required
        ></v-text-field>
      </v-row>
      <v-row>
        <v-col class="centrer"><v-btn
        color="success"
        class="mr-4 tailleMax"
        @click="validate"
      >
        Valider
      </v-btn></v-col>
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
    nomRules: [
      v => !!v || "Le champs est requis",
      v => (v && v.length <= 25) || "Le champs doit faire moins de 25 caracteres"
    ],
    descriptionSuccess: "",
    descriptionRules: [
      v => !!v || "Le champs est requis",
      v => (v && v.length <= 255) || "Le champs doit faire moins de 255 caracteres"
    ],
    select: null,
    gradesSuccess: ["Bronze", "Argent", "Or", "Platine"],
    checkbox: false
  }),

  methods: {
    validate() {
      if (this.$refs.form.valid()) {
        this.snackbar = true;
      }
    }
  }
};
</script>