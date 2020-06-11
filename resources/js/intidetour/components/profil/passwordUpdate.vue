<template>
    <div>

        <v-card>
  <v-row  >
             <v-col  cols="12" md="12">
                 <!-- mdp -->
                <v-text-field
                  class="mx-2"
                  v-model="password"
                  :error-messages="passwordErrors"
                  :counter="10"
                  label="Mot de passe"
                  required
                  @input="$v.password.$touch()"
                  @blur="$v.password.$touch()"
                ></v-text-field>
                <!-- /mdp -->


                 <!-- newmdp -->
                  <v-text-field
                  class="mx-2"
                  v-model="newPassword"
                  :error-messages="newPasswordErrors"
                  :counter="10"
                  label="Nouveau Mot de passe"
                  required
                  @input="$v.newPassword.$touch()"
                  @blur="$v.newPassword.$touch()"
                ></v-text-field>
                 <!-- /newmdp -->

                   <!-- newmdpConfirmation -->
                  <v-text-field
                  class="mx-2"
                  v-model="newPasswordConfirmation"
                  :error-messages="newPasswordConfirmationErrors"
                  :counter="10"
                  label="Confimer le nouveau Mot de passe"
                  required
                  @input="$v.newPasswordConfirmation.$touch()"
                  @blur="$v.newPasswordConfirmation.$touch()"
                ></v-text-field>
                 <!-- /newmdp -->
             </v-col>
      </v-row>

        </v-card>
    
    </div>
</template>

<script src="./passwordUpdate.js">

</script>