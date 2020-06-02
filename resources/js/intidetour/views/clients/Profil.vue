<template>
  <v-container class="grey mb-8">
    <v-row>
      <v-col cols="12" md="3">
        <v-card>
          <div class="text-center">
            <v-img height="250" src="https://cdn.vuetifyjs.com/images/cards/cooking.png">
              <v-avatar class="profile mx-auto my-6" color="grey" size="164">
                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
              </v-avatar>
            </v-img>

            <v-card-title class="justify-center">Cafe Badilico</v-card-title>

            <v-card-text>
              <div>accro de rando</div>
            </v-card-text>
          </div>

          <v-divider></v-divider>
          <v-list-item>
            <v-list-item-action>
              <v-icon>mdi-folder</v-icon>
            </v-list-item-action>
            <v-list-item-content>
              <v-list-item-title>mon historique</v-list-item-title>
            </v-list-item-content>
          </v-list-item>

          <v-divider></v-divider>

          <v-list-item>
            <v-list-item-action>
              <v-icon>mdi-folder</v-icon>
            </v-list-item-action>
            <v-list-item-content>
              <v-list-item-title>mes recompenses</v-list-item-title>
            </v-list-item-content>
          </v-list-item>

          <v-divider></v-divider>

          <v-list-item>
            <v-list-item-action>
              <v-icon>mdi-folder</v-icon>
            </v-list-item-action>
            <v-list-item-content>
              <v-list-item-title>mes favoris</v-list-item-title>
            </v-list-item-content>
          </v-list-item>

          <v-divider></v-divider>
        </v-card>

        <!-- a propos de moi  -->
        <v-card class="mt-3">
          <div class="text-center">
            <v-card-title class="justify-center primary">mes informations</v-card-title>

            <v-card-text>
              <div>accro de rando</div>
            </v-card-text>
          </div>

          <v-divider></v-divider>
          <v-list-item>
            <v-list-item-action>
              <v-icon>mdi-folder</v-icon>
            </v-list-item-action>
            <v-list-item-content>
              <v-list-item-title>mon historique</v-list-item-title>
            </v-list-item-content>
          </v-list-item>

          <v-divider></v-divider>

          <v-list-item>
            <v-list-item-action>
              <v-icon>mdi-folder</v-icon>
            </v-list-item-action>
            <v-list-item-content>
              <v-list-item-title>mes recompenses</v-list-item-title>
            </v-list-item-content>
          </v-list-item>

          <v-divider></v-divider>

          <v-list-item>
            <v-list-item-action>
              <v-icon>mdi-folder</v-icon>
            </v-list-item-action>
            <v-list-item-content>
              <v-list-item-title>mes favoris</v-list-item-title>
            </v-list-item-content>
          </v-list-item>

          <v-divider></v-divider>
        </v-card>
      </v-col>

      <!-- carte droite -->
      <v-col cols="12" md="9">
        <v-card height="100%">
          <!-- ligne de buttons -->

          <div>
            <v-btn small color="primary" class="ma-2">Primary</v-btn>

            <v-btn small color="primary" class="ma-2">Primary</v-btn>

            <v-btn small color="primary" class="ma-2">Primary</v-btn>
          </div>
          <v-divider></v-divider>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script src="./Profil.js"></script>
