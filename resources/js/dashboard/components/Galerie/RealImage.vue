<template>
  <v-dialog>
    <template v-slot:activator="{ on }">
      <v-img height="250" :src="photo.photo.photo" v-on="on"></v-img>
    </template>
    <div :max-height="window.height">
    <v-img max-height="500" :contain="true" :src="photo.photo.photo"></v-img>
    </div>
  </v-dialog>
</template>

<script src="./RealImage.js">
</script>