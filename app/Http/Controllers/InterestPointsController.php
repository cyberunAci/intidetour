<?php

namespace App\Http\Controllers;

use App\InterestPointTypesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InterestPointsController extends Controller
{
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
