<template>
  <div>
    <v-app-bar color="lighten-2">
      <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
      <v-toolbar-title>Intidétour</v-toolbar-title>
      <v-spacer></v-spacer>
    </v-app-bar>
    <v-navigation-drawer v-model="drawer" absolute temporary>
      <v-list-item>
        <v-list-item-content color="white">
          <v-list-item-title class="font-weight-bold">Intidétour</v-list-item-title>
        </v-list-item-content>
      </v-list-item>

      <v-divider></v-divider>

      <v-list dense>
        <v-list-item link>
          <v-list-item-icon>
            <v-icon>mdi-login-variant</v-icon>
          </v-list-item-icon>

          <v-list-item-content>
            <v-list-item-title class="font-weight-bold">
              <router-link :to="{name:'login'}">Se Connecter</router-link>
            </v-list-item-title>
          </v-list-item-content>
        </v-list-item>
        <v-list-item link>
          <v-list-item-icon>
            <v-icon>mdi-home</v-icon>
          </v-list-item-icon>

          <v-list-item-content>
            <v-list-item-title class="font-weight-bold">
              <router-link :to="{name:'main'}">Accueil</router-link>
            </v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
  </div>
</template>
<script>
import { authenticationService } from "../_services/authentication.service";
import { Role } from "../_helpers/role";
import router from "../routes";

export default {
  data() {
    return {
      drawer: null,
      currentUser: null,

      items: [
        { title: "Accueil", icon: "mdi-home" },
        { title: "Dashboard", icon: "mdi-view-dashboard-outline" }
      ]
    };
  },
  computed: {
    isAdmin() {
      return this.currentUser && this.currentUser.role.role === Role.Admin;
    },

    isChecked() {
      return this.currentUser;
    }
  },
  created() {
    authenticationService.currentUser.subscribe(x => (this.currentUser = x));
  },
  methods: {
    logout() {
      authenticationService.logout();
      router.push("/login");
    }
  }
};
</script>