<template>
  <v-container width="100%" class="d-flex flex-column justify-center">
    <v-row class="ma-0 pa-0 justify-center">
      <v-card class="mb-n5 pa-2 elevation-5">
        <v-card-title class="ma-0 pa-0">Temoignages</v-card-title>
      </v-card>
    </v-row>
    <v-row class="ma-0 pa-0">
      <v-col cols="12" sm="12">
        <v-card class="d-flex justify-center">
          <v-carousel
            height="auto"
            width="100%"
            :show-arrows="false"
            hide-delimiter-background
            :interval="5000"
            :cycle="true"
          >
            <v-carousel-item v-for="(item,i) in items" :key="i">
              <v-card-text>{{item.src}}</v-card-text>
              <v-card-subtitle>Utilisateur : {{item.user}}</v-card-subtitle>
            </v-carousel-item>
          </v-carousel>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script src="./temoignages.js">
</script>