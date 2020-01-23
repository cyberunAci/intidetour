<template>
  <v-container>
    <div v-if="!photos">
      <input name="photos" type="file" @change="onFileChange" />
    </div>
    <div v-else>
      <img v-bind:src="photos" style="width:200px" />
      <br />
      <v-btn v-on:click="greet">Telecharger</v-btn>
      <v-btn v-on:click="removeImg">Supprimer</v-btn>
    </div>
  </v-container>
</template>


<script src="./uploadFile.js">
</script>