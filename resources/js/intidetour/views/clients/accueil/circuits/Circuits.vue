<template>
  <v-container>
        <section v-for="(circuit,key) in circuits" :key="key">
          <v-card class="mb-3" style="width: 100%;">
            <v-row class="no-gutters">
              <v-col md="4">
                <v-img :src="circuit.image" class="card-img" alt="..." />
              </v-col>
              <v-col md="8">
                <div class="card-body">
                  <h5 class="card-title">{{circuit.nom}}</h5>

                  <v-card-text class="card-text">{{circuit.description}}</v-card-text>
                  <v-card-text class="card-text">
                    <small class="text-muted">durée</small>
                  </v-card-text>
                  <v-card-text class="card-text">
                    <small class="text-muted">distance</small>
                  </v-card-text>
                  <v-card-text class="card-text">
                    <small class="text-muted">{{circuit.difficulte}}</small>
                  </v-card-text>
                  <v-card-text class="card-text">
                    <small class="text-muted">mots cles</small>
                    <small class="text-muted">mots cles</small>
                  </v-card-text>
                </div>
                <!-- <div class="text-right mb-3">
                  <a href="/circuits/{{$circuit->id}}" class="btn btn-primary">Voir plus</a>
                </div> -->
              </v-col> 
            </v-row>
          </v-card>
        </section>
  </v-container>
</template>

<script src="./circuits.js">
</script>