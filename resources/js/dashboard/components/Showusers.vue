<template>
<v-container>

 
      <h1 class="text-center my-10">{{formTitle}}</h1>


  <v-row>
    

  <v-card class="mx-auto my-5 text-center" v-for="(user,key) in users" :key="key">
    <v-list-item>
    <v-btn text color="deep-purple accent-4 text-right">Supprimer</v-btn>

    <v-dialog v-model="dialog" scrollable max-width="300px">
    
    <template v-slot:activator="{ on }">
    <v-btn text color="blue lighten-2 accent-4 text-right" dark v-on="on">Modifier</v-btn>      
    </template>

    </v-dialog>
    </v-list-item>
    <v-list-item-avatar color="grey" size="90"></v-list-item-avatar>
    <v-list-item>
      <v-list-item-content>
        <v-list-item-title class="headline">{{user.nom}}</v-list-item-title>
      </v-list-item-content>
    </v-list-item>


    <v-card-actions>
      <v-spacer></v-spacer>
      <v-btn icon>
        <v-icon>mdi-heart</v-icon>
      </v-btn>
      <v-btn icon>
        <v-icon>mdi-share-variant</v-icon>
      </v-btn>
    </v-card-actions>

  </v-card>
  
</v-row>
  </v-container>
</template>

<script src="./showusers.js"></script>
