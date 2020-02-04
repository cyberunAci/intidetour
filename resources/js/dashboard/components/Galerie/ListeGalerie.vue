<template>
  <v-container class="d-flex flex-wrap testio">
    <v-card v-for="(photo, key) in photos" :key="key" width="30%" outlined class="ma-1 pa-2">
      <v-row>
        <v-col>
          <v-card-title>Order : {{ photo.order }}</v-card-title>
          <v-card-text>{{ photo.id_photo }}</v-card-text>
        </v-col>
      </v-row>
    </v-card>
  </v-container>
</template>

<script src="./ListeGalerie.js"></script>