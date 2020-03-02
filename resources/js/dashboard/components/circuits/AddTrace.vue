<template>
  <v-dialog max-width="300px">
    <template v-slot:activator="{ on }">
      <v-btn icon v-on="on">
        <v-icon>mdi-file-plus</v-icon>
      </v-btn>
    </template>
    <v-card>
        <v-container>
          <div v-if="!trace">
          <input name="trace" type="file" v-on:change="onFileChange" />
        </div>
        <div v-else>
          <br />
          
          <v-btn icon v-on:click="uploadGpx"><v-icon>mdi-download</v-icon></v-btn>
          <v-btn icon v-on:click="removeGpx"><v-icon>mdi-close-circle</v-icon></v-btn>
        </div>
        
      </v-container>
    </v-card>
  </v-dialog>
</template>

<script src="./AddTrace.js">