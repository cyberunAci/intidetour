<template>
  <v-dialog v-model="boiteSuccess" persistent max-width="1000px">
    <template v-slot:activator="{ on }">
      <v-btn color="secondary lighten-2" v-on="on">
        <h3>Création de success</h3>
      </v-btn>
    </template>
    <v-card class="pa-5">
      <v-card-title>Creation de Succès</v-card-title>
      <v-card-text>
        <v-form id="formSuccess" @submit="checkSuccess">
          <v-text-field
            v-model="nom"
            :counter="25"
            :nom="nom"
            :rules="nomRules"
            label="Nom"
            required
          ></v-text-field>
          <v-text-field v-model="image" :rules="imageRules" label="Image" required></v-text-field>
          <v-textarea
            v-model="description"
            :description="description"
            :rules="descriptionRules"
            label="Description"
            required
          ></v-textarea>
          <v-card class="mx-auto margin ma-5" max-width="600" outlined>
            <v-row>
              <v-col>
                <img class="ma-1" src="https://via.placeholder.com/150" alt />
              </v-col>
              <v-col>
                <h3 class="text-left">{{ nom }}</h3>
                <p>{{ description }}</p>
                <v-row class="text-right">
                  <v-btn class="ma-1" disabled>Editer</v-btn>
                  <v-btn class="ma-1" disabled>Supprimer</v-btn>
                </v-row>
              </v-col>
            </v-row>
          </v-card>
          <div class="text-right">
            <v-btn outlined color="indigo" text @click="checkSuccess">Sauvegarder</v-btn>
            <v-btn outlined color="black" text @click="boiteSuccess = false">Fermer</v-btn>
          </div>
        </v-form>
      </v-card-text>
    </v-card>
  </v-dialog>
</template>

<script src="./AddSuccess.js"></script>