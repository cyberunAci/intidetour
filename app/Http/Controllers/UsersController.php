<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Mise à jour users
     */
    function update($id)
    {
        /*
        * Validation des inputs
        */
        $login = Validator::make(
            $request->all(),
            [
                'nom' => 'required',
                'prenom' => 'required',
                'email' => 'required',
                'tel' => 'required',
                'password' => 'required',
                'date_naissance' => 'required',
                'photo' => 'required'    
            ],
            [
                'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreure
            ]
        )->validate();
    
        /**
         * Vérifier que la data existe
         */

        if ($array = User::find($id)){  
            $array->nom = 'nom';
            $array->prenom = 'prenom';
            $array->email = 'email';
            $array->tel = 'tel';
            $array->password = 'password';
            $array->date_naissance = 'date_naissance';
            $array->photo = 'photo';   
            $array->save(); //save
        } 

        /**
         * Vérifier si data identique au model
         */
        
        

    
    }
}
