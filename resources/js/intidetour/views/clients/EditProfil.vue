<template>
  <v-container class="grey mb-8">
    <v-row v-for="(info, key) in userInfos" :key="key">
      <v-col cols="12" md="12">
        <v-card>
          <div class="text-center">
            <v-img height="250" src="https://cdn.vuetifyjs.com/images/cards/cooking.png">
              <v-avatar class="profile mx-auto my-6" color="grey" size="164">
                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
              </v-avatar>
            </v-img>

            <!-- image profil -->
            <v-row class="pa-2">
              <v-col cols="6" sm="6" md="6" class="d-flex align-center mb-6">
                <v-file-input multiple label="File input"></v-file-input>modifier image de profil
              </v-col>
            </v-row>
            <!-- /image profil -->

            <!-- image Background -->
            <v-row class="pa-2">
              <v-col cols="6" sm="6" md="6" class="d-flex align-center mb-6">
                <v-file-input multiple label="File input"></v-file-input>modifier image de fond
              </v-col>
            </v-row>
            <!-- /image Background -->

            <v-row class="pa-2">
              <v-col cols="12" sm="6" md="6">
                <v-text-field label="Nom" outlined></v-text-field>
              </v-col>

              <v-col cols="12" sm="6" md="6">
                <v-text-field label="Prenom" outlined></v-text-field>
              </v-col>

              <v-col cols="12" sm="12" md="12">
                <v-text-field label="Titre" outlined></v-text-field>
              </v-col>

              <v-col cols="12" sm="12" md="12">
                <v-textarea
                  v-model="desc"
                  label="Description"
                  counter
                  maxlength="120"
                  full-width
                  single-line
                ></v-textarea>
              </v-col>

              <v-col cols="12" sm="12" md="12">
                <v-text-field label="Email" outlined></v-text-field>
              </v-col>

              <v-col cols="12" sm="6" md="6">
                <v-text-field label="Password" outlined></v-text-field>
              </v-col>

              <v-col cols="12" sm="6" md="6">
                <v-text-field label="Verifie Password" outlined></v-text-field>
              </v-col>

              <v-col cols="12" sm="12" md="12">
                <v-text-field label="adresse" outlined></v-text-field>
               
              </v-col>

              <v-col cols="12" sm="12" md="12">
      
                <v-text-field label="complement d' adresse" outlined></v-text-field>
              </v-col>

              <v-col cols="12" sm="6" md="6" class="ma-0">
                <v-text-field label="Ville" outlined></v-text-field>
              </v-col>

              <v-col cols="12" sm="6" md="6">
                <v-text-field label="Verifie Code Postal" outlined></v-text-field>
              </v-col>
            </v-row>

            <v-card-text>
              <v-btn small color="primary">Valider</v-btn>
            </v-card-text>
          </div>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script src="./EditProfil.js"></script>
