import { authenticationService } from '../_services/authentication.service'

import Axios from "axios"


export const apiService = {
    get(url, params = {}) {
        return Axios({
            method: 'get',
            url: url,
            headers: headers(),
            params: params
        });
    },
    post(url, body, params = {}) {
        return Axios({
            method: 'POST',
            url: url,
            headers: headers(),
            data: JSON.stringify(body)
        });
    },
    patch(body) {
        return {
            method: 'PATCH',
            ...headers(),
            body: JSON.stringify(body)
        };
    },
    put(body) {
        return {
            method: 'PUT',
            ...headers(),
            body: JSON.stringify(body)
        };
    },
    delete() {
        return {
            method: 'DELETE',
            ...headers()
        };
    }
}
function headers() {
    const currentUser = authenticationService.currentUserValue || {};
    const authHeader = currentUser.token ? { 'Authorization': 'Bearer ' + currentUser.token } : {}
    return {
        ...authHeader,
        'Content-Type': 'application/json'
    };
}