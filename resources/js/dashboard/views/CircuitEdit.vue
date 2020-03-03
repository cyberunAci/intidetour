<template>
  <v-container class="d-flex flex-wrap">
    <v-row no-gutters>
      <!-- PHOTO -->
      <v-col cols="12" md="4">
        <div v-if="!photo">
          <input name="photo" type="file" v-on:change="onFileChange" />
        </div>
        <div v-else>
          <img v-bind:src="photo" style="width:200px" />
          <br />
          <v-btn icon v-on:click="greet">
            <v-icon>mdi-download</v-icon>
          </v-btn>
          <v-btn icon v-on:click="removeImg">
            <v-icon>mdi-close-circle</v-icon>
          </v-btn>
        </div>

        <v-img
          :src="circuit.image"
          class="white--text align-end"
          gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
        ></v-img>
      </v-col>
      <!-- ENDPHOTO -->
      <!-- INFORMATION -->
      <v-col cols="12" md="8">





  <v-row >
              <v-col cols="12" sm="3">
                <v-card class="pa-2" outlined tile>One of three columns</v-card>
              </v-col>

              <v-col cols="12" sm="3">
                <v-card class="pa-2" outlined tile>One of three columns</v-card>
              </v-col>

              <v-col cols="12" sm="3">
                <v-card class="pa-2" outlined tile>One of three columns</v-card>
              </v-col>

              <v-col cols="12" sm="3">
                <v-card class="pa-2" outlined tile>One of three columns</v-card>
              </v-col>
            </v-row>

        <v-card-title>
          <div v-for="(item,key) in listboolean" :key="key">
          
            <!-- nom -->

            <div v-if="item.type =='text'">
              <v-col v-if="item.editBoolean" class="m-4">
                <input v-if="item.type==='text'" v-model="item.value" />

                <v-btn icon @click="updateData(item)">
                  <v-icon>mdi-checkbox-marked-outline</v-icon>
                </v-btn>
                <v-btn icon @click="item.editBoolean = false">
                  <v-icon>mdi-close-circle</v-icon>
                </v-btn>
              </v-col>
              <div v-else>
                {{item.value}}
                <v-btn icon @click="item.editBoolean = true">
                  <v-icon>mdi-pencil</v-icon>
                </v-btn>
              </div>
            </div>

            <!-- /nom -->

           
          </div>
        </v-card-title>
      </v-col>
      <!-- END INFORMATION -->
    </v-row>
  </v-container>
</template>

<script src="./CircuitEdit.js"></script>