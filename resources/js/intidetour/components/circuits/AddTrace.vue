<template>
  <v-dialog max-width="300px">
    <template v-slot:activator="{ on }">
      <v-btn icon v-on="on">
        <v-icon>mdi-file-plus</v-icon>
      </v-btn>
    </template>
    <v-card>
      <v-container>
        <div v-if="!trace">
          <div v-if="!traces">
            <h4>Aucun fichier gpx upload actuellement</h4>
          </div>
          <div v-else>
            <h4>Le fichier: "{{traces}}" existe déjà</h4>
          </div>

          <input name="trace" type="file" v-on:change="onFileChange" />
        </div>
        <div v-else>
          <h4 class="text-center">Cliquez pour confirmer votre upload ou annuler</h4>
          <br />
          <p class="text-center">
            <v-btn icon v-on:click="uploadGpx">
              <v-icon>mdi-download</v-icon>
            </v-btn>
            <v-btn icon v-on:click="removeGpx">
              <v-icon>mdi-close-circle</v-icon>
            </v-btn>
            <v-dialog v-model="confirm" max-width="290">
              <v-card>
                <h4>Un fichier est sur le point d'être upload, souhaitez-vous continuer?</h4>

                <v-card-actions>
                  <v-spacer></v-spacer>
                  <v-btn
                    color="green darken-1"
                    text
                    v-on:click="confirmGpx"
                    @click="confirm = false"
                  >Continuer</v-btn>

                  <v-btn color="green darken-1" text @click="confirm = false">Annuler</v-btn>
                </v-card-actions>
              </v-card>
            </v-dialog>
          </p>
        </div>

        <alertClient v-bind:text="alert.text" v-bind:actif="alert.actif" v-bind:error="alert.error"></alertClient>
      </v-container>
    </v-card>
  </v-dialog>
</template>

<script src="./AddTrace.js">