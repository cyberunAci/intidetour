import AproposClient from './views/clients/Apropos.vue';
import Accueil from './views/clients/accueil/Accueil.vue';
const routes = [

    {
        path: '/a-propos/',
        name: 'aproposclient',
        component: AproposClient,

    },
    {
        path: '/',
        name: 'accueil',
        component: Accueil,

    }

]

export default routes;