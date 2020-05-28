import Axios from "axios"


export const apiServices = {
    get(url, params = {}) {
        return Axios({
            method: 'get',
            url: url,
            headers: headers(),
            params: params
        });
    },
    post(url, params = {}) {
        return Axios({
            method: 'post',
            url: url,
            headers: headers(),
        });
    },
}

function headers() {
    const currentUser = authenticationService.currentUserValue || {};
    const authHeader = currentUser.token ? { 'Authorization': 'Bearer ' + currentUser.token } : {}
    return {
        ...authHeader,
        'Content-Type': 'application/json'
    };
}