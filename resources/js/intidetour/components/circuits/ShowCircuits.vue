<template>
  <v-container>
    <addCircuit v-on:addCircuit="circuits.push($event)"></addCircuit>

    <v-row>
      <v-card v-for="(circuit,key) in circuits" :key="key" class="mx-auto my-5" max-width="500">
        <v-container fluid>
          <v-row dense>
            <v-col :cols="12">
              <v-img
                :src="circuit.image"
                class="white--text align-end"
                gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
                height="200px"
              ></v-img>
              <v-card-actions>
                <v-card-title>{{circuit.nom}}</v-card-title>
                <v-spacer />
                <router-link :to="{ path: '/dashboard/catalogue/' + circuit.id}">EDITER</router-link>
                <showCircuit v-bind:circuit="circuit"></showCircuit>
                <AddTrace v-bind:circuit="circuit"></AddTrace>
                <deleteCircuit
                  v-on:circuitToDelete="circuits.splice(key, 1)"
                  v-bind:circuit="circuit"
                  v-bind:circuits="circuits"
                ></deleteCircuit>
              </v-card-actions>
            </v-col>
          </v-row>
          <v-row></v-row>
        </v-container>
      </v-card>
    </v-row>
  </v-container>
</template>

<script src="./ShowCircuits.js"></script>
