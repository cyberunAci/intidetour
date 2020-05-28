import AproposClient from './views/clients/Apropos.vue';
import Profil from './views/clients/Profil.vue';
const routes = [

    {
        path: '/clients/',
        name: 'aproposclient',
        component: AproposClient,

    },

    {
        path: '/profil/',
        name: 'profil',
        component: Profil,

    }

]

export default routes;