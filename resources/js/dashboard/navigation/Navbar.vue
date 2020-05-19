<template>
  <v-row>
    <v-col>
      <v-card class="pa-5 d-flex flex-row align-items-center" outlined tile>
        <h2 class="d-flex flex-fill p-2 h-100">Intidetour Dashboard</h2>
        <div class="d-flex flex-row">
          <v-btn class="padding d-flex" text to="/dashboard">Home</v-btn>
          <!-- 'to' utilise les component de view -->
          <v-btn class="padding d-flex" text to="/dashboard/success">Succes</v-btn>
          <v-btn class="padding d-flex" text to="/dashboard/users">Clients</v-btn>
          <v-btn class="padding d-flex" text to="/dashboard/catalogue">Catalogue</v-btn>
          <v-btn class="padding d-flex" text to="/dashboard/galerie">Galerie</v-btn>
          <v-btn class="padding d-flex" text to="/dashboard/apropos">À propos</v-btn>
          <v-btn class="padding d-flex" text @click="logout">Se deconnecter</v-btn>

          <v-btn class="padding d-flex" text href="/">Retour au site</v-btn>
        </div>
      </v-card>
    </v-col>
  </v-row>
</template>
<script>
import { authenticationService } from "../_services/authentication.service";
import router from "../routes";
export default {
  methods: {
    logout() {
      authenticationService.logout();
      router.push("/dashboard/login");
    }
  }
};
</script>