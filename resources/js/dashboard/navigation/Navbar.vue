<template>
  <v-row>
    <!-- <v-toolbar-title>Intidetour</v-toolbar-title>
    <v-btn text to="/dashboard">Home</v-btn>
    <v-btn text to="/">Retour au site</v-btn>-->
    <v-col>
      <v-card class="pa-2 adminNavbar" outlined tile>
        <h2 class="d-flex marginL">Intidetour</h2>
        <div class="marginR">
          <v-btn class="padding d-flex" text to="/dashboard">Home</v-btn>
          <v-btn class="padding" text to="/">Retour au site</v-btn>
        </div>
      </v-card>
    </v-col>
  </v-row>
</template>

<style scoped>
body{
  margin: 0;
  padding: 0;
}
.adminNavbar {
  display: flex;
  justify-content: row wrap;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  background-color: lightgrey;
}
.marginL {
  margin-left : 5%;
}
.marginR {
  margin-right : 5%;
  width: 10%;
}
.padding {
  padding-right : 5%;
  padding-left : 5%; 
}
</style>