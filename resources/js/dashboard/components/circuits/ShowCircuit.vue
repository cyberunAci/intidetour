<template>
  <v-dialog max-width="300px">

    <template v-slot:activator="{ on }">
      <v-btn class="ma-1" v-on="on">Éditer</v-btn>
    </template>
    <v-card>
      <v-divider></v-divider>
      <div class="text-right">
        <!-- <v-btn color="blue darken-1" text @click="dialog = false">X</v-btn> -->
      </div>
      <v-card-text class="text-center">
        <v-list-item-avatar color="grey" size="90"></v-list-item-avatar>

        <div v-for="(item,key) in modalCircuit" :key="key">
          <v-row v-if="item.editBool" class="mb-4">
            <input v-if="item.type==='text'" v-model="item.value" />

        <!-- VIF datepicker -->
        <datePicker v-bind:item="item" v-if="item.type==='date'" v-model="item.value"></datePicker>

            <v-btn icon @click="updateData(item)">
              <v-icon>mdi-checkbox-marked-outline</v-icon>
            </v-btn>
            <v-btn icon @click="item.editBool = false">
              <v-icon>mdi-close-circle</v-icon>
            </v-btn>
          </v-row>
          <p v-else>
            {{item.value}}
            <v-btn icon @click="item.editBool = true">
              <v-icon>mdi-pencil</v-icon>
            </v-btn>
          </p>
        </div>

      </v-card-text>
      <v-divider></v-divider>
    </v-card>
  </v-dialog>
 </template>



<script src="./showCircuit.js">