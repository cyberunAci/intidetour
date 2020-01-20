<?php

namespace App\Http\Controllers;

use App\Http\Resources\InterestPointsRessource;
use App\Http\Resources\InterestPointTypesRessource;
use App\InterestPointsModel;
use App\InterestPointTypesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InterestPointsController extends Controller
{

    /**
     * Function recuperations de tous les InterestPoints

     * @return retourne les InterestPoints entrée en BDD
     */
    public function index()
    {
        //recupère toutes les InterestPoints
        $interestPoints = InterestPointsModel::all();

        //Retourne les InterestPoints
        return InterestPointsRessource::collection($interestPoints);
    }

    /**
     * Function ajout d'un InterestPoint
     *
     * @param Request $request requete d'entrée
     * @return InterestPointsRessource retourne le interestpoints entré en BDD ou une erreur
     */
    public function add(Request $request)
    {
        $dataInterestPoints = Validator::make(
            $request->input(),
            [
                'nom' => 'required',
                'coordonnees' => 'required',
                'id_type' => 'required|integer',
            ],
            [
                'required' => 'Le champs :attribute est requis', 
            ]
        )->validate();

        $interestPointsTypeModel = InterestPointTypesModel::find($dataInterestPoints['id_type']);
        if (isset($interestPointsTypeModel)) {
            $_interestPoint = [
                'nom' => $dataInterestPoints['nom'],
                'coordonnees' => $dataInterestPoints['coordonnees'],
            ];

            $interestPoint = $interestPointsTypeModel->interestPoints()->create($_interestPoint);

            return new InterestPointsRessource($interestPoint);
        } 
        
        else {
            return json_encode('error');
        }
    }

    /**
     * Function qui affiche les points d'intérêt important
     * @param Request : les requêtes envoyées
     * @return Retourne tout les types de points d'intérêts
     */
    public function getTypes(Request $request)
    {
        $dataType = InterestPointTypesModel::all();
        return InterestPointTypesRessource::collection($dataType);
    }
}
