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
    <v-container>
      <DashboardFooter />
    </v-container>
  </v-app>
</template>

<script>
import Navbar from "../navigation/Navbar";
import Footer from "../navigation/Footer";
export default {
  components: { 
    Navbar,
    "DashboardFooter" : Footer
  }
};
</script>