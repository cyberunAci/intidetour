<?php

namespace App\Http\Controllers;

use App\Http\Resources\UsersRessource;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Fonction récupère les utilisateurs dans la bdd et la retourne à l'administrateur
     * @return Array retourne tout les utilisateurs
     */
    public function index()
    {
        $users = User::all();
        return UsersRessource::collection($users);
    }
}
