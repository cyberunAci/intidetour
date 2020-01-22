<template>
  <v-row>
    <v-col>
      <v-card class="pa-2 adminNavbar" outlined tile>
        <h2 class="d-flex marginL">Intidetour</h2>
        <div class="marginR">
          <v-btn class="padding d-flex" text to="/dashboard">Home</v-btn>
          <v-btn class="padding d-flex" text to="/dashboard/success">Succes</v-btn>
          <v-btn class="padding d-flex" text to="/dashboard/users">Clients</v-btn>
          <v-btn class="padding d-flex" text to="/dashboard/catalogue">Catalogue</v-btn>
          <v-btn class="padding d-flex" text to="/dashboard/uploadFile">uploadFile</v-btn>
          <v-btn class="padding d-flex" text to="/dashboard/apropos">À propos</v-btn>
          <v-btn class="padding d-flex" text to="/">Retour au site</v-btn>
        </div>
      </v-card>
    </v-col>
  </v-row>
</template>

<style scoped>
body {
  margin: 0;
  padding: 0;
}
.adminNavbar {
  display: flex;
  justify-content: row wrap;
  justify-content: space-between;
  align-items: center;
}
.marginL {
  margin-left: 2%;
}
.marginR {
  width: 20%;
}
.padding {
  padding-right: 5%;
  padding-left: 5%;
}
</style>