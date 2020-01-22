<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ImageController extends Controller
{
    public function saveImg(Request $request) {
        $img = $request->get('image');

        $exploded = explode(",", $img);

        if(str::contains($exploded[0], 'gif')) {
            $ext = 'gif';
        }else if(str::contains($exploded[0], 'png')) {
            $ext = 'png';
        } else {
            $ext = 'jpg';
        }

        $decode = base64_decode($exploded[1]);

        $filename = str::random() . "." . $ext;
        
        $path = public_path() . "/images/" . $filename;

        if(file_put_contents($path, $decode)){
            echo "fichier télécharger: " . $filename;
        }
    }
}
