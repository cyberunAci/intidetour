import Vue from 'vue';
import Vuetify from 'vuetify';
import Routes from './routes.js';
import Layout from './layouts/Layout'

Vue.use(Vuetify);

const app = new Vue({
    el: '#admin',
    vuetify: new Vuetify({}),
    router: Routes,
    components: { Layout }
})

export default new Vuetify(app);