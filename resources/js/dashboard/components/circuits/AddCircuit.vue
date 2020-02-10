<template>
  <v-row justify="center">
    <v-dialog v-model="dialog" persistent max-width="700px">
      <template v-slot:activator="{ on }">
        <v-btn class="ma-2" dark v-on="on" tile outlined color="success">
          <v-icon left>mdi-shape-square-plus</v-icon>Ajouter un circuit
        </v-btn>
      </template>
      <v-card>
                                            <v-form id="addCircuit" @submit="ajout">

        <v-card-title>
          <span class="headline">Ajouter un circuit</span>
        </v-card-title>

        <v-card-text>

          <v-container>

            <v-row>
              <v-col cols="12" sm="6" md="4">
                <v-text-field v-model="nom" :rules="nomRules" label="Nom du circuit" required></v-text-field>
              </v-col>
              <v-col cols="12" sm="6" md="4">
                <v-text-field v-model="image" :rules="imageRules" label="Image du circuit"></v-text-field>
              </v-col>
              <v-col cols="12" sm="6" md="4">
                <v-text-field v-model="difficulte" :rules="difficulteRules" label="Difficulté" persistent-hint required></v-text-field>
              </v-col>
              <v-col cols="12" sm="6" md="4">
                <v-text-field v-model="description" :rules="descriptionRules" label="Description" required></v-text-field>
              </v-col>
              <v-col cols="12" sm="6" md="4">
                <v-text-field v-model="duree"  :rules="dureeRules" label="Durée" required></v-text-field>
              </v-col>
              <v-col cols="12" sm="6" md="4">
                <v-text-field v-model="distance" :rules="distanceRules" label="Distance" required></v-text-field>
              </v-col>
              <v-col cols="12" sm="6" md="4">
                <v-text-field v-model="latitude" :rules="latitudeRules" label="Latitude" required></v-text-field>
              </v-col>
              <v-col cols="12" sm="6" md="4">
                <v-text-field v-model="longitude" :rules="longitudeRules" label="Longitude" required></v-text-field>
              </v-col>
            </v-row>
          </v-container>
        </v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="red" text @click="dialog = false">Annuler</v-btn>
          <v-btn color="success" text @click="ajout">Enregistrer</v-btn>
        </v-card-actions>
        </v-form>
      </v-card>
    </v-dialog>
    <v-snackbar v-model="snackbar" :timeout="timeout">
              {{ text }}
              <v-btn color="blue" text @click="snackbar=false;">Close</v-btn>
            </v-snackbar>
  </v-row>
</template>
<script src="./AddCircuit.js"/>