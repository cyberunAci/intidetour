<template>
  <v-container class="grey mb-8">
    <v-row v-for="(info, key) in userInfos" :key="key">
      <v-col cols="12" md="3">
        <v-card>
          <div class="text-center">
            <v-img height="250" src="https://cdn.vuetifyjs.com/images/cards/cooking.png">
              <v-avatar class="profile mx-auto my-6" color="grey" size="164">
                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
              </v-avatar>
            </v-img>

            <v-card-title class="justify-center">{{info.prenom}} {{info.nom}}</v-card-title>

            <v-card-text>
              <div>accro de rando</div>
            </v-card-text>
          </div>
        </v-card>

        <!-- a propos de moi  -->
        <v-card class="mt-3">
          <div class="text-center">
            <v-card-title class="justify-center primary">mes informations  <v-spacer/>
            <v-btn to="/editprofil" >modifier</v-btn>
            </v-card-title> 
          </div>
          <v-divider></v-divider>
          <v-expansion-panels>
            <v-expansion-panel>
              <v-expansion-panel-header>
                <v-list-item>
                  <v-list-item-action>
                    <v-icon>mdi-folder</v-icon>
                  </v-list-item-action>
                  <v-list-item-content>
                    <v-list-item-title>mon historique</v-list-item-title>
                  </v-list-item-content>
                </v-list-item>
              </v-expansion-panel-header>
              <v-expansion-panel-content
                v-for="(infoCircuit, index) in info.circuit"
                :key="index"
              >{{infoCircuit.nom}}</v-expansion-panel-content>
            </v-expansion-panel>

            <v-expansion-panel>
              <v-expansion-panel-header>
                <v-list-item>
                  <v-list-item-action>
                    <v-icon>mdi-folder</v-icon>
                  </v-list-item-action>
                  <v-list-item-content>
                    <v-list-item-title>mes succès</v-list-item-title>
                  </v-list-item-content>
                </v-list-item>
              </v-expansion-panel-header>
              <v-expansion-panel-content
                v-for="(infoSucces, index) in info.success"
                :key="index"
              >{{infoSucces.nom}}</v-expansion-panel-content>
            </v-expansion-panel>

            <v-expansion-panel>
              <v-expansion-panel-header>
                <v-list-item>
                  <v-list-item-action>
                    <v-icon>mdi-folder</v-icon>
                  </v-list-item-action>
                  <v-list-item-content>
                    <v-list-item-title>mes infos personnelles</v-list-item-title>
                  </v-list-item-content>
                </v-list-item>
              </v-expansion-panel-header>
              <v-expansion-panel-content>Nom: {{info.nom}}</v-expansion-panel-content> 
              <v-expansion-panel-content>Prenom: {{info.prenom}}</v-expansion-panel-content>
              <v-expansion-panel-content>Email: {{info.email}}</v-expansion-panel-content>
              <v-expansion-panel-content>Tel: {{info.tel}}</v-expansion-panel-content>
              <v-expansion-panel-content>Date De Naissance: {{info.date_naissance}}</v-expansion-panel-content>
                 
            </v-expansion-panel>
          </v-expansion-panels>

          
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

<script src="./EditProfil.js"></script>
