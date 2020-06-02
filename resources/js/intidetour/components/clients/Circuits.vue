<template>
  <section>
    <v-card>
      <v-card-title>les circuits</v-card-title>
      <v-card-text>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde sint excepturi ullam qui praesentium? Aperiam accusamus ut voluptas eaque, voluptatibus sit doloremque ratione quo, provident ipsam odit, in iure! Sint?</v-card-text>
      <v-carousel :show-arrows="false">
        <v-carousel-item v-for="(circuit,key) in circuits" :key="key" :src="circuit.image"></v-carousel-item>
      </v-carousel>
      <v-card-actions>
        <v-btn large href="/circuits" width="100%" color="primary">Voir tous les circuits</v-btn>
      </v-card-actions>
    </v-card>
  </section>
</template>

<script src="./circuits.js">
</script>