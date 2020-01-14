<?php

namespace App\Http\Controllers;

use App\Http\Resources\SuccessResource;
use App\SuccessModel;
use Illuminate\Http\Request;
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
        //
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
        $dataSuccess->nom = $dataUpdate['nom'];
        $dataSuccess->image = $dataUpdate['image'];
        $dataSuccess->description = $dataUpdate['description'];

        //Sauvegarde des données entrées en base de donnée
        $dataSuccess->save();
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
}
