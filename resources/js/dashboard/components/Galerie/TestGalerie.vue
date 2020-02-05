<template>
  <v-container fluid>
    <v-layout align-start justify-center>
      <v-spacer></v-spacer>
      <v-flex xs4 class="elevation-1 pa-3 ma-2">
        <v-tabs v-model="active" color="cyan" dark slider-color="yellow">
          <draggable v-model="tabs" class="v-tabs__container">
            <v-tab v-for="tab in tabs" :key="tab.id" ripple>
              {{ tab.name }}
            </v-tab>
          </draggable>
          <v-tab-item v-for="tab in tabs" :key="tab.id">
            <v-card flat>
              <v-card-text>{{ tab.text }}</v-card-text>
            </v-card>
          </v-tab-item>
        </v-tabs>
      </v-flex>
      <v-flex xs4 class="grey lighten-2 pa-2">
        <pre>{{ tabs }}</pre>
      </v-flex>
      <v-spacer></v-spacer>
    </v-layout>
  </v-container>
</template>

<script>
import draggable from "vuedraggable";
export default {
  name: 'v-tabs',
  components: {
    draggable
  },
  methods: {
  },
  data() {
    return {
      active: 0,
      tabs: [
        {
          id: 1, 
          name: "1st Tab",
          text: "This is a 1st tab"
        },
        {
          id: 2, 
          name: "2nd Tab",
          text: "This is a 2nd tab"
        },
        {
          id: 3, 
          name: "3rd Tab",
          text: "This is a 3rd tab"
        }
      ]
    }
  }
}
</script>