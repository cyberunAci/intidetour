<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CircuitsModel;
use Illuminate\Support\Facades\Validator;

class CircuitsController extends Controller
{
/**
 * Function ajout de circuit
 */
    public function add(Request $request)
    {
        $dataCircuit = Validator::make(
            $request->input(),
            [
                'nom' => 'required',
                'image' => 'required',
                'difficulte' => 'required',
                'description' => 'required',

            ],
            [
                'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreure
            ]
        )->validate();
        return json_encode($dataCircuit);
    }


    public function delete($id){
        $delete = CircuitsModel::destroy($id) ? 'ok' : 'nok';
        return json_encode(['status' => $status]);
    }
}
