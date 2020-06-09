import Home from './views/dashboard/Home.vue';
import Success from './views/dashboard/Success.vue';
import Users from './views/dashboard/Users.vue';
import Catalogue from './views/dashboard/Catalogue.vue';
import Apropos from './views/dashboard/Apropos.vue';
import Galerie from './views/dashboard/Galerie.vue';
import CircuitEdit from './views/dashboard/CircuitEdit.vue';
import SuccessEdit from './views/dashboard/SuccessEdit.vue';
import { Role } from './_helpers/role';
import Login from './Login.vue';


const routes = [
    {
        path: '/login',
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
    //TODO Refaire les routes et à mettre dans la navbar
    {
        path: '/dashboard/catalogue/:id',
        name: 'circuitEdit',
        component: CircuitEdit,
        meta: { authorize: [Role.Admin] },
    },
    //TODO Refaire les routes et à mettre dans la navbar

    {
        path: '/dashboard/success/:id',
        name: 'successEdit',
        component: SuccessEdit,
        meta: { authorize: [Role.Admin] },
    }
]


export default routes;