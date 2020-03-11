<?php

namespace App\Http\Controllers;

use App\CircuitsModel;
use App\Http\Resources\CircuitsRessource;
use App\Http\Resources\PhotosCircuitRessource;
use App\Http\Resources\TracesRessource;
use App\PhotosCircuitModel;
use App\TracesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CircuitsController extends Controller
{

    private $gpxPath;
    /**
     *  Function recuperations  de tous les circuits

     * @return retourne les circuits entré en BDD
     */
    public function index()
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

    public function showTrace($id)
    {
        $trace = TracesModel::find($id);
        return $trace;
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
                'duree' => 'required',
                'distance' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',

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
        $status = CircuitsModel::destroy($id) ? 'ok' : 'nok';
        return json_encode(['status' => $status]);
    }

    /**
     * Function addTrace rajoute une trace au circuit
     */
    public function addTrace(Request $request, $id)
    {
        $error = '';
        $circuit = CircuitsModel::find($id);

        if ($circuit) {

            $trace = $request->get('trace');

            $exploded = explode(",", $trace);

            if (str::contains($exploded[0], 'gpx')) {

                $ext = 'gpx';

                $decode = base64_decode($exploded[1]);

                $filename = str_replace(" ", "", $circuit['nom'] . "." . $ext);

                $path = public_path() . $this->gpxPath . $filename;

                if (file_put_contents($path, $decode)) {

                    $dataTrace = TracesModel::updateOrCreate(['id_circuit' => $circuit['id']]);

                    $dataTrace->trace = $filename;

                    $dataTrace->save();

                }

            } else {

                $error = "Erreur votre fichier doit être en gpx!";
            }

        } else {
            $error = "Erreur le circuit n'existe pas!";
        }

        return response(
            empty($error) ? new TracesRessource($dataTrace) : $error,
            empty($error) ? 200 : 400
        );
    }

    /**
     * Affichage de la liste des photos du Circuit
     */

    public function ListePhoto()
    {

        $dataPhoto = PhotosCircuitModel::all();
        return PhotosCircuitRessource::collection($dataPhoto);
    }

    /**
     * ajouter une photo a un circuit
     */
    public function addPhoto(Request $request, $id)
    {

        $img = $request->get('photo');

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

            $dataPhoto = CircuitsModel::find(1)
                ->where('id', '=', $id)
                ->first();
                      
            $dataPhoto->image = "/storage/monDossier/" . $filename;
       
            $dataPhoto->save();
            return $dataPhoto;
         
            return $dataPhoto;

            return new CircuitsRessource($dataPhoto);
        }

        //return new PhotosCircuitRessource($dataPhoto);
}
}