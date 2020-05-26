import Vue from 'vue';
import VueRouter from 'vue-router';
import clientRouter from './clientRouter.js';
import adminRouter from './adminRouter.js';
import { authenticationService } from '../intidetour/_services/authentication.service';

Vue.use(VueRouter);

var allRoutes = []
allRoutes = allRoutes.concat(clientRouter, adminRouter)

const routes = allRoutes

const router = new VueRouter({
    mode: 'history',
    routes
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