<template>

      <v-container>
        <div v-if="!photo">
          <input name="photo" type="file" v-on:change="onFileChange" />
        </div>
        <div v-else>
          <img v-bind:src="photo" style="width:200px" />
          <br />
          <v-btn icon v-on:click="greet"><v-icon>mdi-download</v-icon></v-btn>
          <v-btn icon v-on:click="removeImg"><v-icon>mdi-close-circle</v-icon></v-btn>
        </div>
      </v-container>
</template>


<script src="./uploadFile.js">
</script>