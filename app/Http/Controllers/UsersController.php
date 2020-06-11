<?php

namespace App\Http\Controllers;

use App\Http\Resources\UsersRessource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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


    /**
     * Mise à jour users
     */
    public function update(Request $request, $id)
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
                'date_naissance' => 'required',
                'photo' => 'required',
            ],
            [
                'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreure
            ]
        )->validate();

        /**
         * Vérifier que la data existe
         */
        $dataClient = User::find(1)
            ->where('id', '=', $id)
            ->first();

        if (isset($dataClient)) {
            $dataClient->nom = $login['nom'];
            $dataClient->prenom = $login['prenom'];
            $dataClient->email = $login['email'];
            $dataClient->tel = $login['tel'];
            $dataClient->date_naissance = $login['date_naissance'];
            $dataClient->photo = $login['photo'];

            $dataClient->save();
        }
        /**
         * Vérifier si data identique au model
         */
        return isset($dataClient) ? new UsersRessource($dataClient) : 'error';
    }


    /**
     * @param Integer $id l'identifiant de l'utilisateur à supprimer
     * @return  Retourne le status "ok" ou "nok"
     */
    public function delete($id)
    {
        $status = User::destroy($id) ? "ok" : "nok";
        return json_encode(['status' => $status]);
    }


    public function getInfosUser($id) {
        $getDatas = User::where('id', '=', $id)->get();
        return UsersRessource::collection($getDatas);
    }

    public function  updtateCurrentUserInfo(Request $request, $id) {




        $donneUser = Validator::make(
            $request->all(),
            [
                'nom' => 'required',
                 'prenom' => 'required',
                'email' => 'required',
                'telephone' => 'required',
                 'dateNaissance' => 'required',
                // 'photo' => 'required',
            ],
            [
                'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreure
            ]
        )->validate();



        $dataClient = User::find($id);

      

            // $dataClient = User::find(1)
            //         ->where('id', '=', $id)
            //         ->first();
           
            // $dataClient   = User::where('id', '=', $id)->first();


        
                $dataClient->nom = $donneUser['nom'];
                $dataClient->prenom = $donneUser['prenom'];
                $dataClient->email = $donneUser['email'];
                $dataClient->tel = $donneUser['telephone'];
                $dataClient->date_naissance = $donneUser['dateNaissance'];
               $dataClient->save();
               $dataClient = User::find($id);

            //    $user =  $request->user();
               
              //  dd($dataClient->save());


            return   $dataClient;
            return   $request;
            return   $id;
    }

   

}
