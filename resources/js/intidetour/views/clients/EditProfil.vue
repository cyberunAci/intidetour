<template>
  <v-container class="grey mb-8">
    <form>
      <v-row v-for="(info, key) in userInfos" :key="key">
        <v-col cols="12" md="12">
          <v-card>
            <div class="text-center">
              <v-img height="250" src="https://cdn.vuetifyjs.com/images/cards/cooking.png">
                <v-avatar class="profile mx-auto my-6" color="grey" size="164">
                  <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                </v-avatar>
              </v-img>

              <form class="mx-2">
                <!-- nom -->
                <v-text-field
                  v-model="name"
                  :error-messages="nameErrors"
                  :counter="10"
                  label="Nom"
                  required
                  @input="$v.name.$touch()"
                  @blur="$v.name.$touch()"
                ></v-text-field>
                <!-- /nom -->

                <!-- prenom -->
                <v-text-field
                  v-model="prenom"
                  :error-messages="prenameErrors"
                  :counter="10"
                  label="Prenom"
                  required
                  @input="$v.prenom.$touch()"
                  @blur="$v.prenom.$touch()"
                ></v-text-field>
                <!-- /prenom -->

                <!-- email -->
                <v-text-field
                  v-model="email"
                  :error-messages="emailErrors"
                  :counter="30"
                  label="email"
                  required
                  @input="$v.email.$touch()"
                  @blur="$v.email.$touch()"
                ></v-text-field>

                <!-- /email -->

                <!-- telephone -->
                <v-text-field
                  v-model="telephone"
                  :error-messages="telephoneErrors"
                  :counter="10"
                  label="telephone"
                  required
                  @input="$v.telephone.$touch()"
                  @blur="$v.telephone.$touch()"
                ></v-text-field>
                <!-- /telephone -->

                <!-- MDP -->
                <!-- <v-text-field
                  v-model="mdp"
                  :error-messages="mdpErrors"
                  :counter="10"
                  label="mot de passe"
                  required
                  @input="$v.mdp.$touch()"
                  @blur="$v.mdp.$touch()"
                ></v-text-field> -->
                <!-- /MDP -->


                 <!-- date -->
                <v-col cols="12" sm="6" md="4">
                  <v-menu
                    v-model="menu2"
                    :close-on-content-click="false"
                    :nudge-right="40"
                    transition="scale-transition"
                    offset-y
                    min-width="290px"
                  >
                    <template v-slot:activator="{ on, attrs }">
                      <v-text-field
                        v-model="date"
                        label="Date de naissance"
                        readonly
                        v-bind="attrs"
                        v-on="on"
                      ></v-text-field>
                    </template>
                    <v-date-picker v-model="date" @input="savedate"></v-date-picker>
                  </v-menu>
                </v-col>
                 <!-- /date -->
                
                <v-btn class="mr-4" @click="submit">submit</v-btn>
                <v-btn @click="clear">clear</v-btn>
              </form>
            </div>
          </v-card>
        </v-col>
      </v-row>
    </form>

    <passwordUpdate></passwordUpdate>
  </v-container>
</template>

<script src="./EditProfil.js"></script>
