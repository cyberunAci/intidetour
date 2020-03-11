<template>
  <v-container>
    <v-btn @click="saveGalerie"> Save</v-btn>
    <!-- <v-row> -->
    <draggable
      class="row"
      v-model="photos"
      @start="dragging = true"
      @end="dragging = false"
    >
<<<<<<< HEAD
      <v-card max-width="400" class="mb-4 ml-4 item" 
      v-for="(photo, key) in photos" :key="key">
=======
      <v-card max-width="400" class="mb-4 ml-3" v-for="(photo, key) in photos" :key="key">
>>>>>>> f29c0d1f4d0d10f6932fa9ed7f5bb11e248af32e
        <realImage v-bind:photo="photo"></realImage>
      </v-card>

      <addToGalerie v-on:addImage="addImage($event)"></addToGalerie>
      
    </draggable>
  </v-container>
</template>

<script src="./ListeGalerie.js"></script>

 