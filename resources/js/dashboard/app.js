import Vue from 'vue';
import Vuetify from 'vuetify';
import Routes from './routes.js';
import Layout from './layouts/Layout';
import 'vuetify/dist/vuetify.min.css';
import _ from 'lodash';
import auth from './auth.js';


Vue.use(Vuetify);

window.Event = new Vue;
window.auth = auth;

const app = new Vue({
    el: '#admin',
    vuetify: new Vuetify({}),
    router: Routes,
    components: { Layout }
})

export default new Vuetify(app);