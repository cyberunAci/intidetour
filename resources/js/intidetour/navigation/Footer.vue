<template>
  <v-footer dark padless class="ma-0 pa-0">
    <v-card flat tile class="grey darken-3 white--textma-0 pa-0" width="auto" max-height="auto">
      <v-row class="ma-0 pa-0 align-center">
        <v-col cols="12" md="3" sm="6" xs="12" class="pa-2 my-2">
          <v-img
            src="/storage/img/INTIDETOUR.png"
            height="150px"
            contain
            aspect-ratio="1.7"
            position="start"
            class="ma-0 pa-0"
          ></v-img>
          <v-list dense class="grey darken-3 ma-5">
            <v-list-item-title class="title">Site map</v-list-item-title>
            <v-row>
              <v-col>
                <v-list dense nav class="grey darken-3">
                  <v-list-item link>
                    <v-list-item-content>
                      <v-list-item-title to="/">Accueil</v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
                  <v-list-item link>
                    <v-list-item-content>
                      <v-list-item-title to="/a-propos">À propos</v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
                  <v-list-item link>
                    <v-list-item-content>
                      <v-list-item-title to="/profil">Profil</v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
                  <v-list-item link>
                    <v-list-item-content>
                      <v-list-item-title>CGU</v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
                </v-list>
              </v-col>
              <v-col>
                <v-list dense nav class="grey darken-3">
                  <v-list-item link>
                    <v-list-item-content>
                      <v-list-item-title>Test</v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
                  <v-list-item link>
                    <v-list-item-content>
                      <v-list-item-title>Test</v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
                  <v-list-item link>
                    <v-list-item-content>
                      <v-list-item-title>Test</v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
                  <v-list-item link>
                    <v-list-item-content>
                      <v-list-item-title>Test</v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
                </v-list>
              </v-col>
            </v-row>
          </v-list>
        </v-col>
        <v-col cols="12" md="3" sm="6" xs="12" class="pa-2 my-2">
          <p class="text-justify body-2 ma-3">
            Phasellus feugiat arcu sapien, et iaculis ipsum elementum sit amet. Mauris cursus commodo interdum.
            Praesent ut risus eget metus luctus accumsan id ultrices nunc.
            Duis commodo vitae velit et faucibus.
          </p>
          <p class="text-justify body-2 ma-3">
            Phasellus feugiat arcu sapien, et iaculis ipsum elementum sit amet. Mauris cursus commodo interdum.
            Praesent ut risus eget metus luctus accumsan id ultrices nunc.
            Duis commodo vitae velit et faucibus.
          </p>
          <p class="text-justify body-2 ma-3">
            Phasellus feugiat arcu sapien, et iaculis ipsum elementum sit amet. Mauris cursus commodo interdum.
            Praesent ut risus eget metus luctus accumsan id ultrices nunc.
            Duis commodo vitae velit et faucibus.
          </p>
        </v-col>
        <v-col cols="12" md="3" sm="6" class="pa-2 justify-center my-2">
          <v-row class="pa-0 justify-center">
            <v-img
              src="/storage/img/sponsor/UE.png"
              aspect-ratio="1"
              max-width="150px"
              min-height="100%"
              class="grey lighten-2 ma-1"
            ></v-img>
            <v-img
              src="/storage/img/sponsor/LEADER.png"
              aspect-ratio="1"
              max-width="150px"
              min-height="100%"
              class="grey lighten-2 ma-1"
            ></v-img>
            <v-img
              src="/storage/img/sponsor/Departement.jpeg"
              aspect-ratio="1"
              max-width="150px"
              min-height="100%"
              class="grey lighten-2 ma-1"
            ></v-img>
          </v-row>
          <v-row class="pa-0 justify-center">
            <v-img
              src="/storage/img/sponsor/Region.png"
              aspect-ratio="1"
              max-width="150px"
              min-height="100%"
              class="grey lighten-2 ma-1"
            ></v-img>
            <v-img
              src="/storage/img/sponsor/PREFET.jpg"
              aspect-ratio="1"
              max-width="150px"
              min-height="100%"
              class="grey lighten-2 ma-1"
            ></v-img>
            <v-img
              src="/storage/img/sponsor/TroisBassins.png"
              aspect-ratio="1"
              max-width="150px"
              min-height="100%"
              class="grey lighten-2 ma-1"
            ></v-img>
          </v-row>
          <v-row class="pa-0 justify-center">
            <v-img
              src="/storage/img/sponsor/TCO.png"
              aspect-ratio="1"
              max-width="150px"
              min-height="100%"
              class="grey lighten-2 ma-1"
            ></v-img>
            <v-img
              src="/storage/img/sponsor/TERGAL.png"
              aspect-ratio="1"
              max-width="150px"
              min-height="100%"
              class="grey lighten-2 ma-1"
            ></v-img>
          </v-row>
        </v-col>
        <v-col cols="12" md="3" sm="6" xs="12" class="pa-2 my-2">
          <v-subheader
            class="pa-2 mb-2"
          >Rester au courant des derniere news? C'est possible avec notre newsletter!</v-subheader>
          <v-text-field
            label="E-mail"
            placeholder="Entrer votre addresse mail"
            outlined
            class="pa-2"
          ></v-text-field>
          <v-spacer></v-spacer>
          <v-subheader class="pa-2 mb-2">Suivez nous sur nos réseaux sociaux !</v-subheader>
          <v-row class="text-center pa-2 justify-center">
            <v-img
              src="/storage/img/reseausociaux/twitter.png"
              aspect-ratio="1"
              max-width="150px"
              max-height="auto"
              class="grey lighten-2 ma-1"
            ></v-img>
            <v-img
              src="/storage/img/reseausociaux/facebook.png"
              aspect-ratio="1"
              max-width="150px"
              max-height="auto"
              class="grey lighten-2 ma-1"
            ></v-img>
            <v-img
              src="/storage/img/reseausociaux/instagramme.png"
              aspect-ratio="1"
              max-width="150px"
              max-height="auto"
              class="grey lighten-2 ma-1"
            ></v-img>
          </v-row>
        </v-col>
      </v-row>
      <v-divider></v-divider>

      <v-card-text class="white--text text-center">
        {{ new Date().getFullYear() }} —
        <strong>Intidétour</strong> —
        <router-link to="/cgu" class="white--text pl-2" style="text-decoration:none;">CGU</router-link>
      </v-card-text>
    </v-card>
  </v-footer>
</template>

