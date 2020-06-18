<template>
  <v-container fluid class="ma-0 pa-0">
    <v-row class="ma-0 pa-0">
      <v-col class="ma-0 pa-0">
        <v-img
          src="/storage/img/INTIDETOUR-photo-1.jpg"
          alt
          class="align-center mb-2 pa-1 elevation-6"
          width="auto"
          height="750px"
        >
          <v-col cols="12" md="5" sm="12">
            <v-row>
              <h1 style="
            font-family: 'Anton', sans-serif">C'est quoi Intidetour ?</h1>
              <p style="font-family: 'Asap', sans-serif;" class="test--start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo beatae reiciendis, saepe illum velit dignissimos doloremque quis fugiat hic tempore animi rem error possimus nisi repellat soluta laborum. Facilis, consectetur.</p>
            </v-row>
            <v-row>
              <h3 style="
            font-family: 'Anton', sans-serif">Installer Intidetour ?</h3>
            </v-row>
            <v-row>
              <v-col>
                <v-btn color="primary" width="100%">Google Play</v-btn>
              </v-col>
              <v-col>
                <v-btn color="primary" width="100%">App Store</v-btn>
              </v-col>
            </v-row>
          </v-col>
        </v-img>
      </v-col>
    </v-row>
    <equipe></equipe>
    <section class="d-flex flex-column justify-center ma-2">
      <hr class="ma-10" />
    </section>
    <circuits></circuits>
    <fonctionnalite></fonctionnalite>
    <Newsletter></Newsletter>
    <section class="d-flex flex-column justify-center mt-4 mb-2 mr-2 ml-2">
      <hr class="ma-10" />
    </section>
    <temoignages></temoignages>
  </v-container>
</template>

<script src="./accueil.js">
</script>