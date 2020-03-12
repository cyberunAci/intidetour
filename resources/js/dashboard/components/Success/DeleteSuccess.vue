<template>
  <v-row justify="center">
    <v-dialog v-model="dialog" persistent max-width="290">
      <template v-slot:activator="{ on }">
        <v-btn class="ma-1" v-on:click="getId(success.id)" v-on="on">Supprimer</v-btn>
      </template>
      <v-card>
        <v-card-title class="headline">Supprimer le succès ?</v-card-title>
        <v-card-text>
          Voulez-vous vraiment supprimer le succès
          {{success.nom}}?
        </v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="red darken-1" text @click="dialog = false">Annuler</v-btn>
          <v-btn color="green darken-1" text @click="dialog=false;valider();">Continuer</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
    <v-snackbar v-model="snackbar" :timeout="timeout">
      {{ text }}
      <v-btn color="blue" text @click="snackbar=false;">Close</v-btn>
    </v-snackbar>
  </v-row>
</template>

<script src="./DeleteSuccess.js"></script>