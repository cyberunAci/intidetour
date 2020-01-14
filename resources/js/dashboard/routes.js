import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './views/Home';
import Users from './views/Users';

Vue.use(VueRouter);

const router = new VueRouter({
    mode:'history',
    routes:[{
        path:'/dashboard',
        name:'home',
        component: Home
    },
    {
        path:'/dashboard/users',
        name:'users',
        component: Users
    }


]
})

export default router;