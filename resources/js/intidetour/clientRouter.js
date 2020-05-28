import AproposClient from './views/clients/Apropos.vue';
import Accueil from './views/clients/accueil/Accueil.vue';
const routes = [

    {
        path: '/clients/',
        name: 'aproposclient',
        component: AproposClient,

    },
    {
        path: '/accueil',
        name: 'accueil',
        component: Accueil,

    }

]

export default routes;