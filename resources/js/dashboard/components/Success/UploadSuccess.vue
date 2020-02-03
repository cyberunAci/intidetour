<template>
  <v-dialog max-width="500px">
    <template v-slot:activator="{ on }">
      <v-btn class="ma-1" v-on="on">Upload</v-btn>
    </template>
    <v-card class="mx-auto text-center" max-width="344">
      <v-card-title>Upload your image</v-card-title>
      <div class="mx-auto" v-if="!image">
        <input name="image" type="file" v-on:change="onFileChange" />
      </div>
      <div v-else>
        <img v-bind:src="image" style="width:200px" />
        <br />
        <v-btn icon v-on:click="greet">
          <v-icon>mdi-download</v-icon>
        </v-btn>
        <v-btn icon v-on:click="removeImg">
          <v-icon>mdi-close-circle</v-icon>
        </v-btn>
      </div>
    </v-card>
  </v-dialog>
</template>
<script src="./UploadSuccess.js"></script>

 