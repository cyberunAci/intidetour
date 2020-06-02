import AproposClient from './views/clients/accueil/Apropos.vue';
import Accueil from './views/clients/accueil/Accueil.vue';
import Cgu from './views/clients/Cgu.vue';
import Circuits from './views/clients/accueil/circuits/Circuits.vue'
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

    },
    {
        path: '/cgu',
        name: 'cgu',
        component: Cgu,
    },
    {
        path: '/circuits',
        name: 'circuits',
        component: Circuits,
    }

]

export default routes;