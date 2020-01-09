<template>
  <v-app>
    <v-content>
      <v-container fluid>
        <router-link tag="li" to="/dashboard">Home</router-link>
        <router-view></router-view>
      </v-container>
    </v-content>
  </v-app>
</template>

<script>
export default {};
</script>