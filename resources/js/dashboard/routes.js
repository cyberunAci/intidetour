import Vue from 'vue';
import VueRouter from 'vue-router';
import Login from './views/Login.vue';
import Home from './views/Home.vue';
import Success from './views/Success.vue';
import Users from './views/Users.vue';
import Catalogue from './views/Catalogue.vue';
import Apropos from './views/Apropos.vue';
import Galerie from './views/Galerie.vue';
import CircuitEdit from './views/CircuitEdit.vue';
import SuccessEdit from './views/SuccessEdit.vue';


Vue.use(VueRouter);
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/dashboard/login',
            name: 'login',
            component: Login
        },
        {
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
        {
            path: '/dashboard/success/:id',
            name: 'successEdit',
            component: SuccessEdit
        }
    ]
})

router.beforeEach((to, from, next) => {
    if (to.fullPath !== "/dashboard/login") {
        router.push('/dashboard/login').catch(err => {})
    } else {
        next();
    }
});

export default router;