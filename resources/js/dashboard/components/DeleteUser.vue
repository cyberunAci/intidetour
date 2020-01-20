<template>
<div>
  <v-dialog v-model="deleteuser" persistent max-width="290">
    <template v-slot:activator="{ on }">
      <v-btn color="deep-purple accent-4" icon dark v-on="on">
        <v-icon>mdi-delete</v-icon>
      </v-btn>
    </template>
    <v-card>
      <v-card-title class="headline">Supprimer client ?</v-card-title>
      <v-card-text>
        Voulez-vous vraiment supprimer le client
        {{user.nom}}?
      </v-card-text>
      <v-card-actions>
        <v-spacer></v-spacer>
        <v-btn color="red darken-1" text @click="deleteuser= false">Annuler</v-btn>
        <v-btn color="green darken-1" text @click="deleteuser=false;valider();">Continuer</v-btn>
      </v-card-actions>
    </v-card>
  </v-dialog>
          <v-snackbar v-model="snackbar" :timeout="timeout">
            {{ text }}
            <v-btn color="blue" text @click="snackbar = false">Close</v-btn>
          </v-snackbar>
</div>
</template>
<script src="./DeleteUser.js"></script>


