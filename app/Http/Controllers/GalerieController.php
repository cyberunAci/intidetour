<?php

namespace App\Http\Controllers;

use App\GalerieModel;
use App\Http\Resources\GalerieRessource;
use App\PhotosCircuitModel;
use Error;
use Hamcrest\Arrays\IsArray;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class GalerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //recupère toutes la Galerie
        $galerie = GalerieModel::all();

        //Retourne les InterestPoints
        return GalerieRessource::collection($galerie);
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
        $dataGalerie = Validator::make(
            $request->input(),
            [
                'order' => 'required',
                'id_photo' => 'required'
            ],
            [
                'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreur
            ]
        )->validate();
        //Ajout en bdd des données validées par le validator
        $galerie = GalerieModel::create($dataGalerie);
        //Retourne la photo formaté grace à la ressource
        return new GalerieRessource($galerie);
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
    public function update(Request $request)
    {
        //recupere les données
        $galerie = $request->input('galerie');

        if ($galerie) {

            $galerie = json_decode($galerie);
            if (is_array($galerie)) {

                $images = [];

                //boucle vérification des images
                foreach ($galerie as $order => $idImg) {
                    $image = PhotosCircuitModel::find($idImg);
                    if ($image) {
                        $images[] = $image; //push
                    } else {
                        return 'not image + rollback';
                    }
                }
                //supprimer la galerie
                DB::table('galerie_photos')->truncate(); //supprimer les informations de la table et restart les id

                $imgs = [];

                //boucle mise en place des orders
                foreach ($images as $order => $image) {

                    $image = $image->galerie()->create([
                        'order' => $order + 1,
                    ]);
                    $imgs[] = $image; //push dans le tableau
                }
            } else {
                return 'not array';
            }
        } else {
            return 'error';
        }

        return $imgs;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
