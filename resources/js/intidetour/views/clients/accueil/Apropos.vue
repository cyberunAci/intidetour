<template>
  <v-container fluid>
    <h1 class="text-center pb-5">A propos de InTiDetour</h1>

    <v-row class="pt-5">
      <v-hover v-slot:default="{ hover }" close-delay="50">
        <v-card
          :elevation="hover ? 16 : 2"
          class="mx-auto"
          v-for="(_apropos,key) in apropos"
          :key="key"
        >
          <v-card-text class="font-weight-medium mt-12 text-center subtitle-1">{{ _apropos.text }}</v-card-text>
        </v-card>
      </v-hover>
    </v-row>
  </v-container>
</template>

<script src="./apropos.js">
</script>