<template>
  <div>
    <v-app-bar color="blue-grey">
      <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
      <v-toolbar-title class="white--text">Intidétour</v-toolbar-title>
      <v-spacer></v-spacer>
    </v-app-bar>
    <v-navigation-drawer class="blue-grey" v-model="drawer" absolute temporary>
      <v-list-item>
        <v-list-item-content color="white">
          <v-list-item-title class="font-weight-bold white--text">Intidétour</v-list-item-title>
        </v-list-item-content>
      </v-list-item>

      <v-divider></v-divider>

      <v-list dense>
        <v-list-item link>
          <v-btn text medium to="/" class="white--text">
            <v-list-item-icon>
              <v-icon color="white">mdi-home-outline</v-icon>
            </v-list-item-icon>

            <v-list-item-content>
              <v-list-item-title class="font-weight-bold">Accueil</v-list-item-title>
            </v-list-item-content>
          </v-btn>
        </v-list-item>

        <v-list-item link>
          <v-btn text medium to="/a-propos" class="white--text">
            <v-list-item-icon>
              <v-icon color="white">mdi-head-question-outline</v-icon>
            </v-list-item-icon>

            <v-list-item-content>
              <v-list-item-title class="font-weight-bold">A propos</v-list-item-title>
            </v-list-item-content>
          </v-btn>
        </v-list-item>

        <!-- TODO A CACHER SI PAS CONNECTER -->
        <v-list-item link>
          <v-btn text medium to="/profil" class="white--text">
            <v-list-item-icon>
              <v-icon color="white">mdi-head-question-outline</v-icon>
            </v-list-item-icon>

            <v-list-item-content>
              <v-list-item-title class="font-weight-bold">Profil</v-list-item-title>
            </v-list-item-content>
          </v-btn>
        </v-list-item>

        <v-list-item link v-if="!isChecked">
          <v-btn text medium to="/login" class="white--text">
            <v-list-item-icon>
              <v-icon color="white">mdi-login</v-icon>
            </v-list-item-icon>

            <v-list-item-content>
              <v-list-item-title class="font-weight-bold">Se connecter</v-list-item-title>
            </v-list-item-content>
          </v-btn>
        </v-list-item>
        <v-list-group link v-if="isAdmin">
          <template v-slot:activator>
            <v-btn text medium class="white--text">
              <v-list-item-icon>
                <v-icon color="white">mdi-view-dashboard</v-icon>
              </v-list-item-icon>

              <v-list-item-content>
                <v-list-item-title class="font-weight-bold">Dashboard</v-list-item-title>
              </v-list-item-content>
            </v-btn>
          </template>
          <div small class="ml-4">
            <v-list-item>
              <v-btn text small to="/dashboard/success" class="white--text">
                <v-list-item-icon small>
                  <v-icon small color="white">mdi-trophy-outline</v-icon>
                </v-list-item-icon>

                <v-list-item-content>
                  <v-list-item-title class="font-weight-bold">Succès</v-list-item-title>
                </v-list-item-content>
              </v-btn>
            </v-list-item>
            <v-list-item>
              <v-btn text small to="/dashboard/users" class="white--text">
                <v-list-item-icon small>
                  <v-icon small color="white">mdi-account-outline</v-icon>
                </v-list-item-icon>

                <v-list-item-content>
                  <v-list-item-title small class="font-weight-bold">Utilisateurs</v-list-item-title>
                </v-list-item-content>
              </v-btn>
            </v-list-item>
            <v-list-item>
              <v-btn text small to="/dashboard/catalogue" class="white--text">
                <v-list-item-icon small>
                  <v-icon small color="white">mdi-book-open-page-variant</v-icon>
                </v-list-item-icon>

                <v-list-item-content>
                  <v-list-item-title class="font-weight-bold">Circuits</v-list-item-title>
                </v-list-item-content>
              </v-btn>
            </v-list-item>
            <v-list-item>
              <v-btn text small to="/dashboard/apropos" class="white--text">
                <v-list-item-icon small>
                  <v-icon small color="white">mdi-head-question-outline</v-icon>
                </v-list-item-icon>

                <v-list-item-content>
                  <v-list-item-title class="font-weight-bold">A propos</v-list-item-title>
                </v-list-item-content>
              </v-btn>
            </v-list-item>
            <v-list-item>
              <v-btn text small to="/dashboard/galerie" class="white--text">
                <v-list-item-icon small>
                  <v-icon small color="white">mdi-image-outline</v-icon>
                </v-list-item-icon>

                <v-list-item-content>
                  <v-list-item-title class="font-weight-bold">Galerie</v-list-item-title>
                </v-list-item-content>
              </v-btn>
            </v-list-item>
          </div>
        </v-list-group>
        <v-list-item link v-if="isChecked">
          <v-btn text medium class="white--text" @click="logout()">
            <v-list-item-icon>
              <v-icon color="white">mdi-logout</v-icon>
            </v-list-item-icon>

            <v-list-item-content>
              <v-list-item-title class="font-weight-bold">Deconnexion</v-list-item-title>
            </v-list-item-content>
          </v-btn>
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