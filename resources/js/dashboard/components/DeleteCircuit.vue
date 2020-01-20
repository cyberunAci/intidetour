<template>
  <div>
    <v-dialog v-model="dialog" persistent max-width="290">
      <template v-slot:activator="{ on }">
        <v-btn color="red accent-4" icon dark v-on="on">
          <v-icon>mdi-delete</v-icon>
        </v-btn>
       
      </template>
      <v-card>
        <v-card-title class="headline">Supprimer le circuit ?</v-card-title>
        <v-card-text>
          Voulez-vous vraiment supprimer le circuit
          {{circuit.nom}}?
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
              <v-btn color="blue" text @click="snackbar = false">Close</v-btn>
            </v-snackbar>
  </div>
</template>
<script src="./DeleteCircuit.js"/>