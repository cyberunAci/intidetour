<?php

namespace App\Http\Controllers;

use App\Http\Resources\UsersRessource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $login = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);
        if (!Auth::attempt($login)) {

            return response(['message' => 'Login Invalide.']);
        }

        $accessToken = Auth::user()->createToken('authToken')->accessToken;
        return new UsersRessource(Auth::user($accessToken), $accessToken);
    }

    public function logout()
    {
        Log::debug('Logout');
        $accessToken = Auth::user()->token();
        $accessToken->revoke();
        return response('Vous êtes déconnecté', 200);
    }
 
    public function register(Request $request)
    {
        $register = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|string|email',
            'password' => 'required|string',
            'date_naissance' => 'required|date',
            'tel' => 'required|numeric',
            'photo' => 'required',
            'id_role' => 'required|numeric',
        ]);

        $registerUser = User::create($register);
        return $registerUser;
    }


}
