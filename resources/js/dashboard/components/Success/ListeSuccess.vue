<template>
  <v-container class="d-flex flex-wrap testio">
    <v-card v-for="(success, key) in successes" :key="key" width="30%" outlined class="ma-1 pa-2">
      <v-row>
        <v-col><v-img :src=success.image></v-img></v-col>
        <v-col>
          <v-card-title>{{ success.nom }}</v-card-title>
          <v-card-text>{{ success.description }}</v-card-text>
        </v-col>
      </v-row>
      <v-row class="d-flex justify-end ma-1">

      

           <v-btn :to="{ path: '/dashboard/success/' + success.id}" class="ma-1">Éditer2</v-btn>
      

        <updateSuccess v-bind:success="success"></updateSuccess>
        <uploadSuccess v-bind:success="success"></uploadSuccess>
        <deleteSuccess v-on:successToDelete='successes.splice(key, 1)' v-bind:success="success" v-bind:successes="successes"></deleteSuccess>
      </v-row>
    </v-card>
  </v-container>
</template>

<script src="./ListeSuccess.js"></script>