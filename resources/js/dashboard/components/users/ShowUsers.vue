<template>
  <v-container>
    <h1 class="text-center my-10">{{formTitle}}</h1>

    <v-row>
      <v-card class="mx-auto my-5 text-center" v-for="(user,key) in users" :key="key">
        <v-list-item-avatar color="grey" size="90"></v-list-item-avatar>
        <v-list-item>
          <v-list-item-content>
            <v-list-item-title class="headline">{{user.nom}}</v-list-item-title>
            <v-list-item-title class="headline">{{user.photo}}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>

        <v-card-actions>
          <v-spacer></v-spacer>
          <showUser v-bind:user="user"></showUser>
          <deleteUser v-on:userToDelete='users.splice(key, 1)' v-bind:user="user" v-bind:users="users"></deleteUser>
        </v-card-actions>
      </v-card>
    </v-row>
  </v-container>
</template>

<script src="./ShowUsers.js"></script>
