<template>
  <v-container>
    <v-row>
      <draggable class="row" :photos="photos" @start="dragging = true" @end="dragging = false">
        <v-card max-width="400" class="mb-4 ml-4" v-for="(photo, key) in photos" :key="key">
          <realImage v-bind:photo="photo"></realImage>
        </v-card>

        <createGalerie></createGalerie>
      </draggable>
    </v-row>
  </v-container>
</template>

<script src="./ListeGalerie.js"></script>

 