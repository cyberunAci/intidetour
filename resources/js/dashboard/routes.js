import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './views/Home.vue';
import Success from './views/Success.vue';
import Users from './views/Users.vue';
import Catalogue from './views/Catalogue.vue';
import Apropos from './components/apropos/UpdateApropos.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [{
            path: '/dashboard',
            name: 'home',
            component: Home
        },
        {
            path: '/dashboard/success',
            name: 'success',
            component: Success
        },
        {
            path: '/dashboard/users',
            name: 'users',
            component: Users
        },
        {
            path: '/dashboard/catalogue',
            name: 'catalogue',
            component: Catalogue
        },
        {
            path: '/dashboard/apropos',
            name: 'apropos',
            component: Apropos
        }
    ]
})

export default router;