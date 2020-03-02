<?php

namespace App\Http\Controllers;

use App\Http\Resources\SuccessResource;
use App\SuccessModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class SuccessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //recupere tous les circuit
        $success = SuccessModel::all();

        //Retourne la data cad les circuits 
        return  SuccessResource::collection($success);
    }







    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation des données entrées
        $dataSuccess = Validator::make(
            $request->input(),
            [
                'nom' => 'required',
                'image' => 'required',
                'description' => 'required',

            ],
            [
                'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreur
            ]
        )->validate();
        //Ajout en bdd des données validées par le validator
        $success = SuccessModel::create($dataSuccess);
        //Retourne le circuit formaté grace à la ressource
        return new SuccessResource($success);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $success = SuccessModel::find($id);
        return new SuccessResource($success);
    }


    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validation des données entrantes
        $dataUpdate = Validator::make(
            $request->all(),
            [
                'nom' => 'required',
                'image' => 'required',
                'description' => 'required',
            ]
        )->validate();

        //Récupération d'un circuit dans la base de donnée en fonction de l'id entrée dans l'url
        $dataSuccess = SuccessModel::find(1)
            ->where('id', '=', $id)
            ->first();

        //Mise en relation des inputs et des colonnes pour la modification
        if (isset($dataSuccess)) {

            $dataSuccess->nom = $dataUpdate['nom'];
            $dataSuccess->image = $dataUpdate['image'];
            $dataSuccess->description = $dataUpdate['description'];

            //Sauvegarde des données entrées en base de donnée
            $dataSuccess->save();
        }
        return new SuccessResource($dataSuccess);
    }

    /**
     * Supprimer la ressource visé avec l'id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status =  SuccessModel::destroy($id) ? 'ok' : 'nok';
        return json_encode(['status' => $status]);
    }


    /**
     * ajouter une photo a un succès
     */
    public function  addImage(Request $request, $id)
    {

        $img = $request->get('image');

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

        $dataPhoto = SuccessModel::find(1)
            ->where('id', '=', $id)
            ->first();

        $dataPhoto->image = "/storage/monDossier/" . $filename;
        $dataPhoto->save();
        return new SuccessResource($dataPhoto);
        }
    }
}
