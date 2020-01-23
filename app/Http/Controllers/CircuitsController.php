<?php

namespace App\Http\Controllers;

use App\CircuitsModel;
use App\Http\Resources\CircuitsRessource;
use Illuminate\Support\Str;
use App\Http\Resources\PhotosCircuitRessource;
use App\Http\Resources\TracesRessource;
use App\PhotosCircuitModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CircuitsController extends Controller
{

    /**
     *  Function recuperations  de tous les circuits

     * @return retourne les circuits entré en BDD
     */
    public   function index()
    {
        //recupere tous les circuit
        $circuits = CircuitsModel::all();
        //Retourne la data cad les circuits
        return CircuitsRessource::collection($circuits);
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
                'duree'=>'required',
                'distance'=>'required',
                'latitude'=>'required',
                'longitude'=>'required'

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
                'duree' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
            ]
        )->validate();

        //Récupération d'un circuit dans la base de donnée en fonction de l'id entrée dans l'url
        $dataCircuit = CircuitsModel::find(1)
            ->where('id', '=', $id)
            ->first();

        //Mise en relation des inputs et des colonnes pour la modification
        $dataCircuit->nom = $dataUpdate['nom'];
        $dataCircuit->image = $dataUpdate['image'];
        $dataCircuit->difficulte = $dataUpdate['difficulte'];
        $dataCircuit->description = $dataUpdate['description'];
        $dataCircuit->duree = $dataUpdate['duree'];
        $dataCircuit->latitude = $dataUpdate['latitude'];
        $dataCircuit->longitude = $dataUpdate['longitude'];
        //Sauvegarde des données entrées en base de donnée
        $dataCircuit->save();
        return new CircuitsRessource($dataCircuit);
    }

    /**
     * Function delete pour supprimer un circuit
     *
     * @param Integer $id l'identifiant du circuit à supprimer
     * @return json le status
     */
    public function delete($id)
    {
        $status =  CircuitsModel::destroy($id) ? 'ok' : 'nok';
        return json_encode(['status' => $status]);
    }

    /**
     * Function addTrace rajoute une trace au circuit
     */
    public function addTrace(Request $request, $id)
    {
        //Validation des données entrées
        $dataTrace = Validator::make(
            $request->input(),
            [
                'trace' => 'required',
            ],
            [
                'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreur
            ]
        )->validate();
        //Ajout en bdd des données validées par le validator

        /**
         * find le circuit grace à l'ID
         * **/
        $circuitModel = CircuitsModel::find($id);
        if (isset($circuitModel)) {

            /*
*Ajouter au circuit la trace
**/
            $trace = $circuitModel->traces()->create($dataTrace);
            /*
*Retourne la trace formaté grace à la ressource
**/
            return new TracesRessource($trace);
        } else {
            return json_encode('error');
        }
    }


    /**
     * ajouter une photo a un circuit
     */
    public function  addPhoto(Request $request, $id)
    {

        $img = $request->get('photos');

        $exploded = explode(",", $img);

        if (str::contains($exploded[0], 'gif')) {
            $ext = 'gif';
        } else if (str::contains($exploded[0], 'png')) {
            $ext = 'png';
        } else {
            $ext = 'jpg';
        }

        $decode = base64_decode($exploded[1]);

        $filename = str::random() . "." . $ext;

        $path = public_path() . "/storage/monDossier/" . $filename;

        if (file_put_contents($path, $decode)) {
            echo "fichier téléchargé et envoyé dans: " . "/storage/monDossier/" . $filename;

            $dataPhoto = PhotosCircuitModel::find(1)
                ->where('id', '=', $id)
                ->first();

            $dataPhoto->photos = "/storage/monDossier/" . $filename;
            $dataPhoto->save();
            return new PhotosCircuitRessource($dataPhoto);
        }

    }
}
