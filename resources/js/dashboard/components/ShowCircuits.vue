<template>
  <v-container>
    <v-row>
      <v-card class="mx-auto my-5" max-width="500" v-for="(circuit,key) in circuits" :key="key">
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
                <v-card-title v-text="circuit.nom"></v-card-title>
                <v-spacer />
                <v-tooltip bottom>
                  <template v-slot:activator="{ on }">
                    <v-btn color="primary" icon dark v-on="on">
                      <v-icon>mdi-pencil</v-icon>
                    </v-btn>
                  </template>
                  <span>Editer</span>
                </v-tooltip>
                <deleteCircuit v-bind:circuit="circuit" v-bind:circuits="circuits"></deleteCircuit>
              </v-card-actions>
            </v-col>
          </v-row>
        </v-container>
      </v-card>
    </v-row>
  </v-container>
</template>

<script src="./ShowCircuits.js"></script>
