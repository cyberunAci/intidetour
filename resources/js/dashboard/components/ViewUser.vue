<template>
  <v-dialog v-model="dialog" max-width="300px">
    <template v-slot:activator="{ on }">
      <v-btn  dark v-on="on">Information</v-btn>
    </template> 
    <v-card >
      <v-divider></v-divider>
      <div class="text-right">
        <v-btn color="blue darken-1" text @click="dialog = false">X</v-btn>
      </div>
      <v-card-text class="text-center">
        <v-list-item-avatar color="grey" size="90"></v-list-item-avatar>
        <p>{{user.nom}}</p>
        <p>{{user.prenom}}</p>
        <p>{{user.email}}</p>
        <p>{{user.date_naissance}}</p>
        <p>{{user.tel}}</p>
        <p><v-btn color="primary" dark v-on="on">Mot de passe</v-btn></p>
      </v-card-text>
      <v-divider></v-divider>
    </v-card>
  </v-dialog>
</template>

<script src="./ViewUser.js">
</script>