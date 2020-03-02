<template>
  <v-dialog>
    <template v-slot:activator="{ on }">
      <v-col style="margin-left:10%;margin-top:5%">
        <v-btn class="text-center" v-on="on">
          <v-icon>mdi-plus</v-icon>
        </v-btn>
      </v-col>
    </template>
    <v-container style="background-color:gray">
      <v-row >
        <v-card v-for="(image, key) in images" :key="key" max-width="400" class="mb-4 ml-4">
          <v-img height="250" :src="image.photo"></v-img>
        <v-checkbox v-model="selected" label="click la" value="click la"></v-checkbox>
      
        </v-card>
      </v-row>
    </v-container>
  </v-dialog>
</template>

<script src="./CreateGalerie.js">
</script>