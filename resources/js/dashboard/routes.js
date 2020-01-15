import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './views/Home';
import Success from './views/Success';
import Users from './views/Users';
import Catalogue from './views/Catalogue.vue';
import Upload_file from './views/Upload_file.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
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
            path: '/dashboard/uploadFile',
            name: 'Upload_file',
            component: Upload_file
        }
     


    ]
})

export default router;