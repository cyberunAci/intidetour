<template>
  <v-container>
    <h2 class="login-heading">Connection</h2>
    <v-form action="#" ref="form" v-model="valid">
      <p>E-mail : Admin@Admin.com</p>
      <p>Password : 123456789</p>
      <v-text-field
        v-model="username"
        label="E-mail"
        required
        :rules="[v => !!v || 'Identifiant requis']"
      ></v-text-field>
      <v-text-field
        v-model="password"
        label="Password"
        required
        :rules="[v => !!v || 'Mot de passe requis']"
      ></v-text-field>
      <v-btn color="success" class="mr-4" @click="login">Se connecter</v-btn>
    </v-form>
  </v-container>
</template>

<script src="./Login.js"></script>