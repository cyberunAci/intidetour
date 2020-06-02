<template>
  <v-footer dark padless>
    <v-card flat tile class="blue-grey white--text text-center">
      <v-card-text></v-card-text>
      <v-card-text class="white--text pt-0">
        Phasellus feugiat arcu sapien, et iaculis ipsum elementum sit amet. Mauris cursus commodo interdum.
        Praesent ut risus eget metus luctus accumsan id ultrices nunc.
        Duis commodo vitae velit et faucibus.
        Nulla placerat augue vel ipsum ultrices, cursus iaculis dui sollicitudin.
      </v-card-text>

      <v-divider></v-divider>

      <v-card-text class="white--text">
        {{ new Date().getFullYear() }} —
        <strong>Intidétour</strong> —
        <router-link to="/cgu" class="white--text pl-2" style="text-decoration:none;">CGU</router-link>
      </v-card-text>
    </v-card>
  </v-footer>
</template>

