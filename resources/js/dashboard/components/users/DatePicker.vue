<template>
    <v-menu
      ref="menu"
      v-model="menu"
      :close-on-content-click="false"
      :return-value.sync="date"
      transition="scale-transition"
      offset-y
      min-width="290px"
    >
      <template v-slot:activator="{ on }">
        <v-text-field v-model="item.value" readonly v-on="on"></v-text-field>
      </template>
      <v-date-picker v-model="item.value" no-title scrollable>
        <v-spacer></v-spacer>
        <v-btn color="primary" @click="menu = false">Cancel</v-btn>
        <v-btn color="primary" @click="$refs.menu.save(date)">OK</v-btn>
      </v-date-picker>
    </v-menu>
</template>

<script src="./DatePicker.js"></script>