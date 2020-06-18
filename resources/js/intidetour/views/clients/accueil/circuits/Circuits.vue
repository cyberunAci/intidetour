<template>
  <v-container>
    <v-row>
      <v-card-title class="mx-5 pa-0">Liste des circuits</v-card-title>
    </v-row>
    <v-row>
      <v-autocomplete
        v-model="model"
        :items="items"
        :loading="isLoading"
        :search-input.sync="search"
        color="blue"
        hide-no-data
        hide-selected
        item-text="Description"
        label="Recherche"
        placeholder="Commencer à écrire"
        prepend-icon="mdi-database-search"
        return-object
        class="pa-5 my-5"
      ></v-autocomplete>
    </v-row>
    <div class="card-group d-flex flex-wrap justify-center">
      <v-card class="ma-2 elevation-3" width="350px" v-for="(circuit,key) in circuits" :key="key">
        <v-img :src="circuit.image" height="300px" class="card-img-top" alt="..." />
        <v-card-title class="blue lighten-4 d-flex justify-center elevation-1">{{circuit.nom}}</v-card-title>
        <v-row class="my-2">
          <v-col class="ma-0 pa-0" cols="4" sm="12">
            <v-chip class="ma-2" label color="blue" text-color="white">Durée</v-chip>
          </v-col>
          <v-col class="ma-0 pa-0" cols="4" sm="12">
            <v-chip class="ma-2" label color="green" text-color="white">Duree</v-chip>
          </v-col>
          <v-col class="ma-0 pa-0" cols="4" sm="12">
            <v-chip class="ma-2" label color="red" text-color="white">Difficulté</v-chip>
          </v-col>
        </v-row>
        <v-row>
          <v-col class="ma-0 pa-0" cols="4" sm="12">
            <v-card-text class="ma-0 pa-0">{{circuit.duree}}</v-card-text>
          </v-col>
          <v-col class="ma-0 pa-0" cols="4" sm="12">
            <v-card-text class="ma-0 pa-0">{{circuit.duree}}</v-card-text>
          </v-col>
          <v-col class="ma-0 pa-0" cols="4" sm="12">
            <v-card-text class="ma-0 pa-0">{{circuit.difficulte}}</v-card-text>
          </v-col>
        </v-row>

        <v-card-actions class="d-flex justify-center my-2">
          <v-btn color="blue lighten-3">en savoir plus</v-btn>
        </v-card-actions>
        <v-container fluid>
          <v-chip x-small outlined class="ma-2" color="primary">Mots clés</v-chip>
          <v-chip x-small outlined class="ma-2" color="primary">Mots clés</v-chip>
        </v-container>
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