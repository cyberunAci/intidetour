<template>
  <v-container fluid class="ma-0 pa-0">
    <section>
      <v-row>
        <v-col class="ma-0 pa-0">
          <v-responsive :aspect-ratio="16/9">
            <v-img src="https://via.placeholder.com/1000x450" alt class="align-center">
              <v-col cols="5" class="align-center ma-5">
                <v-row>
                  <h2>C'est quoi Intidetour ?</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo beatae reiciendis, saepe illum velit dignissimos doloremque quis fugiat hic tempore animi rem error possimus nisi repellat soluta laborum. Facilis, consectetur.</p>
                </v-row>
                <v-row>
                  <h3>Installer Intidetour ?</h3>
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