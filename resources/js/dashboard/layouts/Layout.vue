<template>
  <v-app>
    <v-container>
      <navbar></navbar>
    </v-container>
    <v-content>
      <v-container fluid>
        <router-view></router-view>
      </v-container>
    </v-content>
  </v-app>
</template>

<script>
import Navbar from "../navigation/Navbar";
export default {
  components: { Navbar }
};
</script>