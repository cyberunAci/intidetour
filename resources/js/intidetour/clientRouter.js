import AproposClient from './views/clients/Apropos.vue';

const routes = [

    {
        path: '/clients/',
        name: 'aproposclient',
        component: AproposClient,

    },
    {
        path: '/',
        name: 'main',
        component: main,

    }

]

export default routes;