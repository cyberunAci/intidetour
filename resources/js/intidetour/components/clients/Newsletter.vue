<template>
  <v-container>
    <div class="d-flex justify-center align-center">
      <v-card-title class="mt-4">Être au courant des news ?</v-card-title>
    </div>
    <v-row class="ml-10 mr-10 pa-0">
      <v-col cols="12" sm="8" class="ma-0 pa-0">
        <v-text-field
          type="text"
          name="e-mail"
          class="input p-3 ma-2"
          placeholder="Exemple : payet.jeandavid@gmail.com"
          required
        ></v-text-field>
      </v-col>
      <v-col cols="12" sm="4" class="ma-0 pa-0">
        <v-btn large color="primary" width="100%">S'inscrire</v-btn>
      </v-col>
    </v-row>
  </v-container>
</template>