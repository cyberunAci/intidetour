<template>
  <v-container>
    <v-row>
      <h2>Être au courant des dernieres news ?</h2>
    </v-row>
    <v-row>
      <v-col cols="9">
        <v-text-field
          type="text"
          name="e-mail"
          class="input p-3 w-100"
          placeholder="Exemple : payet.jeandavid@gmail.com"
          required
        ></v-text-field>
        <input />
      </v-col>
      <v-col cols="3">
        <v-btn large color="primary">S'inscrire</v-btn>
      </v-col>
    </v-row>
  </v-container>
</template>