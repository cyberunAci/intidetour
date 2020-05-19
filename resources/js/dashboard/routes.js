import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './views/Home.vue';
import Success from './views/Success.vue';
import Users from './views/Users.vue';
import Catalogue from './views/Catalogue.vue';
import Apropos from './views/Apropos.vue';
import Galerie from './views/Galerie.vue';
import CircuitEdit from './views/CircuitEdit.vue';
import SuccessEdit from './views/SuccessEdit.vue';
import Login from './Login.vue'
import { Role } from './_helpers/role';
import { authenticationService } from '../dashboard/_services/authentication.service';


Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/dashboard/login',
            name: 'login',
            component: Login,
        },
        {
            path: '/dashboard',
            name: 'home',
            component: Home,
            meta: { authorize: [Role.Admin] },

        },
        {
            path: '/dashboard/success',
            name: 'success',
            component: Success,
            meta: { authorize: [Role.Admin] },

        },
        {
            path: '/dashboard/users',
            name: 'users',
            component: Users,
            meta: { authorize: [Role.Admin] },

        },
        {
            path: '/dashboard/catalogue',
            name: 'catalogue',
            component: Catalogue,
            meta: { authorize: [Role.Admin] },

        },
        {
            path: '/dashboard/apropos',
            name: 'apropos',
            component: Apropos,
            meta: { authorize: [Role.Admin] },

        },
        {
            path: '/dashboard/galerie',
            name: 'galerie',
            component: Galerie,
            meta: { authorize: [Role.Admin] },

        },
        {
            path: '/dashboard/catalogue/:id',
            name: 'circuitEdit',
            component: CircuitEdit,
            meta: { authorize: [Role.Admin] },

        },
        {
            path: '/dashboard/success/:id',
            name: 'successEdit',
            component: SuccessEdit,
            meta: { authorize: [Role.Admin] },

        }
    ]
})
router.beforeEach((to, from, next) => {

    // redirect to login page if not logged in and trying to access a restricted page
    const { authorize } = to.meta;

    if (authorize && !_.isEmpty(authorize)) {

        const currentUser = authenticationService.currentUserValue;
       
        if (!currentUser) {
            // not logged in so redirect to login page with the return url
            return next({ path: "/dashboard/login", query: { returnUrl: to.path } });
        }

        // check if route is restricted by role
        if (authorize.length && !authorize.includes(currentUser.role.role)) {

            // role not authorised so redirect to home page
            return window.location.href = "/";
        }

    }

    return next();
});
export default router;