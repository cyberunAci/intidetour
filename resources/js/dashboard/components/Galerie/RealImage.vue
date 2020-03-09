<template>
  <v-dialog>
    <template v-slot:activator="{ on }">
      <v-img height="250" :src="photo.photo.photo" v-on="on"></v-img>
    </template>
    <v-img max-height="980" :max-width="window.width" :src="photo.photo.photo"></v-img>
  </v-dialog>
</template>

<script src="./RealImage.js">
</script>