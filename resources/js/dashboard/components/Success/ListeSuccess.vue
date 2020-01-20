<template>
  <v-container class="d-flex flex-wrap testio">
    <v-card v-for="(success, key) in successes" :key="key" width="30%" outlined class="ma-1 pa-2">
      <v-row>
        <v-col>{{ success.image }}</v-col>
        <v-col>
          <v-card-title>{{ success.nom }}</v-card-title>
          <v-card-text>{{ success.description }}</v-card-text>
        </v-col>
      </v-row>
      <v-row class="d-flex justify-end ma-1">
        <v-btn class="ma-1" v-on:click='getId(success.id)'>Éditer</v-btn>
        <v-btn class="ma-1" v-on:click='getId(success.id)'>Supprimer</v-btn>
      </v-row>
    </v-card>
  </v-container>
</template>

<script src="./ListeSuccess.js"></script>