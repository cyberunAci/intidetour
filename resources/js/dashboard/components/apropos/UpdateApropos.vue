<template>
  <div>
    <v-card class="ma-5 pa-3">
      <v-row class="d-flex">
        <v-col class="text-center">
          <h1>Editer le À-propos</h1>
        </v-col>
        <v-col class="text-center">
          <v-dialog v-model="editerAPropos" width="75%" height="100%">
            <template v-slot:activator="{ on }">
              <v-btn color="success" dark v-on="on" width="50%">Èditer</v-btn>
            </template>
            <v-card>
              <v-card-title class="headline grey lighten-2" primary-title>Editer le À-propos</v-card-title>
              <v-textarea
                v-model="text"
                :rules="textRules"
                label="Texte du à propos"
                required
                class="ma-5"
                text
              ></v-textarea>
              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn color="primary" text @click="checkApropos">Valider</v-btn>
                <v-btn color="primary" text @click="editerAPropos = false">Fermer</v-btn>
              </v-card-actions>
            </v-card>
          </v-dialog>
        </v-col>
      </v-row>

      <v-card class="ma-2">
        <h2 class="pa-2">À propos</h2>
        <p
          class="pa-2"
        >Lorem ipsum dolor sit amet consectetur adipisicing elit. Error quidem sed commodi pariatur blanditiis aut recusandae ipsum. Asperiores delectus odio deserunt, magni quibusdam velit a vitae illum quidem autem eligendi?</p>
      </v-card>
    </v-card>
  </div>
</template>

<script src="./UpdateApropos.js"/>