<template>
  <v-col class="text-center">
    <v-dialog v-model="editerAPropos" width="75%" height="100%">
      <template v-slot:activator="{ on }">
        <v-btn color="blue-grey" dark v-on="on" width="50%">Èditer</v-btn>
      </template>
      <v-card>
        <v-card-title class="headline grey lighten-2" primary-title>Editer le À-propos</v-card-title>
        <v-textarea
          v-model="text"
          :rules="textRules"
          label="Texte du à propos"
          required
          class="ma-5"
          text
        ></v-textarea>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="primary" text id="updateApropos" @click="submitComment">Valider</v-btn>
          <v-btn color="primary" text @click="editerAPropos = false">Fermer</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-col>
</template>

<script src="./UpdateApropos.js"/>