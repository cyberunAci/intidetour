<template>
<v-card>
        <v-card-title>Select Country</v-card-title>
        <v-divider></v-divider>
        <v-card-text style="height: 300px;">
          <v-form v-model="valid">
    <v-container>
        <v-col
          cols="12"
        >
          <v-text-field
            v-model="nom"
            :rules="nameRules"
            :counter="10"
            label="Nom"
            required
          ></v-text-field>
        </v-col>

        <v-col
          cols="12"
        >
          <v-text-field
            v-model="prenom"
            :rules="nameRules"
            :counter="10"
            label="Prénom"
            required
          ></v-text-field>
        </v-col>

        <v-col
          cols="12"
        >
          <v-text-field
            v-model="email"
            :rules="emailRules"
            label="E-mail"
            required
          ></v-text-field>
        </v-col>

        <v-col
          cols="12"
        >
          <v-text-field
            v-model="email"
            :rules="emailRules"
            label="E-mail"
            required
          ></v-text-field>
        </v-col>
    </v-container>
  </v-form>
        </v-card-text>
        <v-divider></v-divider>
        <v-card-actions>
          <v-btn color="blue darken-1" text @click="dialog = false">Annuler</v-btn>
          <v-btn color="red darken-1" text @click="dialog = false">Sauvegarder</v-btn>
        </v-card-actions>
      </v-card>    
</template>
