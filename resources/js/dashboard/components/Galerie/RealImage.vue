<template>
  <v-dialog class="d-flex justify-content-center align-content-center" max-width="80%" v-model="photoGrand">
    <template v-slot:activator="{ on }">
      <v-img height="250" :src="photo.photo" v-on="on"></v-img>
    </template>
    {{photo}}
    <v-img aspect-ratio="1.9" :src="photo.photo">
      <v-btn @click="photoGrand = false" class="mt-8" color="white" dark small absolute top right fab >
        <v-icon color="black">mdi-close</v-icon>
      </v-btn>
    </v-img>
  </v-dialog>
</template>

<script src="./RealImage.js">
</script>