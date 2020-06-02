<template>
  <div>
    <v-card class="ma-5 pa-3">
      <v-row class="d-flex">
        <v-col class="text-center">
          <h1>Editer le À-propos</h1>
        </v-col>
        <updateApropos></UpdateApropos>
      </v-row>
      <showApropos v-on:updateApropos="Apropos.push($event)"></showApropos>
    </v-card>
  </div>
</template>

<script src="./Apropos.js"/>