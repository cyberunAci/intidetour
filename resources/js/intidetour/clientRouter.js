import AproposClient from './views/clients/accueil/Apropos.vue';
import Accueil from './views/clients/accueil/Accueil.vue';
import Profil from './views/clients/Profil.vue';
import Cgu from './views/clients/Cgu.vue';
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
        path: '/profil',
        name: 'profil',
        component: Profil,

    },
    {
        path: '/cgu',
        name: 'cgu',
        component: Cgu,

    }

]

export default routes;