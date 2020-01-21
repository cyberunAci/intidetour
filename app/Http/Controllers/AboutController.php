<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AproposModel;

use App\Http\Resources\AboutRessource;

use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    public function index()
    {
        return view('clients.apropos');
    }

    public function update(Request $request, $id)
    {
        /*
         * Validation des inputs
         */
        $about = Validator::make(
            $request->all(),
            [
                'text' => 'required',
            ],
            [
                'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreure
            ]
        )->validate();


        $dataAbout = AproposModel::find(1)
            ->where('id', '=', $id)
            ->first();

            if (isset($dataAbout)) {
                $dataAbout->text = $about['text'];
    
                $dataAbout->save();
            }

            return isset($dataAbout) ? new AboutRessource($dataAbout) : 'error';
    }
}
