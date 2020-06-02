<template>
  <v-container fluid>
    <section>
      <v-row>
        <v-col>
          <v-row>
            <h2>C'est quoi Intidetour ?</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo beatae reiciendis, saepe illum velit dignissimos doloremque quis fugiat hic tempore animi rem error possimus nisi repellat soluta laborum. Facilis, consectetur.</p>
          </v-row>
          <v-row>
            <h3>Installer Intidetour ?</h3>
          </v-row>
          <v-row>
            <v-col>
              <v-btn color="primary">Google Play</v-btn>
            </v-col>
            <v-col>
              <v-btn color="primary">App Store</v-btn>
            </v-col>
          </v-row>
        </v-col>
        <v-col>
          <v-responsive :aspect-ratio="16/9">
            <img src="https://via.placeholder.com/1000x600" alt />
          </v-responsive>
        </v-col>
      </v-row>
    </section>
    <equipe></equipe>
    <circuits></circuits>
    <v-divider class="mt-5 mb-5"></v-divider>
    <fonctionnalite></fonctionnalite>
    <Newsletter></Newsletter>
    <temoignages></temoignages>
  </v-container>
</template>

<script src="./accueil.js">
</script>