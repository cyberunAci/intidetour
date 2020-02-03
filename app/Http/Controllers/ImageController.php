<?php

namespace App\Http\Controllers;

use App\CircuitsModel;
use App\Http\Resources\CircuitsRessource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ImageController extends Controller
{
    public function saveImg(Request $request, $id)
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
            echo "fichier télécharger: " . $filename;
        }

        $dataUpdate = Validator::make(
            $request->all(),
            [
                'image' => 'required',
            ]
        )->validate();

        $dataImage = CircuitsModel::find(1)
        ->where('id', '=', $id)
        ->first();

        $dataImage->image = $dataUpdate['image'];
        $dataImage->save();

        return new CircuitsRessource($dataImage);

        // CircuitsModel::create($request->All(), [
        //     'image' => $filename
        // ]);
    }
}
