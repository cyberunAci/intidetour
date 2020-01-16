<template>
  <v-container>
    <h1 class="text-center my-10">{{formTitle}}</h1>

    <v-row>
      <v-card class="mx-auto my-5 text-center" v-for="(user,key) in users" :key="key" v-on="on">
        <viewUser v-bind:user="user"></viewUser>
        
        <v-list-item>
          <v-btn text color="deep-purple accent-4 text-right">Supprimer</v-btn>
        </v-list-item>
        <v-list-item-avatar color="grey" size="90"></v-list-item-avatar>
        <v-list-item>
          <v-list-item-content>
            <v-list-item-title class="headline">{{user.nom}}</v-list-item-title>
            <v-list-item-title class="headline">{{user.photo}}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>

      </v-card>
    </v-row>
  </v-container>
</template>

<script src="./showusers.js"></script>
