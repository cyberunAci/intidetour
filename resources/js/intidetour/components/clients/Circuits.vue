<template>
  <section class="d-flex justify-content-center align-items-center m-5">
    <div class="col-lg-6">
      <h2>les circuits</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde sint excepturi ullam qui praesentium? Aperiam accusamus ut voluptas eaque, voluptatibus sit doloremque ratione quo, provident ipsam odit, in iure! Sint?</p>
      <a href="/circuits">Voir tous les circuits -></a>
    </div>
    <v-carousel :show-arrows="false">
      <v-carousel-item v-for="(circuit,key) in circuits" :key="key" :src="circuit.image"></v-carousel-item>
    </v-carousel>
    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione unde et impedit tempora saepe aut beatae incidunt consequatur iste, asperiores doloremque dignissimos optio eum error, ad quisquam, est necessitatibus facilis.</p> -->
  </section>
</template>

<script src="./circuits.js">
</script>