<?php

namespace App\Http\Controllers;

use App\CircuitsModel;
use App\Http\Resources\CircuitsRessource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CircuitsController extends Controller
{

    /**
     * Function ajout de circuit
     * 
     * @param Request $request requete d'entrée
     * @return retourne le circuit entré en BDD
     */
    public function add(Request $request)
    {
        //Validation des données entrées
        $dataCircuit = Validator::make(
            $request->input(),
            [
                'nom' => 'required',
                'image' => 'required',
                'difficulte' => 'required',
                'description' => 'required',

            ],
            [
                'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreur
            ]
        )->validate();
        //Ajout en bdd des données validées par le validator
        $circuit = CircuitsModel::create($dataCircuit);
        //Retourne le circuit formaté grace à la ressource
        return new CircuitsRessource($circuit);
    }

    /**
     * 
     * @param Request $request: requete d'entree || $id : id dans l'url
     * @return 
     */
    public function update(Request $request, $id)
    {
                
             $dataUpdate = Validator::make(
                $request->input(),
                [
                    'id' => 'required|numeric',
                    'nom' => 'required',
                    'image' => 'required',
                    'difficulte' => 'required',
                    'description' => 'required',
    
                ]
            )->validate();
 

        // $dataCircuit = CircuitsModel::where('id', '=', $request['id'])->get();

        // $dataCircuit->updateOrCreate([$request['data']=>$request['donnee'], [$request['modif'] => $request['donneModif']]]);
        return ($dataUpdate);
    }
}
