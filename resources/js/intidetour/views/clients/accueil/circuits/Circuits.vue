<template>
  <v-container>
    <v-row>
      <v-card-title class="ma-0 pa-0">Liste des circuits</v-card-title>
    </v-row>
      <div class="card-group d-flex flex-wrap justify-center">
      <v-card class="ma-1" width="350px" v-for="(circuit,key) in circuits" :key="key">
        <v-img :src="circuit.image" height="300px" class="card-img-top" alt="..." />
        <v-card-title>{{circuit.nom}}</v-card-title>
        <v-row>
          <v-col>
            <v-card-text>
              Durée
              <br />1h30
            </v-card-text>
          </v-col>
          <v-col>
            <v-card-text>
              Distance
              <br />12km
            </v-card-text>
          </v-col>
          <v-col>
            <v-card-text>
              Difficulté
              <br />
              {{circuit.difficulte}}
            </v-card-text>
          </v-col>
        </v-row>
        <v-card-actions class="d-flex justify-center">
          <v-btn text>Share</v-btn>
          <v-btn color="purple" text>Explore</v-btn>
        </v-card-actions>
        <small class="mx-1">mots cles</small>
        <small class="mx-1">mots cles</small>
        <v-expansion-panels>
          <v-expansion-panel>
            <v-expansion-panel-header>Déscription</v-expansion-panel-header>
            <v-expansion-panel-content>{{circuit.description}}</v-expansion-panel-content>
          </v-expansion-panel>
        </v-expansion-panels>
      </v-card>
      </div>
  </v-container>
</template>

<script src="./circuits.js">
</script>