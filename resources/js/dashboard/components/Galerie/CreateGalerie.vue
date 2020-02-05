<template>
<v-dialog max-width="300px">
    <template v-slot:activator="{ on }">
      <v-col style="margin-left:10%;margin-top:5%"
  >
  <v-btn class="text-center"
   v-on="on">
  <v-icon> mdi-plus</v-icon></v-btn>
  </v-col>
    </template>
    <testGalerie></testGalerie>
  </v-dialog>   
</template>