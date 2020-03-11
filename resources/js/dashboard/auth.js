/**
 * Store the auth informations
 */
import axios from 'axios';
class Auth {
    /**
     * Initialisation of the informations
     */
    constructor() {
        this.token = null;
        this.user = null;
    }

    /**
     * Add the logged information to store
     * @param token
     * @param user
     */
    login(token, user) {

        window.localStorage.setItem('token', token);
        window.localStorage.setItem('user', JSON.stringify(user));
        console.log(localStorage);

        axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;

        this.token = token;
        this.user = user;
        Event.$emit('userLoggedIn');
    }

    /**
     * logout
     */
    logout(){

        window.localStorage.removeItem('token');
        window.localStorage.removeItem('user');
        delete axios.defaults.headers.common['Authorization'];
        this.token = null;
        this.user = null;
        Event.$emit('userLoggedOut');
    }

    /**
     * Check if the user is logged
     * @returns {boolean}
     */
    check() {
        return !!this.token;
    }
}

export default new Auth();