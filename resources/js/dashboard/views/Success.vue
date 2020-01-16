<template>
  <div class="container">
    <v-dialog v-model="boiteSuccess" persistent max-width="600px">
      <template v-slot:activator="{ on }">
        <v-btn color="secondary lighten-2" v-on="on"><h3>Création de success</h3></v-btn>
      </template>

      <v-form id="formSuccess" @submit="checkSuccess">
        <h3>Creation de Succès</h3>
        <v-text-field v-model="nom" :counter="25" :rules="nomRules" label="Nom" required></v-text-field>
        <v-text-field v-model="image" :rules="imageRules" label="Image" required></v-text-field>
        <v-textarea v-model="description" :rules="descriptionRules" label="Description" required></v-textarea>
        <v-btn type="submit" color="blue darken-1" text @click="boiteSuccess = false">Sauvegarder</v-btn>
        <v-btn text @click="boiteSuccess = false">Fermer</v-btn>
      </v-form>
    </v-dialog>
  </div>
</template>

<script src="./Success.js"></script>

<style scoped>
  #formSuccess {
    background-color: white;
    width: 100%;
    height: auto;
    padding: 15px;
  }
</style>
