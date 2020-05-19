<template>
  <v-container>
    <v-btn @click="onChange"> Save</v-btn>
    <!-- <v-row> -->
    <draggable
      class="row"
      :list="photos"
      @start="dragging = true"
      @end="dragging = false"
    >
      <v-card max-width="400" class="mb-4 ml-3" v-for="(photo, key) in photos" :key="key">
        <realImage v-bind:photo="photo"></realImage>
      </v-card>

      <createGalerie></createGalerie>
    </draggable>
  </v-container>
</template>

<script src="./ListeGalerie.js"></script>

 