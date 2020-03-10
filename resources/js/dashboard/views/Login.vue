<template>
  <v-container>
    <h2 class="login-heading">Connection</h2>
    <v-form action="#" @submit.prevent="login">
      <v-text-field v-model="username" label="E-mail" required></v-text-field>
      <v-text-field v-model="password" label="Password" required></v-text-field>
      <v-btn color="success" class="mr-4" @click="validate">Se connecter</v-btn>
    </v-form>
  </v-container>
</template>

<script src="./Login.js"></script>