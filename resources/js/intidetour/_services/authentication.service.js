import { BehaviorSubject } from "rxjs";
import { requestOptions } from "../_helpers/request-options";
import { handleResponse } from "../_helpers/handle-response";


const currentUserSubject = new BehaviorSubject(
    JSON.parse(localStorage.getItem("currentUser"))
);

export const authenticationService = {
    connected,
    login,
    logout,
    currentUser: currentUserSubject.asObservable(),
    get currentUserValue() {
        return currentUserSubject.value;
    }
};

function connected() {
    const user = localStorage.getItem("currentUser");
    return !_.isNull(user)
}


function login(user) {
    return fetch(
        `/api/login`,
        requestOptions.post(user)
    )
        .then(handleResponse)
        .then(({ data }) => {
            if (!data) {
                let snakbar = true;
                return snakbar;
            }
            else {
                localStorage.setItem("currentUser", JSON.stringify(data));
                currentUserSubject.next(data);
                return data;
            }

        })
}

function logout() {
    // remove user from local storage to log user out
    localStorage.removeItem("currentUser");
    currentUserSubject.next(null);
}


function update() {
    // update user from local storage 

    //get user depuis controller 
    localStorage.removeItem("currentUser");
    currentUserSubject.next(null);
}