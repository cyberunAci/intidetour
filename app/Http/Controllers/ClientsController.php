<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * @param Integer $id l'identifiant de l'utilisateur à supprimer 
     * @return  Retourne le status "ok" ou "nok"
     */

     public function delete($id) {
         $status = User::destroy($id) ? "ok" : "nok";
             return json_encode(['status' => $status]);
         
     }

     /**
      *  @param Request $request: requete d'entree || $id : id dans l'url
      */

      
}
