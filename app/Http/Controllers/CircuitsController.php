<?php

namespace App\Http\Controllers;

use App\CircuitsModel;
use App\Http\Resources\CircuitsRessource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CircuitsController extends Controller
{


    /**
     *  Function recuperations  de tous les circuits
    
     * @return retourne les circuits entré en BDD
     */
    public function index()
    {
        //recupere tous les circuit 
        $circuits = CircuitsModel::all();
        //Retourne la data cad les circuits 
        return  CircuitsRessource::collection($circuits);
    }


    /**
     *  Function recuperation  d un circuit en particulier
     * @param $id $request requete d'entrée
     * @return retourne les circuits entré en BDD
     */
    public function show($id)
    {
        $circuit = CircuitsModel::find($id);
        return new CircuitsRessource($circuit);
    }


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
<<<<<<< HEAD
=======

<<<<<<< HEAD
=======
    /**
     * Function update de circuit
     * @param Request $request: requete d'entree || $id : id dans l'url
     * @return Retourne le circuit avec sa modification 
     */
    public function update(Request $request, $id)
    {
        //Validation des données entrantes
        $dataUpdate = Validator::make(
            $request->all(),
            [
                'nom' => 'required',
                'image' => 'required',
                'difficulte' => 'required',
                'description' => 'required',
            ]
        )->validate();
>>>>>>> 685d2a1df0359e5366fe23d0a4ee9b2a8cecd4d4

        //Récupération d'un circuit dans la base de donnée en fonction de l'id entrée dans l'url
        $dataCircuit = CircuitsModel::find(1)
            ->where('id', '=', $id)
            ->first();

        //Mise en relation des inputs et des colonnes pour la modification
        $dataCircuit->nom = $dataUpdate['nom'];
        $dataCircuit->image = $dataUpdate['image'];
        $dataCircuit->difficulte = $dataUpdate['difficulte'];
        $dataCircuit->description = $dataUpdate['description'];

        //Sauvegarde des données entrées en base de donnée
        $dataCircuit->save();
        return new CircuitsRessource($dataCircuit);
    }
>>>>>>> 2ee13e3b56a6c387922d2ba33d4deb91834cbc92

    /**
     * Function delete pour supprimer un circuit 
     * 
     * @param Integer $id l'identifiant du circuit à supprimer 
     * @return json le status 
     */
    public function delete($id)
    {
        $delete = CircuitsModel::find($id)->delete();
        if ($delete) {
            return "true";
        }
    }
}
