<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('clients.contact');
    }

    public function store(ContactRequest $request)
    {
        {
            $validator = Validator::make($request->all(), [
                'nom' => 'bail|required|between:3,20|alpha',
                'prenom' => 'bail|required|between:3,20|alpha',
                'email' => 'bail|required|email',
                'objet' => 'bail|required',
                'message' => 'bail|required|max:250'
            ]);
     
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
     
            return view('clients.confirm');
    
    }
    }

    /*
    On utilise la façade Validator en précisant toutes les entrée ($request->all()) et les règles de validation
    Ensuite si la validation échoue (fails) on renvoie le formulaire (back) avec les erreurs (withErrors) et 
    les valeurs entrées (withInput) pour pouvoir les afficher dans le formulaire.
    */

}
