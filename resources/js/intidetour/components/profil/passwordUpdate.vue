<template>
    <div>

        <v-card>
  <v-row  >
             <v-col  cols="12" md="12">
                 <!-- mdp -->
                <v-text-field
                  class="mx-2"
                  v-model="mdp"
                  :error-messages="mdpErrors"
                  :counter="10"
                  label="Mot de passe"
                  required
                  @input="$v.mdp.$touch()"
                  @blur="$v.mdp.$touch()"
                ></v-text-field>
                <!-- /mdp -->


                 <!-- newmdp -->
                  <v-text-field
                  class="mx-2"
                  v-model="newmdp"
                  :error-messages="newmdpErrors"
                  :counter="10"
                  label="Nouveau Mot de passe"
                  required
                  @input="$v.newmdp.$touch()"
                  @blur="$v.newmdp.$touch()"
                ></v-text-field>
                 <!-- /newmdp -->

                   <!-- newmdpConfirmation -->
                  <v-text-field
                  class="mx-2"
                  v-model="newmdpConfirmation"
                  :error-messages="newmdpConfirmationErrors"
                  :counter="10"
                  label="Confimer le nouveau Mot de passe"
                  required
                  @input="$v.newmdpConfirmation.$touch()"
                  @blur="$v.newmdpConfirmation.$touch()"
                ></v-text-field>
                 <!-- /newmdp -->
             </v-col>
      </v-row>

        </v-card>
    
    </div>
</template>

<script src="./passwordUpdate.js">

</script>