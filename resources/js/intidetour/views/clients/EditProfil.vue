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

    <v-btn class="mr-4" @click="submit">submit</v-btn>
    <v-btn @click="clear">clear</v-btn>
  </form>

            </div>
          </v-card>
        </v-col>
      </v-row>
    </form>
  </v-container>
</template>

<script src="./EditProfil.js"></script>
