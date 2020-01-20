<template>
  <div class="text-center">
    <v-dialog v-model="dialog" width="500">
      <template v-slot:activator="{ on }">
        <v-btn color="success"  icon v-on="on">
          <v-icon>mdi-pencil</v-icon>
        </v-btn>
      </template>

      <v-card>
        <v-card-title class="headline grey lighten-2" primary-title>
          <v-row>{{circuit.nom}}</v-row>
        </v-card-title>
        <v-divider></v-divider>
        <v-card-text>
          <label>Difficulé du circuit:</label>
          <p><input type="text" name="" v-model="circuit.difficulte"> </p>
           <label>Description du circuit:</label>
          <p> </p>
          <v-spacer></v-spacer>
          <v-btn color="primary" text @click="dialog = false">I accept</v-btn>
        </v-card-text>

        <hr />
        <!-- ajout d une image -->
        <v-btn color="success" icon v-on="on">
          <v-icon>mdi-pencil</v-icon>
        </v-btn>

        <!-- input pour ajouter une fichier -->
        <v-file-input
          v-model="files"
          color="deep-purple accent-4"
          counter
          label="File input"
          multiple
          placeholder="Select your files"
          prepend-icon="mdi-paperclip"
          outlined
          :show-size="1000"
        >
          <template v-slot:selection="{ index, text }">
            <v-chip v-if="index < 2" color="deep-purple accent-4" dark label small>{{ text }}</v-chip>

            <span
              v-else-if="index === 2"
              class="overline grey--text text--darken-3 mx-2"
            >+{{ files.length - 2 }} File(s)</span>
          </template>
        </v-file-input>

        <hr />

        <template>
          <div class="container">
            <div class="large-12 medium-12 small-12 cell">
              <label>
                File
                <input type="file" id="file" ref="file" @change="onFileSelected" />
              </label>
              <button @click="onUpload">Upload</button>
            </div>
          </div>
        </template>
      </v-card>
    </v-dialog>
  </div>
</template>


      </v-card>
    </v-dialog>
  </div>
</template>

<script src="./showCircuit.js">