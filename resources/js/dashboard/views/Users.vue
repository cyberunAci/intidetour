<template>
  <v-container fluid>
    <v-row>
      <showuser></showuser>
      <showuser></showuser>
      <showuser></showuser>
      <showuser></showuser>

    </v-row>
    <v-row>
      <showuser></showuser>
      <showuser></showuser>
      <showuser></showuser>
      <showuser></showuser>

    </v-row>
  </v-container>
</template>

<script>
import Showuser from "../components/Showuser.vue";
export default {
  components: {
    Showuser
  }
};
</script>
