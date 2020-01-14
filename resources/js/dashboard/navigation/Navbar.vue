<template>
  <v-row>
    <v-col>
      <v-card class="pa-2 adminNavbar" outlined tile>
        <h2 class="d-flex marginL">Intidetour</h2>
        <div class="marginR">
          <v-btn class="padding d-flex" text to="/dashboard">Home</v-btn>
<<<<<<< HEAD
          <v-btn class="padding" text to="/dashboard/success">Succes</v-btn>
=======
          <v-btn class="padding d-flex" text to="/dashboard/users">Clients</v-btn>
>>>>>>> f587959184d0e5a98462f4f506336175f1dda697
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
  width: 20%;
}
.padding {
  padding-right : 5%;
  padding-left : 5%; 
}
</style>