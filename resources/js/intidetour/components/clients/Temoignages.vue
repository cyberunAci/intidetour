<template>
  <section class="m-5 pt-5">
    <v-row >
      <h2>Temoignages</h2>
    </v-row>
    <v-row>
      <v-carousel :show-arrows="false" hide-delimiter-background :interval="5000" :cycle="true">
        <v-carousel-item v-for="(item,i) in items" :key="i">
          <p>{{item.src}}</p>
        </v-carousel-item>
      </v-carousel>
    </v-row>

  </section>
</template>

<script src="./temoignages.js">
</script>