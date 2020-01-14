<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\InterestPointTypesModel;
=======
use App\Http\Resources\InterestPointsRessource;
use App\InterestPointsModel;
>>>>>>> 3ecec726b56db163b185ad36fb2b2217f95ede5d
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class InterestPointsController extends Controller
{
<<<<<<< HEAD
   
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
     * Function ajout d'un InterestPoints
     *
     * @param Request $request requete d'entrée
     * @return retourne le interestpoints entré en BDD
     */
    public function add(Request $request)
    {
        //Validation des données entrées
        $dataInterestPoints = Validator::make(
            $request->input(),
            [
                'nom' => 'required',
                'coordonnees' => 'required',
            ],
            [
                'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreur
            ]
        )->validate();
        //Ajout en bdd des données validées par le validator
        $interestPoints = InterestPointsModel::create($dataInterestPoints);
        //Retourne l'interestpoints formaté grace à la ressource
        return new InterestPointsRessource($interestPoints);
    }


    }




=======
    /**
     * Function qui affiche les points d'intérêt important 
     * @param Request : les requêtes envoyées 
     * @return Retourne tout les types de points d'intérêts 
     */
    public function getTypes(Request $request)
    {
        $dataType = InterestPointTypesModel::all();
        //retourne les données formatées
        return $dataType;
    }
}
>>>>>>> 0f1923715aadb26cc9f63a50d4cdd53c8cc5f30b
