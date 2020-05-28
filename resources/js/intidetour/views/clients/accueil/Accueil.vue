<template>
  <v-container>
    <section class="d-flex justify-content-center align-items-center m-5">
      <div class="col-lg-6 text-left">
        <h2>C'est quoi Intidetour ?</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo beatae reiciendis, saepe illum velit dignissimos doloremque quis fugiat hic tempore animi rem error possimus nisi repellat soluta laborum. Facilis, consectetur.</p>
        <section class="d-flex justify-content-center align-items-center m-2">
          <div class="row">
            <h3>Installer Intidetour ?</h3>
          </div>
          <div class="row m-3">
            <div class="col-lg-6 d-flex align-self-center">
              <v-btn class="m-2">Google Play</v-btn>
            </div>
            <div class="col-lg-6 d-flex align-self-center">
              <v-btn class="m-2">App Store</v-btn>
            </div>
          </div>
        </section>
      </div>
      <div class="col-lg-6 text-right">
        <img src="https://via.placeholder.com/600" alt class="img-fluid" />
      </div>
    </section>
    <equipe></equipe>
    <circuits></circuits>
    <fonctionnalite></fonctionnalite>
    <Newsletter></Newsletter>
    <temoignages></temoignages>
  </v-container>
</template>

<script src="./accueil.js">
</script>