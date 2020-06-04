<template>
  <v-container>
    <h2>Temoignages</h2>
    <v-row>
      <v-carousel
        height="auto"
        :show-arrows="false"
        hide-delimiter-background
        :interval="5000"
        :cycle="true"
        class="pa-3"
      >
        <v-carousel-item v-for="(item,i) in items" :key="i">
          <v-card-text>{{item.src}}</v-card-text>
          <v-card-subtitle>Utilisateur : {{item.user}}</v-card-subtitle>
        </v-carousel-item>
      </v-carousel>
    </v-row>
  </v-container>
</template>

<script src="./temoignages.js">
</script>