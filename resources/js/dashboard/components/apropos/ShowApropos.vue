<template>
  <v-card class="ma-2">
    <h2 class="pa-2">À propos</h2>
    <p id="apropos" class="pa-2"></p>
    <p v-for="(apropo,key) in apropos" :key="key">
      {{apropo.text}}
    </p>
  </v-card>
</template>

<script src="./ShowApropos.js"/>