import AproposClient from './views/clients/accueil/Apropos.vue';
import Accueil from './views/clients/accueil/Accueil.vue';
import Cgu from './views/clients/Cgu.vue';
const routes = [

    {
        path: '/clients/',
        name: 'aproposclient',
        component: AproposClient,

    },
    {
        path: '/',
        name: 'accueil',
        component: Accueil,

    },
    {
        path: '/cgu',
        name: 'cgu',
        component: Cgu,

    }

]

export default routes;