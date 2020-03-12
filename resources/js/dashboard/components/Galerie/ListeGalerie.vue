<template>
  <v-container>
    <v-btn @click="saveGalerie">Save</v-btn>
    <draggable class="row" v-model="photos" @start="dragging = true" @end="dragging = false">
      <v-card max-width="400" class="mb-4 ml-4 item" v-for="(photo, key) in photos" :key="key">
        <realImage v-bind:photo="photo"></realImage>
      </v-card>

      <addToGalerie v-on:addImage="addImage($event)"></addToGalerie>
    </draggable>
  </v-container>
</template>

<script src="./ListeGalerie.js"></script>

 