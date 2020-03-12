<template>
  <v-dialog v-model="addToGalerieDialog" max-width="90%">
    <template v-slot:activator="{ on }">
      <v-col style="margin-left:10%;margin-top:5%">
        <v-btn class="text-center" v-on="on">
          <v-icon>mdi-plus</v-icon>
        </v-btn>
      </v-col>
    </template>
    <v-card class="d-flex flex-column" max-height="90%">
      <v-card-title>Ajout de photos</v-card-title>
      <v-divider></v-divider>
      <v-card-text class='d-flex flex-row flex-wrap flex-grow-1' max-height='70%'>
        <v-card
          v-for="(image, key) in images"
          :key="key"
          max-width="400"
          class="mb-4 ml-4 text-center"
        >
          <v-img height="250" :src="image.photo"></v-img>
          <v-checkbox v-model="selected" label="click la" :value="image.id"  ></v-checkbox>  
        </v-card>
      </v-card-text>
      <v-divider></v-divider>
      <v-card-actions>
        <v-spacer></v-spacer>
        <v-btn class="purple darken-2" text v-on="on" @click="validate" :disabled="selected.length==0">
          <v-icon>Valider</v-icon>
        </v-btn>
      </v-card-actions>
    </v-card>
  </v-dialog>
</template>

<script src="./AddToGalerie.js">
</script>