import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './views/Home.vue';
import Success from './views/Success.vue';
import Users from './views/Users.vue';
import Catalogue from './views/Catalogue.vue';
import Apropos from './views/Apropos.vue';
import Galerie from './views/Galerie.vue';
import CircuitEdit from './views/CircuitEdit.vue';

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
        },
        {
            path: '/dashboard/galerie',
            name: 'galerie',
            component: Galerie
        },
        {
            path: '/dashboard/catalogue/:id',
            name: 'circuitEdit',
            component: CircuitEdit
        },
    ]
})

export default router;