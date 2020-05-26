<template>
  <v-snackbar v-model="isActif" :color="error?'red':'green'">
    {{ text }}
    <v-btn text @click="isActif = false">Close</v-btn>
  </v-snackbar>
</template>

<script src="./alertClient.js"></script>
